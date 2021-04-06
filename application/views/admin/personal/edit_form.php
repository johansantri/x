<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Hello, world!</title>
  </head>
  <body>


  <div class="container-fluid">

      


        <!-- Card  -->
        <div class="card mb-3">
          <div class="card-header">

            <a href="<?php echo site_url('admin/personal/') ?>"><i class="fas fa-arrow-left"></i>
              Back</a>
          </div>
          <div class="card-body">

            <form action="<?php base_url(" admin/personal/edit") ?>" method="post"
              enctype="multipart/form-data" >

              <input type="hidden" name="id" value="<?php echo $personal->nomor_id?>" />

              <div class="form-group">
                <label for="name">Name*</label>
                <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                 type="text" name="nama" placeholder="Product name" value="<?php echo $personal->nama ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('nama') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control <?php echo form_error('no_hp') ? 'is-invalid':'' ?>"
                 type="number" name="no_hp" min="0" placeholder="Product price" value="<?php echo $personal->no_hp ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('no_hp') ?>
                </div>
              </div>


              <div class="form-group">
                <label for="name">Photo</label>
                <input class="form-control-file <?php echo form_error('poto') ? 'is-invalid':'' ?>"
                 type="file" name="poto" />
                <input type="hidden" name="old_poto" value="<?php echo $personal->poto ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('poto') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="name">Description*</label>
                <textarea class="form-control <?php echo form_error('tentang') ? 'is-invalid':'' ?>"
                 name="tentang" placeholder="Product description..."><?php echo $personal->tentang ?></textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('tentang') ?>
                </div>
              </div>

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>


        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        

      </div>
      <!-- /.content-wrapper -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>