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
                    <h4 class="mt-5 mb-5 d-inline-block">{{ isset($course->title) ? $course->title : 'Course' }}</h4>
                </span>
                <div class="btn-group btn-group-sm float-right mb-2">
                    <form method="POST" action="{!! route('courses.destroy', $course->id) !!}" accept-charset="UTF-8">
                        <input name="_method" value="DELETE" type="hidden">
                        {{ csrf_field() }}
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="{{ route('courses.index') }}" class="btn btn-primary" title="Show All Courses">
                                <i class="fas fa-list"></i>
                            </a>

                            <a href="{{ route('courses.create') }}" class="btn btn-success" title="Create New Course">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>

                            <a href="{{ route('courses.edit', $course->id ) }}" class="btn btn-primary"
                                title="Edit Course">
                                <i class="fas fa-edit"></i>
                            </a>

                            <button type="submit" class="btn btn-danger" title="Delete Course"
                                onclick="return confirm(&quot;Click Ok to delete Course.?&quot;)">
                                <i class="far fa-trash-alt"></i> </button>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card-body col-12">
                <dl>
                    <dt>Title</dt>
                    <dd>{{ $course->title }}</dd>
                    <dt>Description</dt>
                    <dd>{{ $course->description }}</dd>
                    <dt>Type Course</dt>
                    <dd>{{ $course->type_course }}</dd>
                    <dt>Company</dt>
                    <dd>{{ $course->company }}</dd>
                    <dt>Price</dt>
                    <dd>{{ $course->price }}</dd>
                    <dt>Teacher</dt>
                    <dd>{{optional($course->teacher)->firstname }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>

@endsection