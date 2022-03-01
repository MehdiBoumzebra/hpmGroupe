<section id="tabs">
              <div class="bg-metier">
              <div class="container">
               <h1>RECRUTEMENT</h1>
                  </div>
               </div>
            	<div class="container">
            		<div class="row">
                        
                        <!-- tabs left -->
                          <div class="tabbable tabs-left">
                           <div class="col-md-3 col-sm-3 col-xs-4 tabs_1">
                            <ul class="nav nav-tabs">
                              <li class="active"><a href="#a" data-toggle="tab">Rejoignez-nous</a></li>
                              <li><a href="#b" data-toggle="tab">Offres d’emploi</a></li>
                            </ul>
                              </div>
                              <div class="col-md-9 col-sm-9 col-xs-8 tabs_txt">                         
                            <div class="tab-content">
                             <div class="tab-pane active" id="a">
                                 <h3>Rejoignez-nous</h3>
                                 <p>
                                     La raison d’être d’HPM est d'assurer des prestations de qualité.
<br><br>
Aussi, nous apportons une attention toute particulière au recrutement de nos collaborateurs.
<span>HPM</span> est une société récente et de taille moyenne, dans laquelle les <span>valeurs humaines</span> ont un sens. En nous rejoignant,  votre initiative personnelle et vos qualités relationnelles seront de sérieux atouts pour participer activement au développement de notre société.
<br><br>
Travaillant au <span>Maroc</span> et à <span>l’international</span>, HPM bénéficie d'un fort potentiel de développement qui offre des <span>perspectives d’évolution</span> intéressantes : nos collaborateurs peuvent construire, au Maroc et à l’étranger, des itinéraires professionnels riches, intégrant le <span>conseil, l'expertise technique et le management de projet.</span>
<br><br>
Ces prestations à haute valeur ajoutée, ainsi que  la diversité et la complexité des projets (hôtellerie, bâtiments industriels, logements, centres commerciaux…) sur lesquels HPM intervient, garantissent un <span>épanouissement professionnel</span> et personnel pour nos collaborateurs.

Enfin, HPM accorde une attention toute particulière au <span>suivi régulier</span> de ses collaborateurs en prestation chez nos clients : la <span>satisfaction de nos équipes</span> dans la réalisation de leurs missions est notre préoccupation essentielle. 
<br><br>
Si vous souhaitez rejoindre une équipe jeune, dynamique, en constante évolution, et qui vous laissera votre part d’initiatives, envoyez nous votre CV et lettre de motivation à l’adresse suivante :
<span class="mail">contact@hpmgroupe.com</span>
                                 </p>
                             </div>
                             <div class="tab-pane" id="b">
                                <h3>Offres d’emploi</h3>
                                 <p>Consultez nos offres d'emploi</p>
                                 <table class="table table-hover">
                                     <tr>
                                         <th>Poste</th>
                                         <th>Contrat</th>
                                         <th>Région</th>
                                    </tr>
                                     <?php $aOffres = mysql_fetch_assoc($r); print_r($aOffres); while ($aOffres = $row) { ?>
                                     <tr>
                                         <td><a href="#<?php echo strtolower($row['Region']);?>"><?php echo $row['titre_du_poste'];?></a></td>
                                          <td><?php echo $row['Contrat'];?></td>
                                         <td><?php echo $row['Region'];?></td>
                                     </tr>
									 <?php }?>
                                 </table>
								   <?php foreach ($aOffres = $row ) { ?>
                                <div class="offre" id="<?php echo strtolower($row['Region']);?>" style="display:none;">
                                    <br><br>
                                    <h3><?php echo $row['titre_du_poste'];?></h3>
                                    <p><b>Réf</b> : <?php echo $row['references_du_poste'];?></p>
                                     <br>
                                     <?php echo $row['description_poste'];?>
                                </div>
                                <?php }?>
                             </div>
                            </div>
                              </div>
                          </div>
                          <!-- /tabs -->     
                        </div>
                    </div>
              </div>
        </section>
         