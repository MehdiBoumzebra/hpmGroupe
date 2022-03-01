<?
@require_once "../mysql.php";
?>
<?
if ($_POST["action"] == "add" || $_POST["action"] == "modify")

		$set = " SET
		societe = '".$_POST['societe']."',
		gsm = '".$_POST['gsm']."',
		nom = '".$_POST['nom']."',
		prenom = '".$_POST['prenom']."',
		email = '".$_POST['email']."',
		login = '".$_POST['login']."',
		pass = '".$_POST['pass']."',
		fixe = '".$_POST['email']."'
";

switch ($_POST["action"]) {
	case "add":
		$sql = "INSERT INTO `clients`" . $set;
//		echo $sql;
//		exit();
		$r = mysql_query($sql);
		if(!$r)
		echo mysql_error();
    	header("Location: index.php?cmd=list-clients&type=".$_POST['demande']."");
	break;

	case "modify":
		$q = "UPDATE `clients`";
		$r = mysql_query($q . $set . " WHERE id = " . $_POST["id"]);
		if(!$r)
		echo mysql_error();
    	header("Location: index.php?cmd=list-clients");
		
	break;

	case "delete":
		$q = "DELETE from `clients` WHERE id = {$_POST["id"]} ";
		$r = mysql_query($q);
		if(!$r)
		echo mysql_error();
    	header("Location: index.php?cmd=list-clients");
	}
?>
