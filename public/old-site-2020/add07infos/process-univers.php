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
function ResizeTo($upload_dir, $image, $w, $h){
			$img = $upload_dir  . $image;
			$img_big = imagecreatefromjpeg($img);
			$size_big = getimagesize($img);
			
			if($size_big[1] > $size_big[0]){
				$width = $w;
				$height = floor($width * $size_big[1] / $size_big[0]);
			}
			else{
				$height = $h;
				$width = floor($height * $size_big[0] / $size_big[1]);
			}	


				$img_ptt = imagecreatetruecolor($w, $h);
			
			
			imagecopyresampled($img_ptt, $img_big, 0, 0, 0, 0, $width, $height, $size_big[0], $size_big[1]);
			$a = imagejpeg($img_ptt, $upload_dir . $w .'x'. $h .'_'.$image, 100);
			
			imagedestroy($img_ptt);
			
			//unlink($upload_dir . $_FILES["img"]["name"]);
			
			imagedestroy($img_big);

}

?>
<?
//echo addslashes(htmlentities($_POST['detail']));
//exit();
$upload_dir = $_SERVER['DOCUMENT_ROOT']."/cadolik/photos/";
		
if ($_POST["action"] == "add" || $_POST["action"] == "modify")
		$set = " SET
		nom = '".$_POST['nom']."',
		description = '".$_POST['descriptif']."',
		date_limit = '".$_POST['date']."',
		univer = '".$_POST['univer']."',
		promo = '".$_POST['promo']."',
		prix = '".$_POST['prix']."' ";
		

$filename=substr(md5(rand(10000,100000)),0,10);

if($_FILES["image"]["name"]){
@move_uploaded_file($_FILES["image"]["tmp_name"], $upload_dir . $filename ."_". $_FILES["image"]["name"]);
ResizeTo($upload_dir, $filename ."_". $_FILES["image"]["name"], 150, 115);
//ResizeTo($upload_dir, $_FILES["photo1"]["name"], 64, 48);
$set .= ", image='". $filename . "_". $_FILES["image"]["name"]."'";
}

if($_FILES["fiche"]["name"]){
@move_uploaded_file($_FILES["fiche"]["tmp_name"], $upload_dir . $filename ."-". $_FILES["fiche"]["name"]);
$set .= ", fiche='". $filename . "-". $_FILES["fiche"]["name"]."'";
}
switch ($_POST["action"]) {
	case "add":
		$sql = "INSERT INTO `coffrets`" . $set . $pos;
		$r = mysql_query($sql);
//		echo $sql;
//		exit();
//		//echo $set;
		if(!$r){
		echo mysql_error();
		mail("najib.fadil@gmail.com","Errror Cadolik","".mysql_error()."<br />".$_SERVER['PHP_SELF']."<br />".$sql."");
		}
	break;

	case "modify":
		$q = "UPDATE `coffrets`";
		$r = mysql_query($q . $set . " WHERE id = " . $_POST["id"]);
		//echo $q . $set . " WHERE id = " . $_POST["id"];
		if(!$r)
		echo mysql_error();
		
	break;

	case "delete":
		$q = "DELETE from `coffrets` WHERE id = {$_POST["id"]} ";
		$r = mysql_query($q);
		if(!$r)
		echo mysql_error();
	}
    	header("Location: index.php?cmd=list-coffrets");
?>
