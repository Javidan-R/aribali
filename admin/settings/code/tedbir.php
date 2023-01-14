<?php

$tedbir = new Tedbir();

$tedbirler = $umumi->CoxluGetir("tedbirler");


if (isset($_POST['tedbir_deyis'])) {
	$tedbir->RedakteEt($_POST) ? header("Location:tedbir.php?status=ok") :  header("Location:tedbir.php?status=no");
}

if (isset($_POST['tedbir_elave'])) {
	$tedbir->ElaveEt($_POST) ? header("Location:tedbir.php?status=ok") :  header("Location:tedbir.php?status=no");
}

if (@$_GET['st']=="aktiv" || @$_GET['st']=="deaktiv") {
	$umumi->Status(@$_GET['id'],"tedbirler",@$_GET['st']) ? header("Location:tedbir.php?status=ok")	 :  header("Location:tedbir.php?status=no");
}

if(@$_GET['sil']=="ok"){
	$umumi->Sil(@$_GET['id'],"tedbirler",@$_GET['sekil']) ? header("Location:tedbir.php?status=ok")	 :  header("Location:tedbir.php?status=no");

}



?>

