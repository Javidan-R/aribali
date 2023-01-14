<?php 

$meqale = new Meqale();

$meqaleler = $umumi->CoxluGetir("meqale");

if (isset($_POST['m_deyis'])) {
	$meqale->RedakteEt($_POST) ? header("Location:meqale.php?status=ok") :  header("Location:meqale.php?status=no");
}

if (isset($_POST['m_elave'])) {
	$meqale->ElaveEt($_POST) ? header("Location:meqale.php?status=ok") :  header("Location:meqale.php?status=no");
}

if (@$_GET['st']=="aktiv" || @$_GET['st']=="deaktiv") {
	$umumi->Status(@$_GET['id'],"meqale",@$_GET['st']) ? header("Location:meqale.php?status=ok")	 :  header("Location:meqale.php?status=no");
}

if(@$_GET['sil']=="ok"){
	$umumi->Sil(@$_GET['id'],"meqale",@$_GET['sekil']) ? header("Location:meqale.php?status=ok")	 :  header("Location:meqale.php?status=no");

}
 
?>