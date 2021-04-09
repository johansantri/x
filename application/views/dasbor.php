<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
   
    <title>Hello, world!</title>
  </head>
  <body>


        <!-- DataTables -->
        <div class="card mb-3">
          <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#"><img src="<?php echo base_url()?>upload/iceeeee.jpg" width="30" height="30" alt="" >&nbsp; &nbsp;ICE-I</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Biografi</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" id="key" placeholder="Search" name="key" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" id="cari" type="submit">Search</button>
    </form>
  </div>
</nav>

<hr>
<br>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<br>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<br>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<div class="container" >

<div class="row" id="container">
  
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></script>
    <script type="text/javascript">
     $(document).ready( function () {
    $('#dataTable').DataTable();
} );
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
 

$('#cari').click(function () {
$('#messages1 tbody').empty();

  var searchField = $('#key').val();

  if (searchField == " ") {

    $("input").attr("placeholder", "nama").val("").focus().blur();

    $("#cari").attr("disabled", true);
    $('#messages1').append("<tr><td style='text-align:center' colspan='8'> <b >-----------------------</b></td></tr>");
    setTimeout(function () {

      $("#cari").attr("disabled", false);
      $('#messages1 tbody').empty();
      /*$('#messages1 thead').empty();*/
      /* $("input").prop('disabled', false);*/
      $("input").focus();
    }, 1000);


  } else {

    $.ajax({
      type: "POST",
      url: './dasbor/cariKey/'+ searchField,
      data: { "key": searchField },
      dataType: "json",
      cache : false,
      success: function (data) {
      
        /*  $('#asu').append("");*/
        $.each(data, function (key, value) {
          /*$("input").prop('disabled', true);*/
          //show complate seaerch

          $('#container').append(
   "<div class='col-md-4'><div class='card-deck'><div class='card border-dark'><div class='row'><div class='col-md-4'><a href=''> <img class='card-img-top' src='./upload/personal/"+value.image+"' style=' border: 1px solid #ddd; border-radius: 4px; padding: 5px;width: 100%; height: 90%' alt='"+value.name+"'></a> </div><div class='col-md-8'> <div class='card-body'><h6 class='card-title'><a href='./dasbor/detail/"+value.name+"'><i class='fa fa-user' aria-hidden='true'> "+value.name+"</i></a></h6><p style='margin: 0.2px 0;'><small class='card-text'><i class='fa fa-envelope' aria-hidden='true'> "+value.email+"</i> </small></p> <p style='margin: 0.2px 0;'><small class='card-text'><i class='fa fa-phone' aria-hidden='true'> "+value.no_hp+"</i> </small></p> <p style='margin: 0.2px 0;'><small class='card-text'><i class='fa fa-map-marker' aria-hidden='true'> "+value.alamat+"</i></small></p>    </div>  </div>  </div>     <div class='card-footer' style='text-align: center;'>   <small>"+value.jabatan+" ^ "+value.institusi+"</small> </div> </div></div> <br></div>"
          );

        });
        $("input").focus();
      }
    })
    .done(function (data) {
    console.log("success");
    })
    .fail(function () {
      console.log("error");
    })
    .always(function () {
      console.log("complete");
    });
  }
  $('#key').val("");
  return false;

});



    </script>
  </body>
</html>