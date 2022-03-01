<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?
include "../mysql.php";
include "menu-site.php";

$q = "SELECT * FROM `sous_menu` WHERE id = {$_GET["cmd"]}";

$r = mysql_query($q);
$row = mysql_fetch_array($r);

?>

<script language="javascript" type="text/javascript" src="nicedit/nicEdit.js"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	//new nicEditor().panelInstance('detail');
	new nicEditor({maxHeight : 500,fullPanel : true,iconsPath : 'nicedit/nicEditorIcons.gif'}).panelInstance('detail');
	//new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
	//new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
	//new nicEditor({}).panelInstance('area5');
});
</script>

		<div align="center">
		<div class="div_main">
			<br/>
<br />
			<div id="general_icon" style="background-image:url(img_icons/icon-admin-add.gif);"><?=$row['titre'.$_GET['lang']]?></div>
			
			<div class="div_form">
				<form name="form12" id="form12" action="process-pages.php" target="_top" method="post" enctype="multipart/form-data">
				<input name="id" value="<?=$row['id']?>" type="hidden">
				<input name="lang" value="<?=$_GET['lang']?>" type="hidden">
				<input name="action" value="modify" type="hidden">
			<table width="590" cellpadding="2" cellspacing="2" border="0" align="center">
				<tr><td class="txt_black" align="left"><br />
				<input type="submit" name="SubmitAll" class="button_1" value="     Valider    "  onClick="send('form12');return false;" />
				</td></tr>			  
				<tr>
					
					<td class="txt_black" align="left"><textarea style="background-color:#FFF" cols="90" rows="20" name="detail" id="detail"><?=$row['detail'.$_GET['lang']]?></textarea>                    				
</td>
				</tr>

				</table>
				</form>
			</div>
			<br/>
		</div>
		<br/>
        <script>//top.frames[0].document.getElementById('nicEditContent').style.backgroundColor="#fff" </script>
