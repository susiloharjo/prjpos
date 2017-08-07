<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <style media="screen">
    body {
      margin-top: 80px;
    }
  </style>
  <body>
    <!-- navbar -->

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input class="form-control" placeholder="Search" type="text">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>
    </div>
  </div>
</nav>



    <!-- end navbar -->


    </div>
    <ul></ul>
    <div class="container-fluid">

    <!-- tutorial http://technotip.com/2294/fetch-json-array-elements-using-jquery-ajax-method-getjson/   -->
    <div id="myData">

    </div>
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    // $.getJSON('http://localhost/pos/api/project/data.json', function(data) {
    //   console.log(data);
    //
    // });

    $.ajax({
      url:'http://localhost/pos/api/project/data.json',
      dataType:'json',
      type:'get',
      cache:false,
      success : function(data) {
        // console.log(data);
        $(data).each(function (index,value) {
          console.log(value.nama);
        });
      }

    });

    </script>

    <script type="text/javascript">

    $.ajax({
      url:'http://localhost/pos/api/project/data.json',
      dataType:'json',
      type:'get',
      cache:false,
      success : function(data) {
        // console.log(data);
        $.each(data, function( index, value ) {
               var row =
               $("<div class='col-lg-4'> <div class='panel panel-success'> <div class='panel-heading'> <h3 class='panel-title'>"
               + value.nama +
               "</h3></div><div class='panel-body'> " +
               "Nama Project : "
               + value.nama +
               "<br>" +
               "Perusahaan : "
               + value.perusahaan +
               "<br>" +
               "Keterangan : "
               + value.keterangan +
               "</div></div></div>");

              //  show data by id
               $("#myData").append(row);
            });
      }



    });

//
// $(document).ready( function() {
// $.getJSON("http://localhost/pos/api/project/data.json", function(data){
//      $.each(data.person, function(){
//          $("ul").append("<li>Name: "+this['nama']+"</li>
//                               <li>Age: "+this['perusahaan']+"</li>
//                               <br />");
//    });
// });
    </script>

  </body>
</html>
