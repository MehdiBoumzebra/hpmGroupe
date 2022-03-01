<?
@require_once "../mysql.php";
function text_make_html ($str,$nl=true) {
	$str=trim($str);
	$str=stripslashes($str);
	$str=urlencode($str);
	$str=ereg_replace("%99","%26trade%3B",$str);
	$str=ereg_replace("%93","%22",$str);
	$str=ereg_replace("%94","%22",$str);
	$str=ereg_replace("%91","%27",$str);
	$str=ereg_replace("%92","%27",$str);
	$str=ereg_replace("%96","-",$str);
	$str=ereg_replace("%85","...",$str);
	$str=ereg_replace("%A0","+",$str);
	$str=urldecode($str);
	$str=stripslashes($str);
	$str=htmlentities($str,ENT_NOQUOTES);
	
	if ($nl) {
		$str=nl2br($str);
		$str=ereg_replace("\\\n","",$str);
		$str=ereg_replace("\\\r","",$str);
	}
	
	//$str=eregi_replace("&lt;br&gt;","&lt;br&gt;",$str);
	$str=eregi_replace("&lt;font","&lt;span",$str);
	$str=eregi_replace("/font&gt;","/span&gt;",$str);
	$str=ereg_replace("&lt;","<",$str);
	$str=ereg_replace("&gt;",">",$str);
	$str=ereg_replace("&amp;","&",$str);
	$str=ereg_replace(" & "," &amp; ",$str);
	$str=ereg_replace("&pound;","£",$str);
	$str=addslashes($str);
	if ($nl) {
		/*
		 *  Make sure the start and end ends in a paragraph
		 */
		if (substr($str,0,1)!="<") {
			$str="<p>".$str."</p>";
		}
	}
	return $str;
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
if ($_POST["action"] == "add" || $_POST["action"] == "modify")
			

		$set = " SET
		date = '".$_POST['date']."',
		
		marque = ".$_POST['marque'].",
		modele = ".$_POST['modele'].",
		km = '".$_POST['km']."',";
		
		if (is_numeric($_POST['prix'])) $set.="prix = ".$_POST['prix'].",";
		//if (is_numeric($_POST['prix_t'])) $set.="prix_t = ".$_POST['prix_t'].",";
		//echo ''.htmlentities($_POST['remarques']);
		$set.="immatriculation = '".$_POST['immatriculation']."',
		carburant = ".$_POST['carburant'].",
		nbr_place = '".$_POST['nbr_place']."',
		puissance = '".$_POST['puissance']."',
		nbr_porte = '".$_POST['nbr_porte']."',
		etat = '".$_POST['etat']."',
		equipement = '".($_POST['equipement'])."',
		description = '".($_POST['description'])."'
";

$upload_dir = $_SERVER['DOCUMENT_ROOT']."/photos/";

if($_FILES["photo1"]["name"]){
@move_uploaded_file($_FILES["photo1"]["tmp_name"], $upload_dir . $_FILES["photo1"]["name"]);
ResizeTo($upload_dir, $_FILES["photo1"]["name"], 80, 60);
ResizeTo($upload_dir, $_FILES["photo1"]["name"], 64, 48);
$set .= ", photo1='".$_FILES["photo1"]["name"]."'";
}
if($_FILES["photo2"]["name"]){
@move_uploaded_file($_FILES["photo2"]["tmp_name"], $upload_dir . $_FILES["photo2"]["name"]);
ResizeTo($upload_dir, $_FILES["photo2"]["name"], 80, 60);
ResizeTo($upload_dir, $_FILES["photo2"]["name"], 64, 48);
$set .= ", photo2='".$_FILES["photo2"]["name"]."'";
}
if($_FILES["photo3"]["name"]){
@move_uploaded_file($_FILES["photo3"]["tmp_name"], $upload_dir . $_FILES["photo3"]["name"]);
ResizeTo($upload_dir, $_FILES["photo3"]["name"], 80, 60);
ResizeTo($upload_dir, $_FILES["photo3"]["name"], 64, 48);
$set .= ", photo3='".$_FILES["photo3"]["name"]."'";
}
if($_FILES["photo4"]["name"]){
@move_uploaded_file($_FILES["photo4"]["tmp_name"], $upload_dir . $_FILES["photo4"]["name"]);
ResizeTo($upload_dir, $_FILES["photo4"]["name"], 80, 60);
ResizeTo($upload_dir, $_FILES["photo4"]["name"], 64, 48);
$set .= ", photo4='".$_FILES["photo4"]["name"]."'";
}
if($_FILES["photo5"]["name"]){
@move_uploaded_file($_FILES["photo5"]["tmp_name"], $upload_dir . $_FILES["photo5"]["name"]);
ResizeTo($upload_dir, $_FILES["photo5"]["name"], 80, 60);
ResizeTo($upload_dir, $_FILES["photo5"]["name"], 64, 48);
$set .= ", photo5='".$_FILES["photo5"]["name"]."'";
}
if($_FILES["photo6"]["name"]){
@move_uploaded_file($_FILES["photo6"]["tmp_name"], $upload_dir . $_FILES["photo6"]["name"]);
ResizeTo($upload_dir, $_FILES["photo6"]["name"], 80, 60);
ResizeTo($upload_dir, $_FILES["photo6"]["name"], 64, 48);
$set .= ", photo6='".$_FILES["photo6"]["name"]."'";
}

if($_FILES["photo7"]["name"]){
@move_uploaded_file($_FILES["photo7"]["tmp_name"], $upload_dir . $_FILES["photo7"]["name"]);
ResizeTo($upload_dir, $_FILES["photo7"]["name"], 80, 60);
ResizeTo($upload_dir, $_FILES["photo7"]["name"], 64, 48);
$set .= ", photo7='".$_FILES["photo7"]["name"]."'";
}
if($_FILES["photo8"]["name"]){
@move_uploaded_file($_FILES["photo8"]["tmp_name"], $upload_dir . $_FILES["photo8"]["name"]);
ResizeTo($upload_dir, $_FILES["photo8"]["name"], 80, 60);
ResizeTo($upload_dir, $_FILES["photo8"]["name"], 64, 48);
$set .= ", photo8='".$_FILES["photo8"]["name"]."'";
}
if($_FILES["photo9"]["name"]){
@move_uploaded_file($_FILES["photo9"]["tmp_name"], $upload_dir . $_FILES["photo9"]["name"]);
ResizeTo($upload_dir, $_FILES["photo9"]["name"], 80, 60);
ResizeTo($upload_dir, $_FILES["photo9"]["name"], 64, 48);
$set .= ", photo9='".$_FILES["photo9"]["name"]."'";
}
if($_FILES["photo10"]["name"]){
@move_uploaded_file($_FILES["photo10"]["tmp_name"], $upload_dir . $_FILES["photo10"]["name"]);
ResizeTo($upload_dir, $_FILES["photo10"]["name"], 80, 60);
ResizeTo($upload_dir, $_FILES["photo10"]["name"], 64, 48);
$set .= ", photo10='".$_FILES["photo10"]["name"]."'";
}
if($_FILES["photo11"]["name"]){
@move_uploaded_file($_FILES["photo11"]["tmp_name"], $upload_dir . $_FILES["photo11"]["name"]);
ResizeTo($upload_dir, $_FILES["photo11"]["name"], 80, 60);
ResizeTo($upload_dir, $_FILES["photo11"]["name"], 64, 48);
$set .= ", photo11='".$_FILES["photo11"]["name"]."'";
}
if($_FILES["photo12"]["name"]){
@move_uploaded_file($_FILES["photo12"]["tmp_name"], $upload_dir . $_FILES["photo12"]["name"]);
ResizeTo($upload_dir, $_FILES["photo12"]["name"], 80, 60);
ResizeTo($upload_dir, $_FILES["photo12"]["name"], 64, 48);
$set .= ", photo12='".$_FILES["photo12"]["name"]."'";
}

		
switch ($_POST["action"]) {
	case "add":
		
//		$sql = "select * from `nextnumber`";
//		$rn = mysql_query($sql);
//		$row=mysql_fetch_array($rn);
//		$sql = "update `nextnumber` set nextnumber = '".($row['nextnumber']+1)."'";
//		mysql_query($sql);
		$sql = "INSERT INTO `vehicules` " . $set ."";
		//echo $sql;
		$r = mysql_query($sql);
		if(!$r){
		echo mysql_error();
		exit();
//		$id=mysql_insert_id();
//		$sqlc = "INSERT INTO `contact`" . $setc . ", id_produit = ".$id."";
//		$rc = mysql_query($sqlc);
		}
	
    	header("Location: index.php?cmd=list-items&type=".$_POST['type']."");
	break;

	case "modify":
		$q = "UPDATE `vehicules`";
		$r = mysql_query($q . $set . " WHERE id = " . $_POST["id"]);
		if(!$r){
			echo $q . $set . " WHERE id = " . $_POST["id"];
		echo mysql_error();
		exit();
//		$id=mysql_insert_id();
//		$sqlc = "INSERT INTO `contact`" . $setc . ", id_produit = ".$id."";
//		$rc = mysql_query($sqlc);
		}

		header("Location: index.php?cmd=list-items");
		
	break;

	case "delete":
		$q = "DELETE FROM `vehicules` WHERE id = {$_POST["id"]} ";
		$r = mysql_query($q);
 		if(!$r)
		echo mysql_error();
   	header("Location: index.php?cmd=list-items");
	}
?>
