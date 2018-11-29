<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//session_start();

class Bdomsite extends CI_Controller {
	private $session_id ;

	public function __construct() {
		parent::__construct();

		// Load session library
		$this->load->library('session');
		$this->load->helper('url');

		//Load database
		$dbconnect = $this->load->database();
		//load model basic
		$this->load->model('Bdomsite_model');

		$this->session_id = $this->session->userdata('__ci_last_regenerate');
	}

	public function index() {       
		if(isset($this->session->idUser) && $this->session->idUser<>"0") {
			$data['scorevehiculo']  = $this->Bdomsite_model->getScoreVehiculoRevision();
			$data['scoreconductor'] = $this->Bdomsite_model->getScoreConductores();
			$this->load->view('dashboard',$data);
		} else {
			$this->load->view('login');
		}			
	}
 	

	public function getAllConductores(){
		$data['tconductores'] = $this->Bdomsite_model->getAllConductores();
		$this->load->view('conductores', $data);
	}

	public function getAllVehiculos(){
		$data['tvehiculos'] = $this->Bdomsite_model->getAllVehiculos();
		$this->load->view('vehiculos', $data);
	}

	public function PWBI($pag){
		$data['pagina'] = array("pagina"=>$pag);
		$this->load->view('powerbi',$data);
	}

	public function perfilUsuario(){
		$this->load->view('usuario');
	}

	public function getDataGrafica1(){
		echo json_encode($this->Bdomsite_model->getAllDataGrafica1());
	}


	public function getCategoriaTestSW(){
		$dato = [ [	 $this->input->post('km') 
				,$this->input->post('eventos')
				,$this->input->post('marca')
				,$this->input->post('uso')
				,$this->input->post('manteni')
				,$this->input->post('repuestos')
				,'-'
			] ];

		$res = $this->consumeServiceWeb($dato);
	
		$vect = json_decode($res);
		$result = array("categoria" => $vect->Results->output1->value->Values[0][10]);
		$this->output->set_output(json_encode($result));
	}


	public function getCategoriaxPlaca(){
		$placa = $this->input->post('placa'); 
		$data = $this->Bdomsite_model->getDesgasteVehiculo($placa);
		$data=$data[0];

		$dato = [ [	 $data['km'] 
				,$data['eventos']
				,$data['marca']
				,$data['uso']
				,$data['manteni']
				,$data['repuestos']
				,'-'
			] ];

		$res = $this->consumeServiceWeb($dato);
		$vect = json_decode($res);
		$result = array("categoria" => $vect->Results->output1->value->Values[0][10]);
		$this->output->set_output(json_encode($result));
	}

	public function setCategoriaForAll(){
		$data = $this->Bdomsite_model->getDesgasteVehiculo();
		$dato[] = array();
		for($i=0; $i<count($data); $i++){
			$dato[$i] = [	 $data[$i]['km'] 
					,$data[$i]['eventos']
					,$data[$i]['marca']
					,$data[$i]['uso']
					,$data[$i]['manteni']
					,$data[$i]['repuestos']
					,'-'
				];
		}

		$res = $this->consumeServiceWeb($dato);
		$vect = json_decode($res);

		$dato[] = array();
		for($i=0; $i<count($data); $i++){
			$dato[$i] = [	 $data[$i]['placa'] 
				    	,$vect->Results->output1->value->Values[$i][10]
				];
		}	

		$this->Bdomsite_model->insertCategoriaForAll($dato);
			
		$data = $this->Bdomsite_model->getConteoVehiculoPredictivo();
		$this->output->set_output(json_encode($data[0]));

	}


	public function consumeServiceWeb($data){

		$url="https://ussouthcentral.services.azureml.net/workspaces/56ee621c49434973b14ca7e1f2be7c63/services/e90814b624e549c78dc2d543bc3b9067/execute?api-version=2.0&details=true";

		$api_key = "/T83SkN2TZ87Rlh8y0Yjefs1fxNeVKtT/SgjDObhYSjXsoEkUxJoiFMVD7R2ASoFIW5sUgXG79DyqoLaIMRD1w==";
		$data = array(
		'Inputs'=> array(
		    'input1'=> array(
			'ColumnNames' => ['KM','EVENTOS','MARCA','ANIO_USO','NRO_MANTENIMIENTOS','NRO_REPUESTOS','CATEGORIA'],
			//'Values' => [ [ '0','0','prueba' ,'0' ,'0' ,'0' ,'prueba' ] ]
			//'Values' => [ $data ]
			'Values' =>  $data 
			),
		    ),
		'GlobalParameters' => new StdClass(),
		);

		$body = json_encode($data);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer '.$api_key, 'Accept: application/json'));
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$response  = curl_exec($ch);

		//echo 'Curl error: ' . curl_error($ch);
		//var_dump($response);
		return $response;
	}

	public function consumirServicioWeb(){
		$data['resultadoPre'] = $this->Bdomsite_model->getResultadoVehiculoPredictivo();
		$this->load->view('consumirServicio',$data);
	}

	public function login(){
		$data = $this->Bdomsite_model->validarUsuario($this->input->post('usuario') ,$this->input->post('passwd'));
		if(count($data)>0) {
			$data=$data[0];
			$newdata = array(
                         'idUser' => $data["idusuario"]
                        ,'nombre' => $data["nombre"]
                        );

                	$this->session->set_userdata($newdata);
			$this->output->set_output(json_encode(array("valida"=>"OK")));
		}
	}

	public function logout(){
                $data = array(
                         'idUser'
                        ,'nombre'
                        );
                $this->session->unset_userdata($data);
		$url="https://pruebajx.azurewebsites.net/TestApp/";
                redirect($url, 'refresh');
        }

}
?>
