@extends('dashboards.admin-dashboard')

@section('title')
<h1>Date Exam</h1>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header">
                <span>
                    <h4 class="mt-5 mb-5 d-inline-block">{{ isset($title) ? $title : 'Date  Exam' }}</h4>
                </span>
                <div class="btn-group btn-group-sm float-right mb-2">
                    <form method="POST" action="{!! route('date__exams.destroy', $dateExam->id) !!}"
                        accept-charset="UTF-8">
                        <input name="_method" value="DELETE" type="hidden">
                        {{ csrf_field() }}
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="{{ route('date__exams.index') }}" class="btn btn-primary"
                                title="Show All Date  Exam">
                                <i class="fas fa-list"></i>
                            </a>
                            <a href="{{ route('date__exams.create') }}" class="btn btn-success"
                                title="Create New Date  Exam">
                                <i class="fa fa-plus" aria-hidden="true"></i>

                            </a>
                            <a href="{{ route('date__exams.edit', $dateExam->id ) }}" class="btn btn-primary"
                                title="Edit Date  Exam">
                                <i class="fas fa-edit"></i>
                            </a>

                            <button type="submit" class="btn btn-danger" title="Delete Date  Exam"
                                onclick="return confirm(&quot;Click Ok to delete Date  Exam.?&quot;)">
                                <i class="far fa-trash-alt"></i> </button>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body col-12">
                <dl>
                    <dt>Level exam</dt>
                    <dd>{{ optional($dateExam->exam)->level }}</dd>
                    <dt>Date available</dt>
                    <dd>{{ $dateExam->date }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>
@endsection
