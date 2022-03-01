<script type="text/javascript" src="../js/getHTTPObject.js"></script>
<?

//$q = "SELECT *,modeles.modele as modelelibelle FROM `nautique`,modeles WHERE nautique.id = {$_GET["id"]} and vehicules.modele=modeles.id";
$q = "SELECT *  FROM `nautique` WHERE nautique.id = {$_GET["id"]} ";

$r = mysql_query($q);



$row = mysql_fetch_array($r);

?>
	<div align="center">
		<div class="div_main">
			<br>
			<div class="txt_1"><b>Editer l'annonce:</b></div>
			<div id="general_icon_right" style="background-image: url(img_icons/icon-item-add.gif);"></div>
			
			<div class="div_form">

	<table bgcolor="#f9f9f9" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody><tr>
		<td>
							  <form name="zit_search" id="zit_search" enctype="multipart/form-data" action="process-nautique.php" method="post">
				<input name="action" value="modify" type="hidden">
				<input name="id" value="<?= $row[0] ?>" type="hidden">
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
						<input name="date" size="9" maxlength="10" value="<?=$row["date"]?>" type="text">&nbsp;&nbsp;&nbsp;
						<i>(La date du jour s'affiche par défaut. Le format <b>Année-Mois-Jour</b> doit être respecté. )</i>
					</td>
				</tr>
				<!--<tr>
					<td class="txt_black" align="left"><!--<b>Référence : </b></td>
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
                    
                    
<input name="marque" id="marque" value="<?=$row["marque"]?>">
</td><td class="txt_black" align="left"><strong>Modéle</strong></td>
<td>
<!--<input type="hidden" name="mod" id="mod" value="" />
--><input name="modele" id="modele"  value="<?=$row["modele"]?>">
</td>				

</tr>
                <!--<tr>
					<td class="txt_black" align="left"><b>Affichage : </b></td>
					<td class="txt_black" align="left">
						<select name="affichage">
						<option value="2">Affichée</option>
						<option value="0">Masquée</option>
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
					<td class="txt_black" align="left"><input name="prix" size="9" maxlength="99" value="<?= $row['prix']?>" type="text"> Dhs</td>
					<td class="txt_black" align="left"><b>Kilom&eacute;trage: </b></td>
					<td class="txt_black" align="left"><input name="km" size="9" maxlength="99" value="<?= $row['km']?>" type="text"> Km</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Type de carburant : </b></td>
					<td class="txt_black" align="left">                    		
                    <select class="fuelSelect" name="carburant" id="carburant">

					<?	
						$r = mysql_query("SELECT * FROM carburants order by nom ASC");
						while ($type = mysql_fetch_array($r)) {
		
					?>
					<option value="<?= $type["id"] ?>" <?= $row['carburant']==$type["id"]?'selected':''?>><?= $type["libelle"] ?></option>
					<? } ?>

		</select>
</td>
					<td class="txt_black" align="left" valign="top"><b>1&eacute;re immatriculation : </b></td>
					<td class="txt_black" align="left"><input name="immatriculation" size="21" maxlength="99" value="<?= $row['immatriculation']?>" type="text"></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Nombre de place : </b></td>
					<td class="txt_black" align="left"><input name="nbr_place" size="21" maxlength="99" value="<?= $row['nbr_place']?>" type="text"></td>
					<td class="txt_black" align="left"><b>Nombre de porte : </b></td>
					<td class="txt_black" align="left"><input name="nbr_porte" size="21" maxlength="99" value="<?= $row['nbr_porte']?>" type="text"></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Puissance : </b></td>
					<td class="txt_black" align="left"><input name="puissance" size="21" maxlength="99" value="<?= $row['puissance']?>" type="text"></td>
					<td class="txt_black" align="left"></td>
					<td class="txt_black" align="left"></td>
				</tr>
				<tr height="20px">
					<td class="txt_black" align="left"><b>Etat  : </b></td>
					<td class="txt_black" align="left" colspan="3"><select name="etat" id="etat"><option value="Neuve" <?= $row['etat']=='Neuve'?'selected':''?>>Neuve</option><option value="Occasion" <?= $row['etat']=='Occasion'?'selected':''?>>Occasion</option></select></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Equipement : </b></td>
					<td class="txt_black" align="left" colspan="3"><textarea name="equipement" rows="3" cols="59"><?= $row['equipement']?></textarea></td>
				</tr>
				<tr>
					<td class="txt_black" align="left" valign="top" width="25%"><b>Description : </b></td>
					<td class="txt_black"   align="left" colspan="3"><textarea name="description" rows="3" cols="59"><?= $row['description']?></textarea></td>
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
							<? if ($row['photo1']) { ?>
							<br /><img src="../photos/<?=$row['photo1']?>" width="100" height="75" />
							<? }?>
                          
				            </td>
				          <td class="txt_black" align="left" width="50%">2: <input name="photo2" size="9" type="file">
							<? if ($row['photo2']) { ?>
							<br /><img src="../photos/<?=$row['photo2']?>" width="100" height="75" />
							<? }?>
                          
				            </td>
				          </tr>
				        <tr>
				          <td class="txt_black" align="left">3: <input name="photo3" size="9" type="file">
							<? if ($row['photo3']) { ?>
							<br /><img src="../photos/<?=$row['photo3']?>" width="100" height="75" />
							<? }?>
				            </td>
				          <td class="txt_black" align="left">4: <input name="photo4" size="9" type="file">
							<? if ($row['photo4']) { ?>
							<br /><img src="../photos/<?=$row['photo4']?>" width="100" height="75" />
							<? }?>
				            </td>
				          </tr>
				        <tr>
				          <td class="txt_black" align="left">5: <input name="photo5" size="9" type="file">
							<? if ($row['photo5']) { ?>
							<br /><img src="../photos/<?=$row['photo5']?>" width="100" height="75" />
							<? }?>
				            </td>
				          <td class="txt_black" align="left">6: <input name="photo6" size="9" type="file">
							<? if ($row['photo6']) { ?>
							<br /><img src="../photos/<?=$row['photo6']?>" width="100" height="75" />
							<? }?>
				            </td>
				          </tr>
				        <tr>
				          <td class="txt_black" align="left" width="50%">7: <input name="photo7" size="9" type="file">
							<? if ($row['photo7']) { ?>
							<br /><img src="../photos/<?=$row['photo7']?>" width="100" height="75" />
							<? }?>
				            </td>
				          <td class="txt_black" align="left" width="50%">8: <input name="photo8" size="9" type="file">
							<? if ($row['photo8']) { ?>
							<br /><img src="../photos/<?=$row['photo8']?>" width="100" height="75" />
							<? }?>
				            </td>
				          </tr>
				        <tr>
				          <td class="txt_black" align="left">9: <input name="photo9" size="9" type="file">
							<? if ($row['photo9']) { ?>
							<br /><img src="../photos/<?=$row['photo9']?>" width="100" height="75" />
							<? }?>
				            </td>
				          <td class="txt_black" align="left">10: <input name="photo10" size="9" type="file">
							<? if ($row['photo10']) { ?>
							<br /><img src="../photos/<?=$row['photo10']?>" width="100" height="75" />
							<? }?>
				            </td>
				          </tr>
				        <tr>
				          <td class="txt_black" align="left">11: <input name="photo11" size="9" type="file">
							<? if ($row['photo11']) { ?>
							<br /><img src="../photos/<?=$row['photo11']?>" width="100" height="75" />
							<? }?>
				            </td>
				          <td class="txt_black" align="left">12: <input name="photo12" size="9" type="file">
							<? if ($row['photo12']) { ?>
							<br /><img src="../photos/<?=$row['photo12']?>" width="100" height="75" />
							<? }?>
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
