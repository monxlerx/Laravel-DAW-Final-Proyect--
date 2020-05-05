@extends(Auth::user()->type == 'admin' ? 'dashboards.admin-dashboard' : 'dashboards.student-dashboard')

@section('title')
<h1>Courses</h1>
@endsection

@section('content')


<div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <span>
                        <h4 class="mt-5 mb-5 d-inline-block">Create New Course</h4>
                    </span>
                    <div class="btn-group btn-group-sm float-right mb-2" role="group">
                        <a href="{{ route('courses.index') }}" class="btn btn-primary" title="Show All Courses">
                            <i class="fas fa-list"> Back to list</i>
                        </a>
                    </div>
                </div>
    
                <div class="card-body col-12">
    
                        @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
    
                    <form method="POST" action="{{ route('courses.store') }}" accept-charset="UTF-8" id="create_course_form"
                        name="create_course_form" class="form-horizontal">
                        {{ csrf_field() }}
                        @include ('courses.form', [
                        'course' => null,
                        ])
            
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input class="btn btn-primary" type="submit" value="Add">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection