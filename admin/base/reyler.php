<?php require_once 'header.php';require_once 'nav.php';require_once '../settings/code/rey.php';?>


<!-- Page -->
<div class="page">

    <div class="page-content">
        <!-- Panel Basic -->

        <div class="panel">
            <header class="panel-heading">
                <h3 class="panel-title">Rəylər</h3>

            </header>
            <div class="panel-body">
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>Məqalə</th>
                            <th>Email</th>
                            <th>Mesaj</th>
                            <th>Tarix</th>
                            <th>IP</th>
                            <th>Status</th>
                            <th>Təsdiq</th>
                            <th>Əməliyyat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($reyler as $rey) {?>
                            <tr>
                                <td><?=$rey["AdSoyad"]?></td>
                                <td><?=mb_substr($umumi->Etrafli($rey["xidmet_id"], "tedbirler")["basliq"], 0, 50)?>...</td>
                                <td><?=$rey["email"]?></td>
                                <td><button data-toggle="modal" data-target="#id_<?=$rey["id"]?>" class="btn btn-outline-info btn-sm">Bax</button></td>
                                <td><?=$rey["tarix"]?></td>
                                <td><?=$rey["ip"]?></td>
                                <td>
                                    <?=STS($rey["status"])?>
                                </td>
                                <td align="center">
                                    <label class="onoff">
                                        <input type="checkbox" onclick="Tesdiq(<?=$rey["id"]?>,<?=$rey["status"]?>)" <?=$rey["status"] == 1 ? 'checked="checked"' : ''?> id="rey_<?=$rey["id"]?>"  />

                                        <span class="deyis yumru"></span>
                                    </label>
                                </td>
                                <td>
                                    <button onclick="Sil(<?=$rey["id"]?> )" class="btn btn-danger" >Sil</button>

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
<?php foreach ($reyler as $rey) {?>
    <div class="modal fade" id="id_<?=$rey["id"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><?=$rey["AdSoyad"]?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?=$rey["mesaj"]?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<script>
    function Tesdiq(id,st) {
        if(st==2 || st==0){
            location.href = "reyler.php?st=aktiv&id="+id;
        }
        else{
            location.href = "reyler.php?st=deaktiv&id="+id;
        }
    }

    function Sil(id) {
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
                location.href = "reyler.php?sil=ok&id="+id;
            } else {
                swal("İmtina edildi!");
            }
        });
    }
</script>
<?php require_once 'tinymce.php';?>
<?php require_once 'footer.php';?>