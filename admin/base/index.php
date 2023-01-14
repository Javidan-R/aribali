<?php

require_once 'header.php';
require_once 'nav.php';
require_once '../settings/code/rey.php';
require_once '../settings/code/meqale.php';

require_once '../settings/code/comment.php';
require_once '../settings/code/tedbir.php';



?>
<!-- Page -->
<div class="page">
  <div class="page-content container-fluid">
    <div class="row" data-plugin="matchHeight" data-by-row="true">
      <div class="col-xl-12 col-lg-12">
        <h3>Səhifəmizin idarəetmə panelinə xoş gəlmisiniz</h3>
        <div class="row">
          <!-- First Row -->
          <div class="col-xl-6 col-md-12 info-panel">
            <div class="card card-shadow">
              <div class="card-block bg-white p-20">
                <button type="button" class="btn btn-floating btn-sm btn-warning">
                  <i class="icon wb-align-justify"></i>
                </button>
                <span class="ml-15 font-weight-400">Tədbirlərin Sayı</span>
                <div class="content-text text-center mb-0">
                  <span class="font-size-40 font-weight-100"> <?php echo count($meqaleler) ;?>  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12 info-panel">
            <div class="card card-shadow">
              <div class="card-block bg-white p-20">
                <button type="button" class="btn btn-floating btn-sm btn-warning">
                  <i class="icon wb-chat-text"></i>
                </button>
                <span class="ml-15 font-weight-400"> Tədbirlərə yazılan ümumi Rəylərin Sayı</span>
                <div class="content-text text-center mb-0">
                 <span class="font-size-40 font-weight-100"><?php echo count($reyler) ;?> </span>
               </div>
             </div>
           </div>
         </div>
         <!-- End First Row -->
         <div class="col-xl-6 col-md-12 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-sm btn-warning">
                <i class="icon wb-align-justify"></i>
              </button>
              <span class="ml-15 font-weight-400">Tədbirlərin Sayı</span>
              <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100"> <?php echo count($tedbirler) ;?>  </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-sm btn-warning">
                <i class="icon wb-chat-text"></i>
              </button>
              <span class="ml-15 font-weight-400"> Tədbirlərə yazılan ümumi Rəylərin Sayı</span>
              <div class="content-text text-center mb-0">
               <span class="font-size-40 font-weight-100"><?php echo count($comments) ;?> </span>
             </div>
           </div>
         </div>
       </div>

     </div>
     <div class="row">
      <div class="col-lg-12" id="ecommerceRecentOrder">
        <div class="card card-shadow table-row">
          <div class="card-header card-header-transparent py-20">
            <h3> Tədbirlərə Son Əlavə olunan rəylər</h3>
          </div>
          <div class="card-block bg-white table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Ad Soyad</th>
                  <th>Məqalə</th>
                  <th>Tarix</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($reyler as $rey) {$say++;if ($say > 4) {
                  break;
                }
                ?>
                <tr>
                  <td><?=$rey["AdSoyad"]?></td>
                  <td><?=mb_substr($umumi->Etrafli($rey["xidmet_id"], "tedbirler")["basliq"], 0, 50)?>...</td>
                  <td><?=$rey["tarix"]?></td>
                  <td>
                    <?=STS($rey["status"])?>
                  </td>
                </tr>
              <?php }?>
            </tbody>
          </table>
          <a href="reyler.php"><button class="btn btn-outline-info">Daha Çox</button></a>
        </div>
      </div>
    </div>
    <!-- End Third Left -->
  </div>

  <div class="row">
    <div class="col-lg-12" id="ecommerceRecentOrder">
      <div class="card card-shadow table-row">
        <div class="card-header card-header-transparent py-20">
          <h3> Bloga Son Əlavə olunan rəylər</h3>
        </div>
        <div class="card-block bg-white table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Ad Soyad</th>
                <th>Məqalə</th>
                <th>Tarix</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($comments as $comment) {$dongu++;if ($dongu > 4) {
                break;
              }
              ?>
              <tr>
                <td><?=$comment["AdSoyad"]?></td>
                <td><?=mb_substr($umumi->Etrafli($comment["photo_id"], "foto")["basliq"], 0, 50)?>...</td>
                <td><?=$comment["tarix"]?></td>
                <td>
                  <?=STS($comment["status"])?>
                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
        <a href="comments.php"><button class="btn btn-outline-info">Daha Çox</button></a>
      </div>
    </div>
  </div>
  <!-- End Third Left -->
</div>






</div>
</div>
</div>
</div>

<!-- End Page -->

<?php  require_once 'footer.php';?>
