
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($post)->title) }}" minlength="1" placeholder="Enter title here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('receiver') ? 'has-error' : '' }}">
    <label for="receiver" class="col-md-2 control-label">Receiver</label>
    <div class="col-md-10">
        <input class="form-control" name="receiver" type="text" id="receiver" value="{{ old('receiver', optional($post)->receiver) }}" minlength="1" placeholder="Enter receiver here (Student | Teacher)">
        {!! $errors->first('receiver', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
    <label for="content" class="col-md-2 control-label">Content</label>
    <div class="col-md-10">
        <textarea class="form-control" name="content" cols="50" rows="10" id="content" minlength="1" maxlength="1000" value="{{ old('content', optional($post)->content) }}">{{ old('content', optional($post)->content) }}</textarea>
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('author') ? 'has-error' : '' }}">
    <label for="author" class="col-md-2 control-label">Author</label>
    <div class="col-md-10">
        <input class="form-control" name="author" type="text" id="author" value="{{ old('author', optional($post)->author) }}" minlength="1" placeholder="Enter author here...">
        {!! $errors->first('author', '<p class="help-block">:message</p>') !!}
    </div>
</div>

