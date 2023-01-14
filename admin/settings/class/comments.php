<?php 


class Comments extends Umumi{


    public function FrontGetir($id)
    {
        global $db;
        $data = $db->prepare("SELECT * from photo_com where status=:st and photo_id=:id order by tarix DESC");
        $data->execute(['st'=>1,'id'=>$id]);
        $m = [];
        while($x = $data->fetch(PDO::FETCH_ASSOC)){
            array_push($m,$x);
        }
        return $m;

        
    }
	public function ElaveEt($post)
	{
		global $db;
		$data = $db->prepare("INSERT into photo_com set
			photo_id=:id,
			AdSoyad=:a,
			email=:e,
			mesaj=:m,
			ip=:ip,
			tarix=:t
			
			");
		$x = $data->execute([
			'id'=>$post['id'],
			'a'=>parent::SqlInjection($post['AdSoyad']),
			'e'=>parent::SqlInjection($post['email']),
			'm'=>parent::SqlInjection($post['mesaj']),
			'ip'=>parent::get_client_ip(),
			't'=>date("Y-m-d H:i:s")
			
		]);
		


		return $x ? 1 : 0;
	}

}



?>