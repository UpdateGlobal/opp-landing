<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Octavio Pedraza</title>
<?php include('includes/head-index.php');
?>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header style-v1">
    	
        <!--Header Top-->
        <?php include ('includes/topbar.php'); ?>
        
        <!-- Main Box -->
    	<div class="main-box">
            <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
                </div>
                
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                   
                    <!-- Main Menu End-->
                    
                    <!--Options Box-->
                    <div class="options-box">
                        <ul class="options-nav">
 
                            <li class="menu-btn hidden-bar-opener"><span class="flaticon-menu-button-of-three-lines"></span></li>
                        </ul>
                    </div>
                    
                </div>
                <!--Nav Outer End-->
                
            </div>
        </div>
    
<?php include ('includes/sticky.php') ;?>
    
    </header>
    <!--End Main Header -->
    
<?php include ('includes/hidden-bar.php') ;?>
<?php include ('includes/slider.php') ;?>
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
<?php
include ('includes/scripts.php')
?>
</body>
</html>