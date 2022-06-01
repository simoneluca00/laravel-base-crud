    {{-- Errori validazione --}}
    @if ($errors->any())
    {{-- se sono presenti errori --}}

    <div class="alert alert-danger">
        <ul>
           @foreach ($errors->all() as $error)
               <li>{{$error}}</li>
           @endforeach
        </ul>
    </div>
    
@endif