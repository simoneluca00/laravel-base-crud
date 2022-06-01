{{-- pop up di conferma eliminazione --}}
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif