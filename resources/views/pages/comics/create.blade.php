@extends('layouts.layout')

@section('title', 'Create Character')

@section('content')

{{-- per comunicare in modo corretto con la view STORE deve essere utilizzato il metodo POST --}}
{{-- l'attributo ACTION dovrà avere come parametro la rotta della view STORE --}}
<form action="{{route('comics.store')}}" method="POST">

    {{-- validazioni fatte da Laravel --> input hidden --> injections --}}
   @csrf

    {{-- l'attributo NAME dovrà passare il nome dell'entità  --}}
    <div class="my-4">
        <label for="comicTitle" class="form-label">Inserisci il titolo:</label>
        <input type="text" id="comicTitle" name="title" class="form-control" placeholder="Titolo" maxlength="100" required>
    </div>
    <div class="my-4 d-flex flex-column">
        <label for="comicDescription" class="form-label">Inserisci la descrizione:</label>
        <textarea id="comicDescription" name="description" rows="6" placeholder="Descrizione" required ></textarea>
    </div>
    <div class="my-4">
        <label for="comicThumb" class="form-label">Inserisci l'url della cover:</label>
        <input type="text" id="comicThumb" name="thumb" class="form-control" placeholder="Url Cover" value="https://" maxlength="200" required>
    </div>
    <div class="my-4">
        <label for="comicPrice" class="form-label">Inserisci il prezzo:</label>
        <input type="number" step="0.01" id="comicPrice" name="price" class="form-control" min="1" placeholder="Prezzo" required>
    </div>
    <div class="my-4">
        <label for="comicSeries" class="form-label">Inserisci la saga:</label>
        <input type="text" id="comicSeries" name="series" class="form-control" placeholder="Saga" maxlength="100" required>
    </div>
    <div class="my-4">
        <label for="comicSaleDate" class="form-label">Inserisci la data di rilascio:</label>
        <input type="date" id="comicSaleDate" name="sale_date" class="form-control" required>
    </div>
    <div class="my-4">
        <label for="comicType" class="form-label">Inserisci la categoria:</label>
        <input type="text" id="comicType" name="type" class="form-control" placeholder="Categoria" maxlength="100" required>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Invia Dati</button>
    </div>
</form>

@endsection
