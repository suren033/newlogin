<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
<nav class="nav">
		<ul class="ul">
			<li class="li"><a href="hello.php">Home</a></li>
			<li class="li"><a href="button.php">Button</a></li>
			<li class="li"><a href="about.php">About</a></li>
			<li class="li"><a href="what.php">What</a></li>
			<li class="li"><a href="wrap.php">Wrap</a></li>
            <li class="li"><a href="skills.php">Skills</a></li>
            <li class="li"><a href="experience.php">Experience</a></li>
            <li class="li"><a href="education.php">Education</a></li>
            <li class="li"><a href="pricing.php">Pricing</a></li>
            <li class="li"><a href="blog.php">Blog</a></li>
			<li class="li"><a href="client.php">Client</a></li>
		</ul>
	</nav>

	<form action="upload.php" method="post" enctype="multipart/form-data">
	    <table class="what_form">
			<tr>
				<th><input type="text" placeholder="title" class="conf_input"></th>
				<th><input type="text" placeholder="descrip" class="conf_input"></th>
				<th><input type="file" placeholder="img" class="conf_input"></th>
				<button class="save" action="saveInDb.php" method="post">Save</button>
			</tr>
		</table>
	</form>	
</body>
</html>