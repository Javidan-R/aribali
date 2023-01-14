<?php require_once 'admin/settings/code/front.php';?>
<?php  require_once 'includes/head.php'; ?>









<?php if(@$_GET["islem"]=="devam"){
  $id=@$_GET["id"];
  $v = $db->prepare("SELECT * from tedbirler  where id=? ");
  $v->execute([$id]);
  
  $xx=$v->rowCount();
  if ($xx) {
    foreach($v as $tedbir_etrafli){
      ?>


      <div class="container " style="margin-top: 90px;" >
        <div class="row">
          <div>
            <h1 class="text-center" style="font-size: 3em; color: #2390d0; margin-bottom: 10px">Tədbirlərimiz bölməsi</h1>
          </div>
          <div class="col-lg-offset-1 col-lg-10  col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 wow slideInDown" style="">
            <div>
              <img class="img-responsive"  src="<?= $tedbir_etrafli['sekil']; ?>" style=" margin-top:20px; width: 950px; height: 45vh;" alt="<?= $tedbir_etrafli['seo']; ?>">
            </div>
            <h1 class="text-center" style="font-size: 2em; margin-top:30px; color: #f3a50f;"><?= $tedbir_etrafli["basliq"]; ?></h1>
            <div class="flex">
             <p class="margin">Tarix:<?= $umumi->Tarix($tedbir_etrafli['tarix'])?></p>
             <a  href="#" title="like" id="card-etrafli"  data-scroll class="btn  btn-sm btn-light btn-radius btn-brd grd1 effect-1 " style="width: 130px;" >Bəyən</a>
<!--              <p class="margin">Oxunma sayı ://  <?= $tedbir_etrafli['baxis']; ?></p>
 -->           </div>
           <hr style="color: red; ">
           <div style="margin: 20px 0;">
             <p class="text-center" style="line-height: 30px;" >
              <?= $umumi->Etrafli($tedbir_etrafli["id"], "tedbirler")["mezmun"];?>
            </p>
          </div>
        </div>
      </div>
    </div>


    <?php

  }
      # code...
}else{
  echo "bele bir tedbir yoxdur";
}
?>
<!-- 
<?php
//$hit=$db->prepare("UPDATE tedbirler set baxis= baxis+1 where id=?");
//$hit->execute([$id]);
?>
 -->


<h1 class="text-center" style="margin-top: 10px;">Sosial  Şəbəkələrdə biz</h1>
<div class="text-content  flex">


  <div class="footer-social margin" id="header-icon">
    
    <a href="<?= $dnizam["instagram"] ; ?>" class="btn  grd1 effect-1  " style="margin: 0 10px ; font-size:1.5em;"><i class="fa fa-facebook"></i></a>
    <a href="<?= $dnizam["facebook"] ; ?>" class="btn  grd1 effect-1  " style="margin: 0 10px ; font-size:1.5em;"><i class="fa fa-instagram"></i></a>

    <a href="<?= $dnizam["whatsapp"] ; ?>" class="btn grd1 effect-1" style="margin: 0 10px ; font-size:1.5em;"><i class="fa fa-whatsapp"></i></a>


  </div>

</div>






<div class="row container " id="form-rey" style="margin: 50px 0;">
  <div class=" col-lg-offset-4 col-lg-6 col-md-offset-2 col-md-10    col-sm-12 wow slideInUp">


    <?php
    global  $db;
    $data =$db->prepare("SELECT * from reyler where status=:st and xidmet_id=:id order by tarix DESC ");
    $data->execute(['st'=>1,'id'=>$id]);
    $come = $data->fetchAll(PDO::FETCH_ASSOC);
    $start= $data->rowCount();
    if($start){
      foreach($come as $comments){      ?>


        <div class="post-comments">
          <ul class="comment-list">

            <!--Comment 1 Start-->
            <li>
              <div class="comment-wrapper">

                <div class="comment-details" >
                  <div class="comment-name  flex">
                   <div class="comment-avatar">
                     <img class="com-img" src="aribalilogo.jpg" alt="<?= mb_strtoupper($comments['AdSoyad']) ?>" />
                   </div>
                   <a title="<?= mb_strtoupper($comments['mesaj']) ?>" href="#" class="margin"><small>Kimdən : </small><?= mb_strtoupper($comments['AdSoyad']) ?></a>
                   <span class="comment-date margin" ><small>Tarixi : </small><?= $umumi->Tarix($comments['tarix']) ?></span>
                 </div>
                 <div class="comment-description ">
                  <p style="margin-left: 55px;"><small>Rəy : </small><i  style="color:#000;"><?= mb_strtoupper($comments['mesaj']) ?></i></p>
                </div>
              </div>
            </div>

          </li>

        </ul>

      </div>

      <?php 
    }
  } 
  else{  ?>
    <h1 style="font-size: 1.3em; color: #228ed3;"> Tədbirimizə hələ ki , rəy bildirilməyib ilk rəy yazan sən ol.<br> Fikirlərini bilmək bizim üçün əvəzolunmazdır:) </h1>

  <?php }  ?>



  <div class="page-title subtitle">
    <h1 class="text-center">Rəy Bildir</h1>
  </div>

  <div class="form">
      <div style="background-color:  #f79433; margin: 3px; padding: 5px; border-radius: 8px;">
       <p >Unutmayın ki yazılan rəylər yalnız təsdiq edilkiddən sorna yayınlanır </p>
     </div>

    <form id="ajax-contact" action="#" method="POST">
      <input type="hidden" name="url" value="tedbir-<?= $tedbir_etrafli["seo"]."-".$tedbir_etrafli["id"]?>" />
      <input type="hidden" name="id"  value="<?= $tedbir_etrafli['id'] ?>" />
      <div class="form-group in_name">
        <label>Ad Soyad *</label>
        <input  type="text" name="AdSoyad" required="required" placeholder="Adınız və Soyadınız" style=" border: #e48537 solid 1px; border-radius: 8px; " />
      </div>

      <div class="form-group in_email">
        <label>Email *</label>
        <input  type="text" name="email" required="required"  placeholder="Email Ünvanınız"  style="border: #e48537 solid 1px; border-radius: 8px; " />
      </div>
      <div class="form-group in_messsage">
        <label>Mesajınız *</label>
        <textarea name="mesaj" required="required" placeholder="Rəy Yazın" style="border: #e48537 solid 1px; border-radius: 8px; "></textarea>
      </div>


      <div class="actions">
       <input type="submit" name="r_elave" value="Göndər"  id="submitButton" class="btn small grd1" title="rəy yazın">
     </div>

   </form>
 </div>
<?php     } ?>
</div>

</div>


<div class="container">
  <div class="row">
    <div class="text-center"> <h1 style="margin:20px 0;">BAŞQA TƏDBİRLƏR</h1></div>




    <?php

 // 
    $pop = $db->prepare("SELECT * from tedbirler where status=:st   limit 4");
    $pop ->execute(['st' => 1]);
    $popular=$pop->fetchAll(PDO::FETCH_ASSOC);


    foreach($popular as  $tedbir) {  ?>

     <div class="col-md-3 col-sm-6  col-xs-10  wow zoomInDown slideInDown fadeInDown" style="">
      <div class="service-widget" style=" min-height: 55vh !important; border: 1px solid #39b49b; border-radius: 8px;">
       <div class=" post-media wow fadeIn">
        <a href="<?= $tedbir['sekil'] ; ?>" title="<?= $tedbir['seo'] ; ?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
        <img src="<?= $tedbir['sekil'] ; ?>" alt="<?= $tedbir['seo'] ; ?>" class="img-responsive" style="height: 150px; border-radius: 8px;">
      </div>
      <div class="flex">
        <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1" style="padding: 8px;  font-size: .8em; margin: auto;"><?= mb_substr($tedbir['basliq']
        ,0,) ; ?></a>
      </div>

      <div>
        <p class="d-flex justify-content-center" style="margin:10px;"><?= mb_substr(strip_tags($tedbir['mezmun']) , 0,125) ?>...</p>
      </div>
      <div class="flex"> 
        <a  href="tedbir-etrafli.php?islem=devam&<?= $tedbir['seo'];?>&id=<?=$tedbir['id']; ?>" title="<?= $tedbir['seo'];?>" id="card-etrafli"  data-scroll class="btn  btn-light btn-radius btn-brd grd1 effect-1  margin" >Ətraflı Oxu</a>
        <a  href="tedbir-etrafli.php?islem=devam&<?= $tedbir['seo'];?>&id=<?=$tedbir['id']; ?>" title="<?= $tedbir['seo'];?>" id="card-etrafli"  data-scroll class="btn  btn-light btn-radius btn-brd grd1 effect-1 margin" >Rəy Yaz</a>

      </div>
    </div>
    <!-- end service -->
  </div>  

<?php  } ?>



</div>
</div>







<?php require_once 'includes/footer.php';  ?>
























