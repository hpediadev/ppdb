<!DOCTYPE html>

<html>

<head>

    <title>Cara Membuat File Zip Download Dengan Codeigniter</title>  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   

</head>

<body>

 <div class="container box">

  <form method="post" action="<?= base_url('adminppdb/')?>zip_file/download">

    <div class="row">

      <h3 align="center">Cara Membuat File Zip Download Dengan Codeigniter</h3>

        <?php foreach($images as $image){

         echo '

         <div class="col-md-2" align="center" style="margin-bottom:24px;">

          <img src="'.base_url($image).'" class="img-thumbnail img-responsive" width="50px" />

           <br />

          <input type="checkbox" name="images[]" class="select" value="'.$image.'" />

         </div>

         ';

        } ?>

    </div>

    <div class="row" align="center">

      <div class="col-12">

        <input type="submit" name="download" class="btn btn-primary" value="Download Zip" />

      </div>

    </div>

  </form>

 </div>

</body>

</html>

 

<script>

$(document).ready(function(){

 $('.select').click(function(){

  if(this.checked){

   $(this).parent().css('border', '1px solid #ff0000');

  }else{

   $(this).parent().css('border', 'none');

  }

 });

});

</script>

