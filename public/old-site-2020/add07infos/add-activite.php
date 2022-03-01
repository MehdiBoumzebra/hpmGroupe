<?
//echo "la pos : ".strpos("5|8|6|","7|");
if($_GET['id']){
$q = "SELECT * FROM `activite` WHERE id = {$_GET["id"]}";

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
bkLib.onDomLoaded(function() {
	//new nicEditor().panelInstance('detail');,maxHeight : 500
	new nicEditor({fullPanel : true,iconsPath : 'nicedit/nicEditorIcons.gif'}).panelInstance('detail');
//	//new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
//	//new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
//	//new nicEditor({}).panelInstance('area5');
});
</script>

		<div align="center">
		<div class="div_main">
			<br/>
			<div class="txt_1"><b>Ajouter/Editer activite:</b></div>
			<div id="general_icon" style="background-image:url(img_icons/icon-admin-add.gif);"></div>
			
			<div class="div_form">
				<form name="form12" id="form12" action="process-activite.php" method="post" enctype="multipart/form-data">
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
					<td class="txt_black" align="left"><b>Region : </b></td>
					<td class="txt_black" align="left"><select name="region" id="region" class=" required list_deroulante" >
              <option selected value="">Choisissez</option>
				 <?php 
						$r = mysql_query("SELECT * FROM regions order by libelle ASC");
						while ($type = mysql_fetch_array($r)) {
		
					?>
               	
                	    <option value="<?= $type["id"] ?>" <? if($row["region"]==$type["id"]) echo "selected"; ?>><?=$type["libelle"]?></option>
                	    <? } ?>
                            </select></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Description: </b></td>
					<td class="txt_black" align="left"><textarea name="detail" id="detail"  cols="80" rows="10"><?=$row['description']?></textarea></td>
				</tr>
                 <tr>
                  <td class="txt_black" align="left" width="50%"><strong>Image:</strong></td><td> <input name="image" size="9" type="file">
                    <? if ($row['image']) { ?>
                    <br /><img  src="../bimages/<?=$row['image']?>" />
                    <? }?>
                  
                    </td>
                 </tr>   
				<tr>
					<td class="txt_black" align="left" valign="top"><b>Coffrets : </b><br />
					<font style="color:#999999; font-size:10px; ">Utiliser le bouton Ctrl pour<br />
						selectionner plusieurs emplacements</font></td>
					<td class="txt_black" align="left">
                    <?	
                                            $r = mysql_query("SELECT * FROM coffrets order by id ASC");
											$num=mysql_num_rows($r);
					?>											
                    <select name="id_coffret[]" multiple="multiple" size="<?=($num+1)?>">
                    <option value="" >Choisissez ...
                                        <?	
                                            while ($type = mysql_fetch_array($r)) {
                                        ?>
                                        <option value="<?= $type["id"] ?>" <?= is_numeric(strpos($row['id_coffret'],$type["id"]."|"))?'selected':''?>><?= $type["nom"] ?></option>
                                        <? } ?>
                    </select>                    
                    
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
        <script>//window.onload=top.frames[0].document.getElementById('nicEditContent').style.backgroundColor="#fff"; </script>
