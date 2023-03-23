
<?php include'header.php'; ?>
<div class="container">
	<h1>Contact Form</h1>

	<?php
		// Check if form is submitted
		if (isset($_POST['submit'])) {
			// Get form data
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];

			// Validate form data
			if (empty($name) || empty($email) || empty($message)) {
				echo '<div class="alert alert-danger">Please fill out all fields.</div>';
			} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo '<div class="alert alert-danger">Invalid email address.</div>';
			} else {
				// Send email
				$to = "shedywilly@gmail.com";
				$subject = "New message from contact form";
				$body = "Name: $name\nEmail: $email\nMessage: $message";
				$headers = "From: $email";

				if (mail($to, $subject, $body, $headers)) {
					echo '<div class="alert alert-success">Thank you for your message. We will be in touch soon.</div>';
				} else {
					echo '<div class="alert alert-danger">There was a problem sending your message. Please try again later.</div>';
				}
			}
		}
	?>

	<form method="post">
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" name="name" id="name">
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" name="email" id="email">
		</div>

		<div class="form-group">
			<label for="message">Message:</label>
			<textarea class="form-control" name="message" id="message"></textarea>
		</div>

		<button type="submit" class="shadow__btn" name="submit">Send</button>
	</form>
</div>

<footer class="footer mt-auto py-3">
	<div class="container">
		<p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
	</div>
</footer>

<script src="js/bootstrap.min.js"></script>
</body>
</html>