@extends('dashboards.admin-dashboard')

@section('title')
<h1>Date Exams</h1>
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
                    <a href="{{ route('date__exams.create') }}" class="btn btn-success" title="Create New Date  Exam">
                        <i class="fa fa-plus" aria-hidden="true"> Create New Date Exam</i>
                    </a>
                </div>
                <div class="btn-group btn-group-sm float-right mb-2 mr-2" role="group">
                    <a href="{{ route('exam_reservations.index') }}" class="btn btn-primary"
                        title="Back to Exam Reservations">
                        <i class="fas fa-undo-alt"> Back to Exam Reservations</i>
                    </a>
                </div>
            </div>
            @if(count($dateExams) == 0)
            <div class="panel-body text-center">
                <h4>No Date Exams Available.</h4>
            </div>
            @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">
                    <table class="table table-striped ">
                        <thead class="head-table">
                            <tr>
                                <th>@sortablelink('id', 'Id')</th>
                                <th>@sortablelink('exam_id', 'Level exam')</th>
                                <th>@sortablelink('date', 'Date available')</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dateExams as $dateExam)
                            <tr>
                                <td>{{ optional($dateExam)->id }}</td>
                                <td>{{ optional($dateExam->exam)->level }}</td>
                                <td>{{ $dateExam->date }}</td>
                                <td>

                                    <form method="POST" action="{!! route('date__exams.destroy', $dateExam->id) !!}"
                                        accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('date__exams.show', $dateExam->id ) }}"
                                                class="btn btn-info" title="Show Date  Exam">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('date__exams.edit', $dateExam->id ) }}"
                                                class="btn btn-primary" title="Edit Date  Exam">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete Date  Exam"
                                                onclick="return confirm(&quot;Click Ok to delete Date  Exam.&quot;)">
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
                {!! $dateExams->appends(request()->except('page'))->render() !!}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
