<script type="text/javascript" src="../js/getHTTPObject.js"></script>
		<div align="center">
		<div class="div_main">
			<br>
			<div class="txt_1"><b>Ajouter Voiture:</b></div>
			<div id="general_icon_right" style="background-image: url(img_icons/icon-item-add.gif);"></div>
			
			<div class="div_form">

	<table bgcolor="#f9f9f9" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody><tr>
		<td>
			  <form name="zit_search" id="zit_search" enctype="multipart/form-data" action="process.php" method="post">
				<input name="action" value="add" type="hidden">
				<table align="center" border="0" cellpadding="2" cellspacing="2" width="99%">
				<tbody>
				<tr>
					<td class="txt_small" width="25%">&nbsp;</td>
					<td class="txt_small" width="35%">&nbsp;</td>
					<td class="txt_small" width="25%">&nbsp;</td>
					<td class="txt_small" width="25%">&nbsp;</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Date : </b></td>
					<td class="txt_black" colspan="3" align="left">
						<input name="date" size="9" maxlength="10" value="<?=date("Y-m-d")?>" type="text">&nbsp;&nbsp;&nbsp;
						<i>(La date du jour s'affiche par d?faut. Le format <b>Ann?e-Mois-Jour</b> doit ?tre respect?. )</i>
					</td>
				</tr>
				<!--<tr>
					<td class="txt_black" align="left"><!--<b>R?f?rence : </b></td>
					<td class="txt_black" align="left"><!--<input name="ref" size="21" maxlength="99" value="" type="text"></td>
					<td class="txt_black" align="left"><b></b></td>
					<td class="txt_black" align="left">
						<input name="offre" value="Vente" checked="checked" type="radio">Vente
						<input name="offre" value="Location" type="radio">Location
					</td>
				</tr>-->
				<tr>
                	<td class="txt_black" align="left"><strong>Marque</strong></td>
					<td> 
                    
                    
<select name="marque" id="marque"   onChange="maj('modele','marque');">
<option value="">Choisissez ...
					<?	
						$r = mysql_query("SELECT * FROM marques order by nom ASC");
						while ($type = mysql_fetch_array($r)) {
		
					?>
					<option value="<?= $type["id"] ?>"><?= $type["nom"] ?></option>
					<? } ?>
</select>&nbsp;<font color="#FF0000">*</font>
</td><td class="txt_black" align="left"><strong>Mod?le</strong></td>
<td>
<!--<input type="hidden" name="mod" id="mod" value="" />
--><select name="modele" id="modele" >
<option value=""> Choisissez une marque d'abord</option>
</select>&nbsp;<font color="#FF0000">*</font>
</td>				

</tr>
                <!--<tr>
					<td class="txt_black" align="left"><b>Affichage : </b></td>
					<td class="txt_black" align="left">
						<select name="affichage">
						<option value="2">Affich?e</option>
						<option value="0">Masqu?e</option>
						</select>
					</td>
					<td class="txt_black" align="left"><b>Type de bien : </b></td>
					<td class="txt_black" align="left">
					<select name="type" id="type" onChange="change_type(this.value)">
							
		
					</select>
					</td>
				</tr>-->
<!--				ALTER TABLE `biens` ADD `ville` VARCHAR( 255 ) NOT NULL AFTER `Adresse` ,
				ADD `tel` VARCHAR( 255 ) NOT NULL AFTER `ville` ;
-->
				<tr>
					<td class="txt_black" align="left"><b>Prix : </b></td>
					<td class="txt_black" align="left"><input name="prix" size="9" maxlength="99" value="" type="text"> Dhs</td>
					<td class="txt_black" align="left"><b>Kilom&eacute;trage: </b></td>
					<td class="txt_black" align="left"><input name="km" size="9" maxlength="99" value="" type="text"> Km</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Type de carburant : </b></td>
					<td class="txt_black" align="left">
                    		<select class="fuelSelect" name="carburant" id="carburant">

					<?	
						$r = mysql_query("SELECT * FROM carburants order by nom ASC");
						while ($type = mysql_fetch_array($r)) {
		
					?>
					<option value="<?= $type["id"] ?>"><?= $type["libelle"] ?></option>
					<? } ?>

		</select>

                    </td>
					<td class="txt_black" align="left" valign="top"><b>1&eacute;re immatriculation : </b></td>
					<td class="txt_black" align="left"><input name="immatriculation" size="21" maxlength="99" value="<?=date("Y-m-d")?>" type="text"><br />
                    <i>(La date du jour s'affiche par d?faut. Le format <b>Ann?e-Mois-Jour</b> doit ?tre respect?. )</i></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Nombre de place : </b></td>
					<td class="txt_black" align="left"><input name="nbr_place" size="21" maxlength="99" value="" type="text"></td>
					<td class="txt_black" align="left"><b>Nombre de porte : </b></td>
					<td class="txt_black" align="left"><input name="nbr_porte" size="21" maxlength="99" value="" type="text"></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Puissance : </b></td>
					<td class="txt_black" align="left"><input name="puissance" size="21" maxlength="99" value="" type="text"></td>
					<td class="txt_black" align="left"></td>
					<td class="txt_black" align="left"></td>
				</tr>
				<tr height="20px">
					<td class="txt_black" align="left"><b>Etat  : </b></td>
					<td class="txt_black" align="left" colspan="3"><select name="etat" id="etat"><option value="Neuve">Neuve</option><option value="Occasion">Occasion</option></select></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Equipement : </b></td>
					<td class="txt_black" align="left" colspan="3"><textarea name="equipement" rows="3" cols="59"></textarea></td>
				</tr>
				<tr>
					<td class="txt_black" align="left" valign="top" width="25%"><b>Description : </b></td>
					<td class="txt_black"   align="left" colspan="3"><textarea name="description" rows="3" cols="59"></textarea></td>
				</tr>
				
				<tr height="20px">
					<td class="txt_small" width="25%">&nbsp;</td>
					<td class="txt_small" width="35%">&nbsp;</td>
					<td class="txt_small" width="25%">&nbsp;</td>
					<td class="txt_small" width="25%">&nbsp;</td>
				</tr>
				<tr>
				  <td class="txt_black" align="left" valign="top"><b>Photos : </b></td>
				  <td class="txt_black" colspan="3" align="left">
				    <table border="0" cellpadding="1" cellspacing="1" width="100%">
				      <tbody>
				        <tr>
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
				        <tr>
				          <td class="txt_black" align="left" width="50%">7: <input name="photo7" size="9" type="file">
				            </td>
				          <td class="txt_black" align="left" width="50%">8: <input name="photo8" size="9" type="file">
				            </td>
				          </tr>
				        <tr>
				          <td class="txt_black" align="left">9: <input name="photo9" size="9" type="file">
				            </td>
				          <td class="txt_black" align="left">10: <input name="photo10" size="9" type="file">
				            </td>
				          </tr>
				        <tr>
				          <td class="txt_black" align="left">11: <input name="photo11" size="9" type="file">
				            </td>
				          <td class="txt_black" align="left">12: <input name="photo12" size="9" type="file">
				            </td>
				          </tr>
				        </tbody></table>
				    </td>
				  </tr>
				
				<tr>
					<td class="txt_red" colspan="12" align="left"><span class="txt_small"><br></span><strong>ATTENTION: Laissez les champs Photos vides si vous ne souhaitez pas les modifier !</strong></td>
				</tr>
				
				
				
				<!--
				<tr>
					<td class="txt_black" align="left"><b>zzz : </b></td>
					<td class="txt_black" align="left"><input name="zzz" type="text" size="21" maxlength="99" value=""></td>
					<td class="txt_black" align="left"><b>zzz : </b></td>
					<td class="txt_black" align="left"><input name="zzz" type="text" size="21" maxlength="99" value=""></td>
				</tr>
				-->
				
				<tr><td colspan="12" class="txt_black" align="center"><br>
				<input name="SubmitAll" value="Ajouter" class="button_1" onclick="send('zit_search');" onmouseover="this.style.backgroundColor='#1E90FF'" onmouseout="this.style.backgroundColor='#1874CD'" type="button"></td></tr>			  
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
