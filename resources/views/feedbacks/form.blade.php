
<div class="form-group {{ $errors->has('course_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($feedbacks)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $name => $id)
			    <option value="{{ $id }}" {{ old('id', optional($feedbacks)->id) == $id ? 'selected' : '' }}>
			    	{{ $name }}
			    </option>
			@endforeach
        </select>
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Comment</label>
    <div class="col-md-10">
        <textarea class="form-control" name="description" cols="50" rows="10" id="description" minlength="1" maxlength="1000">{{ old('description', optional($feedbacks)->description) }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('month') ? 'has-error' : '' }}">
    <label for="month" class="col-md-2 control-label">Month</label>
    <div class="col-md-10">
        {!! Form::selectMonth('month',null,['class' => 'form-control']) !!}
        {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('year') ? 'has-error' : '' }}">
    <label for="year" class="col-md-2 control-label">Year</label>
    <div class="col-md-10">
        {!! Form::selectYear('year', date('Y'), date('Y')+10) !!}
        {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
    </div>
</div>

