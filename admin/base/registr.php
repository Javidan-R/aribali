<?php require_once 'header.php';require_once 'nav.php';require_once '../settings/code/registr.php';?>


<!-- Page -->
<div class="page">

  <div class="page-content">
    <!-- Panel Basic -->

    <div class="panel">
      
      <div class="panel-body">
        <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
          <thead>
            <tr>
              <th>Say</th>
              <th>Ad</th>
              <th  class="sy_tarix">Email</th>
              <th>Telefon</th>
              <th>Basliq</th>
              <th>Mesaj</th>
              <th>Tarix</th>
              <th>Emeliyyat</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $say = 0;
            $registrgetir=$db->prepare("SELECT * from registr ");
            $registrgetir->execute();
            while ($registr_cek=$registrgetir->fetch(PDO::FETCH_ASSOC)) { $say++  ?>
             
          
              <tr>
                <td><?php echo $say ;?></td>
                <td><?= $registr_cek['name']; ?></td>
                <td  class="sy_tarix"><?=  $registr_cek['email']; ?></td>
                <td><?= $registr_cek['phone'];  ?></td>
                 <td><?= $registr_cek['subject'];  ?></td>
                  <td><?= $registr_cek['message'];  ?></td>
                   <td><?= $registr_cek['tarix'];  ?></td>
                   <td><button onclick="Sil(<?=$registr_cek['id']?>)"   class="btn btn-icon btn-warning btn-outline"><i class="icon wb-trash"     aria-hidden="true"></i></button></td>
                
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- End Panel Basic -->


  </div>
</div>
<script>
  function Sil(id) {
    swal({
      title: "Əminsinizmi?",
      text: "Silinən Mesaj geri qaytarılmır!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      buttons: ["İmtina!", "Təsdiq Et!"],
    })
    .then((willDelete) => {
      if (willDelete) {
        location.href = "contact.php?sil=ok&id="+id;
      } else {
        swal("İmtina edildi!");
      }
    });
  }
  </script>
<?php require_once 'footer.php';?>
