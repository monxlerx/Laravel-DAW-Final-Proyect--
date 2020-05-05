@extends(Auth::user()->type == 'admin' ? 'dashboards.admin-dashboard' : 'dashboards.student-dashboard')

@section('title')
<h1>Locations</h1>
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
            <div class="panel heading clearfix">
                <div class="btn-group btn-group-sm float-right mb-2" role="group">
                    <a href="{{ route('stays__abroads.create') }}" class="btn btn-success"
                        title="Create New Stays  Abroad">
                        <i class="fa fa-plus" aria-hidden="true"> Create New Location</i>
                    </a>
                </div>
            </div>

            @if(count($staysAbroads) == 0)
            <div class="panel-body text-center">
                <h4>No Stays Abroads Available.</h4>
            </div>
            @else

            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <thead class="head-table">
                            <tr>
                                <th>@sortablelink('id','Id')</th>
                                <th>@sortablelink('location', 'Location')</th>
                                <th>@sortablelink('county', 'County')</th>
                                <th>@sortablelink('nation', 'Nation')</th>
                                <th>@sortablelink('country', 'Country')</th>
                                <th>@sortablelink('price_week', 'Price per week')</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staysAbroads as $staysAbroad)
                            <tr>
                                <td>{{ $staysAbroad->id }}</td>
                                <td>{{ optional($staysAbroad)->location }}</td>
                                <td>{{ $staysAbroad->county }}</td>
                                <td>{{ $staysAbroad->nation}}</td>
                                <td>{{ $staysAbroad->country }}</td>
                                <td>{{ $staysAbroad->price_week }}</td>

                                <td>

                                    <form method="POST"
                                        action="{!! route('stays__abroads.destroy', $staysAbroad->id) !!}"
                                        accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('stays__abroads.show', $staysAbroad->id ) }}"
                                                class="btn btn-info" title="Show Stays  Abroad">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('stays__abroads.edit', $staysAbroad->id ) }}"
                                                class="btn btn-primary" title="Edit Stays  Abroad">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete Stays  Abroad"
                                                onclick="return confirm(&quot;Click Ok to delete Stays  Abroad.&quot;)">
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
                {!! $staysAbroads->appends(\Request::except('page'))->render() !!}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
