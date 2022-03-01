<?
//phpinfo();
//exit();
require_once "../mysql.php";
function htmlent($str){
$r=str_replace('é','&eacute;',$str);
$r=str_replace('è','&egrave;',$r);
$r=str_replace('à','&agrave;',$r);
$r=str_replace('ê','&ecirc;',$r);
$r=str_replace('ç','&ccedil;',$r);
$r=str_replace('ô','&ocirc;',$r);
$r=str_replace("'","'",$r);
$r=str_replace("Ü","&Uuml;",$r);
return $r;
}
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


# Appel de la fonction pour chaque variables.
# Notes, vous pouvez enlevez celle d'on vous ne vous servez pas.
# Personnellement, j'enlève $_REQUEST et $_FILES

//remove_magic_quotes($_POST);
//remove_magic_quotes($_GET);
//remove_magic_quotes($_REQUEST);
//remove_magic_quotes($_SERVER);
//remove_magic_quotes($_FILES);
//remove_magic_quotes($_COOKIE);
}
//print_r($_POST);
//exit();
?>
<?
//echo addslashes(htmlentities($_POST['detail']));
//exit();
if ($_POST["action"] == "add" || $_POST["action"] == "modify")

		$set = " SET
titre_du_poste = '".addslashes($_POST['titre_du_poste'])."',
Contrat = '".addslashes($_POST['Contrat'])."',
references_du_poste = '".addslashes($_POST['references_du_poste'])."',
Region = '".addslashes($_POST['Region'])."',
description_poste = '".($_POST['description_poste'])."'";

//$docroot="C:\Inetpub\\vhosts\inisan.ma\httpdocs";
$filename=substr(md5(rand(10000,100000)),0,10);
	//	echo $upload_dir."<br />";
$upload_dir = $_SERVER['DOCUMENT_ROOT']."/".sub_folder."pdf/";
if($_FILES["attache"]["name"]){
uploadfile('attache', $upload_dir, $filename );
//ResizeTo($upload_dir, $filename ."_". $_FILES["image"]["name"], 150, 115);
//ResizeTo($upload_dir, $_FILES["photo1"]["name"], 64, 48);
$set .= ", contenue_conferences='". $filename . $_FILES["attache"]["name"]."'";
}


switch ($_POST["action"]) {
	case "add":
		$sql = "INSERT INTO emploie " . $set;
		$r = mysql_query($sql);
//		echo $sql;
//		//echo $set;
//		exit();
		if(!$r)
		echo mysql_error();
	break;

	case "modify":
		$q = "UPDATE emploie ";
		$r = mysql_query($q . $set . " WHERE id = " . $_POST["id"]);
		//echo $q . $set . " WHERE id = " . $_POST["id"];
		if(!$r)
		echo mysql_error();
		
	break;

	case "delete":
		$q = "DELETE from `emploie` WHERE id = {$_POST["id"]} ";
		$r = mysql_query($q);
		if(!$r)
		echo mysql_error();
	}
    	header("Location: index.php?cmd=list-offres&type=".$_POST['type']."");
?>
