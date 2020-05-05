@extends('dashboards.admin-dashboard')

@section('title')
<h1>Exam</h1>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header">
                <span>
                    <h4 class="mt-5 mb-5 d-inline-block">{{ isset($title) ? $title : 'Exam' }}</h4>
                </span>
                <div class="btn-group btn-group-sm float-right mb-2">
                    <form method="POST" action="{!! route('exams.destroy', $exam->id) !!}" accept-charset="UTF-8">
                        <input name="_method" value="DELETE" type="hidden">
                        {{ csrf_field() }}
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="{{ route('exams.index') }}" class="btn btn-primary" title="Show All Exam">
                                <i class="fas fa-list"></i>
                            </a>

                            <a href="{{ route('exams.create') }}" class="btn btn-success" title="Create New Exam">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>

                            <a href="{{ route('exams.edit', $exam->id ) }}" class="btn btn-primary" title="Edit Exam">
                                <i class="fas fa-edit"></i>
                            </a>

                            <button type="submit" class="btn btn-danger" title="Delete Exam"
                                onclick="return confirm(&quot;Click Ok to delete Exam.?&quot;)">
                                <i class="far fa-trash-alt"></i> </button>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body col-12">
                <dl>
                    <dt>Level</dt>
                    <dd>{{ $exam->level }}</dd>
                    <dt>Description</dt>
                    <dd>{{ $exam->description }}</dd>
                    <dt>Price</dt>
                    <dd>{{ $exam->price }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>

@endsection