@extends('dashboards.admin-dashboard')


@section('title')
<h1>Post</h1>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header">
                <span>
                    <h4 class="mt-5 mb-5 d-inline-block">{{ isset($title) ? $title : 'Post' }}</h4>
                </span>
                <div class="btn-group btn-group-sm float-right mb-2">
                    <form method="POST" action="{!! route('posts.destroy', $post->id) !!}" accept-charset="UTF-8">
                        <input name="_method" value="DELETE" type="hidden">
                        {{ csrf_field() }}
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="{{ route('posts.index') }}" class="btn btn-primary" title="Show All Post">
                                <i class="fas fa-list"></i>
                            </a>
                            <a href="{{ route('posts.create') }}" class="btn btn-success" title="Create New Post">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                            <a href="{{ route('posts.edit', $post->id ) }}" class="btn btn-primary" title="Edit Post">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-danger" title="Delete Post"
                                onclick="return confirm(&quot;Click Ok to delete Post.?&quot;)">
                                <i class="far fa-trash-alt"></i> </button>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body col-12">
                <dl>
                    <dt>Tittle</dt>
                    <dd>{{ $post->tittle }}</dd>
                    <dt>Receiver</dt>
                    <dd>{{ $post->receiver }}</dd>
                    <dt>Content</dt>
                    <dd>{{ $post->content }}</dd>
                    <dt>Author</dt>
                    <dd>{{ $post->author }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>

@endsection
