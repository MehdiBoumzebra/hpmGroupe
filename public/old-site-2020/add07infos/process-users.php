<?
@require_once "../mysql.php";
?>
<?
if ($_POST["action"] == "add" || $_POST["action"] == "modify")

		$set = " SET
		login = '".$_POST['user']."',
		password = '".$_POST['password']."',
		nom = '".$_POST['nom']."',
		prenom = '".$_POST['prenom']."',
		tel = '".$_POST['tel']."',
		email = '".$_POST['email']."'
";

switch ($_POST["action"]) {
	case "add":
		$sql = "INSERT INTO `admin`" . $set;
		//echo $sql;
		$r = mysql_query($sql);
    	header("Location: index.php?cmd=list-users");
	break;

	case "modify":
		$q = "UPDATE `admin`";
		$r = mysql_query($q . $set . " WHERE ID = " . $_POST["id"]);

    	header("Location: index.php?cmd=list-users");
		
	break;

	case "delete":
		$q = "DELETE FROM `admin` WHERE ID = {$_POST["id"]} ";
		$r = mysql_query($q);
    	header("Location: index.php?cmd=list-users");
	}
?>
