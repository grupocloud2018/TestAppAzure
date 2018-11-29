<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="https://pruebajx.azurewebsites.net/TestApp/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="https://pruebajx.azurewebsites.net/TestApp/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Project C 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="https://pruebajx.azurewebsites.net/TestApp/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://pruebajx.azurewebsites.net/TestApp/assets/css/now-ui-dashboard.css?v=1.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="https://pruebajx.azurewebsites.net/TestApp/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">

    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
	 <b><font color="white"; size="4px";><i>PROJECT C</i></font></b>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
	  <a href="<?php echo 'https://pruebajx.azurewebsites.net/TestApp/';?>">
              <i class="now-ui-icons design_app"></i>
              <p>Principal</p>
            </a>
          </li>
          <li>
	  <a href="<?php echo 'https://pruebajx.azurewebsites.net/TestApp/index.php/Bdomsite/PWBI/Conductores'; ?>">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>An&aacute;lisis Conductores</p>
            </a>
          </li>
          <li>
            <a href="<?php echo 'https://pruebajx.azurewebsites.net/TestApp/index.php/Bdomsite/PWBI/Eventos'; ?>">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>An&aacute;lisis Eventos</p>
            </a>
          </li>
          <li >
	    <a href="<?php echo 'https://pruebajx.azurewebsites.net/TestApp/index.php/Bdomsite/PWBI/Vehiculos'; ?>">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Score Veh&iacute;culos</p>
            </a>
          </li>
          <li class="active ">
	    <a href="<?php echo 'https://pruebajx.azurewebsites.net/TestApp/index.php/Bdomsite/consumirServicioWeb'; ?>">
              <i class="now-ui-icons design_vector"></i>
              <p>Servicio Web Predictivo</p>
            </a>
          </li>

          <li>
	    <a href="<?php echo 'https://pruebajx.azurewebsites.net/TestApp/index.php/Bdomsite/perfilUsuario'; ?>">
              <i class="now-ui-icons users_single-02"></i>
              <p>Perfil de Usuario</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="https://pruebajx.azurewebsites.net/TestApp/index.php/Bdomsite/logout">Logout</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"> Acceso a servicio web modelo predictivo veh&iacute;culos </h5>
              </div>
              <div class="card-body">

		<div class="container">
         	   <div class="panel-group" id="accordion">
            		<div class="panel panel-default">
               			<div class="panel-heading">
                  			<h6 class="panel-title">
                     				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Probar Modelo Predictivo</a>
                  			</h6>
               			</div>
               			<div id="collapse1" class="panel-collapse collapse in">
                  			<div class="panel-body">
						<form>
						  <div class="form-group row">
						    <label for="km" class="col-sm-0 col-form-label">KM</label>
						    <div class="col-sm-2">
						      <input type="text" class="form-control" id="km" placeholder="KM">
						    </div>

						    <label for="eventos" class="col-sm-0 col-form-label">Eventos</label>
						    <div class="col-sm-2">
						      <input type="text" class="form-control" id="eventos" placeholder="Eventos">
						    </div>

						    <label for="marca" class="col-sm-0 col-form-label">Marca</label>
						    <div class="col-sm-2">
						      <input type="text" class="form-control" id="marca" placeholder="Marca">
						    </div>
						  </div>


						  <div class="form-group row">
						    <label for="uso" class="col-sm-0 col-form-label">Tiempo Uso</label>
						    <div class="col-sm-2">
						      <input type="text" class="form-control" id="uso" placeholder="Uso">
						    </div>

						    <label for="manteni" class="col-sm-0 col-form-label">Mantenimientos</label>
						    <div class="col-sm-2">
						      <input type="text" class="form-control" id="manteni" placeholder="Mantenimientos">
						    </div>

						    <label for="repuesto" class="col-sm-0 col-form-label">Repuestos</label>
						    <div class="col-sm-2">
						      <input type="text" class="form-control" id="repuestos" placeholder="Repuestos">
						    </div>
						  </div>


						  <div class="form-group row">
						    <div class="col-sm-10">
						      <button id="enviar1" type="submit" class="btn btn-primary">Ejecutar</button>
						    </div>
						  </div>
						</form>

						<div id='result' style='display: none'>		
							<label class='label_output'><b>Categoria :<b><div id='value'> </div></label>
						</div>
						<br>
					</div>
               			</div>
            		</div>
						<hr>
            		<div class="panel panel-default">
                  		<div class="panel-heading">
                     			<h6 class="panel-title">
                        			<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Consultar modelo predictivo por placa</a>
                     			</h6>
                 		</div>
                 		<div id="collapse2" class="panel-collapse collapse">
					<div class="panel-body">
						<form>
						  <div class="form-group row">
						    <label for="placa" class="col-sm-0 col-form-label">PLACA</label>
						    <div class="col-sm-2">
						      <input type="text" class="form-control" id="placa" placeholder="Placa">
						    </div>
						    <div class="col-sm-2">
						      <button id="enviar2" type="submit" class="btn btn-primary">Ejecutar</button>
						    </div>
						  </div>
						</form>
						<div id='result2' style='display: none'>		
							<label class='label_output'><b>Categoria :<b><div id='value2'> </div></label>
						</div>
						<br>
					</div>
               			</div>
            		</div>

						<hr>
            		<div class="panel panel-default">
               			<div class="panel-heading">
                  			<h6 class="panel-title">
                     				<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Actualizar Predicci&oacute;n desde Modelo </a>
                 			</h6>
              			</div>
              			<div id="collapse3" class="panel-collapse collapse">
					<div class="panel-body">
						<label class='label_output'><b> &Uacute;ltima Ejecuci&oacute;n :<b><div id='value3'> <?php echo $resultadoPre[0]['ultima']; ?></div></label>
						<form>
						  <div class="form-group row">
						    <label for="placa" class="col-sm-0 col-form-label">Actualizar Datos predictivos</label>
						    <div class="col-sm-2">
						      <button id="enviar3" type="submit" class="btn btn-primary">Ejecutar</button>
						    </div>
						  </div>
						</form>
						<div id='result4' style='display: none'>		
							<label class='label_output'><b>Se ejecuto predicci&oacute;n para :<b>
								<div id='value4'> </div>
								<b> Veh&iacute;culos</b>
							</label>
						</div>
						<br>
					</div>
             			</div>
          		</div>
			<hr>

            		<div class="panel panel-default">
               			<div class="panel-heading">
                  			<h6 class="panel-title">
                     				<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Ver Resultados Predicci&oacute;n </a>
                 			</h6>
              			</div>
              			<div id="collapse4" class="panel-collapse collapse">
					<div class="panel-body">
						<label class='label_output'><b> &Uacute;ltima Ejecuci&oacute;n :<b><div id='value5'> <?php echo $resultadoPre[0]['ultima']; ?></div></label>

					      <div class="content">
						<div class="row">
						  <div class="col-md-10">
						    <div class="card">
						      <div class="card-header">
							<h4 class="card-category">Resultado Modelo Predictivo</h4>
							<h5 class="card-title"> Categor&iacute;a Veh&iacute;culos</h5>
						      </div>
						      <div class="card-body">
							<div class="table-responsive">
							  <table class="table">
							    <thead class=" text-primary">
							      <th>
								Placa 
							      </th>
							      <th>
								Modelo 
							      </th>
							      <th >
								KM                        
							      </th>
							      <th>
								Categoria 
							      </th>
							      <th >
								Fecha Aplica                        
							      </th>
							    </thead>
							    <tbody>
								<?php foreach ($resultadoPre as $c):?>
								<tr>
								  <td><?php echo $c['placa'];?></td>
								  <td><?php echo $c['modelo'];?></td>
								  <td><?php echo $c['km'];?></td>
								  <td><?php echo $c['categoria'];?></td>
								  <td><?php echo $c['fecha_aplica'];?></td>
								</tr>
								<?php endforeach;?>
							    </tbody>
							  </table>
							</div>
						      </div>
						    </div>
						  </div>
      					      </div>

					</div>
             			</div>
          		</div>

       		   </div>
    	         </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="https://pruebajx.azurewebsites.net/TestApp/assets/js/core/jquery.min.js"></script>
  <script src="https://pruebajx.azurewebsites.net/TestApp/assets/js/core/popper.min.js"></script>
  <script src="https://pruebajx.azurewebsites.net/TestApp/assets/js/core/bootstrap.min.js"></script>
  <script src="https://pruebajx.azurewebsites.net/TestApp/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="https://pruebajx.azurewebsites.net/TestApp/assets/js/now-ui-dashboard.min.js?v=1.2.0" type="text/javascript"></script>
<script type="text/javascript">

// Ajax post
$(document).ready(function() {
	$("#enviar1").click(function(event) {
		event.preventDefault();
		var km = $("input#km").val();
		var eventos = $("input#eventos").val();
		var marca = $("input#marca").val();
		var uso = $("input#uso").val();
		var manteni = $("input#manteni").val();
		var repuestos = $("input#repuestos").val();
		jQuery.ajax({
			type: "POST",
			url: "../../index.php/Bdomsite/getCategoriaTestSW",
			dataType: 'json',
			data: {km: km, eventos: eventos ,marca:marca ,uso:uso ,manteni:manteni ,repuestos:repuestos},
			success: function(res) {
				if (res) {
					console.log('OK');
					console.log(res);
					// Show Entered Value
					jQuery("div#result").show();
					jQuery("div#value").html(res.categoria);
				}
			}
			,error:function(err) {console.log('ERROR'); console.log(err);}
		});
	});

	$("#enviar2").click(function(event) {
		event.preventDefault();
		var placa = $("input#placa").val();
		jQuery.ajax({
			type: "POST",
			url: "../../index.php/Bdomsite/getCategoriaxPlaca",
			dataType: 'json',
			data: {placa: placa},
			success: function(res) {
				if (res) {
					console.log('OK');
					console.log(res);
					// Show Entered Value
					jQuery("div#result2").show();
					jQuery("div#value2").html(res.categoria);
				}
			}
			,error:function(err) {console.log('ERROR'); console.log(err);}
		});
	});

	$("#enviar3").click(function(event) {
		event.preventDefault();
		jQuery.ajax({
			type: "POST",
			url: "../../index.php/Bdomsite/setCategoriaForAll",
			dataType: 'json',
			success: function(res) {
				if (res) {
					console.log('OK');
					console.log(res);
					// Show Entered Value
					jQuery("div#value3").html(res.ultima_fecha);
					jQuery("div#result4").show();
					jQuery("div#value4").html(res.conteo);
				}
			}
			,error:function(err) {console.log('ERROR'); console.log(err);}
		});
	});
});
</script>

</body>

</html>
