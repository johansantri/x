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
              <div class="row">
                <div class="col-md-6"> 
              <div class="form-group">
                <label for="name">Name*</label>
                <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
                 type="text" name="name" placeholder="Product name" value="<?php echo $personal->name ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('name') ?>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
                <label for="no_hp">Phone</label>
                <input class="form-control <?php echo form_error('no_hp') ? 'is-invalid':'' ?>"
                 type="number" name="no_hp" min="0" placeholder="phone" value="<?php echo $personal->no_hp ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('no_hp') ?>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                 type="email" name="email" min="0" placeholder="email" value="<?php echo $personal->email ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('email') ?>
                </div>
              </div>
              </div>

            


               <div class="col-md-2">
              <div class="form-group">
                <label for="jk">Gender</label>
                <select class="form-control <?php echo form_error('jk') ? 'is-invalid':'' ?> " type="text" name="jk">
                  <option value="<?php echo $personal->jk ?>"><?php echo $personal->jk ?></option>
                  <option value="male">male</option>
                  <option value="female">female</option>
                </select>
               
                <div class="invalid-feedback">
                  <?php echo form_error('jk') ?>
                </div>
              </div>
              </div>



            </div>
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                <label for="jabatan">Position</label>
                <input class="form-control <?php echo form_error('jabatan') ? 'is-invalid':'' ?>"
                 type="text" name="jabatan" min="0" placeholder="Position" value="<?php echo $personal->jabatan ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('jabatan') ?>
                </div>
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <label for="institusi">Company</label>
                <input class="form-control <?php echo form_error('institusi') ? 'is-invalid':'' ?>"
                 type="text" name="institusi" min="0" placeholder="Company" value="<?php echo $personal->institusi ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('institusi') ?>
                </div>
              </div>
              </div>
            </div>
           
                <div class="form-group">
                <label for="alamat">Address</label>
                <input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                 type="text" name="alamat" min="0" placeholder="address" value="<?php echo $personal->alamat ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('alamat') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="name">Profile*</label>
                <textarea class="form-control <?php echo form_error('tentang') ? 'is-invalid':'' ?>"
                 name="tentang" placeholder="Description..."><?php echo $personal->tentang ?></textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('tentang') ?>
                </div>
              </div>


                 <div class="form-group">
                <label for="name">Photo</label>
                <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
                 type="file" name="image" />
                <input type="hidden" name="old_image" value="<?php echo $personal->image ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('image') ?>
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