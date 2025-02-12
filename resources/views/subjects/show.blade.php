@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Subject Details</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Subject Code:</strong>
            {{ $subject->subject_code }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Subject Name:</strong>
            {{ $subject->subject_name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Lecturer Name:</strong>
            {{ $subject->lecturer_name }}
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>
    </div>
</div>
@endsection