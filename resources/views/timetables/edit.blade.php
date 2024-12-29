@extends('layouts.template') 
@section('content') 
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ __('Edit Timetable')}}</h3>
    </div>
    <div class="card-body">
    <form class="mx-auto col-8" action="{{ route('timetables.update', $timetable->id) }}" method="post">
      @csrf
      @method('PUT')
        <div class="form-group">
          <label for="student_id">Student</label>
          <select name="student_id" id="student_id" class="form-control select2bs4">
            @foreach ($students as $student)
                <option value="{{ $student->id }}" {{ (isset($timetable->user->id) && $student->id == $timetable->user->id) ? 'selected' : '' }}>{{ $student->name }}</option>
            @endforeach
          </select>
          @error('student_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="subject_id">Subject</label>
          <select name="subject_id" id="subject_id" class="form-control select2bs4">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}" {{ (isset($timetable->subject->id) && $subject->id == $timetable->subject->id) ? 'selected' : '' }}>{{ $subject->subject_code }} - {{ $subject->subject_name }}</option>
            @endforeach
          </select>
          @error('subject_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
            <label for="group_id">Lecturer Group</label>
            <select name="group_id" id="group_id" class="form-control select2bs4">
              @foreach ($groups as $group)
                  <option value="{{ $group->id }}" {{ (isset($timetable->lecturer_group->id) && $group->id == $timetable->lecturer_group->id) ? 'selected' : '' }}>{{ $group->name }}</option>
              @endforeach
            </select>
            @error('group_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="hall_id">Hall</label>
            <select name="hall_id" id="hall_id" class="form-control select2bs4">
              @foreach ($halls as $hall)
                  <option value="{{ $hall->id }}" {{ (isset($timetable->hall->id) && $hall->id == $timetable->hall->id) ? 'selected' : '' }}>{{ $hall->lecture_hall_code }} - {{ $hall->lecture_hall_name }}</option>
              @endforeach
            </select>
            @error('hall_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="day_id">Day</label>
            <select name="day_id" id="day_id" class="form-control col-3 select2bs4">
              @foreach ($days as $day)
                  <option value="{{ $day->id }}" {{ (isset($timetable->day->id) && $day->id == $timetable->day->id) ? 'selected' : '' }}>{{ $day->day_name }}</option>
              @endforeach
            </select>
            @error('day_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="time_from">Time From</label>
            <input type="time" class="form-control col-3" name="time_from" id="time_from" value="{{ $timetable->time_from }}">
            @error('time_from')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="time_to">Time To</label>
            <input type="time" class="form-control col-3" name="time_to" id="time_to" value="{{ $timetable->time_to }}">
            @error('time_to')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>

    </div>
    <div class="card-footer">
        <div class="row justify-content-end">
            <div class="btn-row">
                <button type="submit" class="btn btn-primary ">{{ __('Submit') }}</button>
                <button type="reset" class="btn btn-info ">{{ __('Reset') }}</button>
                <a href="{{ route('timetables.index') }}" role="button" class="btn btn-default">{{ __('Back')}}</a>
            </div>
        </div>
    </div>
    </form>
    <!-- /.form-box -->
</div>
@endsection
