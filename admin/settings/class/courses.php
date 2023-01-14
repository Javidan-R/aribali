  <?php

class Courses extends Umumi{

    public function Elave_Et($post)
    {
        global $db;


// ŞƏKİL ƏLAVƏ ETMƏK

        $s_tipler = ["image/png", "image/jpeg","image/jpg","image/gif","image/svg+xml"];

        $sekil_tip = $_FILES['sekil']['type'];
        $sekil_ad = $_FILES['sekil']['name'];
        $sekil_tmp = $_FILES['sekil']['tmp_name'];
        $sekil_olcu = $_FILES['sekil']['size'];

        if($sekil_olcu>0 && !in_array($sekil_tip,$s_tipler)){
            return 0;
        }
        if($sekil_olcu==0){
            return 0;
        }
        $sekil_yol= "../../sekil/umumi/".rand(100,999)."-".$sekil_ad;


// FAYL ƏLAVƏ ETMƏK

        $f_tipler = ["application/pdf","application/x-pdf","application/msword","application/epub+zip"];

        $file_tip = $_FILES['file']['type'];
        $file_ad = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_olcu = $_FILES['file']['size'];
        if($file_olcu>0 && !in_array($file_tip,$f_tipler)){
            return 0;
        }
        if($file_olcu==0){
            return 0;

        }

        $file_yol= "../../sekil/umumi/".rand(100,999)."-".$file_ad;


        $ins = $db->prepare("INSERT into courses set
            basliq=:b,
            mezmun=:m,
            sekil=:s,
            file=:f,
            seo=:seo,
            sy_tarix=:tr, 
            tarix=:tarix
            ");
        $x = $ins->execute([
            'b'=>$post['basliq'],
            'm'=>$post['mezmun'],
            's'=>substr($sekil_yol,6),
            'f'=>substr($file_yol,6),
            'seo'=>parent::seo($post['basliq']),
            'tr'=>date("Y-m-d H:i:s"),
            'tarix'=>date("Y-m-d H:i:s")
        ]);
        if($x){
            move_uploaded_file($file_tmp,$file_yol);
            move_uploaded_file($sekil_tmp,$sekil_yol);

            return 1;
        }
        else{
            return 0;
        }


    }





    public function Redakte_Et($post)
    {
       global $db;
// ŞƏKİL REDAKTƏ ETMƏK
       $s_tipler = ["image/png", "image/jpeg","image/jpg","image/gif","image/svg+xml"];
       $k_sekil = $post['k_sekil'];

       $sekil_tip = $_FILES['sekil']['type'];
       $sekil_ad = $_FILES['sekil']['name'];
       $sekil_tmp = $_FILES['sekil']['tmp_name'];
       $sekil_olcu = $_FILES['sekil']['size'];
       if ($sekil_olcu > 0 && !in_array($sekil_tip,$s_tipler)) {
           return 0;
       }
       $sekil_yol = $sekil_olcu > 0 ? "../../sekil/umumi/".rand(100,999)."-".$sekil_ad : $k_sekil ;

// FAYL  REDAKTƏ ETMƏK

       $f_tipler = ["application/pdf","application/x-pdf","application/msword","application/epub+zip"];
       $k_file = $post['k_file'];

       $file_tip = $_FILES['file']['type'];
       $file_ad = $_FILES['file']['name'];
       $file_tmp = $_FILES['file']['tmp_name'];
       $file_olcu = $_FILES['file']['size'];
       if($file_olcu>0 && !in_array($file_tip,$f_tipler)){
        return 0;
    }
    $file_yol = $file_olcu > 0 ? "../../sekil/umumi/".rand(100,999)."-".$file_ad : $k_file ;

// PREPARE
    $upt = $db->prepare("UPDATE courses set
        basliq=:b,
        mezmun=:m,
        sekil=:s,
        file=:f,
        seo=:seo,
        sy_tarix=:tr,
        tarix=:tarix
        where id=:id

        ");
// EXECUTE
    $x = $upt->execute([
       'b'=>$post['basliq'],
       'm'=>$post['mezmun'],
       's'=>substr($sekil_yol,6),
       'f'=>substr($file_yol,6),
       'seo'=>parent::seo($post['basliq']),
       'tr' =>date("Y-m-d H:i:s"),
       'tarix'=>date("Y-m-d H:i:s"),
       'id'=>$post['id']
   ]);
    if ($x) {
       if($sekil_olcu > 0  ){

           unlink($k_sekil);
           move_uploaded_file($sekil_tmp,$sekil_yol);

          
       }if($file_olcu > 0 ){
         unlink($k_file);
           move_uploaded_file($file_tmp,$file_yol);
       }
       return 1;
   }
   else{
       return 0;
   }


}
}


?>
