<?php
require_once '../db.php';

if(isset($_POST['form'])) {

	$admin_mail= $_POST['admin_mail'];
	$admin_sifre = $_POST['admin_sifre'];
	$admin_ask=$db->prepare("SELECT * from mina where admin_mail=:m and admin_sifre=:s ");
	$admin_ask->execute([
		'm'=>$_POST['admin_mail'],
		's'=>$_POST['admin_sifre']
	]);
	echo $dongu = $admin_ask->rowCount();


	if ($dongu===1) {
		$_SESSION['admin_mail'] =$admin_mail;

		header("location: ../../base/index.php");
		exit;

	# code...
	}else{
		header("location: ../../../index.php");
		exit;
	}


	# code...
}
else{
	echo "nah";
}


?>