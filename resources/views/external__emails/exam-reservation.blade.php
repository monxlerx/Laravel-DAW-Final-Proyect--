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
        width: 500px;
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
                <p>Thank you very much for your purchase, {{$name['name']}}. You have just enrolled in a Cambridge Exam.</p>
                <p>
                    <table>
                        <tr>
                            <th>Level</th>
                            <th>Date of Exam</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td> {{$exam[0]->exam}} </td>
                            <td> {{$msg['booking_date']}} </td>
                            <td> {{$price[0]->price}} </td>
                        </tr>
                     </table>
                </p> 
                <p>We are at your entire disposal for anything you need with your exam. Trust us and with a little hard work, we will achieve the goal of passing the exam.</p>
                <p>If you have any questions, do not hesitate to contact us through any of our contact forms.</p>
                <br>
                <p>Team Holyrood English School</p>
            </div>
        </div>
    </div>
</body>
</html>

