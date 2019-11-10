<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Projects</title>
</head>
<body>
	<h1>Create A New Project</h1>

	<form method="POST" action="/projects">

		{{ csrf_field() }}

		<div>
			<input type="text" name="title" placeholder="Project title">
		</div>

		<div>
			<textarea name="description" id="" cols="30" rows="10" placeholder="Project description"></textarea>
		</div>

		<input type="submit" value="Create Project">
	</form>
</body>
</html>