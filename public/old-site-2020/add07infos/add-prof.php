<?
if($_GET['id']){
$q = "SELECT * FROM `prof` WHERE id = {$_GET["id"]}";

$r = mysql_query($q);
$row = mysql_fetch_array($r);
}
?>
<style type="text/css">
#detail {
        /*border: 2px dashed #0000ff;*/
	background-color: #ffffff !important;
}
#nicEditContent {
        /*border: 2px dashed #0000ff;*/
	background-color: #ffffff !important;
}

/*.nicEdit-selected {
        border: 2px solid #0000ff !important;
}

.nicEdit-panel {
	background-color: #fff !important;
}

.nicEdit-button {
	background-color: #fff !important;
}
*/</style>
<script language="javascript" type="text/javascript" src="nicedit/nicEdit.js"></script>
<script type="text/javascript">
//bkLib.onDomLoaded(function() {
//	//new nicEditor().panelInstance('detail');,maxHeight : 500
//	new nicEditor({fullPanel : true,iconsPath : 'nicedit/nicEditorIcons.gif'}).panelInstance('detail');
//	//new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
//	//new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
//	//new nicEditor({}).panelInstance('area5');
//});
</script>

		<div align="center">
		<div class="div_main">
			<br/>
			<div class="txt_1"><b>Ajouter/Editer prof:</b></div>
			<div id="general_icon" style="background-image:url(img_icons/icon-admin-add.gif);"></div>
			
			<div class="div_form">
				<form name="form12" id="form12" action="process-prof.php" method="post" enctype="multipart/form-data">
                    <? if ($row['id']) { ?>
				<input name="action" value="modify" type="hidden">
				<input name="id" value="<?=$row['id']?>" type="hidden">
                    <? }else {?>
				<input name="action" value="add" type="hidden">
                    <?  }?>
			<table width="700" cellpadding="2" cellspacing="2" border="0" align="center">
				<tr>
					<td width="30%" class="txt_small">&nbsp;</td>
					<td width="70%" class="txt_small">&nbsp;</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Nom : </b></td>
					<td class="txt_black" align="left"><input name="nom" type="text" size="21" maxlength="99" value="<?=$row['nom']?>"></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Réf : </b></td>
					<td class="txt_black" align="left"><input name="ref" type="text" size="21" maxlength="99" value="<?=$row['ref']?>"></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Descriptif : </b></td>
					<td class="txt_black" align="left"><textarea name="descriptif"  rows="3" cols="59" ><?=$row['descriptif']?></textarea></td>
				</tr>
                <tr>
                  <td class="txt_black" align="left" width="50%"><strong>Petite image (96x96):</strong></td><td> <input name="petite_image" size="9" type="file">
                    <? if ($row['petite_image']) { ?>
                    <br /><img src="../photos/<?=$row['petite_image']?>" width="96" height="96" />
                    <? }?>
                  
                    </td>
                 </tr>   
                <tr>
                  <td class="txt_black" align="left" width="50%"><strong>Grande image (557x333):</strong></td><td> <input name="grande_image" size="9" type="file">
                    <? if ($row['grande_image']) { ?>
                    <br /><img src="../photos/<?=$row['grande_image']?>" width="557" height="333" />
                    <? }?>
                  
                    </td>
                 </tr>   
	
    			<tr>
                	<td colspan="2" class="txt_black" align="center"><br />
						<input type="submit" name="SubmitAll" value="Valider" class="button_1" onmouseover="this.style.backgroundColor='#1E90FF'" onmouseout="this.style.backgroundColor='#1874CD'" onClick="send('form12');return false;" />
					</td>
                  </tr>			  
				</table>
				</form>
			</div>
			<br/>
		</div>
		<br/>
		<a href="index.php?cmd=list-users" class="link_blue">Afficher les administrateurs</a> | <a href="index.php?cmd=add-user" class="link_blue">Ajouter un administrateur</a> 
        <script>//window.onload=top.frames[0].document.getElementById('nicEditContent').style.backgroundColor="#fff"; </script>
