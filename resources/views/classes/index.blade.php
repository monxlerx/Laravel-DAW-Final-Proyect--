@extends(Auth::user()->type == 'student' ? 'dashboards.student-dashboard' : 'dashboards.teacher-dashboard')

@section('title')
<h1>Classes</h1>
@endsection

@section('content')

<style>
    .Card {
        display: flex;
        justify-content: center;
        text-align: center;
        margin: auto;
        width: 54rem;
        min-height: 34rem;
        border-radius: 15px;
    }

    .Card-image {
        flex-basis: 40%;
        background-image: url("{{asset('images/online_education.jpg')}}");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 15px;
    }

    .Card-body {
        --margin: 2em;
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex-basis: 60%;
        margin-top: var(--margin);
        margin-bottom: var(--margin);
        margin-left: -4em;
        padding: 0 1.4em;
        background-color: #fff;
        box-shadow: rgba(0, 0, 0, .2) 0 .2em .2em;
        border-radius: 10px;
        border-width: 22px;
        border-color: crimson;
    }

    .Card-title {
        margin-bottom: .4em;
        text-transform: uppercase;
        color: cornflowerblue;
        font-size: 35px;
        font: bold;
    }

    
    .Card-description {
        margin: 0;
        color:lightslategray
    }

</style>

<div class="container">
    <div class="row">
        <div class="Card">
            <div class="Card-image"></div>
            <div class="Card-body">
                <h1 class="Card-title">Follow your courses</h1>
                <p class="Card-description">
                    Couldn't you attend your classes? No matter.
                    Find us at Edmodo and access your courses.
                </p>
                <p>
                    <a href="{{url('https://new.edmodo.com/login')}}"><img class="mx-auto d-block"
                            src="{{asset('images/edmodo-logo.png')}}" alt="logo-edmodo" width="225"></a>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
