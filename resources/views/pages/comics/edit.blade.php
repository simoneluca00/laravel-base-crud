@extends('layouts.layout')

@section('title', 'Edit Comic')
    
@section('content')

@include('includes.validation.errors')

    <h2 class="text-primary text-center mb-5">Edit 
        <a href="{{route('comics.show', $comic->id)}}">{{ $comic->title }}</a>
    </h2>


    <form action="{{route('comics.update', $comic->id)}}" method="POST">

        @method('PUT')

        @csrf

        <div class="my-4">
            <label for="comicTitle" class="form-label">Modifica il titolo:</label>
            <input type="text" id="comicTitle" name="title" class="form-control" placeholder="Titolo" maxlength="100" value="{{old('title', $comic->title)}}" required>
        </div>
        <div class="my-4 d-flex flex-column">
            <label for="comicDescription" class="form-label">Modifica la descrizione:</label>
            <textarea id="comicDescription" class="p-2" name="description" rows="6" placeholder="Descrizione" required >{{old('description', $comic->description)}}</textarea>
        </div>
        <div class="my-4">
            <label for="comicThumb" class="form-label">Modifica l'url della cover:</label>
            <input type="text" id="comicThumb" name="thumb" class="form-control" placeholder="Url Cover" maxlength="200" value="{{old('thumb', $comic->thumb)}}" required>
        </div>
        <div class="my-4">
            <label for="comicPrice" class="form-label">Modifica il prezzo:</label>
            <input type="number" step="0.01" id="comicPrice" name="price" class="form-control" min="1" placeholder="Prezzo" value="{{old('price', $comic->price)}}" required>
        </div>
        <div class="my-4">
            <label for="comicSeries" class="form-label">Modifica la saga:</label>
            <input type="text" id="comicSeries" name="series" class="form-control" placeholder="Saga" maxlength="100" value="{{old('series', $comic->series)}}" required>
        </div>
        <div class="my-4">
            <label for="comicSaleDate" class="form-label">Modifica la data di rilascio:</label>
            <input type="date" id="comicSaleDate" name="sale_date" class="form-control" value="{{old('sale_date', $comic->sale_date)}}" required>
        </div>
        <div class="my-4">
            <label for="comicType" class="form-label">Modifica la categoria:</label>
            <input type="text" id="comicType" name="type" class="form-control" placeholder="Categoria" maxlength="100" value="{{old('type', $comic->type)}}" required>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Invia Dati</button>
        </div>
    </form>

@endsection