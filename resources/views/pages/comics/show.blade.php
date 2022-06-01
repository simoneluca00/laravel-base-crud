@extends('layouts.layout')

@section('title', 'Comic')
    
@section('content')

<div class="w-75 mx-auto">

    <div class="d-flex justify-content-center mb-5">
        <img src="{{$comic->thumb}}" alt="cover di {{$comic->title}}">
        <div class="ms-4">
            <h4>
                {{$comic->title}}
            </h4>

            <p>
                {{$comic->description}}
            </p>
        </div>
    </div>

    <div>
        <h5>Price:
            <span class="text-primary">
                {{$comic->price}} $
            </span>
        </h5>
        <h5>Series:
            <span class="text-primary">
                {{$comic->series}}
            </span>
        </h5>
        <h5>Type:
            <span class="text-primary text-capitalize">
                {{$comic->type}}
            </span>
        </h5>
        <h5>Sale date:
            <span class="text-primary">
                {{$comic->sale_date}}
            </span>
        </h5>

    </div>

</div>

@endsection