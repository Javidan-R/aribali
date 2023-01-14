<?php require_once 'admin/settings/code/front.php';?>
<?php  require_once 'includes/head.php'; ?>



       <div class="container " style="margin-top: 60px;" >
        <div class="row">
          <div>
            <h1 class="text-center" style="font-size: 3em; color: #2390d0;">Bloq bölməsi</h1>
          </div>
          <div><h2 class="text-center">
            <a  href="photo.php" title="<?= $photo['seo'];?>" id="card-etrafli"  data-scroll class="btn  btn-light btn-radius btn-brd grd1 effect-1 " >BLOQUMUZ SƏHİFƏSİNƏ QAYIT</a>


          </h2></div>


          <?php 
          if(@$_GET["etrafli-oxu"]=="photo-etrafli-oxu"){
            $id=@$_GET["id"];
            $f = $db->prepare("SELECT * from foto  where id=? ");
            $f->execute([$id]);

            $xx=$f->rowCount();
            if ($xx) {

              foreach($f as $photo) {?>
                <div class=" col-lg-offset-1 col-lg-10  col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 wow  wobble"  style="margin-top: 30px;">
                  <div class=" no-gutters " style="">
                    <div class="post-media card-section wow fadeIn">
                     <a title=" <?= $photo["basliq"];  ?>" href="<?= $photo["sekil"];?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                     <img  class="img-responsive " style="border-radius: 8px ; max-width: 100% ;height: 400px; margin: auto;" src="<?= $photo["sekil"];  ?>" alt=" <?= $photo["basliq"];  ?>"  >
                   </div>
                   <div class="flex">

                     <div class="margin"><small><?= $umumi->Tarix($photo["tarix"]) ?></small></div>
                     <!-- <div class="margin">Oxunma sayı :
                      <?= $photo['baxis']; ?>  
                      </div> -->
                   </div>
                   <div><p class="margin text-center"> <?= $photo["basliq"];  ?></p></div>

                   <div>
                    <p class="" style="color: #050126">
                    <?= $umumi->Etrafli($photo["id"], "foto")["mezmun"];?>
                     </p>

                  </div>
                  <div class="text-content ">
                   <h2>
                     <span class="center">
                      <div class="footer-social" id="header-icon">

                        <a href="<?= $dnizam["facebook"] ; ?>" class="btn  grd1 effect-1  " style="margin: 0 10px ; font-size:1.5em;"><i class="fa fa-facebook"></i></a>
                        <a href="<?= $dnizam["instagram"] ; ?>" class="btn  grd1 effect-1  " style="margin: 0 10px ; font-size:1.5em;"><i class="fa fa-instagram"></i></a>

                        <a href="<?= $dnizam["whatsapp"] ; ?>" class="btn grd1 effect-1" style="margin: 0 10px ; font-size:1.5em;"><i class="fa fa-whatsapp"></i></a>

                        
                      </div>

                    </span>

                  </h2>

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

       <!--  <?php
       // $hit=$db->prepare("UPDATE foto set baxis= baxis+1 where id=?");
      //  $hit->execute([$id]);
        ?> -->


      </div>

      <div class="row container " id="form-rey" style="margin: 50px 0;">
        <div class=" col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-10    col-sm-12">


          <?php
          global  $db;
          $data =$db->prepare("SELECT * from photo_com where status=:st and photo_id=:id order by tarix DESC ");
          $data->execute(['st'=>1,'id'=>$id]);
          $p_come = $data->fetchAll(PDO::FETCH_ASSOC);
          $start= $data->rowCount();
          if($start){
            foreach($p_come as $comments){      ?>


              <div class="post-comments wow  hinge">
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
          <h1> Yazıya hələ ki , rəy bildirilməyib ilk rəy yazan sən ol.<br> Fikirlərini bilmək bizim üçün əvəzolunmazdır:) </h1>

        <?php }  ?>



        <div class="page-title subtitle" style="margin-top:40px;">
          <h2 class="text-center">Rəy Yaz</h2>
        </div>

        <div class="form wow  rotateIn">
          <div style="background-color:  #f79433; margin: 3px; padding: 5px; border-radius: 8px;">
           <p >Unutmayın ki yazılan rəylər yalnız təsdiq edilkiddən sorna yayınlanır </p>
         </div>

         <form id="ajax-contact" action="#" method="POST">
          <input type="hidden" name="id"  value="<?= $photo['id'] ?>" />


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
           <input type="submit" name="comment_add" value="Göndər"  id="submitButton" class="btn large grd1" title="rəy yazın">
         </div>

       </form>
     </div>




   <?php      }  ?>
 </div>

</div>
<div class="row">
  <div class="text-center"> <h1 style="margin:20px 0;">Populyar Blog yazıları</h1></div>




  <?php

//order by  baxis DES
  $pop = $db->prepare("SELECT * from foto where status=:st  C  limit 4");
  $pop ->execute(['st' => 1]);
  $popular_foto=$pop->fetchAll(PDO::FETCH_ASSOC);


  foreach($popular_foto as  $photo) {  ?>

   <div class="col-md-3 col-sm-6 col-xs-12 " style="">
    <div class="service-widget" style=" min-height: 55vh !important; border: 1px solid #39b49b; border-radius: 8px;">
     <div class=" post-media wow fadeIn">
      <a href="<?= $photo['sekil'] ; ?>" title="<?= $photo['seo'] ; ?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
      <img src="<?= $photo['sekil'] ; ?>" alt="<?= $photo['seo'] ; ?>" class="img-responsive" style="height: 150px; border-radius: 8px;">
    </div>
    <div class="flex">
      <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1" style="padding: 8px;  font-size: .9em; margin: auto;"><?= mb_substr($photo['basliq']
      ,0,30) ; ?></a>
    </div>

    <div>
      <p class="d-flex justify-content-center" style="margin:5px;"><?= mb_substr(strip_tags($photo['mezmun']) , 0,125) ?>...</p>
    </div>
    <div class="flex">
     <div class="margin">
      <a  href="photo-read-more.php?etrafli-oxu=photo-etrafli-oxu&<?= $photo['basliq'];?>&id=<?=$photo['id']; ?>" title="<?= $photo['seo'];?>" id="card-etrafli"  data-scroll class="btn  btn-light btn-radius btn-brd grd1 effect-1 " > Ətraflı Oxu</a>
    </div>

    <div class="margin">
      <a  href="photo-read-more.php?etrafli-oxu=photo-etrafli-oxu&<?= $photo['basliq'];?>&id=<?=$photo['id']; ?>" title="<?= $photo['seo'];?>" id="card-etrafli"  data-scroll class="btn  btn-light btn-radius btn-brd grd1 effect-1 " >Rəy Yaz</a>
    </div>
  </div>
</div>
<!-- end service -->
</div>  

<?php  } ?>



</div>
</div>








<?php require_once 'includes/footer.php';  ?>
























