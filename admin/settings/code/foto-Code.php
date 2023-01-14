<?php

$foto_obj = new Foto();

$foto_db = $umumi->CoxluGetir("foto");



if (isset($_POST['f_elave'])) {
	$foto_obj->ElaveEt($_POST) ? header("Location:foto-base.php?status=ok") :  header("Location:foto-base.php?status=no");
}


if (isset($_POST['f_deyis'])) {
	$foto_obj->RedakteEt($_POST) ? header("Location:foto-base.php?status=ok") :  header("Location:foto-base.php?status=no");
}


if (@$_GET['st']=="aktiv" || @$_GET['st']=="deaktiv") {
	$umumi->Status(@$_GET['id'],"foto",@$_GET['st']) ? header("Location:foto-base.php?status=ok")	 :  header("Location:foto-base.php?status=no");
}

if(@$_GET['sil']=="ok"){
	$umumi->Sil(@$_GET['id'],"foto",@$_GET['sekil']) ? header("Location:foto-base.php?status=ok")	 :  header("Location:foto-base.php?status=no");

}

?>
