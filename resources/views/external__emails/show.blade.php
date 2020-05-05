@extends('dashboards.admin-dashboard')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($externalEmail->name) ? $externalEmail->name : 'External  Email' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('external__emails.destroy', $externalEmail->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('external__emails.index') }}" class="btn btn-primary" title="Show All External  Email">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>
  
                    <a href="{{ route('external__emails.edit', $externalEmail->id ) }}" class="btn btn-primary" title="Edit External  Email">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete External  Email" onclick="return confirm(&quot;Click Ok to delete External  Email.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $externalEmail->name }}</dd>
            <dt>Email</dt>
            <dd>{{ $externalEmail->email }}</dd>
            <dt>Message</dt>
            <dd>{{ $externalEmail->message }}</dd>
        </dl>
    </div>
</div>

@endsection