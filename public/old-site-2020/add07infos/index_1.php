<?php
//$p=$_GET['p'].".php";
//if(!is_file($p))
//header("Location: index.php");
session_start() ;
$m = isset($_GET['m'])?$_GET['m']:0; 
$sm = isset($_GET['sm'])?$_GET['sm']:0; 
$ssm = isset($_GET['ssm'])?$_GET['ssm']:1; 
require_once "mysql.php";
include "filtres_images.php";
function Titre_sous_menu($text,$sizetitle,$filename="",$maxwidth="",$align="",$couleur=""){
$colour=$couleur?$couleur:"ffffff";
//$sizetitle="12";//-3;
$font='TrajanPro-Regular.otf';
$filename=$filename?$filename:$text;
$outfile="images/".str_replace(" ","",$filename).".png";
if(!file_exists($outfile))
produire_image_typo($text,$sizetitle,$colour,$font,$align,$maxwidth,"",5,$outfile);

return $outfile;
}
//$p='home.php';
//else
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript" src="js/prototype-1.6.0.3.js"></script>
	<script type="text/javascript" src="js/effects.js"></script>
	<script type="text/javascript" src="js/Scroller.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
	<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
	<script language="javascript">AC_FL_RunContent = 0;</script>
<script src="AC_RunActiveContent.js" language="javascript"></script>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mounier & Bouvard</title>
<link rel="stylesheet" href="css/style.css" type="text/css" ><style type="text/css">
<!--
body {
	background-image: url(img/bg_index3.jpg);
}
-->
</style></head>

<body>
<p>
  <script language="javascript">
	if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0',
			'width', '977',
			'height', '220',
			'src', 'mb',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', 'transparent',
			'devicefont', 'false',
			'id', 'logo',
			'bgcolor', '#00ff00',
			'name', 'logo',
			'menu', 'true',
			'allowFullScreen', 'false',
			'allowScriptAccess','sameDomain',
			'movie', 'mb',
			'salign', ''
			); //end AC code
	}
  </script>
  <noscript>
  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" name="logo" width="977" height="220" align="middle" id="logo">
    <param name="allowScriptAccess" value="sameDomain" />
    <param name="allowFullScreen" value="false" />
    <param name="movie" value="mb.swf" />
    <param name="quality" value="high" />
    <param name="wmode" value="transparent" />
    <param name="bgcolor" value="#00ff00" />
    <embed src="mb.swf" quality="high" wmode="transparent" bgcolor="#00ff00" width="977" height="220" name="logo" align="middle" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />  
</object>
  </noscript>
</p>
<table width="1013" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1013" height="525" valign="middle" style="background-position: center center; background-repeat: no-repeat; background-image: url(img/bg-index3.png); text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 13px;"><table width="969" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="969" height="481"  align="center" valign="bottom">
          <table width="788" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="218"  valign="top">
              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="337" align="right" valign="top">
                    <script language="javascript">
	if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0',
			'width', '200',
			'height', '300',
			'src', 'main',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', 'window',
			'devicefont', 'false',
			'id', 'deploy/main',
			'bgcolor', '#000000',
			'name', 'deploy/main',
			'menu', 'true',
			'allowFullScreen', 'false',
			'allowScriptAccess','sameDomain',
			'movie', 'main',
			'salign', ''
			); //end AC code
	}
</script>
<noscript>
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="200" height="300" id="deploy/main" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="main.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#000000" />	<embed src="main.swf" quality="high" bgcolor="#000000" width="200" height="300" name="deploy/main" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
</noscript>
                    
                    </td><td width="20"></td>
                  </tr>
                </table>
                <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="25"></td>
                  </tr>
                </table>
                <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="10"></td>
                  </tr>
                </table>
                <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="44"><? if($type){?><img align="right" src="<?=Titre_sous_menu($type,9)?>" /><br />
					<img src="<?=Titre_sous_menu($titre,14,$titre."big",220,"right","354a6e")?>" align="right" /><? }?>
                    </td>
                  </tr>
                </table></td>
              <td width="425" valign="top"><!--<img align="texttop" src=<?=Titre_sous_menu($type,14,$type."big")?> /><br /><br /><br /><br />--><table width="425" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="center" style=" background-color:#050505 "><!-- height="337"-->
                    <div id="bigpic" style="width:100%; height:100%"><img src="img/image.jpg" width="423" /></div>
                    </td>
                  </tr>
                </table>
                <table width="425" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="212" height="25"><!----><div id="bijouxnom"></div></td>
                    <td width="213"><div id="bijouxref"></div></td>
                  </tr>
                </table>
                <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="10"></td>
                  </tr>
                </table>
                <table width="425" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="88" valign="top"><div id="bijouxdes"></div></td>
                  </tr>
                </table></td>
              <td width="155" valign="top" align="center"><table width="133" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="133" height="369" style="background-image: url(img/border-image.png);" valign="top" align="center">
              <div class="teaser1" align="center"> <a class="scroll-up" href="#"><span class="reader"></span></a>
                
                  <iframe src="last.php?m=<?=$m?>&sm=<?=$sm?>&ssm=<?=$ssm?>" id="recentlyAdvertisedIframe" marginwidth="0" scrolling="No" width="100" frameborder="0" height="306"></iframe>
                
                <!-- .iframe -->
                <a class="scroll-down" href="#"><span class="reader"></span></a></div>
                </td>
                </tr>
              </table>
                <!--<table width="138" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="133" height="369" style="background-image: url(img/border-image.png);"><table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="100" align="center"><img src="img/fh.png" width="23" height="19" /></td>
                    </tr>
                    <tr>
                      <td height="10" align="center"></td>
                    </tr>
                  </table>
                    <table width="96" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="96" height="96">&nbsp;</td>
                      </tr>
                    </table>
                    <table width="96" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="96" height="96">&nbsp;</td>
                      </tr>
                    </table>
                    <table width="96" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="96" height="96">&nbsp;</td>
                      </tr>
                    </table>
                    <table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="100" height="10" align="center"></td>
                      </tr>
                      <tr>
                        <td align="center"><img src="img/fb.png" width="23" height="19" /></td>
                      </tr>
                    </table></td>
                </tr>
              </table>-->
              
              
              </td>
            </tr>
          </table></td>
        </tr>
    </table></td>
  </tr>
</table>
<? include "footer.php";?>
</body>
</html>

