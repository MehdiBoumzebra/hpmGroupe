		<div align="center">
		<div class="div_main">
			<br>
			<div class="txt_1"><b>Ajouter nouveaux bien:</b></div>
			<div id="general_icon_right" style="background-image: url(img_icons/icon-item-add.gif);"></div>
			
			<div class="div_form">

	<table bgcolor="#f9f9f9" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody><tr>
		<td>
				<form name="form12" enctype="multipart/form-data" action="process.php" method="post">
				<input name="action" value="add" type="hidden">
				<input name="MAX_FILE_SIZE" value="90000000" type="hidden"> 
				<table align="center" border="0" cellpadding="2" cellspacing="2" width="99%">
				<tbody>
				<tr>
					<td class="txt_small" width="25%">&nbsp;</td>
					<td class="txt_small" width="35%">&nbsp;</td>
					<td class="txt_small" width="15%">&nbsp;</td>
					<td class="txt_small" width="25%">&nbsp;</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Date : </b></td>
					<td class="txt_black" colspan="3" align="left">
						<input name="date" size="9" maxlength="10" value="<?=date("Y-m-d")?>" type="text">&nbsp;&nbsp;&nbsp;
						<i>(La date du jour s'affiche par défaut. Le format <b>Année-Mois-Jour</b> doit être respecté. )</i>
					</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Référence : </b></td>
					<td class="txt_black" align="left"><input name="ref" size="21" maxlength="99" value="" type="text"></td>
					<td class="txt_black" align="left"><b></b></td>
					<td class="txt_black" align="left">
						<input name="offre" value="Vente" checked="checked" type="radio">Vente
						<input name="offre" value="Location" type="radio">Location
					</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Affichage : </b></td>
					<td class="txt_black" align="left">
						<select name="affichage">
						<option value="0">Masquée</option>
						<option value="1">1ere page</option>
						<option value="2">Normal</option>
						</select>
					</td>
					<td class="txt_black" align="left"><b>Type de bien : </b></td>
					<td class="txt_black" align="left">
					<select name="type" id="type" onChange="change_type(this.value)">
							
					<?	
						$r = mysql_query("SELECT * FROM type_de_bien order by type ASC");
						while ($type = mysql_fetch_array($r)) {
		
					?>
					<option value="<?= $type["id"] ?>"><?= $type["type"] ?></option>
					<? } ?>
		
					</select>
					</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Prix demandé: </b></td>
					<td class="txt_black" align="left"><input name="prix_d" size="9" maxlength="99" value="" type="text"> Dhs</td>
					<td class="txt_black" align="left"><b>Prix total: </b></td>
					<td class="txt_black" align="left"><input name="prix_t" size="9" maxlength="99" value="" type="text"> Dhs</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Adresse : </b></td>
					<td class="txt_black" align="left"><input name="Adresse" size="21" maxlength="99" value="" type="text"></td>
					<td class="txt_black" align="left"><b>Contact : </b></td>
					<td class="txt_black" align="left"><input name="Contact" size="21" maxlength="99" value="" type="text"></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Superficie : </b></td>
					<td class="txt_black" align="left"><input name="Superficie" size="7" maxlength="9" value="" type="text"> m²</td>
					<td class="txt_black" colspan="3" align="left">&nbsp;</td>
				</tr>
				<tr>
					<td class="txt_black" align="left" valign="top" width="400"><b>Remarques supplémentaires : </b></td>
					<td class="txt_black"   align="left" colspan="3"><textarea name="remarques" rows="3" cols="59"></textarea></td>
				</tr>
				<tr height="20px">
					<td class="txt_small" width="25%">&nbsp;</td>
					<td class="txt_small" width="35%">&nbsp;</td>
					<td class="txt_small" width="15%">&nbsp;</td>
					<td class="txt_small" width="25%">&nbsp;</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Options : </b></td>
					<td colspan="3">
					
					<div id="appart_villa" style="display:block">
						<table border="0" cellpadding="3" cellspacing="0" width="100%">
						<tbody>
						<tr>
							<td class="txt_black" align="left" colspan="3"> Nbre de chambres <input name="nbr_chambre" id="nbr_chambre" type="text"></td>
						</tr>
						<tr>
							<td class="txt_black" align="left" width="33%"><input name="salon" type="checkbox"> Salon</td>
							<td class="txt_black" align="left"></td>
							<td class="txt_black" align="left"></td>
						</tr>
						<tr>
							<td class="txt_black" align="left"><input name="Revetement_sols" type="checkbox"> Revetement sols</td>
							<td class="txt_black" align="left"><input name="Revetement_murs" type="checkbox"> Revetement murs</td>
							<td class="txt_black" align="left"><input name="Revetement_plafonds" type="checkbox"> Revetement plafonds</td>
						</tr>
						<tr>
							<td class="txt_black" align="left"><input name="Cheminee" type="checkbox"> Cheminée</td>
							<td class="txt_black" align="left"><input name="Chauffage" type="checkbox"> Chauffage </td>
							<td class="txt_black" align="left"><input name="Cuisine" type="checkbox"> Cuisine </td>
						</tr>
						<tr>
							<td class="txt_black" align="left"><input name="Cablage_informatique_parabole" type="checkbox"> Cablage informatique,parabole</td>
							<td class="txt_black" align="left"><input name="Climatisation" type="checkbox"> Climatisation</td>
							<td class="txt_black" align="left"><input name="Nbre_de_places_de_Parking" type="checkbox"> Nbre de places de Parking </td>
						</tr>
						<tr>
							<td class="txt_black" align="left"><input name="Superficie terrain" type="checkbox"> Superficie terrain</td>
							<td class="txt_black" align="left"><input name="Sauna" type="checkbox"> Sauna</td>
							<td class="txt_black" align="left"><input name="Ensoleillement" type="checkbox"> Ensoleillement</td>
						</tr>
						<tr>
							<td class="txt_black" align="left"><input name="Superficie_Construite" type="checkbox"> Superficie Construite</td>
							<td class="txt_black" align="left"><input name="Boiserie" type="checkbox"> Boiserie</td>
							<td class="txt_black" align="left"><input name="Robinetterie" type="checkbox"> Robinetterie</td>
						</tr>
						<tr>
							<td class="txt_black" align="left"><input name="Piscine" type="checkbox"> Piscine</td>
							<td class="txt_black" align="left"><input name="Isolation" type="checkbox"> Isolation</td>
							<td class="txt_black" align="left"><input name="Orientation" type="checkbox"> Orientation</td>
						</tr>
						</tbody>
						</table>	
					</div>
					
					<div id="bureau" style="display:none">
						<table border="0" cellpadding="3" cellspacing="0" width="100%">
						<tbody>
						<tr>
							<td class="txt_black" align="left" colspan="3"> Nbre d'Ascenceur <input name="nbr_ascenceur" id="nbr_ascenceur" type="text"></td>
						</tr>
						<tr>
							<td class="txt_black" align="left"><input name="Revetement_sols" type="checkbox"> Revetement sols</td>
							<td class="txt_black" align="left"><input name="Revetement_plafonds" type="checkbox"> Revetement plafonds</td>
							<td class="txt_black" align="left"> </td>
						</tr>
						<tr>
							<td class="txt_black" align="left" width="33%"><input name="Cablage_informatique_parabole" type="checkbox"> Cablage informatique,parabole</td>
							<td class="txt_black" align="left"><input name="Climatisation" type="checkbox"> Climatisation</td>
							<td class="txt_black" align="left"><input name="Nbre de places de Parking" type="checkbox"> Nbre de places de Parking </td>
						</tr>
						<tr>
							<td class="txt_black" align="left"><input name="Stationement_exterieur" type="checkbox"> Stationement exterieur</td>
							<td class="txt_black" align="left"><input name="Toilettes_direction" type="checkbox"> Toilettes direction</td>
							<td class="txt_black" align="left"><input name="Toilettes_personnel" type="checkbox"> Toilettes personnel</td>
						</tr>
						<tr>
							<td class="txt_black" align="left"><input name="Cloisonnements" type="checkbox"> Cloisonnements</td>
							<td class="txt_black" align="left"><input name="Nbre_de_lignes" type="checkbox"> Nbre de lignes</td>
							<td class="txt_black" align="left"><input name="Electricite" type="checkbox"> Electricite</td>
						</tr>
						<tr>
							<td class="txt_black" align="left"><input name="Orientation" type="checkbox"> Orientation</td>
							<td class="txt_black" align="left"><input name="Alarmes" type="checkbox"> Alarmes</td>
							<td class="txt_black" align="left"><input name="Controle_d_acces" type="checkbox"> Contrôle d'acces</td>
						</tr>
						</tbody>
						</table>
						
					</div>
					
						
						
						
					<div id="terrain" style="display:none">	
						<table border="0" cellpadding="3" cellspacing="0" width="100%">
						<tbody>
						<tr>
							<td class="txt_black" align="left" width="33%"><input name="Surface_Constructible" type="checkbox"> Surface Constructible</td>
							<td class="txt_black" align="left"><input name="Superficie_terrain" type="checkbox"> Superficie terrain</td>
							<td class="txt_black" align="left"><input name="Zoning" type="checkbox"> Zoning</td>
						</tr>
						</tbody>
						</table>
					</div>
					
					<div id="magazin" style="display:none">
						<table border="0" cellpadding="3" cellspacing="0" width="100%">
						<tbody>
						<tr>
							<td class="txt_black" align="left" width="25%"><input name="Longeur_facade" type="checkbox"> Longeur facade</td>
							<td class="txt_black" align="left"><input name="hauteur" type="checkbox"> hauteur</td>
							<td class="txt_black" align="left"><input name="sous_pente" type="checkbox"> sous pente </td>
							<td class="txt_black" align="left"><input name="Nbre_de_places_de_Parking" type="checkbox"> Nbre de places de Parking </td>
						</tr>
						</tbody>
						</table>
					</div>	
						
					</td>
				</tr>
				<tr height="20px">
					<td class="txt_small" width="25%">&nbsp;</td>
					<td class="txt_small" width="35%">&nbsp;</td>
					<td class="txt_small" width="15%">&nbsp;</td>
					<td class="txt_small" width="25%">&nbsp;</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Video : </b></td>
					<td class="txt_black" colspan="3" align="left">
						<input name="video" size="55" type="file">
						&nbsp;&nbsp;&nbsp;( NON )
					</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Photos : </b></td>
					<td class="txt_black" colspan="3" align="left">
						<table border="0" cellpadding="1" cellspacing="1" width="100%">
						<tbody><tr>
							<td class="txt_black" align="left" width="50%">1: <input name="photo1" size="9" type="file">
							</td>
							<td class="txt_black" align="left" width="50%">2: <input name="photo2" size="9" type="file">
							</td>
						</tr>
						<tr>
							<td class="txt_black" align="left">3: <input name="photo3" size="9" type="file">
							</td>
							<td class="txt_black" align="left">4: <input name="photo4" size="9" type="file">
							</td>
						</tr>
						<tr>
							<td class="txt_black" align="left">5: <input name="photo5" size="9" type="file">
							</td>
							<td class="txt_black" align="left">6: <input name="photo6" size="9" type="file">
							</td>
						</tr>
						</tbody></table>
					</td>
				</tr>
				<tr>
					<td class="txt_red" colspan="12" align="left"><span class="txt_small"><br></span><strong>ATTENTION: Laissez les champs Photos et Vidéo vides si vous ne souhaitez pas les modifier !</strong></td>
				</tr>
				
				
				
				<!--
				<tr>
					<td class="txt_black" align="left"><b>zzz : </b></td>
					<td class="txt_black" align="left"><input name="zzz" type="text" size="21" maxlength="99" value=""></td>
					<td class="txt_black" align="left"><b>zzz : </b></td>
					<td class="txt_black" align="left"><input name="zzz" type="text" size="21" maxlength="99" value=""></td>
				</tr>
				-->
				
				<tr><td colspan="12" class="txt_black" align="center"><br><input name="SubmitAll" value="Sauvegarder l'annonce" onclick="return check(document.form12);" class="button_1" onmouseover="this.style.backgroundColor='#1E90FF'" onmouseout="this.style.backgroundColor='#1874CD'" type="submit"></td></tr>			  
				</tbody></table>
				</form>
				
				</td></tr>			  
				</tbody></table>
			</div>
			<br><br>
		</div>
		<br>
		</div><br>
</body>
</html>
