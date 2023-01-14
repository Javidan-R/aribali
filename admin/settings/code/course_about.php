<?php 

	$course_about = new Course_About();

	$c_about = $umumi->Getir("course_about");

	if (isset($_POST['c_redakte'])) {
		$course_about->RedakteEt($_POST) ? header("Location:course_about.php?status=ok") : header("Location:course_about.php?status=no");
	}

 ?>