<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DC COMICS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            {{-- <a class="nav-link {{ Request::route()->getName() == 'home' ? 'text-primary fw-bold' : '' }}" aria-current="page" href=" {{route('home')}} ">Home</a> --}}
          </li>
          <li class="nav-item">
            {{-- <a class="nav-link {{ Request::route()->getName() == 'aboutUs' ? 'text-primary fw-bold' : '' }}" href=" {{route('aboutUs')}} ">About Us</a> --}}
          </li>
          <li class="nav-item">
            {{-- <a class="nav-link {{ Request::route()->getName() == 'contacts' ? 'text-primary fw-bold' : '' }}" href=" {{route('contacts')}} ">Contacts</a> --}}
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::route()->getName() == 'comics.index' || Request::route()->getName() == 'comics.show' || Request::route()->getName() == 'comics.create' || Request::route()->getName() == 'comics.edit' ? 'text-primary fw-bold' : '' }}" href=" {{route('comics.index')}} ">Comics</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>