				<?
					$_email = trim(htmlentities($_POST["email"]));
/*					function password($taille) {
					   $mot = "";
					   srand((double)microtime()*1000000);
					   while(strlen($mot)<$taille) {
						  $x=rand(48,122);
						  if(!is_numeric(chr($x)) && (($x<58 || $x>96) || ($x>64 && $x<91)))
							 $mot.=ucfirst(chr($x));
					   }
					   return $mot;
						}


						$numero =  password(4).date('m').date('y');
*/
						$headers  = "From: www.capitalfoncier.com <".$_email.">\n";
						$headers .= "Reply-To: ".$_email."\n";
						$headers .= "MIME-VERSION: 1.0\n";
						$headers .= "Content-type: text/html; charset=iso-8859-1;\n";
						$headers .= "Content-Transfer-Encoding: 8bit;\n";
						//$emaill = 'rbenfraiha@hotelbanktravel.com';
						$emaill = 'fadil@softsevenart.net,toujri@softsevenart.net';
						$objet = "capital foncier assistance technique";
			
						$mail='<br>
										<table width="555" cellpadding="3" cellspacing="1" border="0">
				<tr><td colspan="2" class="txt_black" align="left"><br /></b></td></tr>
				<tr>
					<td class="txt_black" align="left"><strong>NOM : </strong></td>
					<td class="txt_black" align="left">'.$_POST['nom'].'</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><strong>EMAIL : </strong></td>
					<td class="txt_black" align="left">'.$_POST['email'].'</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><strong>Sujet : </strong></td>
					<td class="txt_black" align="left">'.$_POST['sujet'].'</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><strong>Message : </strong></td>
					<td class="txt_black" align="left">'.$_POST['message'].'</td>
				</tr>

						';
echo(@mail($emaill, $objet, $mail, $headers)) ? "<p align=justify><br>Message envoyé avec succès, nous vous contacteront dans les plus bref delai.":"<p class=\"textred\">Echec d\'envoi, veuillez r&eacute;essayer plus tard.</p>";
				?>
								