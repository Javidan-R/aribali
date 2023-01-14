  <?php
  class Team extends Umumi
  {

    public function ElaveEt($post)
    {
      global $db;
      $s_tipler = ["image/png", "image/jpeg","image/jpg","image/gif","image/svg+xml"];

      $sekil_tip = $_FILES['sekil']['type'];
      $sekil_ad = $_FILES['sekil']['name'];
      $sekil_tmp = $_FILES['sekil']['tmp_name'];
      $sekil_olcu = $_FILES['sekil']['size'];

      if ($sekil_olcu > 0 && !in_array($sekil_tip, $s_tipler)) {
        return 0;
      }
      if ($sekil_olcu == 0) {
        return 0;
      }
      $sekil_yol = "../../sekil/meqale/" . rand(100, 999) . "-" . $sekil_ad;
      $ins = $db->prepare("INSERT into team set
        AdSoyad =:name,
        basliq=:bas,
        mezmun=:mez,
        sekil=:sek,
        seo=:seo,
        sy_tarix=:tr,
        tarix=:tarix,
        fb=:f,
        insta=:i ,
        wp=:w,
        linkedin=:ln

        ");
      $x = $ins->execute([
        'name' => $post['AdSoyad'] ,
        'bas' =>  $post['basliq'] ,
        'mez' => $post['mezmun'] ,
        'sek' => substr($sekil_yol, 6) ,
        'seo' => parent::seo($post['basliq']) ,
        'tr' => date("Y-m-d H:i:s") ,
        'tarix' => date("Y-m-d H:i:s") ,
        'f' => $post['fb'] ,
        'i' => $post['insta'] ,
        'w' => $post['wp'] ,
        'ln' => $post['linkedin']
      ]);
      if ($x) {
        move_uploaded_file($sekil_tmp, $sekil_yol);
        return 1;
      } else {
        return 0;
      }

    }

    public function RedakteEt($post)
    {
      global $db;
      $s_tipler = ["image/png", "image/jpeg","image/jpg","image/gif","image/svg+xml"];
      $k_sekil = $post['k_sekil'];

      $sekil_tip = $_FILES['sekil']['type'];
      $sekil_ad = $_FILES['sekil']['name'];
      $sekil_tmp = $_FILES['sekil']['tmp_name'];
      $sekil_olcu = $_FILES['sekil']['size'];
      if ($sekil_olcu > 0 && !in_array($sekil_tip, $s_tipler)) {
        return 0;
      }
      $sekil_yol = $sekil_olcu > 0 ? "../../sekil/umumi/" . rand(100, 999) . "-" . $sekil_ad : $k_sekil;
      $upt = $db->prepare("UPDATE team set
       basliq=:bas,
       AdSoyad =:name,
       mezmun=:mez,
       sekil=:sek,
       seo=:seo,
       sy_tarix =:tr,
       fb=:f,
       insta=:i, 
       wp=:w,
       linkedin=:ln
       where id=:id

       ");
      $x = $upt->execute([
        'bas' =>$post['basliq'],
        'name'=>$post['AdSoyad'],
        'mez' =>$post['mezmun'],
        'sek' =>substr($sekil_yol, 6),
        'seo' =>parent::seo($post['basliq']),
        'tr' =>date("Y-m-d H:i:s"), 
        'f' =>$post['fb'],
        'i' =>$post['insta'],
        'w' =>$post['wp'],
        'ln' =>$post['linkedin'],
        'id' =>$post['id']
      ]);
      if ($x) {
        if ($sekil_olcu > 0) {
          unlink($k_sekil);
          move_uploaded_file($sekil_tmp, $sekil_yol);
        }
        return 1;
      } else {
        return 0;
      }

    }

  }
