@extends(Auth::user()->type == 'teacher' ? 'dashboards.teacher-dashboard' : 'dashboards.student-dashboard')

@section('title')
<h1>Feedbacks</h1>
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
            @if (auth()->user()->type == 'teacher')
            <div class="panel heading clearfix">
                <div class="btn-group btn-group-sm float-right" role="group">
                    <a href="{{ route('feedbacks.create') }}" class="btn btn-success" title="Create New Feedbacks">
                        <i class="fa fa-plus" aria-hidden="true"> Create New Feedback</i>
                    </a>
                </div>
            </div>
            @endif

            <!--Template for teacher-->
            @if(auth()->user()->type == 'teacher')

            @if(count($feedbacksObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Feedbacks Available.</h4>
            </div>
            @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">
                    <table class="table table-striped ">
                        <thead class="head-table">
                            <tr>
                                <th>@sortablelink('id', 'Id')</th>
                                <th>@sortablelink('user_id', 'Student')</th>
                                <th>@sortablelink('month', 'Month')</th>
                                <th>@sortablelink('year', 'Year')</th>
                                <th>@sortablelink('created_at', 'Created At')</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($feedbacksObjects as $feedbacks)
                            <tr>
                                <td> {{$feedbacks->id}} </td>
                                <td> {{optional($feedbacks->user)->name}} </td>
                                <td> {{$feedbacks->month}} </td>
                                <td> {{$feedbacks->year}} </td>
                                <td> {{$feedbacks->created_at->format('d-m-Y') }} </td>

                                <td>
                                    <form method="POST" action="{!! route('feedbacks.destroy', $feedbacks->id) !!}"
                                        accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('feedbacks.show', $feedbacks->id ) }}"
                                                class="btn btn-info" title="Show Feedbacks">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('feedbacks.edit', $feedbacks->id ) }}"
                                                class="btn btn-primary" title="Edit Feedbacks">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Feedbacks"
                                                onclick="return confirm(&quot;Click Ok to delete Feedbacks.&quot;)">
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
                {!! $feedbacksObjects->appends(request()->except('page'))->render() !!}
            </div>
            <div class="container mb-3 mt-5">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                            href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                            aria-selected="true">Why feedback?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                            href="#custom-tabs-one-profile" role="tab"
                                            aria-controls="custom-tabs-one-profile" aria-selected="false">How
                                            feedback?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                            href="#custom-tabs-one-messages" role="tab"
                                            aria-controls="custom-tabs-one-messages" aria-selected="false">How create
                                            feedback?</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-home-tab">
                                        The importance of having a feedback system is to be able to share with students
                                        and family members their progress in the course in which they are registered.
                                        The feedback is very important because it allows the student not to deviate from
                                        the focus of their objective and detect those areas that can be improved, to
                                        achieve their purpose. The student's success does not fit, but is tutored by us
                                        as teachers.
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-profile-tab">
                                        Here are some tips that can get you on track to giving productive feedback:<br>

                                        <strong>Be positive:</strong> Give at least as much positive feedback as you do
                                        negative.
                                        Positive feedback stimulates the reward centers in the brain, leaving the
                                        recipient open to taking new direction. Meanwhile, negative feedback indicates
                                        that an adjustment needs to be made and the threat response turns on and
                                        defensiveness sets in. You don't need to avoid negative, or corrective, feedback
                                        altogether. Just make sure you follow it up with a suggested solution or
                                        outcome.<br>

                                        <strong>Be specific:</strong> Students generally respond better to specific,
                                        positive direction.
                                        Avoid saying things like, "You need to be more talkative in classroom." It's too
                                        ambiguous and can be interpreted in a lot of personal ways. Say something
                                        specific and positive pointed at the task you want accomplished, such as,
                                        "You're smart. I want to hear at least one opinion from you in every meeting
                                        we're in together going forward."<br>

                                        <strong>Be tough, not mean:</strong> When someone drops the ball at work and you
                                        have to give
                                        him or her feedback, start by asking his or her perspective on the situation.
                                        Resist saying how stupid his or her actions were, even if they were.
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-messages-tab">
                                        You just have to click on the "Create a New Feedback" tab and you must complete
                                        the corresponding form. You will only have to indicate which is the user to whom
                                        it is intended, choose the month and year of the feedback, and offer the
                                        corresponding comment according to the guidelines determined in the previous
                                        section.
                                        Remember that feedback must be constructive and empower students to continue
                                        their goal. Guide them to reach their personal and professional goals.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endif

            @else
            <!--Template for teacher-->
            @if(count($userFeedbacks) == 0)
            <div class="panel-body text-center">
                <h4>No Feedbacks Available.</h4>
            </div>
            @else
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- The time line -->
                        <div class="timeline">
                            <!-- timeline time label -->
                            @foreach ($userFeedbacks as $userFeedback)
                            <div class="time-label">
                                <span class="bg-red">{{$userFeedback->created_at->format('d-m-Y') }}</span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-envelope bg-blue"></i>
                                <div class="timeline-item">
                                    <span class="time"><i
                                            class="fas fa-clock"></i>{{$userFeedback->created_at->format('H:i:s')}}</span>
                                    <h3 class="timeline-header"><a href="#">Teachers from Holyrood English
                                            School</a> sent you a new feedback. <strong>Month:</strong>
                                        {{$userFeedback->month}} <strong>Year:</strong> {{$userFeedback->year}}
                                    </h3>
                                    <div class="timeline-body">
                                        {{$userFeedback->description}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endif
        </div>
    </div>
</div>

@endsection