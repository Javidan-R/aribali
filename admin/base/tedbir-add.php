 <?php require_once 'header.php'; require_once 'nav.php'; require_once '../settings/code/tedbir.php'; ?>


<!-- Page -->
<div class="page">
	<div class="page-header">
		<h1 class="page-title">Xidmət Əlavə Etmə Paneli</h1>
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
								<h4 class="example-title">Başlıq</h4>
								<input type="text" name="title" required="required" placeholder="Xidmətə Başlıq Əlavə edin.." class="form-control round" id="inputRounded">
							</div>

							<div class="example-wrap">
								<h4 class="example-title">məzmun</h4>
								<textarea rows="15" class="form-control round" name="mezmun"></textarea>
							</div>
							<div class="example-wrap">
								<h4 class="example-title">Başlıq</h4>
								<input type="text" name="oxunma_vaxti" required="required" placeholder="Xidmətə Başlıq Əlavə edin.." class="form-control round" id="inputRounded">
							</div>
							
							<div class="row">
								<div class="example-wrap col-md-12">
									<h4 class="example-title">Şəkil Əlavə Edin...</h4>
									<input required="required" type="file" id="input-file-now-custom-1" name="sekil" data-plugin="dropify"
									/>
								</div>
							</div>
							<button type="submit" name="tedbir_elave" class="btn btn-animate btn-animate-vertical btn-success">
								<span><i class="icon wb-upload" aria-hidden="true"></i>Əlavə Et</span>
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
<?php require_once 'tinymce.php'; ?>
<?php require_once 'footer.php'; ?>