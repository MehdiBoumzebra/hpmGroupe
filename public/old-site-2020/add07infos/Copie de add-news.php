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
bkLib.onDomLoaded(function() {
	//new nicEditor().panelInstance('detail');,maxHeight : 500
	new nicEditor({fullPanel : true,iconsPath : 'nicedit/nicEditorIcons.gif'}).panelInstance('detail');
	//new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
	//new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
	//new nicEditor({}).panelInstance('area5');
});
</script>

		<div align="center">
		<div class="div_main">
			<br/>
			<div class="txt_1"><b>Creer nouvelle news:</b></div>
			<div id="general_icon" style="background-image:url(img_icons/icon-admin-add.gif);"></div>
			
			<div class="div_form">
				<form name="form12" id="form12" action="process-news.php" method="post" enctype="multipart/form-data">
				<input name="action" value="add" type="hidden">
			<table width="700" cellpadding="2" cellspacing="2" border="0" align="center">
				<tr>
					<td width="30%" class="txt_small">&nbsp;</td>
					<td width="70%" class="txt_small">&nbsp;</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Titre : </b></td>
					<td class="txt_black" align="left"><input name="titre" type="text" size="21" maxlength="99" value=""></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Date : </b></td>
					<td class="txt_black" align="left"><input name="date" type="text" size="21" maxlength="99" value="<?=date("Y-m-d")?>"></td>
				</tr>
                <tr>
                  <td class="txt_black" align="left" width="50%"><strong>Image : (96x96)</strong></td><td> <input name="image" size="9" type="file">                  
                    </td>
                 </tr>   
                <tr>
                  <td class="txt_black" align="left" width="50%"><strong>Fichier :</strong></td><td> <input name="fichier" size="9" type="file">                  
                    </td>
                 </tr>   
				<tr>
					<td class="txt_black" align="left" valign="top"><b>Texte complet : </b></td>
					<td class="txt_black" align="left"><textarea style="background-color:#FFF" cols="80" rows="10" name="detail" id="detail"></textarea></td>
				</tr>
				<tr>
					<td class="txt_black" align="left" valign="top"><b>Emplacement : </b><br />
					<font style="color:#999999; font-size:10px; ">Utiliser le bouton Ctrl pour<br />
						selectionner plusieurs emplacements</font></td>
					<td class="txt_black" align="left">
                    <?	
                                            $r = mysql_query("SELECT * FROM sous_menu where menu=3 order by id ASC");
											$num=mysql_num_rows($r);
					?>											
                    <select name="sous_menu[]" multiple="multiple" size="<?=($num+1)?>">
                    <option value="" >Choisissez ...
                                        <?	
                                            while ($type = mysql_fetch_array($r)) {
                                        ?>
                                        <option value="<?= $type["id"] ?>" <?= is_numeric(strpos($row['sous_menu'],$type["id"]."|"))?'selected':''?>><?= $type["titre"] ?></option>
                                        <? } ?>
                    </select>                    
                    
                    </td>
                    				

				</tr>
    			<tr>
                	<td colspan="2" class="txt_black" align="center"><br />
						<input type="submit" name="SubmitAll" class="button_1" value="Valider la news" onmouseover="this.style.backgroundColor='#1E90FF'" onmouseout="this.style.backgroundColor='#1874CD'" onClick="send('form12');return false;" />
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
