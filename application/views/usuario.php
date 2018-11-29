<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
	PROJECT C
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

<body class="user-profile">
  <div class="wrapper ">

    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
	 <b><font color="white"; size="4px";><i>PROJECT C<i></font></b>
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
              <i class="now-ui-icons text_caps-small"></i>
              <p>An&aacute;lisis Eventos</p>
            </a>
          </li>
          <li >
	    <a href="<?php echo 'https://pruebajx.azurewebsites.net/TestApp/index.php/Bdomsite/PWBI/Vehiculos'; ?>">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Score Veh&iacute;culos</p>
            </a>
          </li>
          <li >
	    <a href="<?php echo 'https://pruebajx.azurewebsites.net/TestApp/index.php/Bdomsite/consumirServicioWeb'; ?>">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Servicio Web Predictivo</p>
            </a>
          </li>

          <li class="active ">
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
            <a class="navbar-brand" href="#pablo">Perfil de Usuario</a>
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
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Perfil</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label> Universidad Jorge Tadeo Lozano</label>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Usuario: Grupo Cloud 1</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
			<label>Integrantes: 
				<li>Manuel Dulce</li>
				<li>Jonathan Moyano</li>
				<li>Jenny Diaz</li>
				<li>Edwin Rojas</li>
			</label>
                      </div>
                    </div>
                 </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Ubicaci&oacute;n: Sede Centro</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Descripci&oacute;n: 
			   Grupo de trabajo Projecto Cloud Computing
			</label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="https://pruebajx.azurewebsites.net/TestApp/assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="https://pruebajx.azurewebsites.net/TestApp/assets/img/cloud.png" alt="...">
                    <h5 class="title">Grupo Cloud 1</h5>
                  </a>
                  <p class="description">
                    Grupo Cloud 1 - UTADEO 
                  </p>
                </div>
                <p class="description text-center">
                  "Grupo de Trabajo
                  <br>Maestria en Ingenieria y Analitica de Datos 
                  <br> UTADEO"
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
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
</body>

</html>
