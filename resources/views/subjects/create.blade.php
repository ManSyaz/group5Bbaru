@extends('layouts.template') 
@section('content') 
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Subjects</h2>
        </div>
 
    </div>
</div>
 
@if ($errors->any()) 
<div class="alert alert-danger"> 
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach 
    </ul>
</div>
@endif 
 
<form action="{{ route('subjects.store') }}" method="POST">
    @csrf
 
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Subject Code:</strong>
                <input type="text" name="subject_code" class="form-control" placeholder="Subject Code">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Subject Name:</strong>
                <input type="text" class="form-control" name="subject_name" placeholder="Subject Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Lecturer Name:</strong>
                <input type="text" class="form-control" name="lecturer_name" placeholder="Lecturer Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
 
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
</form>
@endsection