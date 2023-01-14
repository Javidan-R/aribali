<?php require_once 'includes/header.php'; ?>
      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('sekil/umumi/123456.jpg'); background-size: cover;">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="text-content ">
                     <h2>
                        <span class="center head-text">
                          <span class="icon">
                            <img src="<?= $haqqinda_f["sekil"];?>" alt="<?=$dnizam["title"] ;?>" />
                          </span>
                        </span>
                        <a href="" class="typewrite" data-period="2000" data-type='[ "Aribali Mentorship", "We Care Your Education", "Find your own way!" ]' style="color:    white">
                          <span class="wrap"></span>
                        </a>
                     </h2>
                    
                  </div>
                  <div class="text-content ">
                     <h2>
                       <span class="center head-text wow zoomInUp slideInUp" >
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
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div id="about" class="section wow fadeIn"  >
         <div class="container">
            <div class="heading wow zoomInUp slideInUp">
               <span class="icon-logo">  <img src="<?= $haqqinda_f["sekil"];?>" alt="<?=$dnizam["title"] ;?>" /></span>
               <h2><?= $haqqinda_f["basliq"];?></h2>
            </div>
            <!-- end title -->
            <div class="row"  style="margin-bottom: 40px;">
               <div class="col-md-6 wow zoomInLeft slideInLeft">
                  <div class="message-box">
                     <h4>Biz ne edirik</h4>
                     <h2>Kurslarımız haqda</h2>
                     <p class="lead"> <?=$haqqinda_f["mezmun"]; ?></p>
                     <!-- <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1 ">Ətraflı Oxu</a> -->
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-md-6">
                  <div class="post-media wow fadeIn">
                     <img src="sekil/umumi/geriyebaxmaq.jpg" alt="<?= $haqqinda_f["basliq"];?>" class="img-responsive">
                     <a href="<?= $haqqinda_f["video"];?>" data-rel="<?= $haqqinda_f["video"];?>" class="playbutton"><i class="flaticon-play-button"></i></a>
                  </div>
                  <!-- end media -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
           <h1 class="text-center" style="font-size: 3em; color: #39b49b;"> Göstərdiyimiz Xidmətlər</h1>
            <div id="service" class="row" >
              <?php foreach($slider as  $mentor) { ?>
               <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" style="">
                  <div class="service-widget ser" >
                     <div class=" post-media wow fadeIn">
                        <a href="<?= $mentor['sekil'] ; ?>" title="<?= $mentor['seo'] ; ?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="<?= $mentor['sekil'] ; ?>" alt="<?= $mentor['seo'] ; ?>" class="img-responsive " style="height: 150px; border-radius: 8px;">
                     </div>
                     <div style="display: flex;" class=" wow zoomIn">
                        <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1" style="padding: 8px;  margin: auto;"><?= $mentor['basliq'] ; ?></a>
                     </div>
                      
                    
                    <p class="d-flex justify-content-center" style="margin:10px;"><?= mb_substr(strip_tags($mentor['mezmun']) , 0,105) ?>...</p>

                  </div>
                  <!-- end service -->
               </div>  
              <?php  } ?>
               
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>

      
     

	  
	  
      <div id="testimonials" class="section wb wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo">  <img src="<?= $haqqinda_f["sekil"];?>" alt="<?=$dnizam["title"] ;?>" /></span>
               <h2>Komandamız</h2>
            </div>
            <!-- end title -->
              <div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
        <div class="container">
        <div class="row dev-list text-center">
          <?php  foreach( $ourteam as $yours) { ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 wow fadeIn card-fade" data-wow-duration="1s" data-wow-delay="0.2s" style=" max-width: 380px;">
                    <div class="widget clearfix">

                        <div class="post-media wow fadeIn">
                            <a title="aribali mentor" href="<?= $yours["sekil"] ;?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="<?= $yours["sekil"] ;?>" alt="<?= $yours["basliq"] ;?>" class="img-responsive"  >
                         </div>
                        <div class="widget-title" style="max-height: 200px;">
                            <h3><?= $yours["AdSoyad"] ;?></h3>
                            <h2><?= $yours["basliq"] ;?></h2>
                            <small><?= $yours["mezmun"] ;?></small>
                        
                        </div>
                        <!-- end title -->
                        <div class="footer-social">
                            <a href="<?= $yours["fb"] ;?>" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="<?= $yours["insta"] ;?>" class="btn grd1"><i class="fa fa-instagram"></i></a>

                            <a href="<?= $yours["linkedin"] ;?>" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                            <a href="<?= $yours["wp"] ;?>" class="btn grd1"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->
              <?php   } ?>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>

            <!-- end row -->
            <hr class="invis">           
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
         <div class="container">
            <div class="heading">
               <span class="icon-logo">  <img src="<?= $haqqinda_f["sekil"];?>" alt="<?=$dnizam["title"] ;?>" /></span>
               <h2>Əlaqə</h2>

            </div>
            <h1 class="text-center" style="color: green">
            
              
            </h1>
         </div>
         <div class="contact-section">
            <div class="form-contant">
               <form id="ajax-contact" action="admin/settings/code/contact.php" method="POST">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group in_name">
                           <input name="name" type="text" required="required" class="form-control" placeholder="Name" >
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input name="email" type="email"  required="required"class="form-control" placeholder="E-mail" >
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input name="phone" type="text"  required="required" class="form-control" id="phone" placeholder="Phone">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input name="subject" type="text"  required="required" class="form-control" id="subject" placeholder="Subject" >
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group in_message"> 
                           <textarea name="message"  required="required" class="form-control" id="message" rows="5" placeholder="Message" ></textarea>
                        </div>
                        <div class="actions">
                           <input type="submit" value="Send Message"  required="required" name="e_submit" id="submitButton" class="btn small" title="Submit Your Message!">
                        </div>
                     </div>
                  </div>
               </form>

                
            </div>
            <div id="googleMap" style="width:100%;height:450px;"></div>
         </div>
      </div>




<?php require_once 'includes/footer.php';  ?>
























