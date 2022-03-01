<?
header('Content-type: text/html; charset=iso-8859-1');

require_once "../mysql.php";

$query  = "SELECT * FROM `modeles` WHERE `marque` = ".$_POST["service"]."";
$query .= " ORDER BY `modele`";
$result = @mysql_query($query);

echo 'var o = null;';
echo 'var f=document.getElementById("zit_search");';
//echo 'var s = f.elements["competence"];';
echo 'var s=document.getElementById("'.$_POST["select"].'");';
echo 's.options.length = 0;';
	if(mysql_num_rows($result)) 
while($r = mysql_fetch_array($result)){
	echo 'obj = s.options[s.options.length] = new Option("'.(ucfirst(trim($r["modele"]))).'");';
	echo 'obj.value = "'.trim($r["id"]).'";';
	if($_POST['m']==$r["id"])
	echo 'obj.selected = true;';
}	
else{
	echo 'obj = s.options[s.options.length] = new Option("Tout");';
	echo 'obj.value = "";';
	}
@mysql_close($s);
?>