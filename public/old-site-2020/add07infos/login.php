<?
		session_start() ;

@require_once "../mysql.php";
$Us_login=$_POST['Us_login'];
$Us_password=($_POST['Us_password']);
    //echo $Us_password;
	$query="SELECT * FROM admin WHERE login='$Us_login' AND password='$Us_password'";
	$result=mysql_query($query);
	// SI AUCUN ENREGISTREMENT NE CORRESPOND
	if(mysql_num_rows($result)==0)
		{
		//echo"<b><font color=red><center>Login ou mot de passe INVALIDE</center> </font></b>";
?>		<script langage="javascript">alert("Login ou mot de passe INVALIDE");history.back();</script> <?
		}
// SI LE LOGIN ET MOT DE PASSE SONT EXACTES	
	else
		{

        $row = mysql_fetch_array($result);
         $_SESSION['Us_login']= $row['ID'];
         $_SESSION['nom']= $row['nom'];
         $_SESSION['Login']= $row['Login'];
       	 $_SESSION['email']= $row['email'];
       	 $_SESSION['nom']= $row['nom'];
       	 $_SESSION['prenom']= $row['prenom'];
       	 $_SESSION['tel']= $row['tel'];
   	header("Location: index.php");
		}	

	// DECONNEXION MYSQL
	       mysql_close();
	


?>