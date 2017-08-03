<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error 404</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style media="screen">
      body {
        background-color: #95C2C7;
      }

      .tgh {
        margin-left: 40%;
        margin-top: 10%;
        font-family: 'Anton', sans-serif;
        font-size: 30px;
        width: 200px;
      }
      .tgh img {
        width: 200px;
        height: auto;
        margin-left: 20px;
      }

      .title {
        margin-left: -18%;
      }

      .btn {
        margin-left: 35%;
      }
    </style>
  </head>
  <body>
    <div class="tgh">
      <img src="<?php echo base_url() ?>assets/images/404.png" alt="">
      <p class = "text-center">Error 404</p>
      <p class = "text-center">Halaman yang anda cari tidak diketemukan </p>
      <a href="<?php echo base_url() ?>" class=" btn btn-danger ">Back</a>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
