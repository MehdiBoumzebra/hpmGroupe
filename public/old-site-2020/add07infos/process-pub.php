<?
@require_once "../mysql.php";
if(get_magic_quotes_gpc() == 1){

# Définition de la fonction récursive.
function remove_magic_quotes(&$array)
{
   foreach($array as $key => $val){

       # Si c'est un array, recurssion de la fonction, sinon suppression des slashes
       if(is_array($val)){
           remove_magic_quotes($array[$key]);
       } else if(is_string($val)){
           $array[$key] = stripslashes($val);
       }
   }
}
function htmlent($str){
$r=str_replace('é','&eacute;',$str);
$r=str_replace('è','&egrave;',$r);
$r=str_replace('à','&agrave;',$r);
$r=str_replace('ê','&ecirc;',$r);
$r=str_replace('ç','&ccedil;',$r);
$r=str_replace('ô','&ocirc;',$r);
$r=str_replace("’","'",$r);
$r=str_replace("Ü","&Uuml;",$r);
return $r;
}


# Appel de la fonction pour chaque variables.
# Notes, vous pouvez enlevez celle d'on vous ne vous servez pas.
# Personnellement, j'enlève $_REQUEST et $_FILES

remove_magic_quotes($_POST);
remove_magic_quotes($_GET);
//remove_magic_quotes($_REQUEST);
//remove_magic_quotes($_SERVER);
//remove_magic_quotes($_FILES);
//remove_magic_quotes($_COOKIE);
}

?>
<?
//echo addslashes(htmlentities($_POST['detail']));
//exit();
$sous_menu = "";
foreach ($_POST['sous_menu'] as $cle => $valeur){
   $sous_menu .= $valeur."|";
}

if ($_POST["action"] == "add" || $_POST["action"] == "modify")

		$set = " SET detail = '".addslashes(($_POST['detail']))."', 
		detailen = '".addslashes(($_POST['detailen']))."',
		 titre = '".addslashes(($_POST['titre']))."',
		 date = '".addslashes(($_POST['date']))."'";
		
$upload_dir = $_SERVER['DOCUMENT_ROOT']."/photos/";
$filename=substr(md5(rand(10000,100000)),0,5);

if($_FILES["petite_image"]["name"]){
@move_uploaded_file($_FILES["petite_image"]["tmp_name"], $upload_dir . $filename ."-". $_FILES["petite_image"]["name"]);
//ResizeTo($upload_dir, $_FILES["photo1"]["name"], 80, 60);
//ResizeTo($upload_dir, $_FILES["photo1"]["name"], 64, 48);
$set .= ", petite_image='". $filename . "-". $_FILES["petite_image"]["name"]."'";
}

if($_FILES["grande_image"]["name"]){
@move_uploaded_file($_FILES["grande_image"]["tmp_name"], $upload_dir . $filename ."-". $_FILES["grande_image"]["name"]);
//ResizeTo($upload_dir, $_FILES["photo1"]["name"], 80, 60);
//ResizeTo($upload_dir, $_FILES["photo1"]["name"], 64, 48);
$set .= ", grande_image='". $filename . "-". $_FILES["grande_image"]["name"]."'";
}
$upload_dir = $_SERVER['DOCUMENT_ROOT']."/pdf/";

if($_FILES["fichier"]["name"]){
@move_uploaded_file($_FILES["fichier"]["tmp_name"], $upload_dir . $filename ."-". $_FILES["fichier"]["name"]);
//ResizeTo($upload_dir, $_FILES["photo1"]["name"], 80, 60);
//ResizeTo($upload_dir, $_FILES["photo1"]["name"], 64, 48);
$set .= ", fichier = '". $filename . "-". $_FILES["fichier"]["name"]."'";
}
		 

switch ($_POST["action"]) {
	case "add":
		$sql = "INSERT INTO `pub`" . $set;
		$r = mysql_query($sql);
//		echo $sql;
//		//echo $set;
//		exit();
		if(!$r)
		echo mysql_error();
	break;

	case "modify":
		$q = "UPDATE `pub`";
		$r = mysql_query($q . $set . " WHERE id = " . $_POST["id"]);
		//echo $q . $set . " WHERE id = " . $_POST["id"];
		if(!$r)
		echo mysql_error();
		
	break;

	case "delete":
		$q = "DELETE from `pub` WHERE id = {$_POST["id"]} ";
		$r = mysql_query($q);
		if(!$r)
		echo mysql_error();
	}
    	header("Location: index.php?cmd=list-pub");
?>
