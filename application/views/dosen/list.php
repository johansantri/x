<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="<?php echo base_url()?>upload/ice.ico" type="image/x-icon" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>upload/ice.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>ICE-I</title>
  </head>
  <body>

<div class="confirm-div" style="text-align: center; background: green;"></div>
        <!-- DataTables -->
        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('dosen/add') ?>"><i class="fas fa-plus"></i> Buat Baru</a>
            <h5 style="text-align: center;">PROFIL DOSEN PENGAMPU MATAKULIAH YANG DITAWARKAN DALAM ICE INSTITUTE</h5>
          </div>
          <div class="card-body">
            <div class="title" style="text-align: center;">
              
               <img class="card-img-top" src="<?php echo base_url()?>upload/LOGOICE.png" alt="Card image cap" style="width: 150px; height: auto;"><p>MK02-RK01-R1</p>
            </div>
            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>NIDN</th>
                      <th>Universitas</th>
                        <th>Matakuliah</th>
                    <th>Photo</th>
                    
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($Dosen as $dos): ?>
                  <tr>
                    <td width="150">
                      <?php echo $dos->nama ?>
                    </td>
                    <td>
                      <?php echo $dos->NIDN ?>
                    </td>
                     <td>
                      <?php echo $dos->universitas ?>
                    </td>
                     <td>
                      <?php echo $dos->matakuliah ?>
                    </td>
                    <td>
                      <img src="<?php echo base_url('upload/dosen/'.$dos->image) ?>" width="64" />
                    </td>
                  
                    <td width="250">
                      <?php $tes=$dos->fix?>
                      <?php if ($tes=="edit"): ?>
                       <a href="<?php echo site_url('dosen/lihat/'.$dos->id_dosen) ?>"
                       class="btn btn-small"><i class="fas fa-eye"></i> lihat </a>
                      <?php else : ?>
                       <a href="<?php echo site_url('dosen/edit/'.$dos->id_dosen) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>


                      <a onclick="deleteConfirm('<?php echo site_url('dosen/delete/'.$dos->id_dosen) ?>')"
                       href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                      <?php endif;?>
                     
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
     $(document).ready( function () {
    $('#dataTable').DataTable();
} );
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
 
    </script>

    <script>
// assumes you're using jQuery
$(document).ready(function() {
$('.confirm-div').hide();
<?php if($this->session->flashdata('msg')){ ?>
$('.confirm-div').html('<?php echo $this->session->flashdata('msg'); ?>').show();
<?php } ?>
});
</script>

  </body>
</html>