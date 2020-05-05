
<div class="form-group {{ $errors->has('level') ? 'has-error' : '' }}">
    <label for="level_course" class="col-md-2 control-label">Level</label>
    <div class="col-md-10">
        <input class="form-control" name="level" type="text" id="level" value="{{ old('level', optional($exam)->level) }}" minlength="1" placeholder="Enter level here...">
        {!! $errors->first('level', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        <textarea class="form-control" name="description" type="text" id="description" value="{{ old('description', optional($exam)->description) }}" minlength="1" rows="8" placeholder="Enter description here...">{{ old('description', optional($exam)->description) }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
    <label for="price" class="col-md-2 control-label">Price of the exam </label>
    <div class="col-md-10">
        <input class="form-control" name="price" type="number" id="price" value="{{ old('price', optional($exam)->price) }}" minlength="1" placeholder="Enter price here...">
        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
    </div>
</div>

