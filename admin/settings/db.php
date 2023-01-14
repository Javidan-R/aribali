<?php 
date_default_timezone_set("Asia/Baku"); 
try{
	$db = new PDO("mysql::host='localhost';dbname=aribali;charset=utf8",'root','0207');
	//	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
	
}

?>