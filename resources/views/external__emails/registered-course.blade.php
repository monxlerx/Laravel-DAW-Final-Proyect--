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

    table{
        width: 300px;
        align-content: center;

    }

    th {
        background-color: lightslategrey;
        text-align: center;
    }
    
    td {
        background-color: aliceblue;
        text-align: center;
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
                <p>Thank you very much for your purchase, {{$name['name']}}. You have just registered in one of our courses.</p>
                <p>
                    <table>
                        <tr>
                            <th>Course</th>
                            <th>Price/month</th>
                        </tr>
                        <tr>
                            <td>{{$title[0]->title}}</td>
                            <td>{{$price[0]->price}}</td>
                        </tr>
                    </table>
                    </p>   
                </p>
                <p>See you in class. Surely we enjoy learning English.</p>
                <p>If you have any questions, do not hesitate to contact us through any of our contact forms.</p>
                <br>
                <p>Team Holyrood English School</p>
            </div>
        </div>
    </div>
</body>
</html>
