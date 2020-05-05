

        @if(auth()->user()->type == 'admin')

        <div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
            <label for="user_id" class="col-md-2 control-label">User</label>
            <div class="col-md-10">
                <select class="form-control" id="user_id" name="user_id">
                        <option value="" style="display: none;" {{ old('user_id', optional($examReservation)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
                    @foreach ($users as $key => $user)
                        <option value="{{ $key }}" {{ old('user_id', optional($examReservation)->user_id) == $key ? 'selected' : '' }}>
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
                          <option value="" style="display: none;" {{ old('user_id', optional($examReservation)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
                    @foreach ($users as $key => $user)
                            @if ($key == Auth::user()->id)
                                <option value="{{ $key }}" {{ old('user_id', optional($examReservation)->user_id) == $key ? 'selected' : '' }}>
                                    {{ $user }}
                                </option>
                            @endif
                    @endforeach
                </select>

                    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

        @endif


        <div class="form-group {{ $errors->has('exam_id') ? 'has-error' : '' }}">
            <label for="exam_id" class="col-md-2 control-label">Exam</label>
            <div class="col-md-10">
                <select class="form-control" id="exam_id" name="exam_id">
                        <option value="" style="display: none;" {{ old('exam_id', optional($examReservation)->exam_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select exam</option>
                    @foreach ($exams as $index=> $exam)
                        <option value="{{ $index }}" {{ old('exam_id', optional($examReservation)->exam_id ?: '') == $index ? 'selected' : '' }}>
                            {{ $exam }}
                        </option>
                    @endforeach
                </select>

                {!! $errors->first('exam_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('booking_date') ? 'has-error' : '' }}">
            <label for="booking_date" class="col-md-2 control-label">Booking Date</label>
            <div class="col-md-10">
                <input class="form-control datepicker" name="booking_date" type="text" id="booking_date" value="{{ old('booking_date', optional($examReservation)->booking_date) }}" placeholder="Select a day for the exam...">
                {!! $errors->first('booking_date', '<p class="help-block">:message</p>') !!}
            </div>
        </div>


        <script>
            $('.datepicker').datepicker({
                format: '{{ config("app.date_format_js") }}',
                language: "es",
                autoclose: true
            });
        </script>











