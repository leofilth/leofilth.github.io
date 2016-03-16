<!DOCTYPE html>
<html lang="es-ES">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Pescador Artesanal</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}

  .bg-im{
    background: url(images/bg.jpg) no-repeat center center fixed;
    background-size: cover;
   }
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 15px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  .margen{
   background: rgba(0, 0, 0, 0.6); 
   margin-bottom: 45px; 
text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
padding: 16px 30px;
width: auto;
}
.sinpading{
padding-left: 0px;
    padding-right: 0px;
}
.imgg:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .5);
}
.thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
}

.thumbnail img {
    width: 70%;
    height: 70%;
    margin-bottom: 10px;

}
.thumbnail:hover  img{
transform: scale(1.1, 1.1);
}
.keep{
overflow: hidden;
}
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="productos.php"><span class="glyphicon glyphicon-shopping-cart"></span> Productos</a></li>
        <li><a href="contacto.php"><span class="glyphicon glyphicon-envelope"></span> Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>