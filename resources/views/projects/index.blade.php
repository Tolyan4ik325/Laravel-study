<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Projects</title>
</head>
<body>
	<h1>Projects</h1>

	@foreach ($projects as $project)
		<li><a href="/projects/{{ $project->id}}">{{ $project->title}}</a></li>
	@endforeach
</body>
</html>