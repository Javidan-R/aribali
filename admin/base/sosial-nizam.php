<?php require_once 'header.php';require_once 'nav.php';require_once '../settings/code/nizam.php';?>


<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Sosial Şəbəkələrin Qeyd olunması </h1>
  </div>

  <div class="page-content">
    <!-- Panel Form Elements -->
    <div class="panel">
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-md-12 col-lg-12">
            <!-- Example Rounded Input -->
            <form method="POST" action="#">
              <input type="hidden" name="nizam" value="sosial" />
             
              <div class="example-wrap">
                <h4 class="example-title">Facebook</h4>
                <input type="text" name="facebook" value="<?=$data['facebook']?>" class="form-control round" id="inputRounded">
              </div>
              <div class="example-wrap">
                <h4 class="example-title">Instagram</h4>
                <input type="etxt" name="instagram" value="<?=$data['instagram']?>" class="form-control round" id="inputRounded">
              </div>
              <div class="example-wrap">
                <h4 class="example-title">Whatsapp</h4>
                <input type="text" name="whatsapp" value="<?=$data['whatsapp']?>" class="form-control round" id="inputRounded">
              </div>
               <div class="example-wrap">
                <h4 class="example-title">LInkedin</h4>
                <input type="text" name="linkedin" value="<?=$data['linkedin']?>" class="form-control round" id="inputRounded">
              </div>
              <div class="example-wrap">
                <h4 class="example-title">Youtube</h4>
                <input type="text" name="youtube" value="<?=$data['youtube']?>" class="form-control round" id="inputRounded">
              </div>


              <button type="submit" name="s_redakte" class="btn btn-animate btn-animate-vertical btn-success">
                <span><i class="icon wb-edit" aria-hidden="true"></i>Redaktə Et</span>
              </button>
            </form>
            <!-- End Example Rounded Input -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Panel Form Elements -->

  </div>
</div>
<!-- End Page -->

<?php require_once 'footer.php';?>