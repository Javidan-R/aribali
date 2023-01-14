<?php require_once 'admin/settings/code/front.php';?>
<?php  require_once 'includes/head.php'; ?>



       <div class="container " style="margin-top: 60px;" >
        <div class="row">
          <div>
            <h1 class="text-center" style="font-size: 2.5em; color: #2390d0;">Bloqumuz</h1>
          </div>


          <?php foreach($foto_front as $photo) { ?> 
            <div class=" col-lg-4 col-md-6 col-sm-12 col-xs-12    wow zoomInUp slideInUp fadeInUp "  style="margin-top: 30px;">
              <div class=" no-gutters " style="">
                <div class="post-media card-section ">
                 <a title=" <?= $photo["basliq"];  ?>" href="<?= $photo["sekil"];?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                 <img  class=" wow  img-responsive img-photo" src="<?= $photo["sekil"];  ?>" alt=" <?= $photo["basliq"];  ?>"  >
               </div>
               <div><p class="photo-basliq text-center wow "> <?= $photo["basliq"];  ?></p></div>

               <div><p class="photo-mezmun"> <?= mb_substr(strip_tags($photo['mezmun']) , 0,50); ?>...</p></div>
               <div><small><?= $umumi->Tarix($photo["tarix"]) ?></small></div>
               <div class="flex wow shake ">
                 <div class="margin wow ">
                  <a  href="photo-read-more.php?etrafli-oxu=photo-etrafli-oxu&<?= $photo['basliq'];?>&id=<?=$photo['id']; ?>" title="<?= $photo['seo'];?>" id="card-etrafli"  data-scroll class="btn  btn-light btn-radius btn-brd grd1 effect-1 " > Ətraflı Oxu</a>
                </div>

                <div class="margin wow ">
                  <a  href="photo-read-more.php?etrafli-oxu=photo-etrafli-oxu&<?= $photo['basliq'];?>&id=<?=$photo['id']; ?>" title="<?= $photo['seo'];?>" id="card-etrafli"  data-scroll class="btn  btn-light btn-radius btn-brd grd1 effect-1 " >Rəy Yaz</a>
                </div>
              </div>
              <div class="text-content  wow zoomInDown slideInDown fadeInDown  ">
               <h2>
                 <span class="center">
                  <div class="footer-social" id="header-icon">

                   <a href="<?= $dnizam["facebook"] ; ?>" title="aribali mentorship facebook" class="btn  grd1 effect-1  "><i class="fa fa-facebook"></i></a>
                   <a href="<?= $dnizam["instagram"] ; ?>"   title="aribali mentorship instagram" class="btn  grd1 effect-1  "><i class="fa fa-instagram"></i></a>

                   <a href="<?= $dnizam["whatsapp"] ; ?>"  title="aribali mentorship whatsapp qrup" class="btn grd1 effect-1"><i class="fa fa-whatsapp"></i></a>


                 </div>

               </span>

             </h2>

           </div>

         </div>
       </div>

     <?php } ?>


   </div>
 </div>







 <?php require_once 'includes/footer.php';  ?>
























