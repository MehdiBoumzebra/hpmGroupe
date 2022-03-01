<?php
session_start();
/* $Id: config.master.inc.php,v 1.1 2003/09/17 11:45:00 *greenparka Exp $ */
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | PHP version 4.0                                                      |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 *greenparka                                       |
// | All rights reserved.                                                 |
// +----------------------------------------------------------------------+
// | This software is the confidential and proprietary information of     |
// | *greenparka . ("Confidential Information").  You shall not disclose  |
// | such Confidential Information and shall use it only in accordance    |
// | with the terms of the license agreement you entered into with        |
// | *greenparka.                                                         |
// +----------------------------------------------------------------------+
// | Authors: *greenparka  <chris@greenparka.com>                         |
// +----------------------------------------------------------------------+
//
// $Id$

/*
 *	Set the global constants
 */
if (ereg("87.106.218.30",$HTTP_HOST,$nothing)) {
	//  define the root where domains are stored
	define ("SITE_ROOT", "/data/www/");
	//  define the base directory of the site
	define ("BASE_DIR", "cmsadmin/");
	//  define the base directory of the secure site
	define ("SECURE_DIR", "secure/");
	//  define the base URL of the site
	define ("BASE_URL", "http://artkandy.co.uk/cmsadmin/");
	//  define the secure URL of the site
	define ("SECURE_URL", "http://artkandy.co.uk/secure/");
	//  the directory seperator is differenct for Windows "\\"
	define ("SEP", "/");
	
	//  database connection details
	define ("DB_NAME", "db239504209");
	define ("DB_USER", "dbo239504209");
	define ("DB_PASSWORD", "F4cwUNDM");
	define ("DB_LOCATION", "localhost");

	//	cookie URL set to "localhost" to ignore
	define ("COOKIE_DOMAIN", "www.artkandy.co.uk");
}
else {
	//  define the root where domains are stored
	define ("SITE_ROOT", $_SERVER['DOCUMENT_ROOT']);
	//  define the base directory of the site
	define ("BASE_DIR", "/");
	//  define the base directory of the secure site
	define ("SECURE_DIR", "secure");
	//  define the base URL of the site
	define ("BASE_URL", "http://artkandy.co.uk/");
	//  define the secure URL of the site
	define ("SECURE_URL", "http://artkandy.co.uk/");
	//  the directory seperator is differenct for Windows "\\"
	define ("SEP", "/");
	
	//  database connection details
	define ("DB_NAME", "db239504209");
	define ("DB_USER", "dbo239504209");
	define ("DB_PASSWORD", "F4cwUNDM");
	define ("DB_LOCATION", "localhost");

	//	cookie URL set to "localhost" to ignore
	define ("COOKIE_DOMAIN", "www.artkandy.co.uk");
}
//	cart testing
define ("TESTING", FALSE);

//TEST PROTX URL: 
//define ("PROTX_POST_URL", "https://ukvpstest.protx.com/vpsDirectAuth/PaymentGateway.asp");
//LIVE PROTX URL: 
define ("PROTX_POST_URL", "https://ukvps.protx.com/vpsDirectAuth/PaymentGateway.asp");



//	graphics and frame names are based on this, also it needs to be the sames as that in the database
define ("CMS_NAME", "cmsadmin");
//	define the cms systems URL
define ("CMS_URL", BASE_URL.CMS_NAME."/");
//	define the cms systems login
define ("CMS_LOGIN", BASE_URL."cmslogin/");
//	define the cms systems URL
define ("CMS_NOACCESS", BASE_URL.CMS_NAME."/access/");

//  define the file paths for includes (files, functions,...).
define ("BASE_FILE_PATH", SITE_ROOT.BASE_DIR);
define ("SECURE_FILE_PATH", SITE_ROOT.SECURE_DIR);
define ("INCLUDES_PATH", BASE_FILE_PATH."includes".SEP);
define ("FUNCTION_PATH", BASE_FILE_PATH."functions".SEP);

/*
 *  Check to see if the user is in the secure directory, if so the
 *  includes (image, css, javascript) will have to point to the
 *  secure directory.
 */
if ($_SERVER["HTTPS"]=="on") {
	define ("THIS_URL", SECURE_URL);
}
else {
	define ("THIS_URL", BASE_URL);
}

/*
 *  Define the base file name of a directory, i.e. the file to be called
 *	first by the webserver.
 */
define ("BASE_FILE_NAME", "index.php");

/*
 *  User relocation directories
 */
define ("ERROR_URL", BASE_URL."error/");
define ("LOGIN_URL", BASE_URL."login/");

/*
 *  Define common variables
 */
define ("DATE_TODAY", date("Y-m-d G:i:00"));
if (!isset($error_type)) {
	$error_type="";
}
if (!isset($act)) {
	$act="";
}
if (!isset($msg)) {
	$msg="";
}
/*
 *  Define login variables
 */
//define ("WEBMASTER", "derek@greenparka.com");
define ("WEBMASTER", "najib.fadil@gmail.com");
define ("CONTACT_EMAIL", "ArtKandy <info@artkandy.co.uk>"); //should be info@artkandy.co.uk
define ("MAX_LOGIN_ATTEMPTS", 5);

/*
 *  Include all of the global functions
 */
include(FUNCTION_PATH."fn.db.inc.php");
include(FUNCTION_PATH."fn.page.inc.php");
include(FUNCTION_PATH."fn.user.inc.php");
include(FUNCTION_PATH."fn.image.inc.php");
//include(FUNCTION_PATH."fn.content.inc.php");
include(FUNCTION_PATH."fn.text.inc.php");
include(FUNCTION_PATH."fn.cart.inc.php");
include(FUNCTION_PATH."fn.order.inc.php");
include(FUNCTION_PATH."fn.protx.inc.php");

/*
 *	If we are in the admin area include the generic admin functions
 */
if (ereg("/".CMS_NAME."/",$REQUEST_URI,$nothing)) {
	include(FUNCTION_PATH."fn.admin.inc.php");
}
else {
	/*
	 *  Set the ArtKandy variables, but not in the admin area!!!
	 */
	if ($colour_set=="orange" || $colour_set=="pink" || $colour_set=="green") {
		setcookie("favouriteColour", $colour_set, 0, "/", COOKIE_DOMAIN, 0);
		$favouriteColour=$colour_set;
	}
	if (!isset($favouriteColour)) {
		$favouriteColour="pink";
	}
	if ($favouriteColour=="orange") {
		$colour="FF9900";
		$colour40="FFD699";
		$colour60="FFEBCC";
	}
	elseif ($favouriteColour=="green") {
		$colour="33CC33";
		$colour40="ADEBAD";
		$colour60="D6F5D6";
	}
	else {
		$colour="FF0087";
		$colour40="FF99CC";
		$colour60="FFCCE7";
	}
	/*
	 *	Initialise all possible search criteria
	 */
	/*
	 *	Artist
	 */
	if (isset($_GET["artist_id"])) {
		$artist_id=$_GET["artist_id"];
	}
	elseif (isset($_POST["artist_id"])) {
		$artist_id=$_POST["artist_id"];
	}
	else {
		$artist_id=0;
	}
	/*
	 *	Art School
	 */
	if (isset($_GET["art_school_id"])) {
		$art_school_id=$_GET["art_school_id"];
	}
	elseif (isset($_POST["art_school_id"])) {
		$art_school_id=$_POST["art_school_id"];
	}
	else {
		$art_school_id=0;
	}
	/*
	 *	Category
	 */
	if (isset($_GET["category"])) {
		$category=$_GET["category"];
	}
	elseif (isset($_POST["category"])) {
		$category=$_POST["category"];
	}
	else {
		$category=0;
	}
	/*
	 *	Category ID - Full Binary Value
	 */
	if (isset($_GET["category_id"])) {
		$category_id=$_GET["category_id"];
	}
	elseif (isset($_POST["category_id"])) {
		$category_id=$_POST["category_id"];
	}
	else {
		$category_id=0;
	}
	/*
	 *	Type of Work
	 */
	if (isset($_GET["type_of_work_id"])) {
		$type_of_work_id=$_GET["type_of_work_id"];
	}
	elseif (isset($_POST["type_of_work_id"])) {
		$type_of_work_id=$_POST["type_of_work_id"];
	}
	else {
		$type_of_work_id=0;
	}
	/*
	 *	Subject of Work
	 */
	if (isset($_GET["subject_of_work_id"])) {
		$subject_of_work_id=$_GET["subject_of_work_id"];
	}
	elseif (isset($_POST["subject_of_work_id"])) {
		$subject_of_work_id=$_POST["subject_of_work_id"];
	}
	else {
		$subject_of_work_id=0;
	}
	/*
	 *	Size of Art
	 */
	if (isset($_GET["size_of_art_id"])) {
		$size_of_art_id=$_GET["size_of_art_id"];
	}
	elseif (isset($_POST["size_of_art_id"])) {
		$size_of_art_id=$_POST["size_of_art_id"];
	}
	else {
		$size_of_art_id=0;
	}
	/*
	 *	Maximum Price
	 */
	if (isset($_GET["maximum_price_id"])) {
		$maximum_price_id=$_GET["maximum_price_id"];
	}
	elseif (isset($_POST["maximum_price_id"])) {
		$maximum_price_id=$_POST["maximum_price_id"];
	}
	else {
		$maximum_price_id=0;
	}
	/*
	 *	Artwork ID
	 */
	if (isset($_GET["artwork_id"])) {
		$artwork_id=$_GET["artwork_id"];
	}
	elseif (isset($_POST["artwork_id"])) {
		$artwork_id=$_POST["artwork_id"];
	}
	else {
		$artwork_id=0;
	}
	/*
	 *	Artist Name
	 */
	if (isset($_GET["artist_name"])) {
		$artist_name=urldecode($_GET["artist_name"]);
	}
	elseif (isset($_POST["artist_name"])) {
		$artist_name=@text_make_html($_POST["artist_name"]);
	}
	else {
		$artist_name="";
	}
	/*
	 *	Search Type
	 */
	if (isset($_GET["searchtype"])) {
		$searchtype=$_GET["searchtype"];
	}
	elseif (isset($_POST["searchtype"])) {
		$searchtype=$_POST["searchtype"];
	}
	else {
		$searchtype="";
	}
	/*
	 *	Search Option
	 */
	if (isset($_GET["search_option"])) {
		$search_option=$_GET["search_option"];
	}
	elseif (isset($_POST["search_option"])) {
		$search_option=$_POST["search_option"];
	}
	else {
		$search_option="AND";
	}
	/*
	 *	Search Type
	 */
	if (isset($_GET["page"])) {
		$page=$_GET["page"];
	}
	elseif (isset($_POST["page"])) {
		$page=$_POST["page"];
	}
	else {
		$page=1;
	}
	/*
	 *	Create the seach criteria
	 */
	$five_days_ago=time() - (5 * 24 * 60 * 60);
	$search_query="SELECT art_artist.*, art_artwork.* FROM art_artist, art_artwork";
	if ($category) {
		$search_query.=", art_artwork_category, art_category";
	}
	$search_query.=" WHERE art_artist.artist_id=art_artwork.artist_id";
	if ($category) {
		$search_query.=" AND art_artwork.artwork_id=art_artwork_category.artwork_id AND art_artwork_category.category_id=art_category.category_id AND art_category.category_id=".$category;
	}
	$search_query.=" AND ( (art_artwork.active>0) OR (art_artwork.active=0 AND UNIX_TIMESTAMP(art_artwork.last_updated)>".$five_days_ago.") ) AND art_artist.active>0 AND (1=1 ";


	if ($_SERVER["HTTPS"]=="on") {
		$string_query="session_id=".$session_id."&";
	}
	$string_query.="category_id=".$category_id;
	if ($artist_id) {
		if (substr($search_query, strlen($search_query)-1)!="(") {
			$search_query.=" ".$search_option;
		}
		$search_query.=" art_artist.artist_id=".$artist_id;
		$string_query.="&artist_id=".$artist_id;
	}
	if ($art_school_id) {
		if (substr($search_query, strlen($search_query)-1)!="(") {
			$search_query.=" ".$search_option;
		}
		$search_query.=" art_artist.art_school_id=".$art_school_id;
		$string_query.="&art_school_id=".$art_school_id;
	}
//	if ($category) {
//		if (substr($search_query, strlen($search_query)-1)!="(") {
//			$search_query.=" ".$search_option;
//		}
//		$search_query.=" art_artwork.category_id & ".$category;
//		$string_query.="&category=".$category;
//	}	
	if ($type_of_work_id) {
		if (substr($search_query, strlen($search_query)-1)!="(") {
			$search_query.=" ".$search_option;
		}
		$search_query.=" art_artwork.type_of_work_id & ".$type_of_work_id;
		$string_query.="&type_of_work_id=".$type_of_work_id;
	}
	if ($subject_of_work_id) {
		if (substr($search_query, strlen($search_query)-1)!="(") {
			$search_query.=" ".$search_option;
		}
		$search_query.=" art_artwork.subject_of_work_id & ".$subject_of_work_id;
		$string_query.="&subject_of_work_id=".$subject_of_work_id;
	}
	if ($size_of_art_id) {
		if (substr($search_query, strlen($search_query)-1)!="(") {
			$search_query.=" ".$search_option;
		}
		$search_query.=" art_artwork.size_of_art_id=".$size_of_art_id;
		$string_query.="&size_of_art_id=".$size_of_art_id;
	}
	if ($maximum_price_id) {
		if (substr($search_query, strlen($search_query)-1)!="(") {
			$search_query.=" ".$search_option;
		}
		$search_query.=" art_artwork.price<=".$maximum_price_id;
		$string_query.="&maximum_price_id=".$maximum_price_id;
	}
	if ($arttitle) {
		if ($searchtype=="artist_name") {
			if (substr($search_query, strlen($search_query)-1)!="(") {
				$search_query.=" ".$search_option;
			}
			$search_query.=" art_artist.artist_name like '%".trim(str_replace(" ", "%", $arttitle))."%'";
		}
		else if ($searchtype=="artwork_details") {
			if (substr($search_query, strlen($search_query)-1, 1)!="(") {
				$search_query.=" ".$search_option;
			}
			$search_query.=" art_artwork.subject_title like '%".trim(str_replace(" ", "%", $arttitle))."%'";
		}
		else if ($searchtype=="artwork_content") {
			if (substr($search_query, strlen($search_query)-1, 1)!="(") {
				$search_query.=" ".$search_option;
			}
			$search_query.=" art_artwork.html_text like '%".trim(str_replace(" ", "%", $arttitle))."%'";
		}
		else if ($searchtype=="both") {
			if (substr($search_query, strlen($search_query)-1)!="(") {
				$search_query.=" ".$search_option;
			}
			$search_query.=" (art_artist.artist_name like '%".trim(str_replace(" ", "%", $arttitle))."%' OR art_artwork.subject_title like '%".trim($arttitle)."%' OR art_artwork.html_text like '%".trim($arttitle)."%')";
		}
		$string_query.="&search_option=".$search_option."&arttitle=".urlencode($arttitle)."&searchtype=".$searchtype;
	}
	if ($page) {
//		$string_query.="&page=".$page;
	}
	$search_query.=") ORDER BY art_artwork.price DESC";
	//PRINT($search_query);
}

/*
 *  Connect and choose the database, if not error_type==DATABASE.
 */
if ($error_type!="DATABASE") {
	define ("LINK", @db_connect());
	if (!LINK) {
		header ("Location: ".ERROR_URL."?error_type=DATABASE");
		exit();
	}
	else {
		if (!@db_select_db()) {
			header ("Location: ".ERROR_URL."?error_type=DATABASE");
			exit();
		}
	}
	/*
	 *  Get the page info
	 */
	$page_info=@page_info();
	/*
	 *  Redirect if the page does not exist
	 */
	if ($page_info["structure_id"]==0 && DIRECTORY_ID!=3) {
		header("Location:".ERROR_URL."?error_type=PAGE_NOT_FOUND");
		exit();
	}
	/*
	 *  If the page is a http relocate move to the new page
	 */
	if ($page_info["http_relocate"]) {
		header("Location:".$page_info["http_relocate"]);
		exit();
	}
	/*
	 *  If the page is a site relocate move to the new page
	 */
	if ($page_info["page_relocate"]) {
		header("Location:".@page_url($page_info["page_relocate"]));
		exit();
	}
	/*
	 *	Find out if a page has been requested
	 */
	if (isset($page_id)) {
		$page_info["page_id"]=$page_id;
	}
	else {
		$page_info["page_id"]=0;
	}
	/*
	 *	See if they have chosen a language
	 */
	if (!isset($ck_language_id)) {
		$ck_language_id=1;
	}
	if (isset($ck_set_language_id)) {
		$ck_language_id=$ck_set_language_id;
	}
	define ("LANGUAGE", $ck_language_id);
	/*
	 *  Get the page directory structure
	 */
	$page_structure=@page_parent_list($page_info["page_url"]);
	/*
	 *  Get the page id directory structure
	 */
	$page_structure_id=@page_parent_id_list($page_info["structure_id"]);
	/*
	 *	Get the content, but not in the admin area
	 */
	if ($page_structure_id[1]!=2) {
		$page_info=@page_content($page_info,LANGUAGE,$page_info["page_id"]);
	}
	
	/*
	 *  Set the session_id
	 */
	if (!isset($session_id)) {
		if ($_SERVER["HTTPS"]=="on") {
			$session_id=$_GET["session_id"];
		} else {
			$session_id=session_id();
		}
//		$tmpHex="";
//		srand((double)microtime() * 1000000);
//		for ($tmpHex = dechex(time() - mktime(0, 0, 0, 1, 1, 1990)); strlen($tmpHex) < 32;$tmpHex .= dechex((int)rand(0,15)));
//		setcookie ("session_id", $tmpHex, 0, "/", COOKIE_DOMAIN, 0);
//		$session_id=$tmpHex;
	}
	
	/*
	 *  Log them out if requested
	 */
	if (isset($logout)) {
		@user_logout($session_id);
	}
	
	/*
	 *	Get the user_id and and the user login details details
	 */
	$user_login=@user_get_user_login($session_id);
	
	/*
	 *  If the page is in a secure area make sure the user is allowed access
	 */
	if ($page_info["security_val"]>0) {
		if (!($user_login["security_val"] & $page_info["security_val"])) {
			if ($user_login["security_val"] && ereg("/".CMS_NAME."/",$REQUEST_URI,$nothing)) {
				header("Location:".CMS_NOACCESS);
				exit();
			}
			elseif (ereg("/".CMS_NAME."/",$REQUEST_URI,$nothing)) {
				header("Location:".CMS_LOGIN."?error_type=PRIVILEGES&structure_url=".urlencode("http://".$HTTP_HOST.$REQUEST_URI));
				exit();
			}
			else {
				header("Location:".LOGIN_URL."?error_type=PRIVILEGES&structure_url=".urlencode("http://".$HTTP_HOST.$REQUEST_URI));
				exit();
			}
		}
	}
}
?>
