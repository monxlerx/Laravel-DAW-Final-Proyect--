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
                    <h4 class="mt-5 mb-5 d-inline-block">{{ isset($title) ? $title : 'Exam Reservation' }}</h4>
                </span>
                <div class="btn-group btn-group-sm float-right mb-2">
                    <form method="POST" action="{!! route('exam_reservations.destroy', $examReservation->id) !!}"
                        accept-charset="UTF-8">
                        <input name="_method" value="DELETE" type="hidden">
                        {{ csrf_field() }}
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="{{ route('exam_reservations.index') }}" class="btn btn-primary"
                                title="Show All Exam Reservation">
                                <i class="fas fa-list"></i>
                            </a>

                            <a href="{{ route('exam_reservations.create') }}" class="btn btn-success"
                                title="Create New Exam Reservation">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>

                            <a href="{{ route('exam_reservations.edit', $examReservation->id ) }}"
                                class="btn btn-primary" title="Edit Exam Reservation">
                                <i class="fas fa-edit"></i>
                            </a>

                            <button type="submit" class="btn btn-danger" title="Delete Exam Reservation"
                                onclick="return confirm(&quot;Click Ok to delete Exam Reservation.?&quot;)">
                                <i class="far fa-trash-alt"></i> </button>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body col-12">
                <dl>
                    <dt>Id</dt>
                    <dd>{{ optional($examReservation->exam)->id }}</dd>
                    <dt>Exam</dt>
                    <dd>{{ optional($examReservation->exam)->level }}</dd>
                    <dt>User</dt>
                    <dd>{{ optional($examReservation->user)->name }}</dd>
                    <dt>Booking Date</dt>
                    <dd>{{ $examReservation->booking_date }}</dd>
                    <dt>Price</dt>
                    <dd>{{ optional($examReservation->exam)->price }}</dd>
                    <dt>Registered at</dt>
                    <dd>{{ $examReservation->created_at->format('d-m-Y') }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>

@endsection



