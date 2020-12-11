<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

	<h2>Buat Account Baru!</h2>
	<h4>Sign Up Form</h4>
	<form action="/welcome" method="POST">
		@csrf
	  	<label for="fname">First name:</label><br>
	 	<input type="text" id="fname" name="fname" value=""><br>
	  	<label for="lname">Last name:</label><br>
	  	<input type="text" id="lname" name="lname" value=""><br><br>
	  	
	  	<label>Gender:</label><br>
	  	<input type="radio" id="male" name="gender" value="male">
	  	<label for="male">Male</label><br>
	  	<input type="radio" id="female" name="gender" value="female">
	  	<label for="female">Female</label><br>
	  	<input type="radio" id="other" name="gender" value="other">
	  	<label for="other">Other</label><br><br>

	  	<label>Nationality:</label><br>
	  	<select id="nationality" name="nationality">
	  		<option value="Indonesia">Indonesia</option>
	  		<option value="Malaysia">Malaysia</option>
	  		<option value="Singapura">Singapura</option>
	  		<option value="Kamboja">Kamboja</option>
	  	</select><br><br>
	  	<label>Language Spoken:</label><br><br>
	  	<input type="checkbox" id="lang1" name="lang1" value="Indonesia">
		<label for="lang1">Bahasa Indonesia</label><br>
		<input type="checkbox" id="lang2" name="lang2" value="English">
		<label for="lang1">English</label><br>
		<input type="checkbox" id="lang3" name="lang3" value="Other">
		<label for="lang1">Other</label><br><br>
		<label>Bio:</label><br><br>
		<textarea id="bio" name="bio"></textarea><br>
		<!-- <button><a href="welcome">Sign Up</a></button> -->
		<input type="submit" value="Sign Up">
	</form>
	
</body>
</html>