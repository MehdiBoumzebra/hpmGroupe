<?
@require_once "../mysql.php";
if(get_magic_quotes_gpc() == 1){

# D�finition de la fonction r�cursive.
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
$r=str_replace('�','&eacute;',$str);
$r=str_replace('�','&egrave;',$r);
$r=str_replace('�','&agrave;',$r);
$r=str_replace('�','&ecirc;',$r);
$r=str_replace('�','&ccedil;',$r);
$r=str_replace('�','&ocirc;',$r);
$r=str_replace("�","'",$r);
$r=str_replace("�","&Uuml;",$r);
return $r;
}


# Appel de la fonction pour chaque variables.
# Notes, vous pouvez enlevez celle d'on vous ne vous servez pas.
# Personnellement, j'enl�ve $_REQUEST et $_FILES

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
$upload_dir = $_SERVER['DOCUMENT_ROOT']."/photos/";
if ($_POST["action"] == "add" || $_POST["action"] == "modify")
		$set = " SET
		nom = '".$_POST['nom']."',
		ref = '".$_POST['ref']."',
		descriptif = '".$_POST['descriptif']."',
		menu = 2";

$filename=substr(md5(rand(10000,100000)),0,5);
if($_FILES["image"]["name"]){
@move_uploaded_file($_FILES["image"]["tmp_name"], $upload_dir . $filename ."-". $_FILES["image"]["name"]);
//ResizeTo($upload_dir, $_FILES["photo1"]["name"], 80, 60);
//ResizeTo($upload_dir, $_FILES["photo1"]["name"], 64, 48);
$set .= ", image='". $filename . "-". $_FILES["image"]["name"]."'";
}

switch ($_POST["action"]) {
	case "add":
		$sql = "INSERT INTO `actualite`" . $set;
		$r = mysql_query($sql);
//		echo $sql;
//		exit();
//		//echo $set;
		if(!$r)
		echo mysql_error();
	break;

	case "modify":
		$q = "UPDATE `actualite`";
		$r = mysql_query($q . $set . " WHERE id = " . $_POST["id"]);
		//echo $q . $set . " WHERE id = " . $_POST["id"];
		if(!$r)
		echo mysql_error();
		
	break;

	case "delete":
		$q = "DELETE from `actualite` WHERE id = {$_POST["id"]} ";
		$r = mysql_query($q);
		if(!$r)
		echo mysql_error();
	}
    	header("Location: index.php?cmd=list-actualite");
?>
