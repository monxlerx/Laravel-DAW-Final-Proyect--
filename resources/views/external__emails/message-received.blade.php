<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    #logo_login {
    border-radius: 100%;
    width: 45px;
    }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div>
                <img src="{{asset('images/logo_leon.png')}}" alt="logo_leon" width="55" id="logo_login"><span style="color:gray">HOLYROOD ENGLISH SCHOOL</span>
            </div>
            <br>
            <div>
                <p>Tienes un nuevo mensaje en tu buzón de entrada.</p>
                <p>Un usuario ha solicitado información a través del formulario de contacto.</p>
                <p>
                    <p><strong>Name: </strong>{{$msg['name']}}</p>
                    <p><strong>Correo electrónico: </strong>{{$msg['email']}}</p>
                    <p><strong>Mensaje: </strong>
                        <p><i style="color:gray"> "{{$msg['message']}}"</i></p>s
                    </p>   
                </p>
                <br>
                <p>Equipo Holyrood English School</p>
            </div>
        </div>
    </div>
</body>
</html>