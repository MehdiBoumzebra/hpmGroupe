<div id="container"></div>
		<div align="center">
		<div class="div_main">
			<br/>
			<div class="txt_1"><b>D&eacute;tail quiz:</b></div>
			<div id="general_icon" style="background-image:url(img_icons/icon-admin-add.gif);"></div>
			
			<div class="div_form">
	<?
function htmlent($str){
$r=str_replace('é','&eacute;',$str);
$r=str_replace('è','&egrave;',$r);
$r=str_replace('à','&agrave;',$r);
$r=str_replace('ê','&ecirc;',$r);
$r=str_replace('ç','&ccedil;',$r);
$r=str_replace('ô','&ocirc;',$r);
$r=str_replace("’","'",$r);
$r=str_replace("Ü","&Uuml;",$r);
return $r;
}
$query=mysql_query("SELECT * FROM quiz where id=1");
$tab=mysql_fetch_array($query,MYSQL_ASSOC);
$total_vote=$tab['total_vote']	;		
echo"<table align='center' border='0' width='370'>
<tr height=5><td colspan=3></td></tr>
<tr><td colspan=3><font size='".$size."' color='".$color."'><b>Comment nous avez-vous connu?</b></font></td></tr>
";
    $query=mysql_query("SELECT * FROM sondage  where id_quiz=1 ORDER BY id ASC");
while($tab=mysql_fetch_array($query,MYSQL_ASSOC)){



   if($total_vote > 0){

   $result = round((100/$total_vote)*$tab['vote']);

   }else{

   $result=0;

   }
   echo"<tr><td><font size='1' face='Verdana, Arial, Helvetica, sans-serif;' color='".$color."'>".htmlent($tab['choix']).":</font></td>";

//   echo"<td> <font size='1' face='Verdana, Arial, Helvetica, sans-serif;' color='".$color2."'>".$result."%</font></td>";
//
//   echo"<td><font size='1' face='Verdana, Arial, Helvetica, sans-serif;' color='".$color1."'>";
//
//   echo"(".$tab['vote']." / ".$tab['total_vote'].")</font></td>";
   
   echo"<td width=37%> <div style='border:1px solid green;'><div style='background:green;width:".$result."%'>&nbsp;</div></div></td>";

   echo"<td><font size='1' face='Verdana, Arial, Helvetica, sans-serif;' color='".$color2."'>".$result."%</font><!--<font size='1' face='Verdana, Arial, Helvetica, sans-serif;' color='".$color1."'>(".$tab['vote']." / ".$tab['total_vote'].")</font>--></td>";

   //echo"";
   
   echo"<tr>";

}
echo"
<tr><td colspan=3>".$deja."</td></tr>
</table>";

	?>	
			</div>
			<br/>
		</div>
		<br/>
