<!DOCTYPE html>
<html>
<head>
	<title>My Resume</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/boostrap.min">
    <link rel="stylesheet" type="text/css" href="css/boostrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/boostrap.css">
    <link rel="stylesheet" type="text/css" href="css/boostrap.grind">
</head>
<body>
<?php include'header.php'; ?>
	<h1>My Resume</h1>
	<?php
    
		// Personal Information
		$name = "SHADRACK WILSON";
		$address = "Changanyikeni";
		$city = "Dar es salaam";
		$state = "Tanzania";
		$zipcode = "13133";
		$email = "shedywilly060@gmail.com";
		$phone = "+255-745-906-007";
		
		// Objective
		$objective = "To obtain a web developer position with a dynamic company where I can use my skills and experience to contribute to the success of the company.";
		
		// Education
		$education = array(
			array("degree" => "Diploma in Information and Technology", "school" => "University of Dar es salaam Computing center", "location" => "Dar-es-salaam,Tanzania", "year" => "2023"),
			array("degree" => "Certificate in Information and Technology", "school" => "University of Dar es salaam Computing center", "location" => "Dar-es-salaam,Tanzania", "year" => "2021")
		);
		
		// Experience
		$experience = array(
			array("title" => "Web Developer", "employer" => "XYZ Company", "location" => "Anytown, CA", "dates" => "2018 - Present", "description" => "Responsible for developing and maintaining company websites."),
			array("title" => "Junior Web Developer", "employer" => "ABC Company", "location" => "Anytown, CA", "dates" => "2016 - 2018", "description" => "Assisted senior developers with website development projects.")
		);
		
		// Skills
		$skills = array("HTML", "CSS", "JavaScript", "PHP", "MySQL");
	?>
	
	<!-- Personal Information -->
	<h2>Personal Information</h2>
	<p><?php echo $name ?><br>
	<?php echo $address ?><br>
	<?php echo $city . ", " . $state . " " . $zipcode ?><br>
	<?php echo $email ?><br>
	<?php echo $phone ?></p>
	
	<!-- Objective -->
	<h2>Objective</h2>
	<p><?php echo $objective ?></p>
	
	<!-- Education -->
	<h2>Education</h2>
	<ul>
		<?php foreach ($education as $edu) { ?>
			<li><?php echo $edu["degree"] ?><br>
			<?php echo $edu["school"] ?><br>
			<?php echo $edu["location"] ?><br>
			<?php echo $edu["year"] ?></li>
		<?php } ?>
	</ul>
	
	<!-- Experience -->
	<h2>Experience</h2>
	<ul>
		<?php foreach ($experience as $exp) { ?>
			<li><?php echo $exp["title"] ?><br>
			<?php echo $exp["employer"] ?><br>
			<?php echo $exp["location"] ?><br>
			<?php echo $exp["dates"] ?><br>
			<?php echo $exp["description"] ?></li>
		<?php } ?>
	</ul>
	
	<!-- Skills -->
	<h2>Skills</h2>
	<ul>
		<?php foreach ($skills as $skill) { ?>
			<li><?php echo $skill ?></li>
		<?php } ?>
	</ul>
</body>
<footer>
	<p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
</footer>
</html>
``
