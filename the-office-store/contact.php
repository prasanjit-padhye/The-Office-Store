<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>The Office Store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
input[type=text], select {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}

input[type=submit] {
	width: 100%;
	background-color: black;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

input[type=submit]:hover {
	background-color: grey;
}

div {
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px;
}

h3 {
	text-align: center;
	text-decoration: underline;
	color: black;
	padding-top: 50px;
	padding-right: 50px;
	padding-bottom: 50px;
	padding-top: 50px;
	padding-right: 50px;
	padding-bottom: 50px;
	padding-left: 50px;
}

.fa {
	padding: 20px;
	font-size: 30px;
	width: 50px;
	text-align: center;
	text-decoration: none;
	margin: 5px 2px;
}

.fa:hover {
	opacity: 0.7;
}

.fa-facebook {
	background: #3B5998;
	color: white;
}

.fa-instagram {
	background: #125688;
	color: white;
}

body {
	background-color: white
}

ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #333;
}

li {
	float: left;
}

li a {
	display: block;
	color: white;
	text-align: center;
	padding: 30px 30px;
	text-decoration: none;
}

li a:hover {
	background-color: #111;
}
</style>
</head>
<body>

	<div class="jumbotron text-center" style="background-color: white;">
		<h1>
			<a href="homePage.html"><img src="the_office.png"
				class="img-rounded"></a>
		</h1>


		<ul>
			<li><a class="active" href="homePage.html">Home</a></li>
			<li><a href="products.html">Products</a></li>
			<li><a href="news.html">News</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>
		<br />
		<h1 style="text-align: center;">Contact Us</h1>
		<p>
		<?php
		include 'contacts.php';?></p>
	</div>
	<div>
		<h1 style="text-align: center;">Send Us An Email</h1>
	</div>
	<div>
		<form action="thanks.html" method = "post">
			<label for="fname">First Name</label> <input type="text" id="fname"
				name="firstname" placeholder="Your name.."> <label
				for="lname">Last Name</label> <input type="text" id="lname"
				name="lastname" placeholder="Your last name.."> <label
				for="email">Email ID</label> <input type="text" id="email"
				name="email" placeholder="Your email id.."> <label
				for="question">Your Question</label> <input type="text"
				id="question" name="question" placeholder="Start Typing.."><label
				for="country">Country</label> <select id="country" name="country">
				<option value="australia">Australia</option>
				<option value="canada">Canada</option>
				<option value="usa">India</option>
				<option value="usa">USA</option>
			</select> <input type="submit" value="Submit">
		</form>
	</div>

	<div class="jumbotron text-center"
		style="background-color: black; height: 350px">
		<h3 style="text-align: center; color: white">Follow us on</h3>
		<a href="https://www.facebook.com/The-Office-Store-101011615692839" class="fa fa-facebook"
			style="width: 100px; height: 75px;"></a> <a href="https://www.instagram.com/the.office.us.store/"
			class="fa fa-instagram" style="width: 100px; height: 75px;"></a>

	</div>

</body>
</html>
