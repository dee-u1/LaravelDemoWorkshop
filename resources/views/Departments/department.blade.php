@extends('master_file.master_layout')
@section('title','Department Page')
@section('heading','Department Heading')

@section('content')
    
      <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Department Code</th>
                    <th scope="col">Department Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                <tr>
                    <td> {{$department->deptcode}}</td>
                    <td> {{$department->deptname}}</td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
@endsection