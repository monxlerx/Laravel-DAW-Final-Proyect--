 @extends(Auth::user()->type == 'admin' ? 'dashboards.admin-dashboard' : 'dashboards.student-dashboard')

@section('title')
<h1>Registered Courses</h1>
@endsection


@section('content')

<div class="container">
    <div class="row">
        @if(Session::has('success_message'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i>
            {!! session('success_message') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="panel panel-default col-12">
            <div class="panel-heading clearfix">
               @if (auth()->user()->type == 'admin')
               <div class="btn-group btn-group-sm float-right mb-2" role="group">
                    <a href="{{ route('registeredCourse.create') }}" class="btn btn-success"
                        title="Create New Registered Course">
                        <i class="fa fa-plus" aria-hidden="true"> Create New Registered Course</i>
                    </a>
                </div>
                <div class="btn-group btn-group-sm float-right mb-2 mr-2" role="group">
                    <a href="{{ route('courses.index') }}" class="btn btn-primary" title="Back to Registered Courses">
                        <i class="fas fa-book"> Courses</i>
                    </a>
                </div>
               @else
               <div class="btn-group btn-group-sm float-right mb-2" role="group">
                    <a href="{{ route('registeredCourse.create') }}" class="btn btn-success"
                        title="Create New Registered Course">
                        <i class="fa fa-plus" aria-hidden="true"> Create New Registered Course</i>
                    </a>
                </div>
               @endif
            </div>

            <!--Template for admin-->
            @if (auth()->user()->type == 'admin')
            @if(count($registeredCourses) == 0)
            <div class="panel-body text-center">
                <h4>No Registered Courses Available.</h4>
            </div>
            @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive-lg ">
                    <table class="table table-striped">
                        <thead class="head-table">
                            <tr>
                                <th>@sortablelink('id', 'Id')</th>
                                <th>@sortablelink('course_id', 'Course')</th>
                                <th>@sortablelink('name', 'Name')</th>
                                <th>@sortablelink('price', 'Price per month')</th>
                                <th>@sortablelink('status_course', 'Status Course')</th>
                                <th>@sortablelink('created_at', 'Enrollment Date')</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($registeredCourses as $registeredCourse)
                            <tr>
                                <td>{{ $registeredCourse->id}} </td>
                                <td>{{ optional($registeredCourse->course)->title }}</td>
                                <td>{{ optional($registeredCourse->user)->name}}</td>
                                <td>{{ $registeredCourse->course->price }}</td>
                                <td>{{ $registeredCourse->status_course }}</td>
                                <td>{{ $registeredCourse->created_at->diffForHumans() }}</td>
                                <td>
                                    <form method="POST"
                                        action="{!! route('registeredCourse.destroy', $registeredCourse->id) !!}"
                                        accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('registeredCourse.show', $registeredCourse->id ) }}"
                                                class="btn btn-info" title="Show Registered  Course">
                                                <span class="glyphicon glyphicon-open" aria-hidden="true"><i
                                                        class="fas fa-eye"></i></span>
                                            </a>
                                            <a href="{{ route('registeredCourse.edit', $registeredCourse->id ) }}"
                                                class="btn btn-primary" title="Edit Registered  Course">
                                                <span class="glyphicon glyphicon-pçcil" aria-hidden="true"><i
                                                        class="fas fa-pencil-alt"></i></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger"
                                                title="Delete Registered Course"
                                                onclick="return confirm(&quot;Click Ok to delete Registered Course.&quot;)">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true"><i
                                                        class="fas fa-trash-alt"></i></span>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel-footer">
                {!! $registeredCourses->appends(request()->except('page'))->render() !!}
            </div>
            @endif

            @else

            <!--Template for student-->
            @if(count($userRegisteredCourses) == 0)
            <div class="panel-body text-center">
                <h4>No Registered Courses Available.</h4>
            </div>
            @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive-lg ">
                    <table class="table table-striped">
                        <thead class="head-table">
                            <tr>
                                <th>@sortablelink('id', 'Id')</th>
                                <th>@sortablelink('course_id', 'Course')</th>
                                <th>@sortablelink('name', 'Name')</th>
                                <th>@sortablelink('price', 'Price per month')</th>
                                <th>@sortablelink('status_course', 'Status Course')</th>
                                <th>@sortablelink('created_at', 'Enrollment Date')</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userRegisteredCourses as $userRegisteredCourse)
                            <tr>
                                <td>{{ $userRegisteredCourse->id}} </td>
                                <td>{{ optional($userRegisteredCourse->course)->title }}</td>
                                <td>{{ optional($userRegisteredCourse->user)->name}}</td>
                                <td>{{ $userRegisteredCourse->course->price }}</td>
                                <td>{{ $userRegisteredCourse->status_course }}</td>
                                <td>{{ $userRegisteredCourse->created_at->diffForHumans() }}</td>
                                <td>
                                    <form method="POST"
                                        action="{!! route('registeredCourse.destroy', $userRegisteredCourse->id) !!}"
                                        accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('registeredCourse.show', $userRegisteredCourse->id ) }}"
                                                class="btn btn-info" title="Show Registered  Course">
                                                <span class="glyphicon glyphicon-open" aria-hidden="true"><i
                                                        class="fas fa-eye"></i></span>
                                            </a>
                                            <a href="{{ route('registeredCourse.edit', $userRegisteredCourse->id ) }}"
                                                class="btn btn-primary" title="Edit Registered  Course">
                                                <span class="glyphicon glyphicon-pçcil" aria-hidden="true"><i
                                                        class="fas fa-pencil-alt"></i></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger"
                                                title="Delete Registered Course"
                                                onclick="return confirm(&quot;Click Ok to delete Registered Course.&quot;)">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true"><i
                                                        class="fas fa-trash-alt"></i></span>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
            @endif
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mt-4">
                        @foreach($courses as $course)
                        <div class="col-12 col-sm-6 col-md-4 d-inline-flex row d-flex justify-content-center mr-1">
                            <div class="card bg-light">
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="lead"><b>{{$course->title}}</b>
                                            </h2>
                                            <p class="text-muted text-sm"><b>Description</b><br>{{$course->description}}
                                            </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-user-friends"></i></span>
                                                    Type of Course: {{$course->nation}}
                                                </li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="far fa-money-bill-alt"></i></span>
                                                    Price: {{$course->price}}€
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer" style="background-color: #888cf0;">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @if (auth()->user()->type != 'admin')
        <div id="faq" class="mb-3">
            <h1 class="text-center heading">Frequently Asked Questions</h1>
            <div class="accordion">
                <ul class="list-unstyled">
                    <li class="open">
                        <div class="question">
                            <h2>What courses do you offer?</h2><i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        <div class="answer">
                            <p> We have an English course for each of the students depending on their level and their
                                requirements.
                                Among the options you will find are from the most basic, to the most advanced, both for
                                those particular users and for those who work in a company.
                                We collaborate with countless companies in the region for many years, and our results
                                are
                                backed by our customers.
                            </p>
                        </div>
                    </li>
                    <li class="open">
                        <div class="question">
                            <h2>How do I register?</h2><i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        <div class="answer">
                            <p>
                                It is very simple. Once we have evaluated your initial level, you only have to select
                                the
                                "Courses" section, the "Create a new registered course" tab within your administration
                                panel.
                                Once inside, it will be enough to select the chosen course, and from that moment you
                                will
                                become a new member of the Holyrood English School family. A email will be sent to you
                                with
                                all your enrollment information.
                                Then you can access your chosen course through the "Classes" tab, which will direct you
                                to
                                the virtual Edmodo campus.</p>
                        </div>
                    </li>
                    <li class="open">
                        <div class="question">
                            <h2>Have you made any mistakes?</h2><i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        <div class="answer">
                            <p> It has a solution. Right at the top, a record appears in the table with all the
                                information
                                corresponding to your course.
                                If you have made a mistake, it is enough to delete or edit the course. You will find the
                                options on the right side. If you have any questions or are not able to do so, send us a
                                message to our contact form.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection
