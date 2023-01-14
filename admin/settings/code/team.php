<?php

$team = new Team();

$teams = $umumi->CoxluGetir("team");

if (isset($_POST['t_deyis'])) {
	$team->RedakteEt($_POST) ? header("Location:team.php?status=ok") :  header("Location:team.php?status=no");
}

if (isset($_POST['t_elave'])) {
	$team->ElaveEt($_POST) ? header("Location:team.php?status=ok") :  header("Location:team.php?status=no");
}

if (@$_GET['st']=="aktiv" || @$_GET['st']=="deaktiv") {
	$umumi->Status(@$_GET['id'],"team",@$_GET['st']) ? header("Location:team.php?status=ok")	 :  header("Location:team.php?status=no");
}

if(@$_GET['sil']=="ok"){
	$umumi->Sil(@$_GET['id'],"team",@$_GET['sekil']) ? header("Location:team.php?status=ok")	 :  header("Location:team.php?status=no");

}

?>
