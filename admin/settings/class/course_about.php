<?php 

class Course_About{

	public function RedakteEt($post)
	{
		global $db;
		$s_tipler = ["image/png","image/jpeg"];
		$v_tipler = ["video/mp4","video/ogg"];

		$sekil_tip = $_FILES['sekil']['type'];
		$sekil_ad = $_FILES['sekil']['name'];
		$sekil_tmp = $_FILES['sekil']['tmp_name'];
		$sekil_olcu = $_FILES['sekil']['size'];

		$video_tip = $_FILES['video']['type'];
		$video_ad = $_FILES['video']['name'];
		$video_tmp = $_FILES['video']['tmp_name'];
		$video_olcu = $_FILES['video']['size'];

		$sekil_yol = $sekil_olcu > 0 ? "../../sekil/umumi/".rand(100,999)."-".$sekil_ad : $post["k_sekil"];

		$video_yol = $video_olcu > 0 ? "../../sekil/video/".rand(100,999)."-".$video_ad : $post["k_video"];

		if ($sekil_olcu > 0 && !in_array($sekil_tip,$s_tipler)) {
			return 0;
		}
		if ($video_olcu > 0 && !in_array($video_tip,$v_tipler)) {
			return 0;
		}

		$deyis = $db->prepare("UPDATE course_about set 
			basliq=:b,
			mezmun=:m,
			sekil=:s,
			video=:v
			");
		$x = $deyis->execute([
			'b'=>$post['title'],
			'm'=>$post['mezmun'],
			's'=>substr($sekil_yol,6),
			'v'=>substr($video_yol,6)
		]);
		if ($x) {
			if ($sekil_olcu > 0) {
				unlink($post["k_sekil"]);
				move_uploaded_file($sekil_tmp,$sekil_yol);
			}
			if ($video_olcu > 0) {
				unlink($post["k_video"]);
				move_uploaded_file($video_tmp,$video_yol);
			}
			return 1;
		}
		else{
			return 0;
		}

	}

}


?>