@extends(Auth::user()->type == 'admin' ? 'dashboards.admin-dashboard' : 'dashboards.student-dashboard')

@section('title')
<h1>Locations</h1>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header">
                <span>
                    <h4 class="mt-5 mb-5 d-inline-block">{{ isset($title) ? $title : 'Stays  Abroad' }}</h4>
                </span>

                <div class="float-right">
                    <form method="POST" action="{!! route('stays__abroads.destroy', $staysAbroad->id) !!}"
                        accept-charset="UTF-8">
                        <input name="_method" value="DELETE" type="hidden">
                        {{ csrf_field() }}
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="{{ route('stays__abroads.index') }}" class="btn btn-primary"
                                title="Show All Stays  Abroad">
                                <i class="fas fa-list"></i>
                            </a>

                            <a href="{{ route('stays__abroads.create') }}" class="btn btn-success"
                                title="Create New Stays  Abroad">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>

                            <a href="{{ route('stays__abroads.edit', $staysAbroad->id ) }}" class="btn btn-primary"
                                title="Edit Stays  Abroad">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>

                            <button type="submit" class="btn btn-danger" title="Delete Stays  Abroad"
                                onclick="return confirm(&quot;Click Ok to delete Stays  Abroad.?&quot;)">
                                <i class="far fa-trash-alt"></i> </button>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card-body col-12">
                <dl>
                    <dt>Location</dt>
                    <dd>{{ $staysAbroad->location }}</dd>
                    <dt>County</dt>
                    <dd>{{ $staysAbroad->county }}</dd>
                    <dt>Nation</dt>
                    <dd>{{ $staysAbroad->nation }}</dd>
                    <dt>Country</dt>
                    <dd>{{ $staysAbroad->country }}</dd>
                    <dt>School</dt>
                    <dd>{{ $staysAbroad->school }}</dd>
                    <dt>Accommodation</dt>
                    <dd>{{ $staysAbroad->accommodation }}</dd>
                    <dt>Landmarks</dt>
                    <dd>{{ $staysAbroad->landmarks }}</dd>
                    <dt>Price per week</dt>
                    <dd>{{ $staysAbroad->price_week }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>

@endsection
