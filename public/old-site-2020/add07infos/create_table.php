<?
//print_r($_POST);
include("mysql.php");
$sql= "CREATE TABLE `devis` (
`id` INT NOT NULL AUTO_INCREMENT ,<br>
`id` INT NOT NULL AUTO_INCREMENT ,<br>";
//$r = mysql_query($sql);
//$row = mysql_fetch_array($r);
$sql= "INSERT INTO biens SET ";

//foreach ($_POST as $cle => $valeur) 
//$sql .= "`".$cle."` VARCHAR( 255 ) NOT NULL ,<br>";
//$sql .=" PRIMARY KEY ( `id` ) );";

foreach ($_POST as $cle => $valeur) 
$sql .= " ".$cle." = '._POST['".$cle."'].',<br>";

$sql = substr($sql,0,strlen($sql)-1);//strrpos($sql,",");
echo $sql;
//$sql = substr($sql,0,strlen($sql)-1);//strrpos($sql,",");

//exit(0);
?>
