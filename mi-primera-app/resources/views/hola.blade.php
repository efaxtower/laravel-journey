<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hola</title>
</head>
<body>
    <h1>Hola, Jesús</h1>
    <p>Esto es mi primera vista con Blade.</p>
<strong>Mi nombre es: {{ $nombre }} <br> y tengo: {{ $edad }} años.</strong>

<h1>TEST - IF, ELSEIF, ENDIF</h1>
<h2>Nombre de creador</h2>
@if ($nombre === 'jesus')
    <p>Hola, creador</p>
@else
    <p>Hola, {{ $nombre }}</p>
@endif

<h2>Edad:</h2>
@if ($edad < 18)
    <p>Hola menol</p>
@elseif ($edad >= 18 && $edad < 65)
    <p>Eres adulto...</p>
@else
    <p>Que fue viejo!</p>
@endif

<h3>Isset test</h3>
@isset($nombre)
    <p>La variable $nombre existe como: {{ $nombre }}</p>
@endisset

@empty($nombre)
    <p>La variable $nombre esta vacia</p>
@endempty
</body>
</html>