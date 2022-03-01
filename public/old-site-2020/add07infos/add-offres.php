<?
if($_GET['id']){

$q = "SELECT * FROM emploie WHERE emploie.id = {$_GET["id"]}";

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
.div_main .div_form #form12 table tr .txt_black {
	font-weight: bold;
}*/
</style>
<script language="javascript" type="text/javascript" src="nicedit/nicEdit.js"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	//new nicEditor().panelInstance('detail');,maxHeight : 500
	new nicEditor({fullPanel : true,iconsPath : 'nicedit/nicEditorIcons.gif'}).panelInstance('description_poste');
	//new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
	//new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
	//new nicEditor({}).panelInstance('area5');
});
</script>

		<div class="div_main">
			<br/>
			<div class="txt_1" align="center"><b>Ajouter/editer un Offres</b></div>
			<div id="general_icon" style="background-image:url(img_icons/icon-admin-add.gif);"></div>
			
			<div class="div_form">
				<form name="form12" id="form12" action="process-offres.php" method="post" enctype="multipart/form-data">
				<input name="action" value="add" type="hidden">
                     <? if ($_GET["id"]) { ?>
				<input name="action" value="modify" type="hidden">
				<input name="id" value="<?=$_GET["id"]?>" type="hidden">
                    <? }else {?>
				<input name="action" value="add" type="hidden">
                    <?  }?>
               <input name="type" value="<?=$_GET['type']?>" type="hidden">
			<table width="700" cellpadding="2" cellspacing="2" border="0" align="center">
				<tr>
					<td width="30%" class="txt_small">&nbsp;</td>
					<td width="70%" class="txt_small">&nbsp;</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><span><strong>Titre du poste </strong></span>:</td>
					<td class="txt_black" align="left"><input name="titre_du_poste" type="text" id="titre_du_poste" value="<?=$row['titre_du_poste']?>" size="61" maxlength="99" /></td>
				</tr>
				<tr>
					<td align="left" class="txt_black"><b><strong>Références du poste</strong> : </b></td>
				  <td class="txt_black" align="left"><input name="references_du_poste" type="text" id="references_du_poste" value="<?=$row['references_du_poste']?>" size="21" maxlength="992" /></td>
				</tr>
				<tr>
					<td align="left" class="txt_black"><b><strong>Contrat</strong> : </b></td>
				  <td class="txt_black" align="left"><input name="Contrat" type="text" id="Contrat" value="<?=$row['Contrat']?>" size="21" maxlength="992" /></td>
				</tr>
				<tr>
				  <td align="left" class="txt_black"><strong>Region</strong> : </td>
				  <td class="txt_black" align="left"><input name="Region" type="text" id="Region" value="<?=$row['Region']?>" size="21" maxlength="992" /></td>
			  </tr>
				<tr>
				  <td align="left" class="txt_black" valign="top"><strong>Description :</strong></td>
				  <td class="txt_black" align="left"><textarea name="description_poste" id="description_poste" cols="95" rows="25">	<?=$row['description_poste']?>	  
				  </textarea></td>
			  </tr>
             
				             
				<tr>
                	<td colspan="2" class="txt_black" align="center"><br />
						<input type="submit" name="SubmitAll" class="button_1" value="   Valider   " onmouseover="this.style.backgroundColor='#1E90FF'" onmouseout="this.style.backgroundColor='#1874CD'" onClick="nicEditors.findEditor('description_poste').saveContent();send('form12');return false;" />					</td>
              </tr>			  
				</table>
				</form>
			</div>
			<br/>
		</div>
		<br/>
