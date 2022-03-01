<?
session_start() ;
if (!isset($_SESSION['Us_login'])) 
header("Location: ../index.php");

@require_once "../../mysql.php";
?>
<html>

<head>
<link href="../main.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript" src="../main.js"></script>
</head>

<body>
<table cellPadding="0" cellSpacing="0" width="98%" align="center" height="100%">
<tr valign="top">
<td height="30"><img src="../arrow.gif" width="12" height="12">&nbsp;<span class="overtitle">Annonces immeubles</span></td>
</tr>

<tr>
<td height="10"></td>
</tr>

<tr>
<td align="center" height="40">
<button style="width: 250px" onClick="goto('edit.php?type=amiables')">VENTES AMIABLES</button><br />
<button style="width: 250px" onClick="goto('edit.php?type=judiciaires')">VENTES AUX ENCHERES JUDICIAIRES</button><br />
<button style="width: 250px" onClick="goto('edit.php?type=amiables2')">VENTES AUX ENCHERES AMIABLES</button><br />
</td>
</tr>

<tr>
<td height="10"></td>
</tr>

<tr>
<td height="30"><div class="expli" align="center">Cliquez sur le bouton correspondant pour ajouter une annonces, ou en modifier ou supprimer une déjà existant.</div></td>
</tr>

<tr>
<td></td>
</tr>


</table>
</body>

</html>