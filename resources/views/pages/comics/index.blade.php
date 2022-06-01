@extends('layouts.layout')

@section('title', 'Comics')

@section('content')

@include('includes.messages.success')

<div class="row justify-content-center mb-5">
    <a href="{{route('comics.create')}}" class="btn btn-success w-auto">Create new comic</a>
</div>

<div class="row row-cols-5 g-4">

    @forelse ($comics as $comic)
    <div>
        <div class="card col bg-light" style="min-height: 515px;">

            <img src="{{ $comic->thumb }}" class="card-img-top" height="300px" alt="cover di {{ $comic->title }}">
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <h5 class="card-title">{{ $comic->title }}</h5>
                <h6 class="card-subtitle my-3 text_overflow">{{ $comic->series }}</h6>
              </div>
                <div class="d-flex flex-column">

                  <div class="d-flex justify-content-center align-items-center">

                    <a href="{{route('comics.show', $comic->id)}}" class="w-25 text-center mx-2">
                        <i class="fa-solid fa-circle-info text-dark fs-2"></i>
                    </a>
        
                    <a href="{{route('comics.edit', $comic->id)}}" class="w-25 text-center mx-2">
                        <i class="fa-solid fa-pen-to-square text-dark fs-2"></i>
                    </a>
        
                    <form action="{{route('comics.destroy', $comic->id)}}" method="post" class="w-25 text-center mx-2">
        
                        @method('DELETE')
                        @csrf
        
                        <button type="submit" class="btn" aria-describedat="Delete">
                            <i class="fa-solid fa-trash text-dark fs-2"></i>
                        </button>
                    </form>
                </div>

                </div>
            </div>
        </div>
    </div>
    @empty

    @endforelse

</div>

@endsection
