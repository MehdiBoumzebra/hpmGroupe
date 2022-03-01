<?
//$user=root  ;// Le nom d'utilisateur 
//$passwd ="";// Le mot de passe 
//$host =localhost ;// L'hôte (ordinateur sur lequel le SGBD est installé) 
//$bdd ="annonces test" ;// Le nom de la base de données 
/*$connect = mysql_connect($host,$user,$passwd) or die("erreur de connexion au serveur $host");
mysql_select_db($bdd) or  die("erreur de connexion a la base de donnees");*/

//$dbh=mysql_connect ("localhost", "saisiocc_user", "marocmaroc7") or die ('I cannot connect to the database because: ' . mysql_error());
//mysql_select_db ("saisiocc_data"); 
//dim regEx
//Set regEx = New RegExp
//regEx.IgnoreCase = True
//regEx.Global = True
//regEx.Pattern = "exec(\s+\(|\()|varchar|delete|update|drop|\s+or\s+|\s+and\s+|insert|union\s+|union("
 
//$s = mysql_connect("localhost","root",""); 
//$d = mysql_select_db("hpm", $s);

$s = mysql_connect("mysql51-34.perso","hpmanagedata","123456az"); 
$d = mysql_select_db("hpmanagedata", $s);
function mysql_real_escape_array(&$array)
{
   foreach($array as $key => $val){

       # Si c'est un array, recurssion de la fonction, sinon suppression des slashes
       if(is_array($val)){
           mysql_real_escape_array($array[$key]);
       } else {//if(is_string($val))
           if(is_string($val)) $array[$key] = mysql_real_escape_string ($val);
           elseif (is_int($val))$array[$key] = intval ($val);
       }
   }
}
mysql_real_escape_array($_POST);
mysql_real_escape_array($_GET);
//if (!$d) die('c pas vrai !!!');
/**/
//$s = mysql_connect("db1817.1and1.fr","dbo278982562","b328Hvxk"); 
//$d = mysql_select_db("db278982562", $s);

//$s = mysql_connect("db1756.perfora.net","dbo266261354","6sfjeKWj"); 
//$d = mysql_select_db("db266261354", $s);
mysql_query("SET NAMES utf8");

$dir='C:\Program Files\EasyPHP\www\casa hebdo test\\';
//$dir='/home/httpd/vhosts/casahebdo.com/httpdocs/';
function uploadfile($name_file,$upload_dir,$newname){
    $content_dir = $upload_dir; // dossier où sera déplacé le fichier

    $tmp_file = $_FILES[$name_file]['tmp_name'];

    if( !is_uploaded_file($tmp_file) )
    {
        exit("Le fichier est introuvable");
    }
	$taille_maxi = 3000000;
	$taille = filesize($tmp_file);
	
	if($_FILES[$name_file]['error']==2)
	{
	exit('Le fichier est trop gros...');
	}	
	
    // on vérifie maintenant l'extension
    $type_file = $_FILES[$name_file]['type'];

    if( !strstr($type_file, 'pdf') && $name_file=='fiche' )
    {
        exit("Le fichier n'est pas un pdf.");
    }

    if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'png') && !strstr($type_file, 'gif') && !strstr($type_file, 'doc') && !strstr($type_file, 'msword') && !strstr($type_file, 'ms-excel') && !strstr($type_file, 'xlsx') && !strstr($type_file, 'pdf'))
    {
        exit("ce type du fichier (".$type_file.") n'est pas autorisé !!!");
    }
    // on copie le fichier dans le dossier de destination
    $name_file = $newname . "_" . $_FILES[$name_file]['name'];

	if( preg_match('#[\x00-\x1F\x7F-\x9F/\\\\]#', $name_file) )
	{
		exit("Nom de fichier non valide");
	}
	else if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
	{
		exit("Impossible de copier le fichier dans $content_dir");
	}


    //echo "Le fichier a bien été uploadé";

}
define("sub_folder", "/"); // For example userfiles/

/*function inserer_point($str)
{ 
		$str=strrev($str);
		if(!function_exists('str_split')){
			   function str_split($str,$split_lengt=1){
			
				   $cnt = strlen($str);
			
				   for ($i=0;$i<$cnt;$i+=$split_lengt)
					   $rslt[]= substr($str,$i,$split_lengt);    
			   
				   return $rslt;
			   }
		} 
		
		$str=str_split($str,3);
		
		//print_r($str);exit();
		$i=0;
		while($str[$i])
		{
		
			if($i==0)
			{$fin.=$str[$i];$i++;}
			else{
			$fin.=".".$str[$i];
			$i++;}
		
		//echo $str[$i]."<br>";
		}
		
		$fin=strrev($fin);
		return $fin;
}

*/
function dd($date0) {
// 15/03/2004
   return date("d/m/Y",$date0);
}


?>