@extends(Auth::user()->type == 'admin' ? 'dashboards.admin-dashboard' : 'dashboards.student-dashboard')

@section('title')
<h1>Courses</h1>
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
                <div class="btn-group btn-group-sm mb-2 float-right" role="group">
                    <a href="{{ route('courses.create') }}" class="btn btn-success" title="Create New Course">
                        <i class="fa fa-plus" aria-hidden="true"> Create New Course</i>
                    </a>
                </div>
                <div class="btn-group btn-group-sm float-right mb-2 mr-2" role="group">
                    <a href="{{ route('registeredCourse.index') }}" class="btn btn-primary"
                        title="Back to Registered Courses">
                        <i class="fas fa-undo-alt"> Back to Registered Courses</i>
                    </a>
                </div>
            </div>

            @if(count($courses) == 0)
            <div class="panel-body text-center">
                <h4>No Courses Available.</h4>
            </div>
            @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <thead class="head-table">
                            <tr>
                                <th>@sortablelink('id', 'Id')</th>
                                <th>@sortablelink('title', 'Title')</th>
                                <th>@sortablelink('type_course', 'Type Course')</th>
                                <th>@sortablelink('company', 'Company')</th>
                                <th>@sortablelink('price', 'Price (€)')</th>
                                <th>@sortablelink('teacher_id', 'Teacher')</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <td>{{ $course->id }}</td>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->type_course }}</td>
                                <td>{{ $course->company }}</td>
                                <td>{{ $course->price }}</td>
                                <td>{{ optional($course->teacher)->firstname}}</td>

                                <td>

                                    <form method="POST" action="{!! route('courses.destroy', $course->id) !!}"
                                        accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('courses.show', $course->id ) }}" class="btn btn-info"
                                                title="Show Course">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('courses.edit', $course->id ) }}" class="btn btn-primary"
                                                title="Edit Course">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete Course"
                                                onclick="return confirm(&quot;Click Ok to delete Course.&quot;)">
                                                <i class="far fa-trash-alt"></i> </button>
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
                {!! $courses->appends(request()->except('page'))->render() !!}
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
