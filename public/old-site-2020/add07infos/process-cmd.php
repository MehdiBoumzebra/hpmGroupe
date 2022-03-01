<?
@require_once "../mysql.php";
?>
<?
if ($_POST["action"] == "add" || $_POST["action"] == "modify")

		$set = " SET
		".$_POST['status']." = '1'
";

switch ($_POST["action"]) {
	case "add":
		$sql = "INSERT INTO `commandes`" . $set;
		//echo $sql;
		$r = mysql_query($sql);
	break;

	case "modify":
		$q = "UPDATE `commandes`";
		$r = mysql_query($q . $set . " WHERE id = " . $_POST["id"]);
    	header("Location: index.php?cmd=detail-command&id=".$_POST['id']);

		
	break;

	case "delete":
		$q = "DELETE FROM `commandes` WHERE id = {$_POST["id"]} ";
		$r = mysql_query($q);
    	header("Location: index.php?cmd=list-command");
	}
?>
