<?php 
	$nizam = new Nizam();

	$data = $umumi->Getir("settings");

	if (isset($_POST['u_redakte'])) {
		$nizam->RedakteEt($_POST) ? header("Location:umumi-nizam.php?status=ok") : header("Location:umumi-nizam.php?status=no");
	}
	if (isset($_POST['e_redakte'])) {
		$nizam->RedakteEt($_POST) ? header("Location:elaqe-nizam.php?status=ok") : header("Location:elaqe-nizam.php?status=no");
	}
	if (isset($_POST['s_redakte'])) {
		$nizam->RedakteEt($_POST) ? header("Location:sosial-nizam.php?status=ok") : header("Location:sosial-nizam.php?status=no");
	}

 ?>