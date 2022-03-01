                  
                  <?



if (!isset($_GET["o"])) $o = 0;

else $o = $_GET["o"];

	

if (!isset($_GET["pa"])) $pa = 1;

else $pa = $_GET["pa"];



if (!isset($_GET["n"])) $n = 1;

else $n = $_GET["n"];



switch ($o) {

	case 0 : $order = "ASC"; break;

	case 1 : $order = "DESC"; break;

}



$order1 = "croissant";

$order2 = "décroissant";



switch ($pa) {

	case 1 : $param = "commandes.id"; break;

	case 2 : $param = "nom"; break;

	case 3 : $param = "sent, paid"; break;

	case 4 : $param = "pro"; break;

	case 4 : $param = "paiement"; break;

}



$npp = 15;



$m = ($n - 1) * $npp;
$q = "SELECT *,commandes.id as cid FROM (`commandes` LEFT JOIN `clients` ON commandes.client = clients.id) LEFT JOIN `paniers` ON paniers.commande = commandes.id WHERE commandes.client=".$_SESSION['client_id']." and finished = 1 group by {$param} ORDER BY {$param} {$order} LIMIT {$m},{$npp}";
//echo $q;
$r = mysql_query($q);

$num = mysql_num_rows($r);

?>
                
                <? if($num){?>



               <?




if ($pa == 1 && $o == 1) {

	$a = ($n - 1) * $npp + $num;

}

else {

	$a = ($n - 1) * $npp + 1;

}



while ($row = mysql_fetch_array($r)) {

	$id = "";
	$prixtotal = 0;
$r2 = mysql_query("SELECT * FROM `paniers` LEFT JOIN `coffrets` ON paniers.article = coffrets.id WHERE commande = " . $row["cid"]) or die(mysql_error());
while ($produit = mysql_fetch_array($r2)) {
	$prixtotal += $produit['prix'];
}

	for ($i = 0; $i < strlen($row[0]); $i++) {

		if ($i%3 == 0 && $i != 0) $id .= "-";

		$id .= substr($row[0], $i, 1);

	}

//$qu = "SELECT * FROM `clients` WHERE id=".$_SESSION['id']." ";
//
//$ru = mysql_query($qu);
//
//$rowc = mysql_fetch_array($ru)
?>
                <tr>
                  <td align="center"><?= $id ?></td>
                  <td align="center"><?= $prixtotal ?></td>
                   <td align="center"><?= dd($row["endtime"]) ?></td>
                 <td align="center"><?

if ($row["sent"]) echo "Expediée";
elseif ($row["paid"]) echo "Pay&eacute; <br />(en cours de preparation)";
elseif ($row["finished"]) echo "Attente de paiement";
elseif ($row["canceled"]) echo "Annulée";


?></td>
                  <td align="center"><?= $row[""] ?></td>
                </tr>
                <?

}

?>
<!--                <tr>
                  <td colspan="6" background="img/gris1.jpg" height="1"><img src="img/null.gif" width="1" height="1" /></td>
                </tr>
-->                <tr>
                  <td colspan="5"></td>
              
              </tr>
              </table><?php



$q = "SELECT * FROM `commandes` where client=".$_SESSION['id']." and  finished = 1 ";

$r = mysql_query($q);

$num = mysql_num_rows($r);



if ($num > $npp) {

	echo "Pages&nbsp;:";

	if ($num % $npp == 0) $j = $num / $npp;

	else $j = ($num - ($num % $npp)) / $npp + 1;



	for ($i = 1; $i <= $j; $i++) {

		if ($n != $i) echo "&nbsp;<a href=\"index.php?p=command&id=". $cmd->id."n={$i}&pa={$pa}&o={$o}\">{$i}</a>";

		else echo "&nbsp;{$i}";

	}



	if ($n != $j) echo "&nbsp;<a href=\"index.php?p=command&id=". $cmd->id."n=" . ($n + 1) . "&pa={$pa}&o={$o}\">Suivante</a>";

	else echo "&nbsp;Suivante";

}
				}else
					{echo '<p align=center>Vous n\'avez pas de commande.</p>';}
?>
              
              
              
              </td>
              
              </tr>
              </table>
              
              
              </td></tr>
<!--              <tr>
            <td valign="top" background="img/bgcorps2.jpg"
            ><img src="img/titrecorpsfooter.jpg" width="100%" height="11" /></td>
          </tr>
-->              
              </table>

                  
                  
                  </td>
                  
                </tr>
              </table>
                  <br />
                  <br />
                  
                  
                  <br />
                  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                </table></td>
            </tr>
          </table>
          <?
          }
else
include "login.php";
?>