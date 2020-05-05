@extends(Auth::user()->type == 'admin' ? 'dashboards.admin-dashboard' : 'dashboards.student-dashboard')

@section('title')
<h1>Stays Abroad</h1>
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
                    @if (auth()->user()->type == 'admin')
                    <a href="{{ route('stays__abroads.index') }}" class="btn btn-primary mr-2" title="Locations">
                        <i class="fas fa-location-arrow"> Locations</i>
                    </a>
                    <a href="{{ route('booking__stays__abroads.create') }}" class="btn btn-success"
                        title="Create New Booking Stays Abroad">
                        <i class="fa fa-plus" aria-hidden="true"> Create New Stay Abroad</i>
                    </a>
                    @else
                    <a href="{{ route('booking__stays__abroads.create') }}" class="btn btn-success"
                        title="Create New Booking Stays Abroad">
                        <i class="fa fa-plus" aria-hidden="true"> Create New Stay Abroad</i>
                    </a>
                    @endif
                </div>
            </div>

            <!--Template for admin-->
            @if (auth()->user()->type == 'admin')

            @if(count($bookingStaysAbroads) == 0)
            <div class="panel-body text-center">
                <h4>No Booking Stays Abroads Available.</h4>
            </div>
            @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">
                    <table class="table table-striped ">
                        <thead class="head-table">
                            <tr>
                                <th>@sortablelink('id', 'Id')</th>
                                <th>@sortablelink('id_stays_abroad', 'Location')</th>
                                <th>@sortablelink('user_id', 'User')</th>
                                <th>@sortablelink('departure_date', 'Departure date')</th>
                                <th>@sortablelink('return_date', 'Return date')</th>
                                <th>@sortablelink('number_weeks', 'Number of weeks')</th>
                                <th>@sortablelink('created_at', 'Created at')</th>
                                <th>@sortablelink('status', 'Status')</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookingStaysAbroads as $bookingStaysAbroad)
                            <tr>
                                <td>{{ $bookingStaysAbroad->id }}</td>
                                <td>{{ optional($bookingStaysAbroad->stays_abroad)->location }}</td>
                                <td>{{ optional($bookingStaysAbroad->user)->name }}</td>
                                <td>{{ $bookingStaysAbroad->departure_date }}</td>
                                <td>{{ $bookingStaysAbroad->return_date}}</td>
                                <td>{{ $bookingStaysAbroad->number_weeks}}</td>
                                <td>{{ $bookingStaysAbroad->created_at->format('d-m-Y')}}</td>
                                <td>{{ $bookingStaysAbroad->status}}</td>

                                <td>

                                    <form method="POST"
                                        action="{!! route('booking__stays__abroads.destroy', $bookingStaysAbroad->id) !!}"
                                        accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('booking__stays__abroads.show', $bookingStaysAbroad->id ) }}"
                                                class="btn btn-info" title="Show Booking  Stays  Abroad">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('booking__stays__abroads.edit', $bookingStaysAbroad->id ) }}"
                                                class="btn btn-primary" title="Edit Booking  Stays  Abroad">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger"
                                                title="Delete Booking  Stays  Abroad"
                                                onclick="return confirm(&quot;Click Ok to delete Booking  Stays  Abroad.&quot;)">
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
                {!! $bookingStaysAbroads->appends(request()->except('page'))->render() !!}
            </div>

            @endif

            @else
            <!--Template for student-->
            @if(count($userBookingStaysAbroads) == 0)
            <div class="panel-body text-center">
                <h4>No Booking Stays Abroads Available.</h4>
            </div>
            @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">
                    <table class="table table-striped ">
                        <thead class="head-table">
                            <tr>
                                <th>@sortablelink('id', 'Id')</th>
                                <th>@sortablelink('id_stays_abroad', 'Location')</th>
                                <th>@sortablelink('user_id', 'User')</th>
                                <th>@sortablelink('departure_date', 'Departure date')</th>
                                <th>@sortablelink('return_date', 'Return date')</th>
                                <th>@sortablelink('number_weeks', 'Number of weeks')</th>
                                <th>@sortablelink('created_at', 'Created at')</th>
                                <th>@sortablelink('status', 'Status')</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userBookingStaysAbroads as $userBookingStaysAbroad)
                            <tr>
                                <td>{{ $userBookingStaysAbroad->id }}</td>
                                <td>{{ optional($userBookingStaysAbroad->stays_abroad)->location }}</td>
                                <td>{{ optional($userBookingStaysAbroad->user)->name }}</td>
                                <td>{{ $userBookingStaysAbroad->departure_date }}</td>
                                <td>{{ $userBookingStaysAbroad->return_date}}</td>
                                <td>{{ $userBookingStaysAbroad->number_weeks}}</td>
                                <td>{{ $userBookingStaysAbroad->created_at->format('d/m/Y')}}</td>
                                <td>{{ $userBookingStaysAbroad->status}}</td>

                                <td>

                                    <form method="POST"
                                        action="{!! route('booking__stays__abroads.destroy', $userBookingStaysAbroad->id) !!}"
                                        accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('booking__stays__abroads.show', $userBookingStaysAbroad->id ) }}"
                                                class="btn btn-info" title="Show Booking  Stays  Abroad">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('booking__stays__abroads.edit', $userBookingStaysAbroad->id ) }}"
                                                class="btn btn-primary" title="Edit Booking  Stays  Abroad">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger"
                                                title="Delete Booking  Stays  Abroad"
                                                onclick="return confirm(&quot;Click Ok to delete Booking  Stays  Abroad.&quot;)">
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
            @endif
            @endif
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mt-4">
                        @foreach($staysAbroads as $staysAbroad)
                        <div class="col-12 col-sm-6 col-md-4 d-inline-flex row d-flex justify-content-center mr-1">
                            <div class="card bg-light">
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="lead"><b>{{$staysAbroad->location}}</b>
                                            </h2>
                                            <p class="text-muted text-sm"><b>What to
                                                    see?</b><br>{{$staysAbroad->landmarks}}
                                            </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-location-arrow"></i></span>
                                                    Nation: {{$staysAbroad->nation}}
                                                </li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-globe-africa"></i></span>
                                                    Country: UK <img
                                                        src="{{asset('images/icons-backend/united-kingdom.png')}}"
                                                        alt="logo_uk" width="20">
                                                </li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-school"></i></span>
                                                    School: {{$staysAbroad->school}}
                                                </li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-home"></i></span>Accommodation:
                                                    {{$staysAbroad->accommodation}}

                                                </li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="far fa-money-bill-alt"></i></span>Price per week:
                                                    {{$staysAbroad->price_week}}€
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
        @if (auth()->user()->type != 'admin')
        <div id="faq" class="mb-3">
            <h1 class="text-center heading">Frequently Asked Questions</h1>
            <div class="accordion">
                <ul class="list-unstyled">
                    <li class="open">
                        <div class="question">
                            <h2>Why choose to travel with us?</h2><i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        <div class="answer">
                            <p>
                                We have been since the academy was founded offering the experience of traveling abroad.
                                Where not only your English will improve but it will allow you to know another culture
                                as enriching as the British.
                                In your destination you will not only study the chosen English course but many leisure
                                activities await you and your friends.
                            </p>
                        </div>
                    </li>
                    <li class="open">
                        <div class="question">
                            <h2>How to make your reservation?</h2><i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        <div class="answer">
                            <p>
                                Leave everything in our hands. Take advantage of our experience. You just need to decide
                                on a departure date and how long you want to stay there.
                                We take care of contacting the destination academy and making the reservation of your
                                accommodation during the period of your stay. You just need to pack and enjoy the
                                experience.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
