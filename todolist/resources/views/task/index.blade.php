<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación todo list en Laravel</title>
</head>
<body>
    
<form action="{{ url ('/') }}" method="post">
@csrf
<input type="text" name="task" id="task">
<input type="submit" value="Agregar Tarea">

</form>
</body>
</html>