<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "UTF-8">
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
	<title>Registration Form</title>
</head>

<center>
<h1> Blood Donation Camp! </h1>
<body bgcolor="FF033E">
<div><h2>Registration Form</h2></div>
<form action="registered.php" method="POST"> 
	<label for=user>Name:</label><input type="text" name="name" id="name" required><br>
	<label for=user>Email:</label><input type="text" name="email" id="email" required><br>
	<label for=user>Phone:</label><input type="text" name="phone" id="phone" required><br>
	<label for=user>Blood Group:</label><input type="text" name="bgroup" id="bgroup" required><br><br>

	<input type="submit" name="submit">
</form>
