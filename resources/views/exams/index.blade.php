@extends('dashboards.admin-dashboard')

@section('title')
<h1>Exams</h1>
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
                <div class="btn-group btn-group-sm float-right mb-2" role="group">
                    <a href="{{ route('exams.create') }}" class="btn btn-success" title="Create New Exam">
                        <i class="fa fa-plus" aria-hidden="true"> Create New Exam</i>
                    </a>
                </div>
                <div class="btn-group btn-group-sm float-right mb-2 mr-2" role="group">
                    <a href="{{ route('exam_reservations.index') }}" class="btn btn-primary"
                        title="Back to Exam Reservations">
                        <i class="fas fa-undo-alt"> Back to Exam Reservations</i>
                    </a>
                </div>
            </div>

            @if(count($exams) == 0)
            <div class="panel-body text-center">
                <h4>No Exams Available.</h4>
            </div>
            @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">
                    <table class="table table-striped ">
                        <thead class="head-table">
                            <tr>
                                <th>@sortablelink('id', 'Id')</th>
                                <th>@sortablelink('level', 'Level')</th>
                                <th>@sortablelink('price', 'Price')</th>
                                <th>@sortablelink('description', 'Description')</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($exams as $exam)
                            <tr>
                                <td>{{ $exam->id }}</td>
                                <td>{{ $exam->level }}</td>
                                <td>{{ $exam->price }}</td>
                                <td>{{ $exam->description}}</td>

                                <td>

                                    <form method="POST" action="{!! route('exams.destroy', $exam->id) !!}"
                                        accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('exams.show', $exam->id ) }}" class="btn btn-info"
                                                title="Show Exam">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('exams.edit', $exam->id ) }}" class="btn btn-primary"
                                                title="Edit Exam">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete Exam"
                                                onclick="return confirm(&quot;Click Ok to delete Exam.&quot;)">
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
                {!! $exams->appends(request()->except('page'))->render() !!}
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
