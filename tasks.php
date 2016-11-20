<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Volunteer tasks</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<header>
			<img src="helpinghands.png" alt="Helping Hands">
		</header>
		<nav>
			<?php require_once 'inc/nav.php'; ?>
		</nav>
		<main>
			<h1>Volunteer opportunities</h1>
				<p>We offer a wide range of services to our community
				and we invite you to join us in our mission to help
				families and individuals who are struggling. Why not 
				lend a helping hand? Sign up on the form below if you 
				are interested.</p>
			<h2>Adult Literacy Program</h2>
				<p>Our adult literacy program pairs volunteers with individuals
				in the community who are struggling with learning to read. Volunteers
				can make themselves available for hour-long sessions either once a week
				or several times a week with one or multiple clients.</p>
			<h2>Beach Clean up</h2>
				<p>Our beach cleanup crew meets once a month depending on the 
				availability of volunteers. The clean up is set around volunteer
				schedules. Beach clean up volunteers are responsible for gathering
				and disposing garbage that amasses on our beaches.</p>
			<h2>Food Pantry</h2>
				<p>Our food pantry serves nearly 45 families per day and we receive
				hundreds of pounds of donations per week. Our food pantry volunteers 
				dilligently sort food donations, throw away expired or opened donations,
				and pack grocery bags for food insecure families.</p>
			<h2>Meal Delivery</h2>
				<p>In addition to our food pantry, we also deliver food assistance to
				homebound individuals in our community. Volunteers can write the mileage 
				and maintenance off of their taxes as a charitable donation. Our drivers
				can deliver meals during the week or on the weekends.</p>
			<h2>Casework</h2>
				<p>Our devoted caseworkers meet with families during the week to offer
				free counseling and advice to those who are struggling with employment
				issues, food insecurity or financial problems. Caseworkers are responsible
				for interviewing families, assessing their needs and determining action
				plans for short-term and long-term assistance.</p> 
				
			<h1>Sign up to volunteer</h1>
			
			<form action="volunteer_process.php" method="post">
First name:<br>
  <input type="text" name="firstname"><br>
Last name:<br>
  <input type="text" name="lastname"><br>
E-mail:<br> 
  <input type="email" name="email"><br>
Select one of the following volunteer opportunities below:<br>
<select name="tasklist">
  <option value=""></option>
  <option value="literacy">Adult literacy program</option>
  <option value="beach">Beach cleanup</option>
  <option value="pantry">Food pantry volunteer</option>
  <option value="delivery">Meal delivery to home-bound individuals</option>
  <option value="casework">Become a volunteer caseworker</option>
</select><br>

Please select the date you are available to volunteer: <br>
<input type="date" name="volunteerdate"><br>

Please select the time you are available to volunteer: <br>
<input type="time" name="timestart"> to 
<input type="time" name="timeend"><br>

<input type="submit">
</form>
			
		</main>
	</body>
</html>

