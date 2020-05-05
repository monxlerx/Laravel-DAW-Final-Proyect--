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
                    <h4 class="mt-5 mb-5 d-inline-block">{{ !empty($title) ? $title : 'Post' }}</h4>
                </span>
                <div class="btn-group btn-group-sm float-right" role="group">
                    <a href="{{ route('posts.index') }}" class="btn btn-primary" title="Show All Post">
                        <i class="fas fa-list"></i>
                    </a>
                    <a href="{{ route('posts.create') }}" class="btn btn-success" title="Create New Post">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <form method="POST" action="{{ route('posts.update', $post->id) }}" id="edit_post_form"
                    name="edit_post_form" accept-charset="UTF-8" class="form-horizontal">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PUT">
                    @include ('posts.form', [
                    'post' => $post,
                    ])

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <input class="btn btn-primary" type="submit" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
