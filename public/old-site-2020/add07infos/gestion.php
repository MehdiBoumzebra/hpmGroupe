<?
//@require_once "../lib/mysql.php";
session_start() ;
$Us_login=$_SESSION['Us_login'];
if ($Us_login == '')
 header("Location: index.php");

?><html>

<head>
<meta http-equiv="pragma" content="no-cache">

<title>Panneau d'administration</title>
</head>

<frameset cols="200, *" border="0" >
<frame src="menu.php" style="border-right: 1px solid #C68C5A;" noresize>
<frame src="immeubles" name="panel">
</frameset><noframes></noframes>

</html>