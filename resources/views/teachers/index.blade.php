@extends('dashboards.admin-dashboard')

@section('title')
<h1>Teachers</h1>
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

            <div class="panel heading clearfix">

                <div class="btn-group btn-group-sm float-right" role="group">
                    <a href="{{ route('teachers.create') }}" class="btn btn-success" title="Create New Teacher">
                        <i class="fa fa-plus" aria-hidden="true"> Create New Teacher</i>
                    </a>
                </div>
            </div>

            @if(count($teachers) == 0)
            <div class="panel-body text-center">
                <h4>No Teachers Available.</h4>
            </div>
            @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <thead class="head-table">
                            <tr>
                                <th>@sortablelink('id', 'Id')</th>
                                <th>@sortablelink('course_id', 'Course')</th>
                                <th>@sortablelink('firstname', 'firstname')</th>
                                <th>@sortablelink('last_name', 'Last Name')</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $teacher)
                            <tr>
                                <td>{{ ($teacher->id) }}</td>
                                <td>{{ optional($teacher->course)->title }}</td>
                                <td>{{ $teacher->firstname }}</td>
                                <td>{{ $teacher->last_name }}</td>

                                <td>

                                    <form method="POST" action="{!! route('teachers.destroy', $teacher->id) !!}"
                                        accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('teachers.show', $teacher->id ) }}" class="btn btn-info"
                                                title="Show Teacher">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('teachers.edit', $teacher->id ) }}"
                                                class="btn btn-primary" title="Edit Teacher">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete Teacher"
                                                onclick="return confirm(&quot;Click Ok to delete Teacher.&quot;)">
                                                <i class="far fa-trash-alt"></i> </button>
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
                {!! $teachers->appends(request()->except('page'))->render() !!}
            </div>
            @endif
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mt-4">
                        @foreach($showTeachers as $showTeacher)
                        <div class="col-12 col-sm-6 col-md-4 d-inline-flex row d-flex justify-content-center mr-1">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Holyrood English School Teacher
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="lead"><b>{{$showTeacher->firstname}}
                                                    {{$showTeacher->last_name}}</b></h2>
                                            <p class="text-muted text-sm">{{$showTeacher->skills}}</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-lg fa-building"></i></span>
                                                    Address | Calle Del Prado Num 16</li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-lg fa-phone"></i></span>
                                                    Phone | 985527389
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
    </div>
</div>

@endsection
