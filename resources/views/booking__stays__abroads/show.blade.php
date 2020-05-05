@extends(Auth::user()->type == 'admin' ? 'dashboards.admin-dashboard' : 'dashboards.student-dashboard')

@section('title')
<h1>Stays Abroad</h1>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header">
                <span>
                    <h4 class="mt-5 mb-5 d-inline-block">{{ isset($title) ? $title : 'Booking  Stays  Abroad' }}</h4>
                </span>
                <div class="btn-group btn-group-sm float-right mb-2">
                    <form method="POST"
                        action="{!! route('booking__stays__abroads.destroy', $bookingStaysAbroad->id) !!}"
                        accept-charset="UTF-8">
                        <input name="_method" value="DELETE" type="hidden">
                        {{ csrf_field() }}
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="{{ route('booking__stays__abroads.index') }}" class="btn btn-primary"
                                title="Show All Booking  Stays  Abroad">
                                <i class="fas fa-list"></i>
                            </a>

                            <a href="{{ route('booking__stays__abroads.create') }}" class="btn btn-success"
                                title="Create New Booking  Stays  Abroad">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>

                            <a href="{{ route('booking__stays__abroads.edit', $bookingStaysAbroad->id ) }}"
                                class="btn btn-primary" title="Edit Booking  Stays  Abroad">
                                <i class="fas fa-edit"></i>
                            </a>

                            <button type="submit" class="btn btn-danger" title="Delete Booking  Stays  Abroad"
                                onclick="return confirm(&quot;Click Ok to delete Booking  Stays  Abroad.?&quot;)">
                                <i class="far fa-trash-alt"></i> </button>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body col-12">
                <dl>
                    <dt>Location</dt>
                    <dd>{{ optional($bookingStaysAbroad->stays_abroad)->location}}</dd>
                    <dt>User</dt>
                    <dd>{{ optional($bookingStaysAbroad->user)->name }}</dd>
                    <dt>Departure date</dt>
                    <dd>{{ $bookingStaysAbroad->departure_date }}</dd>
                    <dt>Return date</dt>
                    <dd>{{ $bookingStaysAbroad->return_date }}</dd>
                    <dt>Number of Weeks</dt>
                    <dd>{{ $bookingStaysAbroad->number_weeks }}</dd>
                    <dt>Status</dt>
                    <dd>{{ $bookingStaysAbroad->status }}</dd>
                    <dt>Registered at</dt>
                    <dd>{{ $bookingStaysAbroad->created_at->format('d-m-Y') }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>
@endsection
