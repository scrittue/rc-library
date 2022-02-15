<?php
include 'rclheader3.php'
?>

<!-- Hero Section -->
<section class="hero" id="hero">
<h2 class="hero_header">SERVICES</h2>
<p class="tagline">The R&amp;C Library lends out a maximum of <br/>three items at one time.</p>
</section>

<?php

$borrowid = mysqli_real_escape_string($con, $_POST['borrow_id']);
$newphone = mysqli_real_escape_string($con, $_POST['newphone']);

$sql = "UPDATE borrowers SET phone = '$newphone'
  WHERE borrow_id = '$borrowid';"
;

mysqli_query($con,$sql)
or die('Error: Could not execute.' . mysql_error());

echo "<center>Thank you for updating your phone number! Your patron information has been updated.</center>";

mysqli_close($con);

?>


 <?php
 include 'rclfooter.php'
 ?>
