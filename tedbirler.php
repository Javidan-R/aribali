<?php require_once 'admin/settings/code/front.php';?>
<?php  require_once 'includes/head.php'; ?>
<style type="text/css">



</style>






<div class="container " style="margin-top: 30px;" >
  <div class="row">
    <div>
      <h1 class="text-center" style="font-size: 3em; color: #2390d0; margin-top: 40px">Tədbirlərimiz bölməsi</h1>
    </div>


    <?php foreach($tedbirler as $tedbir) {?>
      <div id="tedbir" class=" col-lg-6 col-md-6 col-sm-6  col-xs-12  wow zoomInRight slideInRight rotateIn "  style="margin: 20px auto; ">
        <div class=" card-tedbir" style="">
          <div class="card-section">
            <img class="img-tedbir" src="<?= $tedbir["sekil"];  ?>"  alt="<?= $tedbir['seo'];?>"  >
          </div>
          

          <div class="card-body card-section">
            <h1 class="card-title text-center photo-basliq" style=""><?= $tedbir["basliq"]; ?>;</h1>
            <p class="photo-mezmun"><?= mb_substr(strip_tags($tedbir['mezmun']) , 0,120); ?>...</p>
            <p class="card-text text-center " ><small class="text-muted "> Oxunma müddəti : <?= $tedbir["oxunma_vaxti"]; ?></small></p>
            <div class="flex">
              <p class="  margin"><small>Tarix:<?= $umumi->Tarix($tedbir['tarix'])?> </small></p>
<!--               <p class=" margin"><small>Oxunma sayı :<?= $tedbir['baxis'] ?></small></p>
 -->            </div>
            <div class="flex  wow  flipInY"> 
              <a  href="tedbir-etrafli.php?islem=devam&<?= $tedbir['seo'];?>&id=<?=$tedbir['id']; ?>" title="<?= $tedbir['seo'];?>" id="card-etrafli"  data-scroll class="btn  btn-light btn-radius btn-brd grd1 effect-1  margin" >Ətraflı Oxu</a>
              <a  href="tedbir-etrafli.php?islem=devam&<?= $tedbir['seo'];?>&id=<?=$tedbir['id']; ?>" title="<?= $tedbir['seo'];?>" id="card-etrafli"  data-scroll class="btn  btn-light btn-radius btn-brd grd1 effect-1 margin" >Rəy Yaz</a>
              
            </div>
            
          </div>
        </div>
      </div>

    <?php } ?>


  </div>
  <div class="text-content ">
   <h2>
     <span class="center head-text">
      <div class="footer-social" id="header-icon">
       <a href="<?= $dnizam["facebook"] ; ?>" title="aribali mentorship facebook" class="btn grd1 effect-1"><i class="fa fa-facebook"></i></a>
       <a href="<?= $dnizam["instagram"] ; ?>" title="aribali mentorship instagram" class="btn grd1 effect-1"><i class="fa fa-instagram"></i></a>
       <a href="<?= $dnizam["whatsapp"] ; ?>"  title="aribali mentorship whatsapp qrup"  class="btn grd1  effect-1"><i class="fa fa-whatsapp"></i></a>

     </div>

   </span>

 </h2>

</div>
</div>





<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
 <div class="container">
  <div class="heading">
   <span class="icon-logo"><img src="aribalilogo.jpg" alt="#"></span>
   <h2>Əlaqə</h2>
 </div>
</div>
<div class="contact-section">
  <div class="form-contant">
   <form id="ajax-contact" action="assets/mailer.php" method="post">
    <div class="row">
     <div class="col-md-6">
      <div class="form-group in_name">
       <input type="text" class="form-control" placeholder="Name" required="required">
     </div>
   </div>
   <div class="col-md-6">
    <div class="form-group in_email">
     <input type="email" class="form-control" placeholder="E-mail" required="required">
   </div>
 </div>
 <div class="col-md-6">
  <div class="form-group in_email">
   <input type="tel" class="form-control" id="phone" placeholder="Phone" required="required">
 </div>
</div>
<div class="col-md-6">
  <div class="form-group in_email">
   <input type="text" class="form-control" id="subject" placeholder="Subject" required="required">
 </div>
</div>
<div class="col-md-12">
  <div class="form-group in_message"> 
   <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required"></textarea>
 </div>
 <div class="actions">
   <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn small" title="Submit Your Message!">
 </div>
</div>
</div>
</form>
</div>
<div id="googleMap" style="width:100%;height:450px;"></div>
</div>
</div>




<?php require_once 'includes/footer.php';  ?>
























