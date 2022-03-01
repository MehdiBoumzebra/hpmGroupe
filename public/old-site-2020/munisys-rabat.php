<?php include("config.php");?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <title>HPM MAROC: Réferences</title>
        <link rel="icon" href="images/favicon.ico" />
        <!-- Head -->
        <?php include('include/head.html'); ?>
        <!-- End Head -->
    </head>
    <body>
        <!-- Header -->
        <?php include('include/'.$lang.'/header.html'); ?>
        <!-- End Header --> 
        <?php  $images = array("slide1","slide2","slide3","slide4");?>
        <!-- Fullscreen Carousel -->
        <?php include('include/fullscreen.phtml'); ?>
        <!-- Fullscreen Carousel -->

       <!-- Content -->
        <section id="content">
            <!-- ambassade france -->
            <?php include($lang.'/munisys-rabat.php'); ?>
            <!-- End ambassade france -->
           <!-- References -->
            <?php include('include/'.$lang.'/references.html'); ?>
            <!-- End References -->
           
            <!-- References -->
            <?php include('include/'.$lang.'/contacter.html'); ?>
            <!-- End References -->
                        
            <!-- Map -->
            <?php include('include/map.html'); ?>
            <!-- Map -->
            
            <!-- Footer -->
            <?php include('include/'.$lang.'/footer.html'); ?>
            <!-- End Footer -->
        </section>
        <!-- End Content -->
    </body>
</html>