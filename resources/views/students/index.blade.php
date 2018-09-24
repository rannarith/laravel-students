@extends('students.template.master')
@section('content')
    <h2>Read Data</h2>
    <hr/>
    <a href="students/create" class="btn btn-primary">Create New</a>
    <div class="alert-custom float-right">
        <p>Data Added Sucessfully</p>
    </div>
    <table class="table table-border">
        <thead>
            <tr>
                <th style="">#</th>
                <th style="">Name</th>
                <th style="">Email</th>
                <th style="">Facebook</th>
                <th style="">Mobile</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
                <tr>
                    <td>{!! $student->id !!}</td>
                    <td>{!! $student->name !!}</td>
                    <td>{!! $student->email !!}</td>
                    <td>{!! $student->fb !!}</td>
                    <td>{!! $student->mobile !!}</td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>


@endsection()