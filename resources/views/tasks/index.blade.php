<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Hello World!</h1>

    @foreach ($tasks as $task)
		<li> {{ $task->body }} </li>
   	@endforeach
</body>
</html>