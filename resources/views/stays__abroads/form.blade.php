

<div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
    <label for="location" class="col-md-2 control-label">Location</label>
    <div class="col-md-10">
        <input class="form-control" name="location" type="text" id="location" value="{{ old('location', optional($staysAbroad)->location) }}" minlength="1" placeholder="Enter location here...">
        {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
    <label for="county" class="col-md-2 control-label">County</label>
    <div class="col-md-10">
        <input class="form-control" name="county" type="text" id="county" value="{{ old('county', optional($staysAbroad)->county) }}" minlength="1" placeholder="Enter county here...">
        {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('nation') ? 'has-error' : '' }}">
    <label for="nation" class="col-md-2 control-label">Nation</label>
    <div class="col-md-10">
        <input class="form-control" name="nation" type="text" id="nation" value="{{ old('nation', optional($staysAbroad)->nation) }}" minlength="1" placeholder="Enter nation here...">
        {!! $errors->first('nation', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
    <label for="county" class="col-md-2 control-label">Country</label>
    <div class="col-md-10">
        <input class="form-control" name="country" type="text" id="country" value="{{ old('country', optional($staysAbroad)->country) }}" minlength="1" placeholder="Enter country here...">
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('school') ? 'has-error' : '' }}">
    <label for="school" class="col-md-2 control-label">School</label>
    <div class="col-md-10">
        <input class="form-control" name="school" type="text" id="school" value="{{ old('school', optional($staysAbroad)->school) }}" minlength="1" placeholder="Enter school here...">
        {!! $errors->first('school', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('accommodation') ? 'has-error' : '' }}">
    <label for="county" class="col-md-2 control-label">Accommodation</label>
    <div class="col-md-10">
        <input class="form-control" name="accommodation" type="text" id="accommodation" value="{{ old('accommodation', optional($staysAbroad)->accommodation) }}" minlength="1" placeholder="Enter accommodation here...">
        {!! $errors->first('accommodation', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('landmarks') ? 'has-error' : '' }}">
    <label for="landmarks" class="col-md-2 control-label">Landmarks</label>
    <div class="col-md-10">
        <textarea class="form-control" name="landmarks" type="text" id="landmarks" value="{{ old('landmarks', optional($staysAbroad)->landmarks) }}" minlength="1" rows="8" placeholder="Enter landmarks here..."></textarea>
        {!! $errors->first('landmarks', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('price_week') ? 'has-error' : '' }}">
    <label for="price_week" class="col-md-2 control-label">Price per week</label>
    <div class="col-md-10">
        <input class="form-control" name="price_week" type="number" id="price_week" value="{{ old('accommodation', optional($staysAbroad)->price_week) }}" minlength="1" placeholder="Enter price per week here...">
        {!! $errors->first('price_week', '<p class="help-block">:message</p>') !!}
    </div>
</div>
