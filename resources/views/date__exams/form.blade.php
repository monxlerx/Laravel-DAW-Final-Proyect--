
<div class="form-group {{ $errors->has('exam_id') ? 'has-error' : '' }}">
    <label for="exam_id" class="col-md-2 control-label">Level exam</label>
    <div class="col-md-10">
        <select class="form-control" id="exam_id" name="exam_id">
        	    <option value="" style="display: none;" {{ old('exam_id', optional($dateExam)->exam_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select exam</option>
        	@foreach ($exams as $key => $exam)
			    <option value="{{ $key }}" {{ old('exam_id', optional($dateExam)->exam_id) == $key ? 'selected' : '' }}>
			    	{{ $exam }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('exam_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
    <label for="date" class="col-md-2 control-label">Date available</label>
    <div class="col-md-10">
        <input class="form-control datepicker" name="date" type="text" id="date" value="{{ old('date', optional($dateExam)->date) }}" placeholder="Enter date here...">
        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<script>
    $('.datepicker').datepicker({
        format: '{{ config("app.date_format_js") }}',
        language: "es",
        autoclose: true
    });
</script>
