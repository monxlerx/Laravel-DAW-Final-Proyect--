<div class="form-group {{ $errors->has('id_stays_abroad') ? 'has-error' : '' }}">
    <label for="id_stays_abroad" class="col-md-2 control-label">Location</label>
    <div class="col-md-10">
        <select class="form-control" id="id_stays_abroad" name="id_stays_abroad">
        	    <option value="" style="display: none;" {{ old('id_stays_abroad', optional($bookingStaysAbroad)->id_stays_abroad ?: '') == '' ? 'selected' : '' }} disabled selected>Select location</option>
        	@foreach ($staysAbroads as $key => $staysAbroad)
			    <option value="{{ $key }}" {{ old('id_stays_abroad', optional($bookingStaysAbroad)->id_stays_abroad ?: '') == $key ? 'selected' : '' }}>
			    	{{ $staysAbroad }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


@if(auth()->user()->type == 'admin')

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($bookingStaysAbroad)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($bookingStaysAbroad)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

@else

<div class="form-group {{ $errors->has('course_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
                  <option value="" style="display: none;" {{ old('user_id', optional($bookingStaysAbroad)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
            @foreach ($users as $key => $user)
                    @if ($key == Auth::user()->id)
                        <option value="{{ $key }}" {{ old('user_id', optional($bookingStaysAbroad)->user_id) == $key ? 'selected' : '' }}>
                            {{ $user }}
                        </option>
                    @endif
            @endforeach
        </select>

            {!! $errors->first('course_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

@endif

<div class="form-group {{ $errors->has('departure_date') ? 'has-error' : '' }}">
    <label for="departure_date" class="col-md-2 control-label">Departure Date</label>
    <div class="col-md-10">
        <input class="form-control datepicker" name="departure_date" type="text" id="departure_date" value="{{ old('departure_date', optional($bookingStaysAbroad)->departure_date) }}" placeholder="Enter departure date here...">
        {!! $errors->first('departure_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('return_date') ? 'has-error' : '' }}">
    <label for="return_date" class="col-md-2 control-label">Return Date</label>
    <div class="col-md-10">
        <input class="form-control datepicker" name="return_date" type="text" id="return_date" value="{{ old('return_date', optional($bookingStaysAbroad)->return_date) }}" placeholder="Enter return date here...">
        {!! $errors->first('return_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('price_week') ? 'has-error' : '' }}">
    <label for="number_weeks" class="col-md-2 control-label">Number of Weeks</label>
    <div class="col-md-10">
        <input class="form-control" name="number_weeks" type="number" id="number_weeks" value="{{ old('price_week', optional($bookingStaysAbroad)->price_week) }}" minlength="1" placeholder="Enter price week here...">
        {!! $errors->first('price_week', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<script>
    $('.datepicker').datepicker({
        format: '{{ config("app.date_format_js") }}',
        language: "es",
        autoclose: true
    });
</script>
