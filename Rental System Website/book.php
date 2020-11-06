
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>MOVERS COMPANION</title>
	<!--ADDING CSS HERE-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>


	<!--new stuff-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
			<link rel="stylsheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!--Resource Files For Slider-->
	<!--Start WOWSlider.com HEAD section-->
	<link rel="stylesheet" type="text/css" href="assets/slider/engine1/style.css">
	<script type="text/javascript" src="assets/slider/engine1/jquery.js"></script>
	<!--END WOWSlider.com HEAD section-->
</head>
<body>
		<!--Header starts here-->
	<header class="header">
		<div class="wrapper">
			<h1>MOVERS COMPANION</h1>
		</div>

		<!--Menu starts here-->
		<section id="nav-bar">
			<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="#"><img src="img/logo.jpg"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item">
				<a href="index.php"><li>Home</li></a>
				</li>
				<li class="nav-item">
				<a href="about.html"><li>About Us</li></a>
				</li>
				<li class="nav-item">
				<a href="book.php"><li>Apartment To Rent</li></a>
				</li>
				<li class="nav-item">
				<a href="contact.html"><li>Contact Us</li></a>
				</li>
				<li class="nav-item">
				<a href="services.html"><li>Services</li></a>
				</li> 
				<li class="nav-item">
				<a href="login.html"><li>Log in</li></a>
				</li> 
				</ul>
			</div>
			</nav>
			</section>

	<!--Menu Ends Here-->

	</header>
	<!--body starts here-->
	<div class="main">
		<div class="Wrapper">
			<div class="book-house">

			<!--HOUSE DETAILS HERE-->
			<img src="images/hse1.jpg" /> 
			<span class="house-added">20-10-2019</span><br />
			<span class="house-location">Rosettenville</span><br />
			<span class="house-price">1800 ZAR</span><br />
			<p>
				Available immediately, Newly Built rooms, Spacious, 1 Shower + 1 Toilet, Secured, Secured parking,Prepared electricity. Landlord looking for a person with sober habits.<br />This is for a maximum of 2 tenants. Visitors allowed upon a week notice to caretaker.<br /> Close to:school, Spar ,Mcdonalds and Centro Shopping mall, Metrobus and taxi’s
			</p>
			</div>
			<!--Client Booking details-->
			<div class="booking-details">
				<h3>Your Booking Details</h3>
				<form method="post" action="" id="booking">
					<span class="name">First Name</span>
					<input type="text" name="first_name" id="first_name" placeholder="First Name Please" /><br />

					<span class="name">Last Name</span>
					<input type="text" name="last_name" id="last_name" placeholder="Last Name Please" /><br />

					<span class="name">Nick Name</span>
					<input type="text" name="nick_name" id="nick_name" placeholder="Nick Name Please" /><br />


					<span class="name">E-Mail</span>
					<input type="email" name="e-mail" placeholder="E-Mail Please" /><br />

					<span class="name">Contact NO.</span>
					<input type="tel" name="contact no." placeholder="Contact Number Please" /><br />

					<span class="name">Address</span>
					<textarea name="address" placeholder="Your Address Please"></textarea><br />

					<input type="submit" name="submit" id="submit" placeholder="BOOK NOW" />
					<input type="reset" name="reset" placeholder="RESET" />
				</form>
				<?php
					if (isset($_POST['submit'])){
						$firstName = $_POST['last_name'];
						$lastName = $_POST['last_name'];
						$email = $_POST['last_name'];
						$contact = $_POST['last_name'];
						$address = $_POST['last_name'];
							

						print_r($_POST);

						if (!empty($firstName)){
							echo "send email";
							$message = '';

							echo "submit pressed ".$firstName;


							$subject = "Booking";
							//construct message here
							$message .= "Booking by ". $firstName."\n";
							$message .= "Booking by ". $firstName."\n";
							$message .= "Booking by ". $firstName."\n";


							sendMail($email, $subject, $message);

						}
					}

					function sendMail($email, $subject, $message){
							$to = "bookingphp@mailinator.com";
							$subject = $subject;
							$txt = $message;
							$headers = "From: webmaster@example.com" . "\r\n" .
							"CC: somebodyelse@example.com";

							mail($to,$subject,$txt,$headers);
					}
				?>
			</div>
		</div>
	</div>

	<!---------
			<p  style="   margin: 12px auto 6px auto;   font-family: Helvetica,Arial,Sans-serif;   font-style: normal;   font-variant: normal;   font-weight: normal;   font-size: 14px;   line-height: normal;   font-size-adjust: none;   font-stretch: normal;   -x-system-font: none;   display: block;"   ><a title="View Pre-Agreement Landlord and Agent Movers on Scribd" href="https://www.scribd.com/document/423784218/Pre-Agreement-Landlord-and-Agent-Movers#from_embed"  style="text-decoration: underline;">Pre-Agreement Landlord and ...</a> by <a title="View Kudzanai Gomera's profile on Scribd" href="https://www.scribd.com/user/474168785/Kudzanai-Gomera#from_embed"  style="text-decoration: underline;">Kudzanai Gomera</a> on Scribd</p><iframe class="scribd_iframe_embed" title="Pre-Agreement Landlord and Agent Movers" src="https://www.scribd.com/embeds/423784218/content?start_page=1&view_mode=scroll&show_recommendations=false&access_key=key-zR3luKdAMn7y3ST1QF7o" data-auto-height="true" data-aspect-ratio="0.7080062794348508" scrolling="no" width="100%" height="600" frameborder="0"></iframe>
		-------->

	<!--Footer starts here-->
	<footer class="footer">
		<div class="Wrapper">
			<p>&copy; <a href="#">MOVERS COMPANION</a>. All rights reserved 2019.</p>
			<a href="data:application/pdf;base64,[base64]" download="images/Pre-agreement landlord and agent movers.pdf">test</a>
		</div>
	</footer>
	<script type="text/javascript" src="assets/js/test.js"></script>
	<!--footer ends here-->
</body>
</html>