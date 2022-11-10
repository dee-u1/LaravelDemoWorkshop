@extends('master_file.master_layout')
@section('title','Employee create')
@section('heading','Add Employee')

@section('content')
    
    <form action="{{route('employees.update',$employee->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">First Name</label>
            <div class="col-8">
                <input type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" id="" value="{{ $employee->firstName }}" placeholder="">
                @error('firstName')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Last Name</label>
            <div class="col-8">
                <input type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" id="" value="{{ $employee->lastName }}"  placeholder="">
                @error('lastName')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="position" class="col-4 col-form-label">Position</label>
            <div class="col-8">
                <input type="text" class="form-control @error('position') is-invalid @enderror" name="position" id="" value="{{ $employee->position }}"  placeholder="">
                @error('position')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="deptcode" class="col-4 col-form-label">Deparment</label>
            <div class="col-8">

                <select class="form-select form-select" name="deptcode" id="">     
                    @foreach ($departments as $department)
                        <option value={{$department->deptcode}} {{ $employee->deptcode == $department->deptcode ? 'selected' : '' }}> {{$department->deptname}}</option>
                    @endforeach
                </select>

                @error('deptcode')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection