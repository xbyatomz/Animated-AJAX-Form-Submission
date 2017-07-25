<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="demo.css" />
		<link rel="icon" href="bg.png" />
		<script src="script.js"></script>
		<title>Animated Submission</title>
	</head>
	<body>
		<div class="site">
			<div class="title">
				<h1>Animated Submission</h1>
			</div>
			<div class="message">
				<p>Submitting...</p>
			</div>
			<div class="main">
				<form class="form">
					<label>Firstname: </label><input type="text" name="fname" />
					<label>Surname: </label><input type="text" name="sname" />
					</br>
					<input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" /> <!-- The user's IP Address -->
					<input type="hidden" name="port" value="<?php echo $_SERVER['REMOTE_PORT']; ?>" /> <!--  The user's Port Number -->
					<input type="button" onclick="ajax()" name="submit" value="Submit" /> <!-- Trigger the function to send the AJAX request and load the loading animation -->
				</form>
			</div>
			<div class="footer">
				<p>This is animated!</p>
			</div>
		</div>
	</body>
</html>