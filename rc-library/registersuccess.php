<?php
  include 'rclheader3.php'
?>

<!-- Hero Section -->
<section class="hero" id="hero">
<h2 class="hero_header">SERVICES</h2>
<p class="tagline">The R&amp;C Library lends out a maximum of <br/>three items at one time.</p>
</section>

<?php

$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);


$sql = "INSERT INTO borrowers (firstname, lastname, phone)
VALUES ('$firstname', '$lastname', '$phone')"
;

mysqli_query($con,$sql)
or die('Error: Could not execute.' . mysql_error());

$register = "SELECT borrow_id FROM borrowers
  WHERE firstname = '$firstname'
  AND lastname = '$lastname'
  AND phone = '$phone'"
  ;

$result = mysqli_query($con, $register);
$queryResult = mysqli_num_rows($result);

if ($queryResult > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
echo "<center><p>Thank you for registering! Your information has been added to our patron list</p>";
echo "<p>Your Borrower ID is " . $row['borrow_id'] . ".</center></p>";
}
}

mysqli_close($con);

?>

<?php
include 'rclfooter.php'
?>
