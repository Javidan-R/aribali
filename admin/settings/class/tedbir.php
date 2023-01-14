<?php

class Tedbir extends Umumi
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
        $ins = $db->prepare("INSERT into tedbirler set
            basliq=:b,
            mezmun=:m,
            oxunma_vaxti=:o,
            sekil=:s,
            seo=:seo,
            sy_tarix=:tr,
            tarix=:tarix
            ");
        $x = $ins->execute([
            'b' => $post['title'],
            'm' => $post['mezmun'],
            'o' => $post['oxunma_vaxti'],
            's' => substr($sekil_yol, 6),
            'seo' => parent::seo($post['title']),
            'tr' => date("Y-m-d H:i:s"),
            'tarix' => date("Y-m-d H:i:s")
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
        $sekil_yol = $sekil_olcu > 0 ? "../../sekil/meqale/" . rand(100, 999) . "-" . $sekil_ad : $k_sekil;
        $upt = $db->prepare("UPDATE tedbirler set
            basliq=:b,
            mezmun=:m,
             oxunma_vaxti=:o,
            sekil=:s,
            seo=:seo,
            sy_tarix =:tr
            where id=:id

            ");
        $x = $upt->execute([
            'b' => $post['basliq'],
            'm' => $post['mezmun'],
            'o' => $post['oxunma_vaxti'],
            's' => substr($sekil_yol, 6),
            'seo' => parent::seo($post['basliq']),
            'tr' => date("Y-m-d H:i:s"),
            'id' => $post['id']
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
