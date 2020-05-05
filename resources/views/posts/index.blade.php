@extends('dashboards.admin-dashboard')

@section('title')
<h1>Posts</h1>
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
            <div class="btn-group btn-group-sm float-right mb-2" role="group">
                <a href="{{ route('posts.create') }}" class="btn btn-success" title="Create New Post">
                    <i class="fa fa-plus" aria-hidden="true"> Create New Post</i>
                </a>
            </div>
            @if(count($posts) == 0)
            <div class="panel-body text-center">
                <h4>No Posts Available.</h4>
            </div>
            @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <thead class="head-table">
                            <tr>
                                <th>@sortablelink('id', 'Id')</th>
                                <th>@sortablelink('title', 'Title')</th>
                                <th>@sortablelink('receiver', 'Receiver')</th>
                                <th>@sortablelink('author', 'Author')</th>
                                <th>@sortablelink('created_at', 'Created at')</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->receiver }}</td>
                                <td>{{ $post->author }}</td>
                                <td>{{ $post->created_at->diffForHumans()}}</td>

                                <td>

                                    <form method="POST" action="{!! route('posts.destroy', $post->id) !!}"
                                        accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('posts.show', $post->id ) }}" class="btn btn-info"
                                                title="Show Post">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('posts.edit', $post->id ) }}" class="btn btn-primary"
                                                title="Edit Post">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete Post"
                                                onclick="return confirm(&quot;Click Ok to delete Post.&quot;)">
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
                {!! $posts->appends(request()->except('page'))->render() !!}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
