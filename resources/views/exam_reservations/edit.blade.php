@extends(Auth::user()->type == 'admin' ? 'dashboards.admin-dashboard' : 'dashboards.student-dashboard')

@section('title')
<h1>Exam Reservation</h1>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header">
                <span>
                    <h4 class="mt-5 mb-5 d-inline-block">{{ !empty($title) ? $title : 'Exam Reservation' }}</h4>
                </span>
                <div class="btn-group btn-group-sm float-right" role="group">
                    <a href="{{ route('exam_reservations.index') }}" class="btn btn-primary"
                        title="Show All Exam Reservation">
                        <i class="fas fa-list"></i>
                    </a>
                    <a href="{{ route('exam_reservations.create') }}" class="btn btn-success"
                        title="Create New Exam Reservation">
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
                <form method="POST" action="{{ route('exam_reservations.update', $examReservation->id) }}"
                    id="edit_exam_reservation_form" name="edit_exam_reservation_form" accept-charset="UTF-8"
                    class="form-horizontal">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PUT">
                    @include ('exam_reservations.form', [
                    'examReservation' => $examReservation,
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
