<?
//echo "la pos : ".strpos("5|8|6|","7|");
if($_GET['id']){
$q = "SELECT * FROM `bijoux` WHERE id = {$_GET["id"]}";

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
			<div class="txt_1"><b>Editer page de garde:</b></div>
			<div id="general_icon" style="background-image:url(img_icons/icon-admin-add.gif);"></div>
			
			<div class="div_form">
				<form name="form12" id="form12" action="process-pages-de-garde.php" method="post" enctype="multipart/form-data">
				<input name="action" value="add" type="hidden">
			<table width="700" cellpadding="2" cellspacing="2" border="0" align="center">
                <tr>
                  <td class="txt_black" align="left" width="50%"><strong>Image 1:</strong></td><td> <input name="image1" size="9" type="file">
                    <br /><img src="../images/1.jpg" />
                  
                    </td>
                 </tr>   
                <tr>
                  <td class="txt_black" align="left" width="50%"><strong>Image 2:</strong></td><td> <input name="image2" size="9" type="file">
                    <br /><img src="../images/2.jpg" />
                  
                    </td>
                 </tr>   
                <tr>
                  <td class="txt_black" align="left" width="50%"><strong>Image 3:</strong></td><td> <input name="image3" size="9" type="file">
                    <br /><img src="../images/3.jpg" />
                  
                    </td>
                 </tr>   
                <tr>
                  <td class="txt_black" align="left" width="50%"><strong>Image 4:</strong></td><td> <input name="image4" size="9" type="file">
                    <br /><img src="../images/4.jpg" />
                  
                    </td>
                 </tr>   
                <tr>
                  <td class="txt_black" align="left" width="50%"><strong>Image 5:</strong></td><td> <input name="image5" size="9" type="file">
                    <br /><img src="../images/5.jpg" />
                  
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
