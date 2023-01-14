<?php  require_once 'includes/head.php'; ?>
       <div class="heading" style="margin-top: 50px;">
        <p style="font-size: 3.5em; color: #f2a710;">Kurslarımız</p>

      </div>
      <!-- end title -->
      <div class="container">


        <div class="row" style="padding: 40px;">
         <div class="col-md-6 wow slideInLeft">
          <div class="message-box">
           <h4><?= $course_haq["basliq"]; ?></h4>
           <p style="font-size: 3em; color: #f2a710;">Kurslarımız haqda</p>
           <p class="lead"><?= $course_haq["mezmun"]; ?></p>
           <!-- <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a> -->
         </div>
         <!-- end messagebox -->
       </div>
       <!-- end col -->
       <div class="col-md-6 wow slideInRight">
        <div class="">
         <img src="<?= $course_haq["sekil"]; ?>" alt="<?= $course_haq["basliq"]; ?>" class="img-responsive">
         <a title="youtube videomuz" target="_blank" href="https://www.youtube.com/watch?v=ZOy0YgUDwDg"></a>
       </div>
       <!-- end media -->
     </div>
     <!-- end col -->

   </div>
   <div>
     <p style="font-size: 2.7em; text-align: center; color: #040126; font-family: serif;">Gələcəyə baxışımız və istədiyimiz:</p>
     <p style="font-size: 2.3em; text-align: center; color: #040126; font-family: serif;">Fərdlərin inkişafı ilə düşünən bir cəmiyyət qurmaq</p>

   </div>


   <div class="section-3">
    <div class="row">

      <?php foreach($courses  as $course) {?>
        <div class=" col-lg-4 col-md-6 col-sm-12 col-xs-12 wow slideInLeft  "  style="margin-top: 30px; ">

         <div class=" no-gutters " style="">
           <div class="post-media card-section wow fadeIn" style="cursor: pointer;">
             <a  title=" <?= $course["basliq"];  ?>" href="<?= $course["sekil"];?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
             <img  class="img-responsive img-photo"  src="<?= $course["sekil"];  ?>" alt=" <?= $course["basliq"];  ?>"  >
           </div>

           <div><p class=""> <?= $course["basliq"];  ?></p></div>
           <div><small><?= $umumi->Tarix($course["tarix"]) ?></small></div>
           <div class="coruse-desc">
            <h2><?= $course["mezmun"];  ?></h2> 

          </div>
          <div class="wow bounceInUp">
            <a target="_blank"  href="<?= $course['file'] ?>" title="<?= $course['seo'];?>" id="card-etrafli"  data-scroll class="btn  btn-light btn-radius btn-brd grd1 effect-1 " >Ətraflı bax</a>
          </div>
          <div class="text-content ">
           <h2>
             <span class="center">
               <div class="footer-social" id="header-icon">
                <a href="<?= $dnizam["instagram"] ; ?>" class="btn  grd1 effect-1  "><i class="fa fa-facebook"></i></a>
                <a href="<?= $dnizam["facebook"] ; ?>" class="btn  grd1 effect-1  "><i class="fa fa-instagram"></i></a>

                <a href="<?= $dnizam["whatsapp"] ; ?>" class="btn grd1 effect-1"><i class="fa fa-whatsapp"></i></a>
              </div>

            </span>

          </h2>

        </div>

      </div>
    </div>

  <?php } ?>
</div>
</div>

<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
 <div class="container">
  <div class="heading">
   <span class="icon-logo"><img src="aribalilogo.jpg" alt="#"></span>
   <h2>Qeydiyyat</h2>
 </div>
</div>
<div class="contact-section" style="background-color: white;">
  <div class="form-contant" style="width: 80%; margin-left: 10%;">
   <form id="ajax-contact" action="admin/settings/code/registr.php" method="POST">
    <div class="row">
     <div class="col-md-6">
      <div class="form-group in_name">
       <input  name="name" type="text" class="form-control" placeholder="Ad Soyad" required="required">
     </div>
   </div>
   <div class="col-md-6">
    <div class="form-group in_email">
     <input name="email" type="email"   class="form-control" placeholder="E-mail" required="required">
   </div>
 </div>
 <div class="col-md-6">
  <div class="form-group in_email">
   <input name="phone" type="tel" class="form-control" id="phone" placeholder="Telefon" required="required">
 </div>
</div>
<div class="col-md-6">
  <div class="form-group in_email">
   <input name="subject" type="text"   class="form-control" id="subject" placeholder="Dərsin adı" required="required">
 </div>
</div>
<div class="col-md-12">
  <div class="form-group in_message"> 
   <textarea name="message" class="form-control"   id="message" rows="5" placeholder="İradlarınız və təklifəriniz" required="required"></textarea>
 </div>
 <div class="actions">
   <input type="submit" value="Göndər" name="r_submit" id="submitButton" class="btn small" title="Submit Your Message!">
 </div>
</div>
</div>
</form>
</div>
</div>
</div>

<div class="section-2 wow fadeIn">
 <div class="heading">
  <h1 style="margin-top: 80px; font-size: 30px;">Ümumi Abunəliyimiz</h1>
</div>
<div class="row">
  <div class="col-lg-6 col-md-6 wow slideInLeft" >
   <div>
    <div id="wekil">
     <img src="sekil/umumi/bu da son.jpg " title="kurslarımız abunelik" class="img-responsive">
   </div>
 </div>
</div>
<div class="col-lg-6 col-md-6 wow slideInRight">
 <div>
   <p style="font-size: 27px; color: #181743;  text-align: center; font-family: serif;">Ümumi Abunəlik paketilə əldə edəcəkləriniz sizə çox faydalı olacaq. Paketin qiyməti Aylıq 60 manatdır.</p>
 </div>

</div>

</div>
</div>


</div>

<?php require_once 'includes/footer.php'; ?>