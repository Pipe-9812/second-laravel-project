<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Correo de Contacto</h1>

    <p>
        <b>Nombre:</b><br>
        <span>
            {{ $data['name'] }}
        </span>
    </p>

    <p>
        <b>Correo:</b><br>
        <span>
            {{ $data['email'] }}
        </span>
    </p>

    <p>
        <b>Mensaje:</b><br>
        <span>
            {{ $data['message'] }}
        </span>
    </p>

</body>
</html>