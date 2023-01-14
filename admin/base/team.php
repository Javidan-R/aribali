 <?php require_once 'header.php';require_once 'nav.php';require_once '../settings/code/team.php';?>


<!-- Page -->
<div class="page">

	<div class="page-content">
		<!-- Panel Basic -->

		<div class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="team-add.php">
						<button type="button" class="btn btn-lg btn-block btn-success">Əlavə Et</button>
					</a>
				</div>
				<h3 class="panel-title">Komandamız</h3>

			</header>
			<div class="panel-body">
				<table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
					<thead>
						<tr>
							<th>Şəkil</th>
							<th>Ad</th>
							<th>Başlıq</th>
							<th  class="sy_tarix">Tarix</th>
							<th  class="sy_tarix">Son Yenilənmə Tarixi</th>
							<th>Status</th>
							<th>Əməliyyat</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($teams as $team) {?>
							<tr>
								<td><img height="50" src="../../<?=$team["sekil"]?>"></td>
								<td><?=$team["AdSoyad"] ;?>...</td>
								<td><?=mb_substr($team["basliq"], 0, 50)?>...</td>
								<td  class="sy_tarix"><?=$team["tarix"]?></td>
								<td  class="sy_tarix"><?=$team["sy_tarix"]?></td>
								<td>
									<?php if ($team["status"] == 1): ?>
										<a href="team.php?st=deaktiv&id=<?=$team['id']?>"><button class="btn btn-success btn-block btn-outline">Aktiv</button></a>
									<?php endif?>
									<?php if ($team["status"] == 0): ?>
										<a href="team.php?st=aktiv&id=<?=$team['id']?>"><button class="btn btn-danger btn-block  btn-outline">Deaktiv</button></a>
									<?php endif?>
								</td>
								<td>
									<button onclick="Sil(<?=$team['id']?>,'<?=$team['sekil']?>')"   class="btn btn-icon btn-warning btn-outline"><i class="icon wb-trash"
                                        aria-hidden="true"></i></button>

										<button class="btn btn-floating btn-primary btn-sm" data-target="#id_<?=$team['id']?>"
                                    data-toggle="modal"><i class="icon wb-pencil" aria-hidden="true"></i></button>
								</td>
							</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- End Panel Basic -->


	</div>
</div>
<!-- End Page -->
<?php foreach ($teams as $team) {?>
	<!-- Modal -->
	<div class="modal fade" id="id_<?=$team['id'];?>" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
		role="dialog" tabindex="-1">
		<div class="modal-dialog modal-simple">
			<form method="POST" action="#" enctype="multipart/form-data" class="modal-content">
				<input type="hidden" name="id" value="<?=$team['id'];?>" />
				<input type="hidden" name="k_sekil" value="../../<?=$team["sekil"];?>" />
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="exampleFormModalLabel"><?=$team["AdSoyad"];?></h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xl-12 form-group">
							<img height="100" width="100" src="../../<?=$team["sekil"];?>">
						</div>
						<div class="col-xl-12 form-group">
							<input type="text" name="AdSoyad"  class="form-control" value="<?=$team["AdSoyad"];?>" />
						</div>
						<div class="col-xl-12 form-group">
							<input type="text" name="basliq"  class="form-control" value="<?=$team["basliq"];?>" />
						</div>
						<div class="col-xl-12 form-group">
							<textarea class="form-control" rows="5" name="mezmun"><?=$team["mezmun"];?></textarea>
						</div>
						<div class="col-xl-12 form-group">
							<input type="text" name="fb"  class="form-control" value="<?=$team["fb"];?>" />
						</div>
						<div class="col-xl-12 form-group">
							<input type="text" name="insta"  class="form-control" value="<?=$team["insta"]; ?>" />
						</div>
						<div class="col-xl-12 form-group">
							<input type="text" name="wp"  class="form-control" value="<?=$team["wp"]; ?>" />
						</div>
						<div class="col-xl-12 form-group">
							<input type="text" name="linkedin"  class="form-control" value="<?=$team["linkedin"]; ?>" />
						</div>
						<div class="col-xl-12 form-group">
							<input type="file" id="input-file-now-custom-1" name="sekil" data-plugin="dropify"
							/>
						</div>
						<div class="col-md-12 float-right">
							<button class="btn btn-primary btn-outline"  name="t_deyis" type="submit">Redaktə Et</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php }?>

<script>
	function Sil(id,sekil) {
		swal({
			title: "Əminsinizmi?",
			text: "Silinən məqalə geri qaytarılmır!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
			buttons: ["İmtina!", "Təsdiq Et!"],
		})
		.then((willDelete) => {
			if (willDelete) {
				location.href = "team.php?sil=ok&id="+id+"&sekil=../../"+sekil;
				swal("Silindi");
			} else {
				swal("İmtina edildi!");
			}
		});
	}
	
</script>
<?php require_once 'tinymce.php';?>
<?php require_once 'footer.php';?>
