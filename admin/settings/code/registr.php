<?php


function SqlInjection($post)
    {
        $arr = ["select","insert","update","delete","like","order","and","or","not","=",">","<","'","\"","xor","null","sum","count","join","on","*","from","a","1","id","prepare","execute"];
        
        return str_replace($arr,"",mb_strtolower(strip_tags($post)));

    }
if (include '../settings/db.php') {
    # code...

	global $db;


    
	if(isset($_POST['r_submit'])){
		$ins=$db->prepare("INSERT INTO registr SET
			name=:a,
			email=:m,
			phone=:t,
			subject=:b,
			message=:m,
			tarix=:tarix

			");
		$x= $ins->execute([
			'a'=>htmlspecialchars(SqlInjection($_POST['name'])),
			'm'=>htmlspecialchars(SqlInjection($_POST['email'])),
			't'=>htmlspecialchars(SqlInjection($_POST['phone'])),
			'b'=>htmlspecialchars(SqlInjection($_POST['subject'])),
			'm'=>htmlspecialchars(SqlInjection($_POST['message'])),
			'tarix'=>date("Y-m-d H:i:s")
		]);

		if($x){
			header("Location:../../../course.php?mesaj=ok");

		}

	}
}

elseif (include '../db.php') {
    # code...

	global $db;

	if(isset($_POST['r_submit'])){
		$ins=$db->prepare("INSERT INTO registr SET
			name=:a,
			email=:m,
			phone=:t,
			subject=:b,
			message=:m,
			tarix=:tarix

			");
		$x= $ins->execute([
			'a'=>htmlspecialchars(SqlInjection($_POST['name'])),
			'm'=>htmlspecialchars(SqlInjection($_POST['email'])),
			't'=>htmlspecialchars(SqlInjection($_POST['phone'])),
			'b'=>htmlspecialchars(SqlInjection($_POST['subject'])),
			'm'=>htmlspecialchars(SqlInjection($_POST['message'])),
			'tarix'=>date("Y-m-d H:i:s")
		]);

		if($x){
			header("Location:../../../course.php");

		}


	}


 function SilMes($id, $table)
    {
        global $db;
        $data = $db->prepare("DELETE from {$table} where id=:id");
        $x = $data->execute([
            'id' => $id
        ]);

    }
	
	if(@$_GET['sil']=="ok"){
		SilMes(@$_GET['id'],"registr") ? header("Location:../../base/registr.php?status=no")	 :  header("Location:../../base/registr.php?status=ok");

	}
}


?>
