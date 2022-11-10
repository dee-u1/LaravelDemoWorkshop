@extends('master_file.master_layout')
@section('title','Employee page')
@section('heading','Employee Heading')

@section('content')
   
    <a name="" id="" class="btn btn-primary mb-3" href="{{route('employees.create')}}" role="button">Add Employee</a>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Department</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                <tr>
                    <td> {{$employee->firstName}}</td>
                    <td> {{$employee->lastName}}</td>
                    <td> {{$employee->position}}</td>
                    <td> {{$employee->deptname}}</td>
                    <td>
                        <form action="{{ route('employees.destroy',$employee->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            
            </tbody>
        </table>
    </div>

@endsection