<?php require_once 'header.php'; require_once 'nav.php'; require_once '../settings/code/course_about.php'; ?>


<!-- Page -->
<div class="page">
	<div class="page-header">
		<h1 class="page-title"> Kurslar Haqqında</h1>
	</div>

	<div class="page-content">
		<!-- Panel Form Elements -->
		<div class="panel">
			<div class="panel-body container-fluid">
				<div class="row row-lg">
					<div class="col-md-12 col-lg-12">
						<!-- Example Rounded Input -->
						<form method="POST" action="#" enctype="multipart/form-data">
							<input type="hidden" name="k_sekil" value="../../<?= $c_about['sekil'] ?>" />
							<input type="hidden" name="k_video" value="../../<?= $c_about['video'] ?>" />
							<div class="example-wrap">
								<h4 class="example-title">Başlıq</h4>
								<input type="text" name="title" value="<?= $c_about['basliq'] ?>" class="form-control round" id="inputRounded">
							</div>
							<div class="example-wrap">
								<h4 class="example-title">məzmun</h4>
								<textarea rows="15" class="form-control round" name="mezmun">
									<?= $c_about['mezmun'] ?></textarea>
							</div>
							<div class="row">
								<div class="example-wrap col-md-6">
									<h4 class="example-title">Şəkil</h4>
									<input type="file" id="input-file-now-custom-1" name="sekil" data-plugin="dropify" data-default-file="../../<?= $c_about['sekil'] ?>"
									/>
								</div>
								<div class="example-wrap col-md-6">
									<h4 class="example-title">Video</h4>
									<input type="file" id="input-file-now-custom-1" name="video" data-plugin="dropify"  data-default-file="../../<?= $c_about['video'] ?>"
									/>
								</div>
							</div>
							<button type="submit" name="c_redakte" class="btn btn-animate btn-animate-vertical btn-success">
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
<script src="tinymce/js/tinymce/tinymce.min.js"></script>

<script type="text/javascript">
	tinymce.init({
		entity_encoding : "raw",
		selector: "textarea",
		theme: "modern",
		plugins: [
		"advlist autolink lists link image charmap print preview hr anchor pagebreak",
		"searchreplace wordcount visualblocks visualchars code fullscreen",
		"insertdatetime media nonbreaking save table contextmenu directionality",
		"emoticons template paste textcolor colorpicker textpattern imagetools"
		],
		toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		toolbar2: "print preview media | forecolor backcolor emoticons | ltr rtl",
		image_advtab: true,
		templates: [
		{ title: 'Test template 1', content: 'Test 1' },
		{ title: 'Test template 2', content: 'Test 2' }
		],

	});
</script>
<?php require_once 'footer.php'; ?>