<nav class="navbar navbar-expand-lg navbar-light bg-light f_fam_cust py-0">
    <div class="container-md">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('./images/dc-logo.png')}}" alt="" height="70px">
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pb-3 pb-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 w-75 mx-auto justify-content-center">

                <li class="nav-item mx-lg-3 text-center">
                    <a class="nav-link fs-5 py-4 {{ Request::route()->getName() == 'home' ? 'text-primary border-bottom border-primary border-4 rounded-1' : '' }}"
                        aria-current="{{Request::route()->getName() == 'home' ? 'page' : 'none'}}"
                        href=" {{route('home')}} ">
                        <i class="fa-solid fa-house position-relative mx-1 d-lg-none" style="font-size: 0.8em; bottom: 2px;"></i>
                        Home
                    </a>
                </li>

                <li class="nav-item dropdown mx-lg-3 text-center">
                  <a href="{{route('comics.index')}}" id="comicsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" 
                    class="nav-link dropdown-toggle fs-5 py-4 {{ Request::route()->getName() == 'comics.index' || Request::route()->getName() == 'comics.show' || Request::route()->getName() == 'comics.create' || Request::route()->getName() == 'comics.edit' ? 'text-primary border-bottom border-primary border-4 rounded-1' : '' }}"
                    aria-current="{{ Request::route()->getName() == 'comics.index' || Request::route()->getName() == 'comics.show' || Request::route()->getName() == 'comics.create' || Request::route()->getName() == 'comics.edit' ? 'page' : 'none' }}">
                    <i class="fa-solid fa-book-open position-relative mx-1 d-lg-none" style="font-size: 0.8em; bottom: 1px;"></i>
                    Comics
                  </a>
                  <ul class="dropdown-menu bg-light mt-0" style="z-index: 2;" aria-labelledby="comicsDropdown">
                    <li>
                      <a href="{{route('comics.index')}}" class="dropdown-item fs-5 py-3 {{Request::route()->getName() == 'comics.index' ? 'active' : '' }}">Comics List</a>
                    </li>
                    <li>
                      <a href="{{route('comics.create')}}" class="dropdown-item fs-5 py-3 {{Request::route()->getName() == 'comics.create' ? 'active' : '' }}">Create New Comic</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropdown mx-lg-3 text-center">
                  <a href="{{route('characters.index')}}" id="charactersDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" 
                    class="nav-link dropdown-toggle fs-5 py-4 {{ Request::route()->getName() == 'characters.index' || Request::route()->getName() == 'characters.show' || Request::route()->getName() == 'characters.create' || Request::route()->getName() == 'characters.edit' ? 'text-primary border-bottom border-primary border-4 rounded-1' : '' }}"
                    aria-current="{{ Request::route()->getName() == 'characters.index' || Request::route()->getName() == 'characters.show' || Request::route()->getName() == 'characters.create' || Request::route()->getName() == 'characters.edit' ? 'page' : 'none' }}">
                    <i class="fa-solid fa-user-ninja position-relative mx-1 d-lg-none" style="font-size: 0.8em; bottom: 1px;"></i>
                    Characters
                  </a>
                  <ul class="dropdown-menu bg-light mt-0" style="z-index: 2;" aria-labelledby="charactersDropdown">
                    <li>
                      <a href="{{route('characters.index')}}" class="dropdown-item fs-5 py-3 {{Request::route()->getName() == 'characters.index' ? 'active' : '' }}">Characters List</a>
                    </li>
                    <li>
                      <a href="{{route('characters.create')}}" class="dropdown-item fs-5 py-3 {{Request::route()->getName() == 'characters.create' ? 'active' : '' }}">Create New Character</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item mx-lg-3 text-center">
                    <a class="nav-link fs-5 py-4 {{ Request::route()->getName() == 'news' ? 'text-primary border-bottom border-primary border-4 rounded-1' : '' }}"
                        aria-current="{{Request::route()->getName() == 'news' ? 'page' : 'none'}}"
                        href=" {{route('news')}} ">
                        <i class="fa-solid fa-newspaper position-relative mx-1 d-lg-none" style="font-size: 0.8em;  bottom: 1px;"></i>
                        News
                    </a>
                </li>

                <li class="nav-item mx-lg-3 text-center">
                    <a class="nav-link fs-5 py-4 {{ Request::route()->getName() == 'aboutUs' ? 'text-primary border-bottom border-primary border-4 rounded-1' : '' }}"
                        aria-current="{{Request::route()->getName() == 'aboutUs' ? 'page' : 'none'}}"
                        href=" {{route('aboutUs')}} " style="white-space: nowrap">
                        <i class="fa-solid fa-user-group position-relative mx-1 d-lg-none" style="font-size: 0.8em;  bottom: 1px;"></i>
                        About Us
                    </a>
                </li>
                <li class=" nav-item mx-lg-3 text-center">
                    <a class="nav-link fs-5 py-4 {{ Request::route()->getName() == 'contacts' ? 'text-primary border-bottom border-primary border-4 rounded-1' : '' }}"
                        aria-current="{{Request::route()->getName() == 'contacts' ? 'page' : 'none'}}"
                        href=" {{route('contacts')}} ">
                        <i class="fa-solid fa-phone position-relative mx-1 d-lg-none" style="font-size: 0.8em;  bottom: 1px;"></i>
                        Contacts
                    </a>
                </li>
            </ul>
            <form class="d-flex justify-content-end justify-content-lg-start f_fam_default">
                <div class="position-relative">
                    <input class="form-control me-2 fw-bold border-end-0 border-top-0 border-start-0 border-primary border-2 ps-4 rounded-0 shadow-none bg-light placeholder_cust" type="search" placeholder="Search" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass position-absolute text_gray_cust"></i>
                </div>
            </form>
        </div>
    </div>
</nav>
