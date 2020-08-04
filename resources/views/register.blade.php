<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>
	<h2>Buat Account Baru!</h2>
	<h4>Sign Up Form</h4>
	<form action="/welcome" method="POST">
		@csrf
		<!-- name -->
		<label for="firstname">First Name:</label><br><br>
		<input type="text" id="firstname" name="firstname">
		<br>
		<br>
		<label for="lastname">Last Name:</label><br><br>
		<input type="text" id="lastname" name="lastname">
		<br>
		<br>
		<label>Gender:</label>
		<br>
		<br>
		<input type="radio" name="gender" value="0"> Male<br>
		<input type="radio" name="gender" value="1"> Female<br>
		<input type="radio" name="gender" value="2"> Other<br>
		<br>
		<label>Nationality</label>
		<br>
		<br>
		<select>
			<option value="indonesian">Indonesian</option>
			<option value="english">Malaysian</option>
			<option value="singaporean">Singaporean</option>
			<option value="australian">Australian</option>
		</select>
		<br>
		<br>
		<label>Language Spoken:</label>
		<br>
		<br>
		<input type="checkbox" name="language" value="0"> Bahasa Indonesia<br>
		<input type="checkbox" name="language" value="1"> English<br>
		<input type="checkbox" name="language" value="2"> Other
		<br>
		<br>
		<label for="bio">Bio:</label>
		<br>
		<br>
		<textarea cols="25" rows="7" id="bio"></textarea>
		<br>
		<input type="submit" value="Sign Up">
	</form>
</body>
</html>