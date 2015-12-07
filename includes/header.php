<?php
  if(basename($_SERVER['PHP_SELF']) == "index.php")
    $home = true;
  else
    $home = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hilltop Studios</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body<?php if($home){ ?> class="homepage"<? }?>>
  <?php if($home){?>
  <div id="video-wrap" class="video-wrap">
      <div class="slider">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 text-center">
                      <a class="btn btn-primary btn-large">About Us</a>
                      <a class="btn btn-outline btn-large">Book Us</a>
                  </div>
              </div>
          </div>
      </div>

      <video preload="metadata" autoplay loop id="my-video">
          <source src="assets/videos/stock.mp4" type="video/mp4">
          <source src="assets/videos/stock.mp4" type="video/webm">
      </video>
  </div>
  <? } ?>
  <header>
      <nav class="navbar navbar-default">
          <div class="container">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img class="logo" src="assets/img/logo.png" /></a>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a>Services</a></li>
                      <li><a>About Us</a></li>
                      <li><a>Studio</a></li>
                      <li><a>Contact</a></li>
                      <?php if(!$home){?><li><a class="btn btn-primary">Book Us</a></li><? }?>
                  </ul>
              </div>
          </div>
      </nav>
  </header>
