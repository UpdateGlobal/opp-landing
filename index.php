<?php
if (isset($_REQUEST['proceso'])) {
    $proceso    = $_POST['proceso'];
} else {
    $proceso    = "";
}

if($proceso=="Registrar"){
    $nombre         = $_POST['nombres'];
    $email          = $_POST['email'];
    $telefono       = $_POST['telefono'];
    $comentario     = $_POST['mensaje'];
    $fecha_ingreso  = $_POST['fecha_ingreso'];

    $emailDestino = "octaviopedraza@octaviopedraza.com, updatechristian@gmail.com";
    $encabezado = "Enviado desde Opp landing";
    $mensaje = "Información del Contacto\n";
    $mensaje .= "------------------------\n";
    $mensaje .= "Nombres        :".$nombre."\n";
    $mensaje .= "Email          :".$email."\n";
    $mensaje .= "Telefono       :".$telefono."\n";
    $mensaje .= "Fecha          :".$fecha_ingreso."\n";
    $mensaje .= "Mensaje        :".$comentario."\n";

    $mailcabecera = "Desde: ".$email." <".$nombre."> \n";
    $mailcabecera .= "Responder a: ".$email."\n\n";
    mail($emailDestino,$encabezado, $mensaje, $mailcabecera);
    header("Location:exito.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Edificio GRAU 355 | Vive en el Corazón de Miraflores</title>
<script language="JavaScript" type="text/javascript">
<!--
    var rnd = new String(Math.random()) + ((new Date()).getTime());
    document.writeln('<scri' + 'pt language="JavaScript1.1" type="text/javascript" src="http://ads.us.e-planning.net/pct/3/2515e/efa0a8660ab36a86?o=j&rnd=' + rnd + '"></scr' + 'ipt>');
// -->
</script>
<noscript><img width="1" height="1" 
src="http://ads.us.e-planning.net/pct/3/2515e/efa0a8660ab36a86?rnd=$RANDOM" border="0"></noscript>


<script language="JavaScript" type="text/javascript">
<!--
    var rnd = new String(Math.random()) + ((new Date()).getTime());
    document.writeln('<scri' + 'pt language="JavaScript1.1" type="text/javascript" src="https://ads.us.e-planning.net/pct/3/2515e/efa0a8660ab36a86?o=j&rnd=' + rnd + '"></scr' + 'ipt>');
// -->
</script>
<noscript><img width="1" height="1" 
src="https://ads.us.e-planning.net/pct/3/2515e/efa0a8660ab36a86?rnd=$RANDOM" border="0"></noscript>
<?php include('includes/head-index.php'); ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '261767897755680'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=261767897755680&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
</head>
<body>
    <div class="page-wrapper">
    <!-- Preloader -->
<!--     <div class="preloader"></div> -->
    <!-- Main Header-->
    <header class="main-header style-v1">
        
        <!--Header Top-->
        <?php include ('includes/topbar.php'); ?>
        
        <div class="main-box hidden-lg hidden-md hidden-sm">
            <div class="outer-container clearfix">
                <div class="logo-box" >
                    <div class="logo"><a href="http://octaviopedraza.com/"><img src="images/logo.png" alt=""></a></div>
                </div>        
              
                <ul class="options-nav">
                    <li class="menu-btn hidden-bar-opener text animateds pulse"><span class="flaticon-menu-button-of-three-lines"></span></li>
                </ul>
            </div>
        </div>

        <div class="main-box hidden-xs">
            <div class="outer-container clearfix">
  
                <div class="logo-box" >
                    <div class="logo"><a href="http://octaviopedraza.com/"><img src="images/logo.png" alt=""></a></div>
                </div>        
                <div class="nav-outer clearfix">

               <div class="options-box">
                        <ul class="options-nav">
                            <li class="menu-btn hidden-bar-opener text animateds pulse"><span class="flaticon-menu-button-of-three-lines"></span></li>
                        </ul>
                    </div> 
                </div>
            </div>
        </div>

        <?php include ('includes/sticky.php') ;?>
    
    </header>
    <!--End Main Header -->
    
    <?php include ('includes/hidden-bar.php') ;?>
    <?php include ('includes/slider.php') ;?>
    <!--LUUUISS-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" align="center">

                    <div class="home-detail2 hidden-lg hidden-md hidden-sm">
                        <div class="inner"><br>
                            <h3 style="text-align: center;">TU DEPARTAMENTO</h3>
                                <div class="textohs" style="text-align: center;">EN EL CORAZÓN DE MIRAFLORES</div>
                                <h4 style="text-align: center;">MIRAFLORES<BR>DEPARTAMENTOS EN VENTA<br>incluyen dos estacionamiento</h4><br>
                                <h4 style="text-align: center;"> Desde 121.11 M2</h4>
                                <h4 style="text-align: center;">Hasta 239.95 M2</h4>
                                <div><p class="prices">desde US$ 289,695.00</p></div>
                                <div class="btns-box" style="text-align: center;">
                                    <a href="#contacto" class="theme-btn btn-style-one">Contacto</a>
                                </div>
                                <p class="tilt">Entrega Inmediata</p>
                        </div>
                    </div>

                </div>                
            </div>
        </div>
    <!--LUUUISS-->
    <?php include ('includes/minislider.php') ;?>
        
    <?php include ('includes/caracteristicas.php'); ?>
    <?php include ('includes/section-video.php'); ?>
    <?php include ('includes/gallery2.php'); ?>

    <?php include ('includes/contacto.php'); ?>
    <?php include ('includes/map.php'); ?>
    <?php include ('includes/cta.php'); ?>
    <?php include ('includes/footer.php'); ?>

</div>
<!--End pagewrapper-->
<?php include ('includes/scripts.php'); ?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59d8334b2f20c262"></script>
</body>
</html>