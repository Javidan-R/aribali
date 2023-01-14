<?php

if (include '../settings/db.php') {
    # code...
	global $db;

	if(isset($_POST['e_submit'])){
		$ins=$db->prepare("INSERT INTO contact SET
			name=:a,
			email=:m,
			phone=:t,
			subject=:b,
			message=:m,
			tarix=:tarix

			");
		$x= $ins->execute([
			'a'=>htmlspecialchars($_POST['name']),
			'm'=>htmlspecialchars($_POST['email']),
			't'=>htmlspecialchars($_POST['phone']),
			'b'=>htmlspecialchars($_POST['subject']),
			'm'=>htmlspecialchars($_POST['message']),
			'tarix'=>date("Y-m-d H:i:s")
		]);

		if($x){
			header("Location:../../../index.php#getintouch");

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
		SilMes(@$_GET['id'],"contact") ? header("Location:contact.php?status=no")	 :  header("Location:contact.php?status=ok");

	}
}

elseif (include '../db.php') {
    # code...

	global $db;


    function SqlInjection($post)
    {
        $arr = ["select","insert","update","delete","like","order","and","or","not","=",">","<","'","\"","xor","null","sum","count"];
        
        return str_replace($arr,"",mb_strtolower(strip_tags($post)));

    }

	if(isset($_POST['e_submit'])){
		$ins=$db->prepare("INSERT INTO contact SET
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
			header("Location:../../../index.php#getintouch");

		}

	}
}

?>
