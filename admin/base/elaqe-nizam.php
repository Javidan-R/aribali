<?php require_once 'header.php'; require_once 'nav.php'; require_once '../settings/code/nizam.php'; ?>


<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Ümumi Nizamlamalar</h1>
  </div>

  <div class="page-content">
    <!-- Panel Form Elements -->
    <div class="panel">
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-md-12 col-lg-12">
            <!-- Example Rounded Input -->
            <form method="POST" action="#">
              <input type="hidden" name="nizam" value="elaqe" />
              <div class="example-wrap">
                <h4 class="example-title">Ünavanınız</h4>
                <input type="text" name="unvan" value="<?= $data['unvan'] ?>" class="form-control round" id="inputRounded">
              </div>
              <div class="example-wrap">
                <h4 class="example-title">Telefon</h4>
                <input type="text" name="tel" value="<?= $data['tel'] ?>" class="form-control round" id="inputRounded">
              </div>
              
              <div class="example-wrap">
                <h4 class="example-title">E-mail Ünvanı</h4>
                <input type="email" name="email" value="<?= $data['email'] ?>" class="form-control round" id="inputRounded">
              </div>
              <div class="example-wrap">
                <h4 class="example-title">Poçt Ünvanı</h4>
                <input type="text" name="poct" value="<?= $data['poct'] ?>" class="form-control round" id="inputRounded">
              </div>
              <button type="submit" name="e_redakte" class="btn btn-animate btn-animate-vertical btn-success">
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

<?php require_once 'footer.php'; ?>