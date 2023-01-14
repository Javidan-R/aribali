<?php

$courses = new Courses ();

$coursless = $umumi->CoxluGetir("courses");


if (isset($_POST['cs_deyis'])) {
	$courses->Redakte_Et($_POST) ? header("Location:courses.php?status=ok") :  header("Location:courses.php?status=no");
}

if (isset($_POST['cs_elave'])) {
	$courses->Elave_Et($_POST) ? header("Location:courses.php?status=ok") :  header("Location:courses.php?status=no");
}

if (@$_GET['st']=="aktiv" || @$_GET['st']=="deaktiv") {
	$umumi->Status(@$_GET['id'],"courses",@$_GET['st']) ? header("Location:courses.php?status=ok")	 :  header("Location:courses.php?status=no");
}

if(@$_GET['sil']=="ok"){
	$umumi->Sil(@$_GET['id'],"courses",@$_GET['sekil'] && @$_GET['file'] ) ? header("Location:courses.php?status=ok")	 :  header("Location:courses.php?status=no");

}



?>
