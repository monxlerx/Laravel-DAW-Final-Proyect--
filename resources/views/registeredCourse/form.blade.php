
<div class="form-group {{ $errors->has('course_id') ? 'has-error' : '' }}">
    <label for="course_id" class="control-label">Course</label>
    <div class="col-md-12">
        <select class="form-control" id="course_id" name="course_id">
        	    <option value="" style="display: none;" {{ old('course_id', optional($registeredCourse)->course_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select course</option>
        	@foreach ($courses as $key => $course)
			    <option value="{{ $key }}" {{ old('course_id', optional($registeredCourse)->course_id) == $key ? 'selected' : '' }}>
			    	{{ $course }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('course_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

@if(auth()->user()->type == 'admin')

<div class="form-group {{ $errors->has('course_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($registeredCourse)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($registeredCourse)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('course_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

@else

<div class="form-group {{ $errors->has('course_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
                  <option value="" style="display: none;" {{ old('user_id', optional($registeredCourse)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
            @foreach ($users as $key => $user)
                    @if ($key == Auth::user()->id)
                        <option value="{{ $key }}" {{ old('user_id', optional($registeredCourse)->user_id) == $key ? 'selected' : '' }}>
                            {{ $user }}
                        </option>
                    @endif
            @endforeach
        </select>

            {!! $errors->first('course_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

@endif

@if (auth()->user()->type == 'admin')
<div class="form-group {{ $errors->has('status_course') ? 'has-error' : '' }}">
        <label for="status_course" class="col-md-2 control-label">Status Course</label>
        <div class="col-md-10">
            <input class="form-control" name="status_course" type="text" id="status_course" value="{{ old('status_course', optional($registeredCourse)->status_course) }}" minlength="1" placeholder="Enter status course here...">
            {!! $errors->first('status_course', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@endif



