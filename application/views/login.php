<html>
  <head>
  	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
<style>	
body#LoginForm{ 
background-image:url("./assets/img/login.jpg"); 
background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;
}
</style>



  <body id="LoginForm">
    <div class="container">
       <h2 class="form-heading">PROJECT C</h2>
       <div class="login-form">
          <div class="main-div">
             <div class="panel">
                <h2>Login Usuario</h2>
                <p>Por favor ingrese su usuario y clave</p>
             </div>
	     <form>
                <div class="form-group">
                   <input type="text" class="form-control" id="usuario" placeholder="Nombre de usuario">
                </div>
                <div class="form-group">
                   <input type="password" class="form-control" id="passwd" placeholder="Password">
                </div>
                <button id="enviar0" type="submit" class="btn btn-primary">Login</button>
             </form>
		<div id='result' style='display: none'>		
			<label class='label_output'><b>Clave o Usuario Invalido <b><div id='value'> </div></label>
		</div>
          </div>
       </div>
    </div>

<script type="text/javascript">

// Ajax post
$(document).ready(function() {
	$("#enviar0").click(function(event) {
		event.preventDefault();
		var usuario = $("input#usuario").val();
		var clave = $("input#passwd").val();
		jQuery.ajax({
			type: "POST",
			url: "./index.php/Bdomsite/login",
			dataType: 'json',
			data: {usuario: usuario, passwd: clave},
			success: function(res) {
				if (res.valida=="OK") {
					window.location.assign("https://pruebajx.azurewebsites.net/TestApp/");
				}
				else{
					jQuery("div#result").show();
				}
			}
			,error:function(err) {console.log('ERROR'); console.log(err);
					jQuery("div#result").show();
			}
		});
	});
});
 
</script>

</body>
</html>

