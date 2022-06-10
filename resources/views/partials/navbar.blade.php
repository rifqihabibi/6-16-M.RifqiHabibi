<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
   <div class="container">
    <a class="navbar-brand" href="/">Rifki</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ Request::url() == url('/home') ? 'active' : ' ' }}" href="/">Home</a>
                <a class="nav-link {{ Request::url() == url('/about') ? 'active' : ' ' }}" href="/about">About</a>
                <a class="nav-link {{ Request::url() == url('/gallery') ? 'active' : ' ' }}"
                   href="/gallery">Gallery</a>
                <a class="nav-link {{ Request::url() == url('/contacts') ? 'active' : ' ' }}"
                   href="{{ route('contacts.create')}}">Contact Us</a>
            </div>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{route ('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route ('register')}}">Register</a>
              </li>
            </ul>
        </div>
   </div>
</nav>