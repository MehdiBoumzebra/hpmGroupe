<?
session_start() ;
if (!isset($_SESSION['Us_login']))
$p='auth.php';
else
$p=$_GET['cmd'].".php";
?>
<?
require_once "../mysql.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" language="javascript">
function isInteger(s){
	var i;
    for (i = 0; i < s.length; i++){
        // Check that current character is number.
        var c = s.charAt(i);

        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}

			function send(w){
				var form=document.getElementById(w);
				var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var max_size = 1000;
				for (i = 0; i < form.elements.length; i++) {

					if ( (form.elements[i].type == "text" || form.elements[i].type == "select"))
					{
						if (form.elements[i].value=='' && form.elements[i].name=='nom')
						{
							alert('Veuillez remplir les champs obligatoires.');
							form.elements[i].style.border = 'solid red 1px';
							return form.elements[i].focus();
						}
						else
							{
								if (form.elements[i].name=='email')
								{
									if (filter.test(form.elements[i].value)==false)
									{
										alert("L\47adresse e-mail n'est pas valide.");
										form.elements[i].style.border = 'solid red 1px';
										return form.elements[i].focus();
									}
								}
								if ( (form.elements[i].name=='tel' || form.elements[i].name=='Numcarte' || form.elements[i].name=='cvc') && !isInteger(form.elements[i].value))
												{
										  alert("Veuillez entrer un numéro valide.");
										  form.elements[i].style.border = 'solid red 1px';
										  return form.elements[i].focus();

										 }
								else if(form.elements[i].name=='Numcarte' && form.elements[i].value.length<16){
										  alert("Veuillez entrer un numéro valide.\nLa longueur d'un numéro de carte est de 16 chiffres.");
										  form.elements[i].style.border = 'solid red 1px';
										  return form.elements[i].focus();
								}
								else if(form.elements[i].name=='cvc' && form.elements[i].value.length<3){
										  alert("Veuillez entrer un numéro valide.\nLa longueur du cvc est de 3 chiffres.");
										  form.elements[i].style.border = 'solid red 1px';
										  return form.elements[i].focus();
								}
								else{form.elements[i].style.border = 'solid green 1px';}

								form.elements[i].style.border = 'solid green 1px';
							}
						}

					}
					if(document.getElementById('detail'))
					document.getElementById('detail').value=top.frames[0].document.getElementById('nicEditContent').innerHTML;
//					if(document.getElementById('select2'))
//					document.getElementById('mod').value=document.getElementById('select2').value;
					form.submit();
				}
			</script>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/zit_style.css" rel="stylesheet" type="text/css">
<link href="css/immo.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript" src="js/main.js"></script>
<title>Administration HPM Groupe</title></head>
<body>
<?
if (isset($_SESSION['Us_login']))
include('menu.php');
else
echo '<table width=100%>';
?>

	<tr><td>
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr><td><img src="img/spacer.gif" alt="" height="77" width="1"></td></tr>
<tr>
			<td>
			</td>
		</tr>
<tr>
	<td align="center">

<?php
require_once (file_exists($p) ? $p : "home.php");
?>
</td></tr></tbody></table>
</td></tr></table>

</body>

</html>