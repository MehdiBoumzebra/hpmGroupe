<?php
	if(isset($_POST['send'])){
		require_once("phpmailer/class.phpmailer.php");
		
		$email = trim(htmlentities($_POST["email"]));
		$name =  stripslashes($_POST['nom']).' '.stripslashes($_POST['prenom']);
		
        $mail = new PHPmailer();
		$mail->CharSet = "utf-8";
		$mail->FromName = $name;
		$mail->AddAddress("smahane@softsevenart.com", "Dolmen");
		$mail->Subject='Prise de rendez-vous Dolmen';
		$mail->IsHTML(true);
		$mail->Body = '
						<table align="left" width="100%" cellspacing="0" cellpadding="0"  style="font-size:12px; font-family:Raleway">
							<tr><td colspan="2" align="center"><strong style="color:#7C2826; text-decoration:underline; font-size:16px;">Prise de rendez-vous</strong></td></tr>
							<tr height="20"><td colspan="2"></td></tr>
							<tr><td width="80"><strong>Nom :</strong></td><td>'.stripslashes($_POST['nom']).'</td></tr>
							<tr height="7"><td colspan="2"></td></tr>
							<tr><td width="80"><strong>Prénom :</strong></td><td>'.stripslashes($_POST['prenom']).'</td></tr>
							<tr height="7"><td colspan="2"></td></tr>
							<tr><td width="80"><strong>Téléphone :</strong></td><td>'.stripslashes($_POST['phone']).'</td></tr>
							<tr height="7"><td colspan="2"></td></tr>
							<tr><td width="80"><strong>E-mail :</strong></td><td>'.$email.'</td></tr>
							<tr height="7"><td colspan="2"></td></tr>
							<tr><td width="80"><strong>Type d\'examen :</strong></td><td>'.stripslashes($_POST['examen']).'</td></tr>
							<tr height="7"><td colspan="2"></td></tr>
							<tr><td width="80"><strong>Date souhaité :</strong></td><td>'.stripslashes($_POST['date']).'</td></tr>
						</table>
					';
			
		if(!($mail->send())) {
			 echo "<div align='center' style='font-family:Raleway, Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;color:#7C2826;margin-bottom:20px;'>
			 			Failed to send, please try again later.<br>Error sending : ". $mail->ErrorInfo.".
			 		</div>";
		}
		else{
			echo "<div align='center' style='font-family:Raleway, Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;color:#7C2826;margin-bottom:20px;'>
					Votre prise de rendez-vous a bien été enregistré, une réponse vous sera envoyé à votre adresse mail d’ici 24H.
				</div>";
		}
		unset($mail);
	}
?>