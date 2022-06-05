@extends('layouts.layout')

@section('title', 'Comic')
    

@section('content')

<div class="container-fluid bg-primary py-5 position-relative">
    <div class="position-absolute text-white text-uppercase fs_small_cust" style="bottom: 15%; left: 15%; border: 1px solid #ffffff;">
        <img src="{{$comic->thumb}}" alt="cover di {{$comic->title}}" class="" width="220px" height="320px">

        <p class="bg-info position-absolute top-0 m-0" style="padding: 2px 3px;">
            {{$comic->type}}
        </p>

        <p class="bg-info position-absolute bottom-0 m-0 w-100 text-center" style="padding: 2px 3px;">
            view gallery
        </p>
    </div>
</div>

@include('includes.messages.success')

    <div class="row justify-content-lg-between mx-auto py-5 mt-5" style="width: 85%;">
    
        <div class="col-12 col-xl-8" style="min-width: 450px">
            <h3 class="text_show_cust text-uppercase fw-bold mb-4" style="font-family: sans-serif;">
                {{$comic->title}}
            </h3>
        
            <div class="bg_green_cust d-flex align-items-center">
                <div class="d-flex justify-content-between p-3 border-end border-dark w-75">
            
                    <div>
                        <span>U.S. Price:</span>
                        <span class="text-white fw-bold">
                            $ {{$comic->price}}
                        </span>
                    </div>
            
                    <div>
                        <span class="fw-bold">AVAILABLE</span>
                    </div>
                </div>
            
                <div class="d-flex text-white justify-content-center align-items-center w-25">
                    <span class="d-none d-md-inline">Check Availability</span>
                    <i class="fa-solid fa-caret-down fs_small_cust ms-1"></i>
                </div>
            </div>
    
            <p class="mt-3" style="line-height: 1.7em">
                {{$comic->description}}
            </p>
        </div>
    
        <div class="d-none d-xl-block col-xl-auto mb-4 mb-xl-0 text-end">
            <h6 class="text-uppercase text_gray_cust fw-bold mb-0" style="font-family: sans-serif;">advertisement</h6>
            <img src="{{ asset('../images/adv.jpg') }}" alt="advertisement">
        </div>
    
    </div>

<div class="bg-light py-5 border-top" style="border-color: #cecccc;">
    <div class="row row-cols-1 row-cols-xl-2 mx-auto" style="width: 85%;">

        <div class="col" style="min-width: 450px">
            <h3 class="text_show_cust mt-5 mt-xl-0 my-4">Talent</h3>

            <ul class="list-group">
                <li class="list-group-item bg-light border-start-0 border-end-0 rounded-0 d-flex align-items-center justify-content-between" style="border-color: #cecccc;">
                    <span class="text_show_cust fw-bold" style="white-space: nowrap;">Art by:</span>
                    <span class="ms-2" style="width: 75%; color: #61bfe6;">AUTORI</span>
                </li>

                <li class="list-group-item bg-light border-start-0 border-end-0 rounded-0 d-flex align-items-center justify-content-between" style="border-color: #cecccc;">
                    <span class="text_show_cust fw-bold" style="white-space: nowrap;">Written by:</span>
                    <span class="ms-2" style="width: 75%; color: #61bfe6;">SCRITTORI</span>
                </li>
              </ul>

        </div>

        <div class="col" style="min-width: 450px">
            <h3 class="text_show_cust mt-5 mt-xl-0 my-4">Specs</h3>

            <ul class="list-group">
                <li class="list-group-item bg-light border-start-0 border-end-0 rounded-0 d-flex align-items-center justify-content-between" style="border-color: #cecccc;">
                    <span class="text_show_cust fw-bold">Series:</span>
                    <span class="ms-2 text-uppercase" style="width: 75%; color: #61bfe6;">{{$comic->series}}</span>
                </li>

                <li class="list-group-item bg-light border-start-0 border-end-0 rounded-0 d-flex align-items-center justify-content-between" style="border-color: #cecccc;">
                    <span class="text_show_cust fw-bold" style="white-space: nowrap;">U.S. Price:</span>
                    <span class="ms-2" style="width: 75%;">${{$comic->price}}</span>
                </li>
                <li class="list-group-item bg-light border-start-0 border-end-0 rounded-0 d-flex align-items-center justify-content-between" style="border-color: #cecccc;">
                    <span class="text_show_cust fw-bold" style="white-space: nowrap;">On sale date:</span>
                    <span class="ms-2" style="width: 75%;">{{$comic->sale_date}}</span>
                </li>
              </ul>

        </div>

    </div>
</div>


{{-- <div class="w-75 mx-auto py-5">

    <div class="d-flex justify-content-center mb-5">
        <div class="ms-4">
            <h2 class="text-primary f_fam_cust" style="letter-spacing: 0.03em;">
                {{$comic->title}}
            </h2>

            <p class=" w-75" style="line-height: 1.7em">
                {{$comic->description}}
            </p>
        </div>
    </div>

    <div>
        <h5 class="">Price:
            <span class="text-primary">
                {{$comic->price}} $
            </span>
        </h5>
        <h5 class="">Series:
            <span class="text-primary">
                {{$comic->series}}
            </span>
        </h5>
        <h5 class="">Type:
            <span class="text-primary text-capitalize">
                {{$comic->type}}
            </span>
        </h5>
        <h5 class="">Sale date:
            <span class="text-primary">
                {{$comic->sale_date}}
            </span>
        </h5>

    </div>

</div> --}}

@endsection