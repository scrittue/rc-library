<?php
  include 'rclheader3.php'
?>

	  <!-- Hero Section -->
  <section class="hero" id="hero">
    <h2 class="hero_header">SERVICES</h2>
    <p class="tagline">The R&amp;C Library lends out a maximum of <br/>three items at one time.</p>
  </section>

	<!--Form-->
	<h3>Request an Item</h3>
	<hr/>

	<!--Name of the file in action needs to be updated-->
	<form method="post" action="rclloansubmit.php">
		<button type="button" class="collapsible">Item 1</button>
		<div class="content">
			<section>
				<h5>Your Info</h5>

				<p>
					<label for="borrower_firstname">First Name: </label><input type="text" name="borrower_first_name" placeholder="First Name" id="borrower_firstname" autofocus="autofocus"/>

					<label for="borrower_lastname">Last Name: </label><input type="text" name="borrower_last_name" placeholder="Last Name" id="borrower_lastname"/>
				</p>

				<p>
					<label for="borrower_phone">Telephone Number: </label><input type="tel" name="borrower_phone" placeholder="1234567890" id="borrower_phone"/>
				</p>

			</section>

			<br/>

			<section>
				<h5>Book or Music?:</h5>

				<input type="radio" name="item1_book_or_music" value="book" id="item1_book"/><label for="item1_book">Book</label>

				<br/>

				<input type="radio" name="item1_book_or_music" value="music" id="item1_music"/><label for="item1_music">Music</label>
			</section>

			<br/>

			<section>
				<h5>Author/Composer</h5>
				<p>
					<label for="item1_firstname">First Name: </label><input type="text" name="item1_first_name" placeholder="First Name" id="item1_firstname"/>

					<label for="item1_lastname">Last Name: </label><input type="text" name="item1_last_name" placeholder="Last Name" id="item1_lastname"/>
				</p>
			</section>

			<br/>

			<section>
				<h5>Title</h5>

				<p>
					<label for="item1_title">Title: </label><input type="text" name="item1_title" placeholder="e.g. Hamlet" id="item1_title"/>
				</p>
			</section>
		</div>

		<button type="button" class="collapsible">Item 2</button>
		<div class="content">
		  <section>
				<h5>Book or Music?:</h5>

				<input type="radio" name="item2_book_or_music" value="book" id="item2_book"/><label for="item2_book">Book</label>

				<br/>

				<input type="radio" name="item2_book_or_music" value="music" id="item2_music"/><label for="item2_music">Music</label>
			</section>

			<br/>

			<section>
				<h5>Author/Composer</h5>
				<p>
					<label for="item2_firstname">First Name: </label><input type="text" name="item2_first_name" placeholder="First Name" id="item2_firstname"/>

					<label for="item2_lastname">Last Name: </label><input type="text" name="item2_last_name" placeholder="Last Name" id="item2_lastname"/>
				</p>
			</section>

			<br/>

			<section>
				<h5>Title</h5>

				<p>
					<label for="item2_title">Title: </label><input type="text" name="item2_title" placeholder="e.g. Hamlet" id="item2_title"/>
				</p>
			</section>
		</div>

		<button type="button" class="collapsible">Item 3</button>
		<div class="content">
		  <section>
				<h5>Book or Music?:</h5>

				<input type="radio" name="item3_book_or_music" value="book" id="item3_book"/><label for="item3_book">Book</label>

				<br/>

				<input type="radio" name="item3_book_or_music" value="music" id="item3_music"/><label for="item3_music">Music</label>
			</section>

			<br/>

			<section>
				<h5>Author/Composer</h5>
				<p>
					<label for="item3_firstname">First Name: </label><input type="text" name="item3_first_name" placeholder="First Name" id="item3_firstname"/>

					<label for="item3_lastname">Last Name: </label><input type="text" name="item3_last_name" placeholder="Last Name" id="item3_lastname"/>
				</p>
			</section>

			<br/>

			<section>
				<h5>Title</h5>

				<p>
					<label for="item3_title">Title: </label><input type="text" name="item3_title" placeholder="e.g. Hamlet" id="item3_title"/>
				</p>
			</section>
		</div>

		<div class="submit">
			<p>
				<input type="submit" name="submit-transaction" value="Submit" id="submit" class="collapsible"/>
			</p>
		</div>
	</form>
	<!--End Form-->

  <?php
  include 'rclfooter.php'
  ?>
