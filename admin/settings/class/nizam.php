<?php 

class Nizam{


	public function RedakteEt($post)
	{
		global $db;
		if ($post['nizam']=="umumi") {
			$deyis = $db->prepare("UPDATE settings set
				title=:t,
				description=:d
				");
			$x = $deyis->execute([
				't'=>$post['title'],
				'd'=>$post['description']
			]);
			return $x ? 1 : 0;
		}

		if ($post['nizam']=="elaqe") {
			$deyis = $db->prepare("UPDATE settings set
				unvan=:unvan,
				tel=:tel,
				mobil=:m,
				email=:mail,
				poct=:poct
				");
			$x = $deyis->execute([
				'unvan'=>$post['unvan'],
				'tel'=>$post['tel'],
				'm'=>$post['mobil'],
				'mail'=>$post['email'],
				'poct'=>$post['poct']
			]);
			return $x ? 1 : 0;
		}


		if ($post['nizam']=="sosial") {
			$deyis = $db->prepare("UPDATE settings set
				facebook=:fb,
				instagram=:ins,
				linkedin=:ln,
				whatsapp=:wp,
				youtube=:yt
				");
			$x = $deyis->execute([
				'fb'=>$post['facebook'],
				'ins'=>$post['instagram'],
				'ln'=>$post['linkedin'],
				'wp'=>$post['whatsapp'],
				'yt'=>$post['youtube']
			]);
			return $x ? 1 : 0;
		}
	}

}

?>