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
   

       <div class="container-fluid">

       

     

        <div class="card mb-3">
          <div class="card-header">
            <h5 class="title" style="text-align: center;">PROFIL DOSEN PENGAMPU MATAKULIAH YANG DITAWARKAN DALAM ICE INSTITUTE</h5>
          </div>
          <div class="card-body">
            <div class="title" style="text-align: center;">
              
               <img class="card-img-top" src="<?php echo base_url()?>upload/LOGOICE.png" alt="Card image cap" style="width: 150px; height: auto;"><p>MK02-RK01-R1</p>
            <hr>
            </div>

            <form action="<?php base_url('dosen/add') ?>" method="post" enctype="multipart/form-data" >

              <div class="row">
                <div class="col-md-6">
              <div class="form-group">
                <label for="name">Nama*</label>
                <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                 type="text" name="nama" value="<?php echo set_value('nama') ?>" placeholder="Masukan Nama" />
                <div class="invalid-feedback">
                  <?php echo form_error('nama') ?>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
                <label for="no_hp">No HP*</label>
                <input class="form-control <?php echo form_error('no_hp') ? 'is-invalid':'' ?>"
                 type="text" name="no_hp" min="0" <?php echo set_value('no_hp') ?> placeholder="phone" />
                <div class="invalid-feedback">
                  <?php echo form_error('no_hp') ?>
                </div>
              </div>
            </div>

            <div class="col-md-2"> 
               <div class="form-group">
                <label for="email">Email*</label>
                <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                 type="email" name="email" min="0" <?php echo set_value('email') ?> placeholder="email" />
                <div class="invalid-feedback">
                  <?php echo form_error('email') ?>
                </div>
              </div>
              </div>

               <div class="col-md-2"> 
               <div class="form-group">
                <label for="NIDN">NIDN/NIDK*</label>
                <input class="form-control <?php echo form_error('NIDN') ? 'is-invalid':'' ?>"
                 type="text" name="NIDN" min="0" <?php echo set_value('NIDN') ?> placeholder="NIDN/NIDK anda" />
                <div class="invalid-feedback">
                  <?php echo form_error('NIDN') ?>
                </div>
              </div>
              </div>


            </div>
          
           

              

              <div class="row">
                <div class="col-md-8">
              <div class="form-group">
                <label for="universitas">Universitas*</label>
                <input class="form-control <?php echo form_error('universitas') ? 'is-invalid':'' ?>"
                 type="text" name="universitas" min="0" <?php echo set_value('universitas') ?> placeholder="universitas" />
                <div class="invalid-feedback">
                  <?php echo form_error('universitas') ?>
                </div>
              </div>
              </div>

              <div class="col-md-4"> 
              <div class="form-group">
                <label for="kode_pt">Kode Perguruan Tinggi*</label>
                <input class="form-control <?php echo form_error('kode_pt') ? 'is-invalid':'' ?>"
                 type="text" name="kode_pt" min="0" <?php echo set_value('kode_pt') ?> placeholder="kode" />
                <div class="invalid-feedback">
                  <?php echo form_error('kode_pt') ?>
                </div>
              </div>
            </div>
            </div>

                 <div class="form-group">
                <label for="alamat">Kode - Matakuliah yang diampu*</label>
                <input class="form-control <?php echo form_error('matakuliah') ? 'is-invalid':'' ?>"
                 type="text" name="matakuliah" min="0" <?php echo set_value('matakuliah') ?> placeholder="kode - matakuliah" />
                <div class="invalid-feedback">
                  <?php echo form_error('matakuliah') ?>
                </div>
              </div>

                 <div class="form-group">
                <label for="karir">Karir akademik yang membanggakan*</label>
                <textarea class="form-control <?php echo form_error('karir') ? 'is-invalid':'' ?>"
                 name="karir"  placeholder="karir akademik..."><?php echo set_value('karir') ?></textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('karir') ?>
                </div>
              </div>

                <div class="form-group">
                <label for="penelitian">Penelitian yang menonjol*</label>
                <textarea class="form-control <?php echo form_error('penelitian') ? 'is-invalid':'' ?>"
                 name="penelitian" placeholder="Penelitian.."><?php echo set_value('penelitian') ?></textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('penelitian') ?>
                </div>
              </div>

                <div class="form-group">
                <label for="karir">Prestasi akademik*</label>
                <textarea class="form-control <?php echo form_error('prestasi') ? 'is-invalid':'' ?>"
                 name="prestasi" placeholder="prestasi..."><?php echo set_value('prestasi') ?></textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('prestasi') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="image">Photo<small> max : 5 Mb</small></label>
                <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
                 type="file" name="image" />
                <div class="invalid-feedback">
                  <?php echo form_error('image') ?>
                </div>
              </div>

           

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * Wajib dilengkapi
          </div>


        </div>
        <!-- /.container-fluid -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>