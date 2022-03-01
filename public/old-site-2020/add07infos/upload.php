<?
error_reporting(E_WARNING);
@require_once "../mysql.php";
$upload_dir = $_SERVER['DOCUMENT_ROOT']."/images/";
//echo $upload_dir;
?>
<html>

<head>
<title>Panneau d'administration :: Ajout d'une image</title>
<link href="main.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript" src="main.js"></script>
<? if ($_GET["s"] == 1) { ?>
<script language="JavaScript">
function uploaded() {
<? if ($_GET["field"]) : ?>	opener.document.formulaire.<?= $_GET["field"] ?>.value = "<?= $_FILES["img"]["name"] ?>";<? endif; ?>
	window.close();
}
</script>
<? } ?>
</head>

<body>

<table width="100%" height="100%" cellPadding="0" cellSpacing="0">
<tr><td align="center">
<? if ($_GET["s"] == 0) { ?>
<form name="upload" method="post" action="<?= $_SERVER["PHP_SELF"] ?>?s=1&field=<?= $_GET["field"] ?>&w=<?= $_GET["w"] ?>&h=<?= $_GET["h"] ?>&f=<?= $_GET["f"] ?>&n=<?= $_GET["n"] ?>" enctype="multipart/form-data">

<table width="100%" height="90%" cellPadding="0" cellSpacing="0">
<tr>
  <td align="right">Image à ajouter&nbsp;:&nbsp;</td>
  <td><input type="file" name="img" size="20" class="input"></td>
</tr>

<tr>
  <td colspan="2" align="center" height="30"><input type="submit" value="OK" style="width: 40px">&nbsp;<button style="width: 80px" onClick="window.close()">ANNULER</button></td>
</tr>
</table>

</form>
<? } elseif ($_GET["s"] == 1) {

	switch ($_GET["f"]) {
		case 0 : $upload_dir .= "imgs/"; break;
		case 1 : $upload_dir2 .=$upload_dir."big/";$upload_dir .= "small/"; break;
		case 2 : $upload_dir .= "big/"; break;
		case 3 : $upload_dir .= "imgs/commerce/"; break;
		case 4 : $upload_dir .= "imgs/materiels/"; break;
		case 5 : $upload_dir .= "imgs/societe/"; break;
		case 6 : $upload_dir .= "imgs/newsletter/"; break;
		case 7 : $upload_dir .= "imgs/categories/"; break;
case 8 : $upload_dir .= "imgs/marques/"; break;
	}

	$upload = true;
	
	if ($upload == true && $_FILES["img"]["name"] == "") {
		$text = "Aucun fichier n'a été sélectionné !";
		$upload = false;
	}
	
	if ($upload == true && @substr_count(strtolower($_FILES["img"]["name"]), ".jpg") == false && @substr_count(strtolower($_FILES["img"]["name"]), ".jpeg") == false) {
		$text = "Le fichier n'est pas de type JPG/JPEG !";
		$upload = false;
	}	
	// && ($size_big[0] > $_GET["w"] || $size_big[1] > $_GET["h"])
	
	if ($upload == true && @move_uploaded_file($_FILES["img"]["tmp_name"], $upload_dir . $_FILES["img"]["name"])) {
		if (($_GET["w"] != 0 || $_GET["h"] != 0)) {
			copy($upload_dir . $_FILES["img"]["name"], $upload_dir . "tmp_" . $_FILES["img"]["name"]);
			$img = $upload_dir . "tmp_" . $_FILES["img"]["name"];
			$img_big = imagecreatefromjpeg($img);
			$size_big = getimagesize($img);
		
			if ($_GET["w"] != 0 && $_GET["h"] == 0) {
				$size_small[0] = $_GET["w"];
				$size_small[1] = floor($size_small[0] * $size_big[1] / $size_big[0]);
			}
			if ($_GET["w"] == 0 && $_GET["h"] != 0) {
				$size_small[1] = $_GET["h"];
				$size_small[0] = floor($size_small[1] * $size_big[0] / $size_big[1]);
			}
			if ($_GET["w"] != 0 && $_GET["h"] != 0) {
				if ($size_big[0] >= $size_big[1]) {
					$size_small[0] = $_GET["w"];
					$size_small[1] = floor($size_small[0] * $size_big[1] / $size_big[0]);
				}
				elseif ($size_big[1] >= $size_big[0]) {
					$size_small[1] = $_GET["h"];
					$size_small[0] = floor($size_small[1] * $size_big[0] / $size_big[1]);
				}
			}
				
				if ($size_big[0] >= $size_big[1]) {
					$size_small2[0] = 300;
					$size_small2[1] = floor($size_small2[0] * $size_big[1] / $size_big[0]);
				}
				elseif ($size_big[1] >= $size_big[0]) {
					$size_small2[1] = 300;
					$size_small2[0] = floor($size_small2[1] * $size_big[0] / $size_big[1]);
				}
			$img_small = imagecreatetruecolor($size_small[0], $size_small[1]);
			$img_small2 = imagecreatetruecolor($size_small2[0], $size_small2[1]);
			
			imagecopyresampled($img_small, $img_big, 0, 0, 0, 0, $size_small[0], $size_small[1], $size_big[0], $size_big[1]);
			$a = imagejpeg($img_small, $upload_dir . $_FILES["img"]["name"], 100);
			
			imagecopyresampled($img_small2, $img_big, 0, 0, 0, 0,$size_small2[0], $size_small2[1], $size_big[0], $size_big[1]);
			$a2 = imagejpeg($img_small2, $upload_dir2 . $_FILES["img"]["name"], 100);
			
			imagedestroy($img_small);
			imagedestroy($img_small2);
			
			unlink($upload_dir . "tmp_" . $_FILES["img"]["name"]);
			
			imagedestroy($img_big);
		}
	
		if ($_GET["n"] != 0) rename($upload_dir . $_FILES["img"]["name"], $upload_dir . $_GET["n"]);
	
		$text = "Le fichier a bien été chargé sur le serveur.";
	}
	elseif ($upload == true) {
		$text = "Le fichier n'a pas pu être chargé sur le serveur !";
	}
	
	echo $text . "<br /><br />";
	echo ($upload) ? "<button onClick=\"uploaded()\" style=\"width: 40px\">OK</button>" : "<button onClick=\"goto('{$_SERVER["PHP_SELF"]}?s=0&field={$_GET["field"]}')\" style=\"width: 40px\">OK</button>&nbsp;<button onClick=\"window.close()\" style=\"width: 80px\">ANNULER</button>" ;
}
?>
</td></tr>
</table>

</body>

</html>