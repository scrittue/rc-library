<?php
  include 'db.php';
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>R&C Library</title>
<link href="../css/RCLCollection.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <!-- Main Container -->
  <div class="container">
    <!-- Navigation -->
    <header> <a href="rclhome.php">
      <h4 class="logo">R&amp;C LIBRARY</h4>
      </a>
      <nav>
        <ul>
          <li><a href="rclsearchpage.php">SEARCH</a></li>
      <li><a href="rclabout.php">ABOUT</a></li>
      <div class="dropdown">
          <button class="dropbtn">SERVICES
        </button>
       <div class="dropdown-content">
         <a href="rclregister.php">REGISTER</a>
         <a href="rclcheckout.php">CHECK OUT</a>
      </div>
       </div>
        <div class="dropdown">
            <button class="dropbtn">COLLECTION
          </button>
         <div class="dropdown-content">
           <a href="rclbooks.php">BOOKS</a>
           <a href="rclmusic.php">MUSIC</a>
        </div>
         </div>
        </ul>
      </nav>
    </header>
