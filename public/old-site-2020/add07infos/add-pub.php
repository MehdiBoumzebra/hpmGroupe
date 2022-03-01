<?

$q = "SELECT * FROM `pub` where id=".$_GET['id']." order by id DESC";

$r = mysql_query($q);

$num = mysql_num_rows($r);
$row = mysql_fetch_array($r);
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
<!--<script language="javascript" type="text/javascript" src="nicedit/nicEdit.js"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	//new nicEditor().panelInstance('detail');,maxHeight : 500
	new nicEditor({fullPanel : true,iconsPath : 'nicedit/nicEditorIcons.gif'}).panelInstance('detail');
	//new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
	//new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
	//new nicEditor({}).panelInstance('area5');
});
</script>
-->
		<div align="center">
		<div class="div_main">
			<br/>
			<div class="txt_1"><b>Creer nouvelle news:</b></div>
			<div id="general_icon" style="background-image:url(img_icons/icon-admin-add.gif);"></div>
			
			<div class="div_form">
				<form name="form12" id="form12" action="process-pub.php" method="post" enctype="multipart/form-data">
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
                  <td class="txt_black" align="left" width="50%"><strong>Titre:</strong></td><td> <input value="<?=$row['titre']?>" name="titre" size="20" type="text">
                  
                    </td>
                 </tr>   
                <tr>
                  <td class="txt_black" align="left" width="50%"><strong>Description :</strong></td><td> <textarea rows="3" cols="50" value="" name="detail" size="9" type="text"><?=$row['detail']?></textarea>
                  
                    </td>
                 </tr>   
                 <tr>
                  <td class="txt_black" align="left" width="50%"><strong>Description en:</strong></td><td> <textarea rows="3" cols="50" value="" name="detailen" size="9" type="text"><?=$row['detailen']?></textarea>
                  
                    </td>
                 </tr>   
               <tr>
                  <td class="txt_black" align="left" width="50%"><strong>PDF:</strong></td><td> <input name="fichier" size="9" type="file">
                    <? if ($row['fichier']) { ?>
                    <br /><a href="../pdf/<?=$row['fichier']?>">PDF</a>
                    <? }?>
                  
                    </td>
                 </tr>   
                <tr>
                  <td class="txt_black" align="left" width="50%" valign="top"><strong>Petite image (96x124):</strong></td><td> <input name="petite_image" size="9" type="file">
                    <? if ($row['petite_image']) { ?>
                    <br /><img src="../photos/<?=$row['petite_image']?>" />
                    <? }?>
                  
                    </td>
                 </tr>   
                <tr>
                  <td class="txt_black" align="left" width="50%" valign="top"><strong>Grande image (308x400):</strong></td><td> <input name="grande_image" size="9" type="file">
                    <? if ($row['grande_image']) { ?>
                    <br /><img src="../photos/<?=$row['grande_image']?>" />
                    <? }?>
                  
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
