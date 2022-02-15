<?php
include 'rclheader3.php'
?>

<!-- Hero Section -->
<section class="hero" id="hero">
<h2 class="hero_header">SERVICES</h2>
<p class="tagline">The R&amp;C Library lends out a maximum of <br/>three items at one time.</p>
</section>


<?php

if (isset($_POST['unsubscribe'])) {

$borrowerid = mysqli_real_escape_string($con, $_POST['borrower_id']);

$sql = "DELETE FROM borrowers
  WHERE borrow_id = '$borrowerid';"
;

mysqli_query($con,$sql)
or die('Error: Could not execute.' . mysql_error());

echo "<center>You have successfully been removed from our patron list. Best wishes!</center>";
}

mysqli_close($con);

?>

<?php
include 'rclfooter.php'
?>
