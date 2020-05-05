@extends('dashboards.admin-dashboard')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">External  Emails</h4>
            </div>

        </div>

        @if(count($externalEmails) == 0)
            <div class="panel-body text-center">
                <h4>No External  Emails Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead class="head-table">
                        <tr>
                            <th>@sortablelink('id', 'Id')</th>
                            <th>@sortablelink('name', 'Name')</th>
                            <th>@sortablelink('email', 'Email')</th>
                            <th>@sortablelink('message', 'Content')</th>
                            <th>@sortablelink('created_at', 'Received at')</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($externalEmails as $externalEmail)
                        <tr>
                            <td>{{ $externalEmail->id  }}</td>
                            <td>{{ $externalEmail->name }}</td>
                            <td>{{ $externalEmail->email }}</td>
                            <td>{{ $externalEmail->message }}</td>
                            <td>{{ $externalEmail->created_at->diffForHumans() }}</td>
                            <td>

                                <form method="POST" action="{!! route('external__emails.destroy', $externalEmail->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('external__emails.show', $externalEmail->id ) }}" class="btn btn-info" title="Show External  Email">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('external__emails.edit', $externalEmail->id ) }}" class="btn btn-primary" title="Edit External  Email">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete External  Email" onclick="return confirm(&quot;Click Ok to delete External  Email.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
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
            {!! $externalEmails->render() !!}
        </div>

        @endif

    </div>
@endsection
