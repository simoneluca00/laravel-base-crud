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
            <div class="card col bg-light" style="min-height: 530px;">
                <img src="{{ $comic->thumb }}" class="card-img-top" height="300px" alt="cover di {{ $comic->title }}">
                <div class="card-body d-flex flex-column justify-content-between">
                  <h5 class="card-title">{{ $comic->title }}</h5>
                  <h6 class="card-subtitle my-3">{{ $comic->series }}</h6>
                  <div class="d-flex flex-column">
                      
                    <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary my-1">View Info</a>
                      
                    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning my-1">Edit Info</a>

                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                        
                       @method('DELETE')
                       @csrf

                       <button type="submit" class="btn btn-danger">Delete Comic</button>
                    </form>

                  </div>
                </div>
              </div>
           </div>
       @empty
           
       @endforelse

    </div>

@endsection