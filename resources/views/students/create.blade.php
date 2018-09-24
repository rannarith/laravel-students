@extends('students.template.master')
@section('content')
    <h2>Create Data</h2>
    <hr>
    <a href="/students" class="btn btn-primary">Read Data</a>
    {!! Form::open(['id'=> 'data-Form', 'url' => '/students']) !!}
    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',Null,['placeholder'=>'Enter Name', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::email('email',Null,['placeholder'=>'Enter Email', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name','Facebook') !!}
        {!! Form::text('fb',Null,['placeholder'=>'Facebook Name', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name','Mobile') !!}
        {!! Form::text('mobile',Null,['placeholder'=>'Enter phone number', 'class'=>'form-control']) !!}
    </div>
    {!! Form::submit('Create',['class'=>'btn btn-primary float-right']) !!} 

    {!! Form::close() !!}

@endsection()
