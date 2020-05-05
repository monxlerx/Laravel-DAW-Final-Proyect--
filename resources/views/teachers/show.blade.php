@extends('dashboards.admin-dashboard')

@section('title')
<h1>Teacher</h1>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header">

                <span>
                    <h4 class="mt-5 mb-5 d-inline-block">{{ isset($title) ? $title : 'Teacher' }}</h4>
                </span>
                <div class="btn-group btn-group-sm float-right mb-2">
                    <form method="POST" action="{!! route('teachers.destroy', $teacher->id) !!}" accept-charset="UTF-8">
                        <input name="_method" value="DELETE" type="hidden">
                        {{ csrf_field() }}
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="{{ route('teachers.index') }}" class="btn btn-primary" title="Show All Teacher">
                                <i class="fas fa-list"></i>
                            </a>

                            <a href="{{ route('teachers.create') }}" class="btn btn-success" title="Create New Teacher">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>

                            <a href="{{ route('teachers.edit', $teacher->id ) }}" class="btn btn-primary"
                                title="Edit Teacher">
                                <i class="fas fa-edit"></i>
                            </a>

                            <button type="submit" class="btn btn-danger" title="Delete Teacher"
                                onclick="return confirm(&quot;Click Ok to delete Teacher.?&quot;)">
                                <i class="far fa-trash-alt"></i> </button>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card-body col-12">
                <dl>
                    <dt>Course</dt>
                    <dd>{{ optional($teacher->course)->title }}</dd>
                    <dt>Firstname</dt>
                    <dd>{{ $teacher->firstname }}</dd>
                    <dt>Last Name</dt>
                    <dd>{{ $teacher->last_name }}</dd>
                    <dt>Skills</dt>
                    <dd>{{ $teacher->skills }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>

@endsection
