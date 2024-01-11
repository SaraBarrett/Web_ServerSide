<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A nossa Home</title>
</head>

<body>
    <h3>Hello World,estamos nas Views.</h3>

    <h5>Tens disponiveis estes links:</h5>

    <ul>
        <li><a href="{{route('bemvindos')}}">Vai para casa!</a></li>
        <li><a href="{{route('users.add')}}">Aqui podes adicionar users!</a></li>
    </ul>

</body>

</html>
