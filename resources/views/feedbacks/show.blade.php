@extends(Auth::user()->type == 'teacher' ? 'dashboards.teacher-dashboard' : 'dashboards.student-dashboard')

@section('title')
<h1>Feedback</h1>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header">
                <span>
                    <h4 class="mt-5 mb-5 d-inline-block">{{ isset($title) ? $title : 'Feedbacks' }}</h4>
                </span>
                <div class="btn-group btn-group-sm float-right mb-2">
                    <form method="POST" action="{!! route('feedbacks.destroy', $feedbacks->id) !!}"
                        accept-charset="UTF-8">
                        <input name="_method" value="DELETE" type="hidden">
                        {{ csrf_field() }}
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="{{ route('feedbacks.index') }}" class="btn btn-primary" title="Show All Feedbacks">
                                <i class="fas fa-list"></i>
                            </a>

                            @if (auth()->user()->type == 'teacher')
                            <a href="{{ route('feedbacks.create') }}" class="btn btn-success"
                                title="Create New Feedbacks">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>

                            <a href="{{ route('feedbacks.edit', $feedbacks->id ) }}" class="btn btn-primary"
                                title="Edit Feedbacks">
                                <i class="fas fa-edit"></i>
                            </a>
                            @endif
                            
                            <button type="submit" class="btn btn-danger" title="Delete Feedbacks"
                                onclick="return confirm(&quot;Click Ok to delete Feedbacks.?&quot;)">
                                <i class="far fa-trash-alt"></i> </button>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body col-12">
                <dl>
                    <dt>User</dt>
                    <dd>{{ $feedbacks->user->name }}</dd>
                    <dt>Comment</dt>
                    <dd>{{ $feedbacks->description }}</dd>
                    <dt>Month</dt>
                    <dd>{{ $feedbacks->month }}</dd>
                    <dt>Year</dt>
                    <dd>{{ $feedbacks->year }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>

@endsection

