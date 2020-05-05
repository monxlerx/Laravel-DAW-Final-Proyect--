@extends ('dashboards.student-dashboard')

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

                    <div class="col-12 d-inline-flex row d-flex justify-content-center">
                        <div class="col-md-3 col-sm-6 col-12 display-inline">
                            <div class="info-box">
                                <span class="info-box-icon bg-info"><i class="fas fa-chalkboard-teacher"></i></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Course</span>
                                    <span class="info-box-number">{{count($courses)}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 d-flex-inline">
                            <div class="info-box">
                                <span class="info-box-icon bg-success"><i class="fas fa-globe-africa"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Stays Abroad</span>
                                    <span class="info-box-number">{{count($sAbroad)}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 display-inline">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Exam Reservations</span>
                                    <span class="info-box-number">{{count($examReservations)}}</span>
                                </div>
                            </div>
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
                        <h3 class="card-title">About Me</h3>
                    </div>
                    <div class="card-body">
                        <strong><i class="far fa-envelope-open"></i> Registration Email</strong>
                        <p class="text-muted">
                            {{auth()->user()->email}}
                        </p>
                        <hr>
                        <strong><i class="fas fa-user-graduate"></i></i> Member since</strong>
                        <p class="text-muted">{{auth()->user()->created_at->diffForHumans()}}</p>
                        <hr>
                        <strong><i class="far fa-comments"></i> Latest Feedback</strong>
                        <p class="text-muted">
                            <span class="tag tag-danger">{{ $latestFeedback[0]->created_at}}</span>
                        </p>
                        <hr>
                        <strong><i class="fas fa-door-open"></i>Contact us</strong>
                        <p class="text-muted">
                            We are delighted to hear from you. Do not hesitate to contact us. We will be very happy to
                            give you a hand.
                            <br>
                            <em><a href="mailto:holyroodenglish@gmail.com"> holyroodenglish@gmail.com</a></em>
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

                            @if(! $users->isEmpty())
                            @foreach ($users as $user)
                            <li>
                                <img src="{{asset('images/icons-backend/user.png')}}" alt="user_icon" width="80">
                                <a class="users-list-name" href="#">{{$user->name}}</a>
                                <span class="users-list-date">{{$user->created_at->diffForHumans()}}</span>
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
            <div class="card d-inline-flex">
                <div class="card-header">
                    <h3 class="card-title">Posts</h3>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <!-- Post -->
                            @if(! $posts->isEmpty())
                            @foreach ($posts as $post)
                            <div class="post">
                                <div class="user-block">
                                    <span class="username">
                                        <a href="#">{{$post->title}} | {{$post->author}}</a>
                                    </span>
                                    <span class="description">{{optional($post->created_at)->format('d-m-Y')}}</span>
                                </div>
                                <div class="text-center mb-3">
                                    <span>
                                        <img src="{{asset('images/abstract_image_post.jpg')}}" alt="image_post" height="250">
                                    </span>
                                </div>
                                <p>
                                    {{$post->content}}
                                </p>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection