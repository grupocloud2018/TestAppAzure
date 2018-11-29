<?php

class Bdomsite_model extends CI_Model {
  
	function __construct() 
	{
		/* Call the Model constructor */
		parent::__construct();
	}

	function getAllConductores(){
                $this->db->select('conductor_id ,nombre ,fecha_nacimiento');
                $this->db->from('conductor');
                $query = $this->db->get();
                $results = array();
                foreach ($query->result() as $row)
                {
                        $results[] = array("id" => $row->conductor_id ,"nombre" => $row->nombre ,"fecha_nacimiento" => $row->fecha_nacimiento);
                }

                return array_reverse($results);
        }


	function getAllVehiculos(){
                $this->db->select('referencia ,modelo ,placa');
                $this->db->from('vehiculo');
                $query = $this->db->get();
                $results = array();
                foreach ($query->result() as $row)
                {
                        $results[] = array("referencia" => $row->referencia ,"modelo" => $row->modelo ,"placa" => $row->placa);
                }

                return array_reverse($results);
        }

	function getDataGrafica1(){
                $query = $this->db->query("select concat(anio,'-',case when mes between 1 and 3 then 1 when mes between 4 and 6 then 2 when mes between 7 and 9 then 3 else 4 end) as trimestre ,count(distinct placa) as conteo from ws group by anio,case when mes between 1 and 3 then 1 when mes between 4 and 6 then 2 when mes between 7 and 9 then 3 else 4 end order by anio,trimestre");
                $results = array();
                foreach ($query->result() as $row)
                {
                        $results[] = array("trimestre" => $row->trimestre ,"conteo" => $row->conteo);
                }

                return array_reverse($results);
        }

	function getScoreVehiculoRevision($lm=10) {
                $query = $this->db->query("select placa ,vh.modelo ,vh.referencia ,vd.km ,fecha_aplica from vehiculo_predictivo vp join vehiculo vh using(placa) join vehiculo_desgaste vd using(placa) where vp.categoria = 'PARA_REVISION' order by fecha_aplica ,modelo limit $lm");
                $results = array();
                foreach ($query->result() as $row)
                {
                        $results[] = array("placa" => $row->placa ,"modelo" => $row->modelo ,"referencia"=>$row->referencia ,"km"=>$row->km ,"fecha_aplica"=>$row->fecha_aplica);
                }

                return array_reverse($results);
	}

	function getScoreVehiculoVenta($lm=10) {
                $query = $this->db->query("select placa ,vh.modelo ,vh.referencia ,vd.km ,vd.mantenimientos_realizados from vehiculo_predictivo vp join vehiculo vh using(placa) join vehiculo_desgaste vd using(placa) where vp.categoria = 'VENTA' order by vd.km desc ,modelo limit $lm");
                $results = array();
                foreach ($query->result() as $row)
                {
                        $results[] = array("placa" => $row->placa ,"modelo" => $row->modelo ,"referencia"=>$row->referencia ,"km"=>$row->km ,"mantenimientos_realizados"=>$row->mantenimientos_realizados);
                }

                return array_reverse($results);
	}

	function getScoreConductores($lm=10) {
                $query = $this->db->query("select conductor ,count(*) as eventos from hseq group by conductor order by eventos limit $lm");
                $results = array();
                foreach ($query->result() as $row)
                {
                        $results[] = array("conductor" => $row->conductor ,"eventos" => $row->eventos );
                }

                return array_reverse($results);
	}

	function getDesgasteVehiculo($placa="") {
                $query = $this->db->query("select placa, round(km) as km ,round(eventos*.04) as eventos ,referencia as marca ,anio_uso ,mantenimientos_realizados as manteni ,cantidad_repuesto_cambiados as repuestos from vehiculo_desgaste".(($placa<>"")?" where placa='$placa'":""));
                $results = array();
                foreach ($query->result() as $row)
                {
                        $results[] = array("placa"=>$row->placa ,"km" => $row->km ,"eventos" => $row->eventos ,"marca"=>$row->marca ,"uso"=>$row->anio_uso ,"manteni"=>$row->manteni ,"repuestos"=>$row->repuestos );
                }

                return array_reverse($results);
	}


	function insertCategoriaForAll($info){
		for($i=0; $i<count($info)-1; $i++){
			$data = array( 	 "placa" => $info[$i][0]
					,"categoria" => $info[$i][1]	
					,"ultima_prediccion" => date("Y/m/d")
				);
			$this->db->delete('vehiculo_predictivo', array('placa' => $info[$i][0]));
			$this->db->insert('vehiculo_predictivo' ,$data);
		}	

	}

	function getResultadoVehiculoPredictivo(){
                $query = $this->db->query("select placa ,vh.modelo ,vh.referencia ,vd.km ,fecha_aplica ,vp.categoria ,vp.ultima_prediccion as ultima from vehiculo_predictivo vp join vehiculo vh using(placa) join vehiculo_desgaste vd using(placa) order by vp.categoria desc ,fecha_aplica ,modelo ");
                $results = array();
                foreach ($query->result() as $row)
                {
                        $results[] = array("placa" => $row->placa ,"modelo" => $row->modelo ,"referencia"=>$row->referencia ,"km"=>$row->km ,"fecha_aplica"=>$row->fecha_aplica ,"categoria"=>$row->categoria ,"ultima"=>$row->ultima);
                }

                return $results;
	}

	function getConteoVehiculoPredictivo(){
                $query = $this->db->query("select count(*) as conteo ,max(ultima_prediccion) as ultima_fecha from vehiculo_predictivo");
                $results = array();
                foreach ($query->result() as $row)
                {
                        $results[] = array("conteo" => $row->conteo ,"ultima_fecha" => $row->ultima_fecha );
                }

                return array_reverse($results);
        }

	function validarUsuario($usuario ,$clave){
                $query = $this->db->query("select idusuario ,nombre from usuario where nombre='$usuario' and clave='$clave'");
                $results = array();
                foreach ($query->result() as $row)
                {
                        $results[] = array("idusuario" => $row->idusuario ,"nombre"=>$row->nombre);
                }

                return $results;
	}

}

?>
