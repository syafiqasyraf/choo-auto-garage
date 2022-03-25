
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container ml-2">
    <a class="navbar-brand" href="/">Choo Garage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Inventori") ? 'active' : '' }}" href="/inventori">Inventori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Pelanggan") ? 'active' : '' }}" href="/pelanggan">Pelanggan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Contact") ? 'active' : '' }}" href="/contact">Hubungi Kami</a>
        </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/customer" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, <strong>{{ auth()->user()->name }}</strong>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item">
                      <i class="bi bi-box-arrow-in-down-right"></i> Logout
                      </button>
                    </form>
                  </li>
                </ul>
              </li>
            @else
            <li class="nav-item">
              <a class="nav-link" {{ ($title === "login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i>
              Login</a>
            </li>
            @endauth
        </ul>
        
        <!-- <li class="nav-item">
          <a class="nav-link {{ ($title === "Profile") ? 'active' : '' }}" href="/profile"><img src="bengkel.jpg" alt="profile"></a>
        </li> -->
        
      

      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>