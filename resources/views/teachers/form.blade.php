<div class="form-group {{ $errors->has('course_id') ? 'has-error' : '' }}">
    <label for="course_id" class="col-md-2 control-label">Course</label>
    <div class="col-md-10">
        <select class="form-control" id="course_id" name="course_id">
            <option value="" style="display: none;"
                {{ old('course_id', optional($teacher)->course_id ?: '') == '' ? 'selected' : '' }} disabled selected>
                Select course</option>
            @foreach ($courses as $key => $course)
            <option value="{{ $key }}" {{ old('course_id', optional($teacher)->course_id) == $key ? 'selected' : '' }}>
                {{ $course }}
            </option>
            @endforeach
        </select>

        {!! $errors->first('course_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
    <label for="firstname" class="col-md-2 control-label">Firstname</label>
    <div class="col-md-10">
        <input class="form-control" name="firstname" type="text" id="firstname"
            value="{{ old('firstname', optional($teacher)->firstname) }}" minlength="1"
            placeholder="Enter firstname here...">
        {!! $errors->first('firstname', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
    <label for="last_name" class="col-md-2 control-label">Last Name</label>
    <div class="col-md-10">
        <input class="form-control" name="last_name" type="text" id="last_name"
            value="{{ old('last_name', optional($teacher)->last_name) }}" minlength="1"
            placeholder="Enter last name here...">
        {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('skills') ? 'has-error' : '' }}">
    <label for="skills" class="col-md-2 control-label">Skills</label>
    <div class="col-md-10">
        <textarea class="form-control" name="skills" type="text" id="skills"
            value="{{ old('skills', optional($teacher)->skills) }}" minlength="1"
            placeholder="Enter skills here...">{{ old('skills', optional($teacher)->skills) }}</textarea>
        {!! $errors->first('skills', '<p class="help-block">:message</p>') !!}
    </div>
</div>
