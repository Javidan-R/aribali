<?php

require_once 'admin/settings/db.php';
/*class*/
require_once 'admin/settings/class/umumi.php';
require_once 'admin/settings/class/haqqinda.php';
require_once 'admin/settings/class/meqale.php';
require_once 'admin/settings/class/team.php';
require_once 'admin/settings/class/tedbir.php';
require_once 'admin/settings/class/nizam.php';
require_once 'admin/settings/class/foto-Class.php';
require_once 'admin/settings/class/course_about.php';
require_once 'admin/settings/class/reyler.php';
require_once 'admin/settings/class/comments.php';
require_once 'admin/settings/class/courses.php';


$umumi = new Umumi();
// 
$haqqinda = new Haqqinda();
$nizam = new Nizam();
$course_about = new Course_About();
// 
$meqale = new Meqale();
$team = new Team();
$tedbir = new Tedbir();
$foto_obj_front = new Foto();
$Courses = new Courses();
// 
$rey = new Reyler();
$comment = new  Comments();
// 
// 
// 
$haqqinda_f = $umumi->Getir("haqqinda");
$dnizam = $umumi->Getir("settings");
$course_haq = $umumi->Getir("course_about");
// 
$slider = $umumi->CoxluGetirFront("meqale"); rsort($slider);
$ourteam = $umumi->CoxluGetirFront("team");
$tedbirler = $umumi->CoxluGetirFront("tedbirler");
$foto_front = $umumi->CoxluGetirFront("foto"); rsort($foto_front);
$courses = $umumi->CoxluGetirFront("courses");
// 
$socialfront = $umumi->CoxluGetirFront("settings");
// 
//$popular_ted = $umumi->Popular("xidmetler","baxis");







/*

if (@$_GET['meqale_etrafli_id'] !== null) {
$meqale_etrafli = $umumi->EtrafliFront(@$_GET['meqale_etrafli_id'], "meqale");
if (empty($meqale_etrafli)) {
header("Location:index");
}
}
 */


if (isset($_POST['r_elave'])) {
	$lasturl=$_SERVER['HTTP_REFERER'];

	$rey->ElaveEt($_POST) ? header("refresh:2;url=".$lasturl."") :  header("refresh:2;url=".$lasturl."");
}




if (isset($_POST['comment_add'])) {
	$lasturl=$_SERVER['HTTP_REFERER'];

	$comment->ElaveEt($_POST) ? header("refresh:2;url=".$lasturl."") :  header("refresh:2;url=".$lasturl."");
}





function Url($link)
{	$link = strtolower($link);
	$url = strtolower($_SERVER['SCRIPT_NAME']);
	if(substr($url,0,8) ==="/aribali/" ){
		$url = substr($url,8);
	}

	return $link===$url ? "current-menu" : "";
}

?>