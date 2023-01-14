<?php 

	$haqqinda = new Haqqinda();

	$data = $umumi->Getir("haqqinda");

	if (isset($_POST['h_redakte'])) {
		$haqqinda->RedakteEt($_POST) ? header("Location:haqqinda.php?status=ok") : header("Location:haqqinda.php?status=no");
	}

 ?>