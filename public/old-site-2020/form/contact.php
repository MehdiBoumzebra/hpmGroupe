<?php
	if(isset($_POST['send'])){
		require_once("phpmailer/class.phpmailer.php");
		
		$email = trim(htmlentities($_POST["email"]));
		$name =  stripslashes($_POST['nom']).' '.stripslashes($_POST['prenom']);

        $mail = new PHPmailer();
		$mail->CharSet = "utf-8";
		$mail->FromName = $name;
		$mail->AddAddress("hamza.aabila@gmail.com", "Thermacote");
		$mail->Subject='Contact Thermacote';
		$mail->IsHTML(true);
		$mail->Body = '
						<table align="left" width="100%" cellspacing="0" cellpadding="0"  style="font-size:12px; font-family:Raleway">
							<tr><td colspan="2" align="center"><strong style="color:#7C2826; text-decoration:underline; font-size:16px;">Coordonn&eacute;es</strong></td></tr>
							<tr height="20"><td colspan="2"></td></tr>
							<tr><td width="80"><strong>Nom :</strong></td><td>'.stripslashes($_POST['nom']).'</td></tr>
							<tr height="7"><td colspan="2"></td></tr>
							<tr><td width="80"><strong>Prénom :</strong></td><td>'.stripslashes($_POST['prenom']).'</td></tr>
							<tr height="7"><td colspan="2"></td></tr>
							<tr><td width="80"><strong>Ville :</strong></td><td>'.stripslashes($_POST['ville']).'</td></tr>
							<tr height="7"><td colspan="2"></td></tr>
							<tr><td width="80"><strong>Sociétè :</strong></td><td>'.stripslashes($_POST['societe']).'</td></tr>
                            <tr height="7"><td colspan="2"></td></tr>
							<tr><td width="80"><strong>Téléphone :</strong></td><td>'.stripslashes($_POST['tel']).'</td></tr>
							<tr height="7"><td colspan="2"></td></tr>
							<tr><td width="80"><strong>E-mail :</strong></td><td>'.$email.'</td></tr>
							<tr height="7"><td colspan="2"></td></tr>
							<tr><td width="80"><strong>Object :</strong></td><td>'.stripslashes($_POST['object']).'</td></tr>
							<tr height="7"><td colspan="2"></td></tr>
							<tr><td width="80" colspan="2"><strong>Message :</strong></td></tr>
							<tr><td>'.stripslashes($_POST['message']).'</td></tr>
						</table>';
			
		if(!($mail->send())) {
			 echo "<div align='center' style='font-family:Raleway, Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;color:#7C2826;margin-bottom:20px;'>
			 			Failed to send, please try again later.<br>Error sending : ". $mail->ErrorInfo.".
			 		</div>";
		}
		else{
			echo "<div align='center' style='font-family:Raleway, Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;color:#7C2826;margin-bottom:20px;'>
					Your request has been sent.<br />
					We will process your request as soon as possible.
				</div>";
		}
		unset($mail);
	}
?>