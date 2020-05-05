@extends(Auth::user()->type == 'teacher' ? 'dashboards.teacher-dashboard' : 'dashboards.student-dashboard')

@section('title')
<h1>Feedbacks</h1>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header">
                <span>
                    <h4 class="mt-5 mb-5 d-inline-block">{{ !empty($title) ? $title : 'Feedbacks' }}</h4>
                </span>
                <div class="btn-group btn-group-sm float-right" role="group">
                    <a href="{{ route('feedbacks.index') }}" class="btn btn-primary" title="Show All Feedbacks">
                        <i class="fas fa-list"></i>
                    </a>

                    <a href="{{ route('feedbacks.create') }}" class="btn btn-success" title="Create New Feedbacks">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <form method="POST" action="{{ route('feedbacks.update', $feedbacks->id) }}" id="edit_feedbacks_form"
                    name="edit_feedbacks_form" accept-charset="UTF-8" class="form-horizontal">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PUT">
                    @include ('feedbacks.form', [
                    'feedbacks' => $feedbacks,
                    ])

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <input class="btn btn-primary" type="submit" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
