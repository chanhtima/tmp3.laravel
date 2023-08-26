

  <header class="Head_wrapper">
  
    <nav class="navbar navbar-expand-xl ">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('') }}"><img src="{{ Module::asset('frontend:img/home/001-Logonw (1).png') }}" class="logo" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav mb-2 mb-lg-0">
              <li><a class="nav-link scrollto" href="{{url('/')}}">Home</a></li>
              <li><a class="nav-link scrollto" href="{{ url('about') }}">About Us</a></li>
              <li><a class="nav-link scrollto " href="{{ url('wonewith') }}">Wone With</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sharing
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ url('/article') }}">
                    Articles & Media</a></li>
                  <li><a class="dropdown-item" href="{{ url('/podcast') }}" >
                    Podcast
                  </a></li>
                  
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="{{ url('event') }}"> Events</a></li>
              <li><a class="nav-link scrollto" href="{{ url('contact') }}">Contact Us</a></li>
              <li><a class="nav-link scrollto language" href="#">TH / <span>EN</a></li>
              </li>
             
            
          </ul>
          
        </div>
      </div>
    </nav>
  </header>