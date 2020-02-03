<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
<title>CCC Training de {{ $data['name'] }}</title>
</head>
<body>
    <p> {{ $data['name'] }} acaba de hacer la evaluacion los datos son los siguientes:</p>    

    <ul>
        <li>Nombre: {{ $data['name'] }} </li>
        <li>Correo: {{ $data['mail'] }} </li>
        <li>Nota: {{ $data['note'] }} </li>
        
        
    </ul>
</body>
</html>