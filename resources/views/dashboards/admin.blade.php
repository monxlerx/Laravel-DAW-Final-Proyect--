@extends ('dashboards.admin-dashboard')

@section('title')
<h1>Dashboard</h1>
@endsection

@section('content')

@if(Session::has('success_message'))
<div class="alert alert-success">
    <span class="glyphicon glyphicon-ok"></span>
    {!! session('success_message') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img src="{{asset('images/icons-backend/user.png')}}" alt="user_icon" width="80">
                    </div>
                    <h3 class="profile-username text-center">{{Auth()->user()->name}}</h3>
                    <h5 class="profile-username text-center">{{ucfirst(Auth()->user()->type)}}</h5>
                </div>
            </div>
        </div>
        <!--Cards-->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
                <span class="info-box-icon"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">User registrations</span>
                    <span class="info-box-number">{{count($totalUsers)}}</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="fas fa-chalkboard-teacher"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Number of Teachers</span>
                    <span class="info-box-number">{{count($totalTeachers)}}</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning">
                <span class="info-box-icon"><i class="fas fa-pen-nib"></i></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Posts created</span>
                    <span class="info-box-number">{{count($totalPosts)}}</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger">
                <span class="info-box-icon"><i class="fas fa-comments"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Feedbacks created</span>
                    <span class="info-box-number">{{count($totalFeedbacks)}}</span>

                </div>
            </div>
        </div>
        <!--Contact Information-->
        <div class="col-12">
            <div class="container mt-3" id="date-available">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #888cf0; color:aliceblue;">
                                <h3 class="card-title">Contact Information</h3>
                            </div>
                            <div class="card col-12">
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="height: 300px;">
                                    <table class="table table-head-fixed">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Rol</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($contactInfos as $contactInfo)
                                            <tr>
                                                <td>{{ $contactInfo->name }}</td>
                                                <td>{{ ucFirst($contactInfo->type) }}</td>
                                                <td><a
                                                        href="mailto:{{ $contactInfo->email}}">{{ $contactInfo->email}}</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Cards-->
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Registered Courses</span>
                            <span class="info-box-number">{{count($totalRegisteredCourses)}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Exam Reservations</span>
                            <span class="info-box-number">{{count($totalExamReservation)}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Stays Abroad</span>
                            <span class="info-box-number">{{count($totalStaysAbroad)}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Locations available</span>
                            <span class="info-box-number">{{count($locations)}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="col-6 d-inline-flex row d-flex justify-content-between">
                <!-- About Me Box -->
                <div class="card card-primary d-flex-inline">
                    <div class="card-header">
                        <h3 class="card-title">The Most Expensive Vs The cheepest</h3>
                    </div>
                    <div class="card-body">
                        <strong> Course</strong>
                        <p class="text-muted">{{$course->title}} ({{$course->price}}€) | {{$courseMin->title}}
                            ({{$courseMin->price}}€)</p>
                        <hr>
                        <strong></i> Exam Reservation</strong>
                        <p class="text-muted">{{$examMax->level}} ({{$examMax->price}}€) | {{$examMin->level}}
                            ({{$examMin->price}}€)</p>
                        <hr>
                        <strong> Stays Abroad</strong>
                        <p class="text-muted">
                            <span class="tag tag-danger">{{$stayAbroadMax->location}} ({{$stayAbroadMax->price_week}}€)
                                | {{$stayAbroadMin->location}} ({{$stayAbroadMin->price_week}}€)</span>
                        </p>
                        <hr>
                        <strong> Holyrood English School Vision</strong>
                        <p class="text-muted">
                            Be the reference academy in the province of Asturias with the best methodology in teaching
                            English and meet the objectives of our users.
                            <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 d-inline-flex d-flex row justify-content-between ml-3 float-right">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Welcome Users</h3>

                        <div class="card-tools">
                            <span class="badge badge-danger">New Members</span>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="users-list clearfix">

                            @if(! $latestUsers->isEmpty())
                            @foreach ($latestUsers as $latestUser)
                            <li>
                                <img src="{{asset('images/icons-backend/user.png')}}" alt="user_icon" width="80">
                                <a class="users-list-name" href="#">{{$latestUser->name}}</a>
                                <span class="users-list-date">{{$latestUser->created_at->diffForHumans()}}</span>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="card-footer text-center" style="background-color: #888CF0; ">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="far fa-comments"></i>
                        Latest Feedbacks
                    </h3>
                </div>
                <div class="card-body">
                    @foreach ($feedbacks as $feedback)
                    <blockquote>
                        <p>Receiver: {{ $feedback->user->name }}</p>
                        <p>Comment: <em>{{ $feedback->description}}</em></p>
                        <p>Month: {{$feedback->month}} | Year: {{$feedback->year}}</p>
                        <p>Created at: {{$feedback->created_at->format('d-m-Y')}}</p>
                    </blockquote>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection