<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuenca Azul</title>
    <style>
        /* Estilos generales del correo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #1d1d1d;
        }
        p {
            color: #444444;
        }

        /* Estilos para los elementos del correo */
        .sender-info {
            background-color: #cedceb;
            color: #000000;
            padding: 10px;
            text-align: center;
        }
        .message {
            padding: 20px;
        }


    </style>
</head>
<body>
    <div class="container">
        <div class="sender-info">
            <h1>{{$mailData['subject']}}</h1>
        </div>
        <div class="message">
            <h2>Nombre: {{$mailData['name']}}</h2>
            <h2>Correo: {{$mailData['email']}}</h2>
            <h2>Mensaje: {{$mailData['message']}}</h2>
        </div>
    </div>

</body>
</html>
