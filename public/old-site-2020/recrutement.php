<?php include("config.php");

$s = mysql_connect("mysql51-34.perso","hpmanagedata","123456az"); 

$d = mysql_select_db("hpmanagedata", $s);
mysql_query("SET NAMES utf8");
$r = mysql_query("SELECT * FROM emploie order by id ASC");

?>
<!DOCTYPE html>
<html lang="fr">
  	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <title>HPM MAROC : Recrutement</title>
        <link rel="icon" href="images/favicon.ico" />
        <!-- Head -->
        <?php include('include/head.html'); ?>
        <!-- End Head -->
  	</head>
    <body>
        <!-- Header -->
        <?php include('include/'.$lang.'/header.html'); ?>
        <!-- End Header --> 
       <?php  $images = array("slide00001","slide00002");?>
        <!-- Fullscreen Carousel -->
        <?php include('include/fullscreen.phtml'); ?>
        <!-- Fullscreen Carousel -->

        <!-- Content -->
        <section id="content">
            <!-- ambassade france -->
            <?php include($lang.'/recrutement.php'); ?>
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