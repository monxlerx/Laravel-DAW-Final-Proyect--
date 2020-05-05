@extends(Auth::user()->type == 'admin' ? 'dashboards.admin-dashboard' : 'dashboards.student-dashboard')

@section('title')
<h1>Registered Course</h1>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header">
                <span>
                    <h4 class="mt-5 mb-5 d-inline-block">{{ isset($title) ? $title : 'Registered Course' }}</h4>
                </span>
                <div class="btn-group btn-group-sm float-right mb-2">
                    <form method="POST" action="{!! route('registeredCourse.destroy', $registeredCourse->id) !!}"
                        accept-charset="UTF-8">
                        <input name="_method" value="DELETE" type="hidden">
                        {{ csrf_field() }}
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="{{ route('registeredCourse.index') }}" class="btn btn-primary"
                                title="Show All Registered Courses">
                                <i class="fas fa-list"></i>
                            </a>
                            <a href="{{ route('registeredCourse.create') }}" class="btn btn-success"
                                title="Create New Registered Course">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                            <a href="{{ route('registeredCourse.edit', $registeredCourse->id ) }}"
                                class="btn btn-primary" title="Edit Registered Course">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-danger" title="Delete Registered Course"
                                onclick="return confirm(&quot;Click Ok to delete Registered Course.?&quot;)">
                                <i class="far fa-trash-alt"></i> </button>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body col-12">
                <dl>
                    <dt>Courses</dt>
                    <dd>{{ optional($registeredCourse->course)->title}}</dd>
                    <dt>User</dt>
                    <dd>{{ $registeredCourse->user->name}}</dd>
                    <dt>Status Course</dt>
                    <dd>{{ $registeredCourse->status_course}}</dd>
                    <dt>Price per month</dt>
                    <dd>{{ $registeredCourse->course->price}}</dd>
                    <dt>Enrollment date</dt>
                    <dd>{{ $registeredCourse->created_at->diffForHumans() }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>

@endsection
