@extends('master_file.master_layout')
@section('title','Industry create')
@section('heading','Add Industry')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{route('industries.store')}}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Industry Name</label>
            <div class="col-8">
                <input type="text" class="form-control @error('industryname') is-invalid @enderror" name="industryname" id="" value="{{old('industryname')}}" placeholder="">
                @error('industryname')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Industry Description</label>
            <div class="col-8">
                <input type="text" class="form-control @error('industrydescription') is-invalid @enderror" name="industrydescription" id="" value="{{old('industrydescription')}}"  placeholder="">
                @error('industrydescription')
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