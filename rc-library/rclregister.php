<?php
  include 'rclheader3.php'
?>

	  <!-- Hero Section -->
  <section class="hero" id="hero">
    <h2 class="hero_header">SERVICES</h2>
    <p class="tagline">The R&C Library welcomes patrons from all around the Pioneer Valley.
    <br /> Register today!</p>
  </section>

<section>
	<!--Registration Form-->
  <center>
    <h3>Registration</h3>
	<hr/>

	<form action="registersuccess.php" method="post">

		First Name: <input type="text" name="firstname" />
		Last Name: <input type="text" name="lastname" />
		Phone Number: <input type="text" name="phone" />
		<div class="submit">
			<p>
				<input type="submit" name="button" value="Register" id="submit" class="collapsible"/>
			</p>
		</div>

	</form>
</center>

	<!--End Form-->

  <!--Patron Update Form-->
<center>
    <h3>Update Your Phone Number</h3>
    <h1>Please provide your Borrower ID number or your registered patron information, along with the new phone number, to update your record.</h1>
  <hr/>

  <form action="rclupdate.php" method="post">
    Borrower ID: <input type="text" name="borrow_id" />
    <br />
    First Name: <input type="text" name="firstname" />
    Last Name: <input type="text" name="lastname" />
    Phone Number: <input type="text" name="phone" />
    <br />
    NEW Phone Number: <input type="text" name="newphone" />
    <div class="submit">
      <p>
        <input type="submit" name="button" value="Update" id="submit" class="collapsible"/>
      </p>
    </div>

  </form>
</center>
  <!--End Form-->
</section>

  <!--Patron Removal Form-->
  <section class="unsubscribe"><center>
    <h3>Unsubscribe</h3>
    <h2>We're sorry to see you go, but hope you find a home in another library in your community!</h2>
    <h2>To be sure we are unsubscribing the right patron, we only allow unsubscription through Borrower ID number. Give us a call if you don't know yours!</h2>
  <hr/>

  <form action="rclremove.php" method="post">
    Borrower ID: <input type="text" name="borrower_id" />
    <br />
    <div class="submit">
      <p>
        <input type="submit" name="unsubscribe" value="Unsubscribe" id="submit" class="collapsible"/>
      </p>
    </div>

  </form>
</center>
</section>

  <!--End Form-->



  <?php
  include 'rclfooter.php'
  ?>
