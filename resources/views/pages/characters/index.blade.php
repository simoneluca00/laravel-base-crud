@extends('layouts.layout')

@section('title', 'Characters')

@section('content')

<div class="row text-center">
  <h1 class="text-light">Sono la pagina INDEX di CHARACTERS</h1>
</div>

@endsection

@section('delete-confirm')
  {{-- script Delete Comic --}}
  <script src=" {{ asset('./js/deleteConfirm.js') }} "></script>  
@endsection
