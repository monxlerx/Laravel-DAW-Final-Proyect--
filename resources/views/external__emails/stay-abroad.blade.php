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
                <p>Thank you very much for your purchase, {{$name['name']}}. You have just registered in one of our stays abroad.</p>
                <p>
                    <table>
                        <tr>
                            <th>Location</th>
                            <th>Departure Date</th>
                            <th>Return Date</th>
                            <th>Number Weeks</th>
                        </tr>
                        <tr>
                            <td> {{$location[0]->location}} </td>
                            <td> {{$msg['departure_date']}} </td>
                            <td> {{$msg['return_date']}} </td>
                            <td> {{$msg['number_weeks']}} </td>
                        </tr>
                     </table>
                </p> 
                <p>We are at your entire disposal for anything you need on your trip. Do not worry. All the details of your trip, accommodation and your English course abroad will be solved by the teachers in the school. You just enjoy the experience of traveling to the United Kingdom.</p>
                <p>If you have any questions, do not hesitate to contact us through any of our contact forms.</p>
                <br>
                <p>Team Holyrood English School</p>
            </div>
        </div>
    </div>
</body>
</html>

