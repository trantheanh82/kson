<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="/html/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="/html/images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>inteshape Template | Home Page Style 1</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="/html/css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="/html/css/fontawesome/css/font-awesome.min.css" />
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="/html/css/style.css">

    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

  <style>
    body{
      background:transparent url('/assets/kson/img/background-select-language-2.jpg');
      background-size:100%;
      background-repeat:no-repeat;
    }

    body:after{
      background: rgba(255,255,255, 0.40);
      content: "";
      height: 100%;
      left: 0;
      position: absolute;
      top: 0;
      width: 100%;
      z-index: -1;
    }

    .site-button {
      background-color: #ffffff;
      color: #1b1b1b;
      border: 2px solid #737373;
  }

  @media only screen and (max-width:768px){
    body{
      background:transparent url('/assets/kson/img/background-select-language-2.jpg');
      background-position:left;
      background-size: 100%;
      background-repeat:no-repeat;
    }
  }
  </style>

</head>
<body>
<?php echo $the_view_content ?>
</body>
</html>
