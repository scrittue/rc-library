<?php
  include 'rclheader3.php'
?>

	  <!-- Hero Section -->
  <section class="hero" id="hero">
    <h2 class="hero_header">SEARCH THE R&C COLLECTION</h2>
    <p class="tagline">You may search our collection of books and music through this form.</p>
    <p class="tagline">Search by title, first name, or last name.</p>
  </section>

	<!--Form-->
  <center><form id="search-form" name="search" method="POST" action="rclsearch.php">
  <table border="5" cellspacing="10" cellpadding="5">
    <tr>
      <th><h3>Collection Type:</h3></th></tr>
      <br />
      <tr><td><input type="radio" id="radio" name="collection" value="books">Books</td></tr>
      <tr><td><input type="radio" id="radio" name="collection" value="music">Music</td></tr>
      <br />
  <tr><td><input type="text" name="search" placeholder="Search"></td></tr>
  <br />
  <tr><td><center><button type="submit" name="submit-search">Search</button></center></td></tr>
</form>
</table>
<br /></center>
	<!--End Form-->

  <?php
  include 'rclfooter.php'
  ?>
