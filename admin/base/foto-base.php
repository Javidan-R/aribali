<?php require_once 'header.php';require_once 'nav.php';require_once '../settings/code/foto-Code.php';?>


<!-- Page -->
<div class="page">

    <div class="page-content">
        <!-- Panel Basic -->

        <div class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="foto-elave-base.php">
                        <button type="button" class="btn btn-lg btn-block btn-success">Əlavə Et</button>
                    </a>
                </div>
                <h3 class="panel-title">Fotograflar</h3>

            </header>
            <div class="panel-body">
                <?php  if($_GET[" "]===null){
                    echo "";
                }


                elseif($_GET['status']=="ok") {
                  echo "  Foto Elave Olundu ";
              }

              ?>


              <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                <thead>
                    <tr>
                        <th>Şəkil</th>
                        <th>Basliq</th>
                        <th  class="sy_tarix">Məzmun</th>
                        <th  class="sy_tarix"> Əlavə Tarixi</th>
                        <th  class="sy_tarix"> Yenilənmə Tarixi</th>
                        <th>Status</th>
                        <th>Əməliyyat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($foto_db as $foto_base_elave) {?>
                        <tr>
                            <td><img height="45" src="../../<?=$foto_base_elave["sekil"]?>"></td>
                            <td><?=$foto_base_elave["basliq"]?></td>

                            <td  class="sy_tarix"><?=mb_substr($foto_base_elave["mezmun"], 0, 50)?>...</td>
                            <td  class="sy_tarix"><?=$foto_base_elave["tarix"]?></td>
                            <td  class="sy_tarix"><?=$foto_base_elave["sy_tarix"]?></td>
                            <td>
                                <?php if ($foto_base_elave["status"] == 1): ?>
                                    <a href="foto-base.php?st=deaktiv&id=<?=$foto_base_elave['id']?>"><button class="btn btn-success btn-block">aktiv</button></a>
                                <?php endif?>
                                <?php if ($foto_base_elave["status"] == 0): ?>
                                    <a href="foto-base.php?st=aktiv&id=<?=$foto_base_elave['id']?>"><button class="btn btn-danger btn-block">Deaktiv </button></a>
                                <?php endif?>
                            </td>
                            <td>
                                <button onclick="Sil(<?=$foto_base_elave['id']?>,'<?=$foto_base_elave['sekil']?>')"      class="btn btn-icon btn-warning btn-outline"><i class="icon wb-trash"          aria-hidden="true"></i></button>

                                <button class="btn btn-floating btn-primary btn-sm" data-target = "#id_<?=$foto_base_elave['id']?>"  data-toggle="modal"><i class="icon wb-pencil" aria-hidden="true"></i></button>


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
    <?php foreach ($foto_db as $foto_base_redakte) {?>
        <!-- Modal -->
        <div class="modal fade" id="id_<?=$foto_base_redakte['id']?>" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
            role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple">
                <form method="POST" action="#" enctype="multipart/form-data" class="modal-content">
                    <input type="hidden" name="id" value="<?=$foto_base_redakte['id']?>" />
                    <input type="hidden" name="k_sekil" value="../../<?=$foto_base_redakte["sekil"]?>" width="100"/>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="exampleFormModalLabel"><?=$foto_base_redakte["basliq"]?></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-12 form-group">
                                <img height="100" width="100" src="../../<?=$foto_base_redakte["sekil"]?>">
                            </div>
                            <div class="col-xl-12 form-group">
                                <input type="text" name="basliq"  class="form-control" value="<?=$foto_base_redakte["basliq"]?>" />
                            </div>
                            <div class="col-xl-12 form-group">
                                <textarea class="form-control" rows="5" name="mezmun"><?=$foto_base_redakte["mezmun"]?></textarea>
                            </div>
                            <div class="col-xl-12 form-group">
                                <input type="file" id="input-file-now-custom-1" name="sekil" data-plugin="dropify"
                                />
                            </div>
                            <div class="col-md-12 float-right">
                                <button class="btn btn-primary btn-outline"  name="f_deyis" type="submit">Redaktə Et</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php }?>


    <script>
        function Sil(id, sekil) {
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
                    location.href = "foto-base.php?sil=ok&id=" + id + "&sekil=../../" + sekil;
                } else {
                    swal("İmtina edildi!");
                }
            });
        }
    </script>
    <?php require_once 'footer.php';?>
