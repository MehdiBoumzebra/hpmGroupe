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
$upload_dir = $_SERVER['DOCUMENT_ROOT']."/images/";
if($_FILES["image1"]["name"]){
@move_uploaded_file($_FILES["image1"]["tmp_name"], $upload_dir . "1.jpg");
}
if($_FILES["image2"]["name"]){
@move_uploaded_file($_FILES["image2"]["tmp_name"], $upload_dir . "2.jpg");
}
if($_FILES["image3"]["name"]){
@move_uploaded_file($_FILES["image3"]["tmp_name"], $upload_dir . "3.jpg");
}
if($_FILES["image4"]["name"]){
@move_uploaded_file($_FILES["image4"]["tmp_name"], $upload_dir . "4.jpg");
}
if($_FILES["image5"]["name"]){
@move_uploaded_file($_FILES["image5"]["tmp_name"], $upload_dir . "5.jpg");
}
header("Location: index.php?cmd=edit-page-de-garde.php");
?>
