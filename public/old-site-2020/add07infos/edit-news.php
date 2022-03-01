<?

$q = "SELECT * FROM `news` WHERE id = {$_GET["id"]}";

$r = mysql_query($q);
$row = mysql_fetch_array($r);

?>

<script language="javascript" type="text/javascript" src="nicedit/nicEdit.js"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	//new nicEditor().panelInstance('detail');maxHeight : 500,
	new nicEditor({fullPanel : true,iconsPath : 'nicedit/nicEditorIcons.gif'}).panelInstance('detail');
	//new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
	//new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
	//new nicEditor({}).panelInstance('area5');
});
</script>

		<div align="center">
		<div class="div_main">
			<br/>
			<div class="txt_1"><b>Editer article:</b></div>
			<div id="general_icon" style="background-image:url(img_icons/icon-admin-add.gif);"></div>
			
			<div class="div_form">
				<form name="form12" id="form12" action="process-news.php" method="post" enctype="multipart/form-data">
				<input name="id" value="<?=$row['id']?>" type="hidden">
				<input name="action" value="modify" type="hidden">
								<table width="700" cellpadding="2" cellspacing="2" border="0" align="center">
				<tr>
					<td width="30%" class="txt_small">&nbsp;</td>
					<td width="70%" class="txt_small">&nbsp;</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Titre : </b></td>
					<td class="txt_black" align="left"><input name="titre" type="text" size="21" maxlength="99" value="<?=$row['titre']?>"></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Date : </b></td>
					<td class="txt_black" align="left"><input name="date" type="text" size="21" maxlength="99" value="<?=$row['date']?>"></td>
				</tr>
                <tr>
                  <td class="txt_black" align="left" width="50%" valign="top"><strong>image :</strong></td><td> <input name="image" size="9" type="file">
                    <? if ($row['image']) { ?>
                    <br /><img src="../photos/<?=$row['image']?>" width="96" height="96" />
                    <? }?>
                  
                    </td>
                 </tr>   
				<tr><td colspan="2" class="txt_black" align="center"><br />
				<input type="submit" name="SubmitAll" class="button_1" value="Valider la news" onmouseover="this.style.backgroundColor='#1E90FF'" onmouseout="this.style.backgroundColor='#1874CD'" onClick="send('form12');return false;" />
				</td></tr>			  
				</table>
				</form>
			</div>
			<br/>
		</div>
		<br/>
        <script>//top.frames[0].document.getElementById('nicEditContent').style.backgroundColor="#fff" </script>
