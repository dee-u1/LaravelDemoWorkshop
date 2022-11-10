@extends('master_file.master_layout')
@section('title','Industry page')
@section('heading','Industry Heading')

@section('content')
    <a name="" id="" class="btn btn-primary mb-3" href="{{route('industries.create')}}" role="button">Add Industry</a>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Industry Name</th>
                    <th scope="col">Industry Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($industries as $industry)
                <tr>
                    <td> {{$industry->industryname}}</td>
                    <td> {{$industry->industrydescription}}</td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
    
@endsection