<!DOCTYPE html>
<html>
<head>
    <title>Portfolio CV</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Link to the Bootstrap CSS file -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include'header.php'; ?>
    <div class="content">
        <h1>Welcome to My Portfolio</h1>
        <h2>My Projects</h2>
        <ul>
            <?php
                // Define an array of projects
                $projects = array(
                    array(
                        "title" => "TODO LIST",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                        "image" => "3.jpg",
                        "url" => "todo/index.php"
                    ),
                    array(
                        "title" => "Project 2",
                        "description" => "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                        "image" => "project2.jpg",
                        "url" => "project2.php"
                    ),
                    array(
                        "title" => "Project 3",
                        "description" => "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                        "image" => "project3.jpg",
                        "url" => "project3.php"
                    )
                );

                // Loop through the projects and display them
                foreach ($projects as $project) {
                    echo "<li><a href=\"{$project['url']}\">{$project['title']}</a>: {$project['description']}<br><img src=\"{$project['image']}\" alt=\"{$project['title']}\" width=\"200\" height=\"150\"></li>";
                }
            ?>
        </ul>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
    </footer>
    <!-- Link to the Bootstrap JavaScript file (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
