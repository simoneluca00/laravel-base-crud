<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">COMICS</a>
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
            {{-- <a class="nav-link {{ Request::route()->getName() == 'houses' || Request::route()->getName() == 'house' ? 'text-primary fw-bold' : '' }}" href=" {{route('houses')}} ">Houses</a> --}}
          </li>
        </ul>
      </div>
    </div>
  </nav>