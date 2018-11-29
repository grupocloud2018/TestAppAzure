<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
 	Project C 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
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
          <li class="active">
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
          <li>
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
            <a class="navbar-brand" href="#pablo">Dashboard</a>
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
      <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div>
      <div class="content">
        <div class="row">
          
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Score Veh&iacute;culos</h5>
                <h4 class="card-title"> Top 10 Proximos a Revisi&oacute;n</h4>
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
                      <th class="text-right">
			KM                        
                      </th>
                      <th class="text-right">
			Fecha Aplica                        
                      </th>
                    </thead>
                    <tbody>
			<?php foreach ($scorevehiculo as $c):?>
            		<tr>
                	  <td><?php echo $c['placa'];?></td>
                	  <td><?php echo $c['modelo'];?></td>
                	  <td><?php echo $c['km'];?></td>
                	  <td><?php echo $c['fecha_aplica'];?></td>
            		</tr>
        		<?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Score Conductores</h5>
                <h4 class="card-title"> Top 10 Conductores Incidentes</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Conductor 
                      </th>
                      <th>
                        Eventos 
                      </th>
                    </thead>
                    <tbody>
			<?php foreach ($scoreconductor as $c):?>
            		<tr>
                	  <td><?php echo $c['conductor'];?></td>
                	  <td><?php echo $c['eventos'];?></td>
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
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.2.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>
