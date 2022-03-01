<?


$q = "SELECT * FROM `coffrets` WHERE id = {$_GET["id"]}";

$r = mysql_query($q);

$row = mysql_fetch_array($r);

?>
		<div align="center">
		<div class="div_main">
			<br/>
			<div class="txt_1"><b>Effacer coffrets:</b></div>
			<!--
			<div id="general_icon" style="background-image:url(img_icons/icon-admin-add.gif);"></div>
			-->
			
			<div class="div_form">
				<br />
				Est-ce que vous souhaitez effacer définitivement cette coffrets ? <u><?= $row["nom"] ?></u> ?<br />
				<br />
			</div><form name="formulaire" action="process-coffrets.php" method="post">
        <input type="hidden" name="action" value="delete">
        <input type="hidden" name="id" value="<?= $row["id"] ?>">
		<input type="submit" value="OUI" style="width: 40px">
		&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<input type="button" value="NON" onClick="history.back(-1);" style="width: 40px">
			</form>
			
			<br/><br/><br/>
		</div>
		<br/>
