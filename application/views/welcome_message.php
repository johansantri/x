<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <style type="text/css">
    	
    	.dropzone,.dropzone *{box-sizing:border-box}.dropzone{position:relative}.dropzone .dz-preview{position:relative;display:inline-block;width:120px;margin:0.5em}.dropzone .dz-preview .dz-progress{display:block;height:15px;border:1px solid #aaa}.dropzone .dz-preview .dz-progress .dz-upload{display:block;height:100%;width:0;background:green}.dropzone .dz-preview .dz-error-message{color:red;display:none}.dropzone .dz-preview.dz-error .dz-error-message,.dropzone .dz-preview.dz-error .dz-error-mark{display:block}.dropzone .dz-preview.dz-success .dz-success-mark{display:block}.dropzone .dz-preview .dz-error-mark,.dropzone .dz-preview .dz-success-mark{position:absolute;display:none;left:30px;top:30px;width:54px;height:58px;left:50%;margin-left:-27px}

    </style>

    <title>Hello, world!</title>
  </head>
  <body>
  	<div class="container">
  <h1>&nbsp;</h1>
		<div class="jumbotron">
		<h1 class="display-4">Hello, Document Code!</h1>
		<p class="lead">This is a simple hero unit, a simple multiple upload codeigniter jquery ajax.</p>
		
		<div class="dropzone" style="margin-top: 100px;
	border: 1px dashed #0087F7;">

		  <div class="dz-message" style="text-align: center;" >
		  <a class="btn btn-primary btn-sm"  href="#" role="button"><i class="fa fa-upload" aria-hidden="true"></i>
<i class="fa fa-download" aria-hidden="true"></i>
</a>
		  
		  </div>

		</div>
		
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.js"></script>
    <script type="text/javascript">

Dropzone.autoDiscover = false;

var foto_upload= new Dropzone(".dropzone",{
url: "<?php echo base_url('welcome/process_upload') ?>",
maxFilesize: 2,
method:"post",
acceptedFiles:"image/*",
paramName:"userfile",
dictInvalidFileType:"Type file not allowed",
addRemoveLinks:true,
});


//Event ketika Memulai mengupload
foto_upload.on("sending",function(a,b,c){
	a.token=Math.random();
	c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
});


//Event ketika foto dihapus
foto_upload.on("removedfile",function(a){
	var token=a.token;
	$.ajax({
		type:"post",
		data:{token:token},
		url:"<?php echo base_url('welcome/remove_foto') ?>",
		cache:false,
		dataType: 'json',
		success: function(){
			console.log("remove poto success");
		},
		error: function(){
			console.log("Error");

		}
	});
});


</script>
  </body>
</html>