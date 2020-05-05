@extends(Auth::user()->type == 'admin' ? 'dashboards.admin-dashboard' : 'dashboards.student-dashboard')

@section('title')
<h1>Exam Reservations</h1>
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
                    <a href="{{ route('exams.index') }}" class="btn btn-primary mr-2" title="Create New Exa">
                        <i class="far fa-file-alt"> Exams</i>
                    </a>
                    <a href="{{ route('date__exams.index') }}" class="btn btn-primary mr-2"
                        title="Create New Date of Exam">
                        <i class="far fa-calendar-check"> Date Exams</i>
                    </a>
                    <a href="{{ route('exam_reservations.create') }}" class="btn btn-success"
                        title="Create New Exam Reservation">
                        <i class="fas fa-plus"> Create New Exam Reservation</i>
                    </a>
                    @else
                    <a href="{{ route('exam_reservations.create') }}" class="btn btn-success"
                        title="Create New Exam Reservation">
                        <i class="fas fa-plus"> Create New Exam Reservation</i>
                    </a>
                    @endif
                </div>
            </div>
            <!--Template for admin-->
            @if(auth()->user()->type == 'admin')

            @if(count($examReservations) == 0)
            <div class="panel-body text-center">
                <h4>No Exam Reservations Available.</h4>
            </div>
            @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <thead class="head-table">
                            <tr>
                                <th>@sortablelink('id', 'Id')</th>
                                <th>@sortablelink('exam_id', 'Exam')</th>
                                <th>@sortablelink('user_id', 'User')</th>
                                <th>@sortablelink('booking_date', 'Booking Date')</th>
                                <th>@sortablelink('price', 'Price')</th>
                                <th>@sortablelink('created_at', 'Registered at')</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($examReservations as $examReservation)
                            <tr>
                                <td>{{ $examReservation->id }}</td>
                                <td>{{ optional($examReservation->exam)->level }}</td>
                                <td>{{ optional($examReservation->user)->name }}</td>
                                <td>{{ $examReservation->booking_date }}</td>
                                <td>{{ optional($examReservation->exam)->price }}</td>
                                <td>{{ $examReservation->created_at->format('d-m-Y') }}</td>

                                <td>

                                    <form method="POST"
                                        action="{!! route('exam_reservations.destroy', $examReservation->id) !!}"
                                        accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('exam_reservations.show', $examReservation->id ) }}"
                                                class="btn btn-info" title="Show Exam Reservation">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('exam_reservations.edit', $examReservation->id ) }}"
                                                class="btn btn-primary" title="Edit Exam Reservation">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete Exam Reservation"
                                                onclick="return confirm(&quot;Click Ok to delete Exam Reservation.&quot;)">
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
                {!! $examReservations->appends(request()->except('page'))->render() !!}
            </div>
            @endif

            @else
            <!--Template for student-->
            @if(count($userExamReservations) == 0)
            <div class="panel-body text-center">
                <h4>No Exam Reservations Available.</h4>
            </div>
            @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="head-table">
                            <tr>
                                <th>@sortablelink('id', 'Id')</th>
                                <th>@sortablelink('exam_id', 'Exam')</th>
                                <th>@sortablelink('user_id', 'User')</th>
                                <th>@sortablelink('booking_date', 'Booking Date')</th>
                                <th>@sortablelink('price', 'Price')</th>
                                <th>@sortablelink('created_at', 'Registered at')</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userExamReservations as $userExamReservation)
                            <tr>
                                <td>{{ $userExamReservation->id }}</td>
                                <td>{{ optional($userExamReservation->exam)->level }}</td>
                                <td>{{ optional($userExamReservation->user)->name }}</td>
                                <td>{{ $userExamReservation->booking_date }}</td>
                                <td>{{ optional($userExamReservation->exam)->price }}</td>
                                <td>{{ $userExamReservation->created_at->format('d-m-Y') }}</td>

                                <td>

                                    <form method="POST"
                                        action="{!! route('exam_reservations.destroy', $userExamReservation->id) !!}"
                                        accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('exam_reservations.show', $userExamReservation->id ) }}"
                                                class="btn btn-info" title="Show Exam Reservation">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('exam_reservations.edit', $userExamReservation->id ) }}"
                                                class="btn btn-primary" title="Edit Exam Reservation">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete Exam Reservation"
                                                onclick="return confirm(&quot;Click Ok to delete Exam Reservation.&quot;)">
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
                        @foreach($exams as $exam)
                        <div class="col-12 col-sm-6 col-md-4 d-inline-flex row d-flex justify-content-center mr-1">
                            <div class="card bg-light">
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="lead"><b>{{$exam->level}}</b>
                                            </h2>
                                            <p class="text-muted text-sm"><b>Who is it
                                                    for?</b><br>{{$exam->description}}
                                            </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i
                                                            class="far fa-money-bill-alt"></i></span>
                                                    Price: {{$exam->price}}€
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
        <div class="container mt-3" id="date-available">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center heading">Dates available</h1>
                    <div class="card col-12">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed">
                                <thead>
                                    <tr>
                                        <th style="background-color: #888cf0; color:aliceblue;">ID</th>
                                        <th style="background-color: #888cf0; color:aliceblue;">Exam</th>
                                        <th style="background-color: #888cf0; color:aliceblue;">Date available</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datesExams as $datesExam)
                                    <tr>
                                        <td>{{ $datesExam->id }}</td>
                                        <td>{{ $datesExam->level }}</td>
                                        <td>{{ $datesExam->date}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="faq" class="mb-3">
            <h1 class="text-center heading">Frequently Asked Questions</h1>
            <div class="accordion">
                <ul class="list-unstyled">
                    <li class="open">
                        <div class="question">
                            <h2> Why take the exam?</h2><i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        <div class="answer">
                            <p>
                                Cambridge certificates are one of the most demanded today. There are many companies and
                                universities that support the exam, and they are irrefutable proof that they have the
                                knowledge that is demanded both in the company and for those who wish to study abroad.
                            </p>
                        </div>
                    </li>
                    <li class="open">
                        <div class="question">
                            <h2>When to take the exam?
                            </h2><i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        <div class="answer">
                            <p>
                                When to take the exam?
                                The University of Cambridge stipulates at the end of the year what are the dates
                                available for your exams for the following course. From this screen you can make the
                                reservation of the exam for the course in which you are enrolled, or if you are not a
                                student of ours, nothing happens, enter your panel and make the reservation in the same
                                way. All you have to do is look at the table that appears with the available dates and
                                choose the one that suits you.
                            </p>
                        </div>
                    </li>
                    <li class="open">
                        <div class="question">
                            <h2>Have you made any mistakes?</h2><i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        <div class="answer">
                            <p> It has a solution. Right at the top, a record appears in the table with all the
                                information
                                corresponding to your date of exam.
                                If you have made a mistake, it is enough to delete or edit the date. You will find the
                                options on the right side. If you have any questions or are not able to do so, send us a
                                message to our contact form.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        @endif

    </div>
</div>
@endsection
