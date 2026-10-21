<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Tareas</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        ul { list-style-type: square; }
        li { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Mi lista de pendientes:</h1>

    <ul>
        @foreach ($tareas as $tarea)
            <li>{{ $tarea }}</li>
        @endforeach
    </ul>

</body>
</html>