 <?php require_once 'header.php';require_once 'nav.php';require_once '../settings/code/team.php';?>


<!-- Page -->
<div class="page">
	<div class="page-header">
		<h1 class="page-title">Komanda Üzv Əlavə Etmə Paneli</h1>
	</div>

	<div class="page-content">
		<!-- Panel Form Elements -->
		<div class="panel">
			<div class="panel-body container-fluid">
				<div class="row row-lg">
					<div class="col-md-12 col-lg-12">
						<!-- Example Rounded Input -->
						<form method="POST" action="#" enctype="multipart/form-data">
							<div class="example-wrap">
								<h4 class="example-title">Ad Soyad</h4>
								<input type="text" name="AdSoyad" required="required" placeholder="Komanda Üzv Ad Soyad Əlavə edin.." class="form-control round" id="inputRounded">
							</div>
							<div class="example-wrap">
								<h4 class="example-title">Vəzifəsi</h4>
								<input type="text" name="basliq" required="required" placeholder="Komanda Üzvünün  Vəzifəsi.." class="form-control round" id="inputRounded">
							</div>
							<div class="example-wrap">
								<h4 class="example-title">Haqqında</h4>
								<textarea rows="15" class="form-control round" name="mezmun"></textarea>
							</div>
							<div class="row">
								<div class="example-wrap col-md-6">
									<h4 class="example-title">Şəkili</h4>
									<input required="required" type="file" id="input-file-now-custom-1" name="sekil" data-plugin="dropify"
									/>
								</div>
							</div>
							<div class="example-wrap">
								<h4 class="example-title">Facebook Profili Linki </h4>
								<input type="text" name="fb" required="required" placeholder="Facebook Profili Əlavə edin.." class="form-control round" id="inputRounded">
							</div>
							<div class="example-wrap">
								<h4 class="example-title">İnstagram Profili Linki </h4>
								<input type="text" name="insta" required="required" placeholder="İnstagram Profili Əlavə edin.." class="form-control round" id="inputRounded">
							</div>
							<div class="example-wrap">
								<h4 class="example-title">Whatsapp Nömrəsi  Linki (Bussiness)</h4>
								<input type="text" name="wp"  placeholder="Whatsapp Nömrəsi Əlavə edin.. (Məcburi deyil)" class="form-control round" id="inputRounded">
							</div>
							<div class="example-wrap">
								<h4 class="example-title">Linkedin Profili Linki </h4>
								<input type="text" name="linkedin"  placeholder="Whatsapp Nömrəsi Əlavə edin.. (Məcburi deyil)" class="form-control round" id="inputRounded">
							</div>
							<button type="submit" name="t_elave" class="btn btn-animate btn-animate-vertical btn-success">
								<span><i class="icon wb-edit" aria-hidden="true"></i>Əlavə Et</span>
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
<?php require_once 'tinymce.php';?>
<?php require_once 'footer.php';?>