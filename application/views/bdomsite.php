<!DOCTYPE>
<head>
    
    <link rel="stylesheet" href="assets/css/prueba.css">
    <link rel="stylesheet" href="assets/css/focusVModales.css">
    <link rel="stylesheet" href="assets/css/formBtnFoto.css">
    <link rel="stylesheet" href="assets/css/formMsj.css">
    <link rel="stylesheet" href="assets/css/formLogin.css">


<!--Librerias Css-->
    <link rel="stylesheet" href="assets/bootstrap-3.3.5-dist/bootstrap-vertical-menu.css">
    <link rel="stylesheet" href="assets/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/image-picker/image-picker.css">

       
<!--Librerias js-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<!--[if (gte IE 5.5)&(lt IE 7)]>
  <script src='//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js' type='text/javascript'/>
<![endif]-->

<!--[if (gte IE 9) | (!IE)]>  
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js' type='text/javascript'/>
<![endif]--> 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    
    <script type="text/javascript" src="assets/image-picker/image-picker.min.js"></script>
    <script type="text/javascript" src="assets/image-picker/image-picker.js"></script>
    
    <script src="assets/js/prueba.js" type="text/javascript"></script>
    <script src="assets/js/focus.js" type="text/javascript"></script>
    <script src="assets/js/fbsdk.js"></script>
    <script src="assets/js/formMsj.js" type="text/javascript"></script>
    <script src="assets/js/formBtnFoto.js" type="text/javascript"></script>
    
    
</head>
<body>
    
    <?php
        //session_start();
        //session_destroy();
         
        if(isset($_SESSION['idUser']) && $_SESSION['idUser']!="")
        {
            echo "<input id='ipt-id' type='hidden' value='1'>";
        }
        else
        {
            echo "<input id='ipt-id' type='hidden' value='0'>";
        }
    ?>
<!--************************** video *******************************-->

  <!--*********************************************************************-->   
<!--************************** Menu *******************************--> 
    
    <nav class="navbar navbar-vertical-left" style="float:left; z-index:9999; position:fixed;">
        <ul class="nav navbar-nav">
            <li style="height: 20px;">
                    <a href="#home" class="no-modal" >
                        <i class="fa fa-fw fa-lg fa-star"><img class="no-modal" src="assets/menu_img/emensaje.png" style="cursor:pointer;"></i> 
                        <span style="font-size:9; width:50%; height:50%; float:right; cursor:pointer; text-decoration: underline;" align="center">ESCRIBE TU MENSAJE</span>
                    </a>
            </li>
            <li style="height: 20px;">
                    <a href="#galeria" class="no-modal opcgaleria">
                        <i class="fa fa-fw fa-lg fa-font"><img class="no-modal" src="assets/menu_img/galeria.png" style="cursor:pointer;"></i>
                        <span style="font-size:10px; width:50%; height:50%; float:right;cursor:pointer; text-decoration: underline;" align="center">GALER&Iacute;A</span>
                    </a>
            </li>
            <li style="height: 20px;">
                    <a href="#home" class="mecanica" >
                        <i class="fa fa-fw fa-lg fa-rocket"><img class="mecanica" src="assets/menu_img/mecanica.png" style="cursor:pointer;"></i> 
                        <span style="font-size:10px; width:50%; height:50%; float:right; cursor:pointer; text-decoration: underline;" align="center">MEC&Aacute;NICA</span>
                    </a>
            </li>
            <li style="height: 20px;">
                    <a href="#home" class="terminos">
                        <i class="fa fa-fw fa-lg fa-cog"><img class="terminos" src="assets/menu_img/terminos.png" style="cursor:pointer;"></i> 
                        <span style="font-size:9; width:50%; height:50%; float:right; cursor:pointer; text-decoration: underline;" align="center">T&Eacute;RMINOS Y CONDICIONES</span>
                    </a>
            </li>
            
            <li style="position:absolute; bottom:45;">
            <a href="https://www.facebook.com/BcoOccidente">
                <i class="fa fa-fw fa-lg fa-cog"><img src="assets/menu_img/facebook.png"></i> 
                    <span style="font-size:10px">/BcoOccidente</span>
                 </a>
            </li>
            <li style="position:absolute; bottom:0;">
                    <a href="https://twitter.com/bco_occidente">
                        <i class="fa fa-fw fa-lg fa-cog"><img src="assets/menu_img/twitter.png"></i> 
                        <span style="font-size:9px">@Bco_Occidente</span>
                    </a>
            </li>
        </ul>
    </nav>
<!--
    <nav class="navbar navbar-vertical-left" style="float:left; z-index:9999; position:fixed;">
        <ul class="nav navbar-nav">
            <li>
                    <a href="#home" class="no-modal" >
                        <i class="fa fa-fw fa-lg fa-star"><img class="no-modal" src="menu_img/emensaje.png" style="cursor:pointer;"></i> 
                        <span style="font-size:9; width:50%; height:50%; float:right; cursor:pointer; text-decoration: underline;" align="center">ESCRIBE TU MENSAJE</span>
                    </a>
            </li>
            <li>
                    <a href="#galeria" class="no-modal opcgaleria">
                        <i class="fa fa-fw fa-lg fa-font"><img class="no-modal" src="menu_img/galeria.png" style="cursor:pointer;"></i> 
                        <span style="font-size:10px; width:50%; height:50%; float:right;cursor:pointer; text-decoration: underline;" align="center">GALER&Iacute;A</span>
                    </a>
            </li>
            <li>
                    <a href="#home" class="mecanica" >
                        <i class="fa fa-fw fa-lg fa-rocket"><img class="mecanica" src="menu_img/mecanica.png" style="cursor:pointer;"></i> 
                        <span style="font-size:10px; width:50%; height:50%; float:right; cursor:pointer; text-decoration: underline;" align="center">MEC&Aacute;NICA</span>
                    </a>
            </li>
            <li>
                    <a href="#home" class="terminos">
                        <i class="fa fa-fw fa-lg fa-cog"><img class="terminos" src="menu_img/terminos.png" style="cursor:pointer;"></i> 
            </li>
            <li>
                    <a>
                        <i class="fa fa-fw fa-lg fa-cog"></i> 
                        <span></span>
                    </a>
            </li>
            <li>
                    <a>
                        <i class="fa fa-fw fa-lg fa-cog"></i> 
                        <span></span>
                    </a>
            </li>
            <li>
                    <a>
                        <i class="fa fa-fw fa-lg fa-cog"></i> 
                        <span></span>
                    </a>
            </li>
            <li>
                    <a>
                        <i class="fa fa-fw fa-lg fa-cog"></i> 
                        <span></span>
                    </a>
            </li>
            <li>
                    <a>
                        <i class="fa fa-fw fa-lg fa-cog"></i> 
                        <span></span>
                    </a>
            </li>
            <li>
                    <a>
                        <i class="fa fa-fw fa-lg fa-cog"></i> 
                        <span></span>
                    </a>
            </li>
            <li>
                    <a>
                        <i class="fa fa-fw fa-lg fa-cog"></i> 
                        <span></span>
                    </a>
            </li>
            <li>
                    <a href="https://www.facebook.com/BcoOccidente">
                        <i class="fa fa-fw fa-lg fa-cog"><img src="menu_img/facebook.png"></i> 
                        <span style="font-size:10px">/BcoOccidente</span>
                    </a>
            </li>
            <li>
                    <a href="https://twitter.com/bco_occidente">
                        <i class="fa fa-fw fa-lg fa-cog"><img src="menu_img/twitter.png"></i> 
                        <span style="font-size:9px">@Bco_Occidente</span>
                    </a>
            </li>
        </ul>

    </nav>
-->
<!--*********************************************************************-->  
<!--************************** content page ************************-->
    <div id="content-page">
            <div id="home">
                <div class="cont-home">
                </div>
                <div class="cont-home">
                    <div id="content-form">
                    </div>
                </div>
            </div>
            <div id="galeria">
                <div class="box2">
                </div>
            </div>
    </div>
<!--*********************************************************************-->
<!--************************** Login Social ************************-->
    <div id="fb-root"></div>
        <div class="fl-content" style="display:none">
            <div id="fl-info">
                <div id="fl-text1" align="center" style="font-size:14px;">
                    <p><strong>Cu&eacute;ntanos en 140 caracteres</strong> la historia
                    <br> de la persona a la que quieres darle un reconocimiento
                    <br><strong>usando el HT #YoCreoEn</strong></p>
                </div>
                <div id="fl-text2">
                    <span>Para empezar, con&eacute;ctate con <strong>tus redes sociales.</strong></span>
                </div>
            </div>
            <div id="fl-btn">
                <div id="status">
                    <img src="assets/img/facebook.png" style="cursor:pointer; display: inline-block; float: left; margin-right: 5%;  margin-left: 5%;" onclick="Login()"/>
                </div>
                <a href="assets/login-with-twitter/login.php"><img src="assets/img/twitter.png" style=" display: inline-block; float: left; margin-left: 5%;"/></a>
            </div>
<!--
<div align="center">
        <div id="status">
                <img src="./icons/LoginWithFacebook.png" style="cursor:pointer;" onclick="Login()"/>
        </div>
        <a href="../login-with-twitter/login.php"><img src="./icons/LoginTwitter.png"/></a>

            <div id="message">
            </div>
-->
    </div>
<!--*********************************************************************-->
<!--************************** Seleccion Mensaje ************************-->
    <div class="f1-content" style="display:none">
        <div id="f1-info">        
            <div id="f1-text1" align="center" style="font-size:14px;">
                <p>Hay personas que d&iacute;a a d&iacute;a, con esfuerzo y dedicaci&oacute;n<br>logran que todo <strong>todo sea posible.</strong></p>
            </div>  
            <div id="f1-text2">
                <span><strong>Postula su historia y dale el reconocimiento que merece.</span><br>
                <span style="font-style: italic;">&iquest;A qui&eacute;n postular&iacute;as y por qu&eacute;?</strong></span>
            </div>
        </div>
        <div id="f1-form">
            <input id="ipt-nom" type="text" size="40" placeholder="Nombre" maxlength="50">
            <textarea id="ta-msj" maxlength="140">#YoCreoEn</textarea>
        </div>
        <div id="f1-btn">
            <div class="f1-det-btn" style="width: 70%">
                <span style="font-size:10px; float:right; padding: 3px 0px;">Acepto terminos y condiciones</span>
                <input type="checkbox" id="acp-term">
            </div>
        <div class="f1-det-btn" style="width: 30%">
            <button id="f1-btn-sig" type="button">Siguiente</button>
        </div>
            
        </div>
        <div class="f1-error">
            <span id="f1-alert"></span>
        </div>
    </div>
<!--*********************************************************************-->
<!--***************************** Seleccion Foto ************************-->
	<div class="f2-content" style="display:none">
        <div id="f2-info">
            <div id="f2-text1" align="center" style="font-size:14px;">
                <p>Hay personas que dia a dia, con esfuerzo y dedicacion<br>logran que todo <strong>todo sea posible.</strong></p>
            </div>
            <div id="f2-text2">
                <span><strong>Postula su historia y dale el reconocimiento que merece.</span></strong><br>
                <span style="font-style: italic;">Sube una fotografia de la persona en la que crees <br>o selecciona una de nuestra galeria.</span>
            </div>
            <div id="f2-btn">
                <div class="f2-det-btn">
                    <button class="f2-btn-img" id="f2-btn-ipc" type="button">Subir Foto</button>
                </div>
                <div class="f2-det-btn">
                    <button class="f2-btn-img" id="f2-btn-ilc" type="button">Seleccionar Imagen</button>
                </div>
            </div>
            <div id="f2-preview">
                <input id="ipt-file" type="file" accept="image/*" style="display: none">
                <div id="f2-det1" style="display: inline-block">
                    <img id="prv" src="" width="80px" height="80px">
                </div>
                <div id="f2-det2" style="display: inline-block">
                    <span id="prv-txt"></span>
                </div>
            </div>
            <div id="f2-cbtn-fnal">
                <button class="f2-btn-img" id="f2-btn-fnal" type="button">FINALIZAR</button>
            </div>
    </div>        
</div>
<div id="f2-grid">
            <div id="f2-grid-content">
                <div id="f2-grid-det">
                    <select id="selectImage">
                        <option data-img-src="assets/img/foto_grande.jpg" value="foto_grande.jpg" ></option>
                        <option data-img-src="assets/img/foto_peque.jpg" value="foto_peque.jpg" ></option>
                    </select>
                </div>

            </div>
</div>
<!--*********************************************************************-->
</body>
