<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
     
    <a class="navbar-brand" href="{{ route('Acceuil') }}">Yoba<span style="color: rgb(255, 119, 0)">lema</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        
        
        <li class="nav-item"><a href="{{ route('Chauffeur') }}" class="nav-link">Nos Chauffeur</a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Catégories</a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('Voiture', ['categorie' => 'pickup']) }}" class="dropdown-item">Voiture</a></li>
            <li><a href="{{ route('Camion', ['categorie' => 'camion']) }}" class="dropdown-item">Camion</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="{{ route('client') }}" class="nav-link">Client</a></li>
        <li class="nav-item"><a href="{{ route('prix') }}" class="nav-link">Nos Tarifs</a></li>
        <li class="nav-item"><a href="{{ route('Aide') }}" class="nav-link">Aide</a></li>
        
        <!-- Gestion de la connexion/déconnexion -->
        @if (Route::has('login'))
          @auth
            <li class="nav-item dropdown">  
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="welcome">{{ auth()->user()->name }}</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Déconnexion') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1"/>
                  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z"/>
                </svg>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('login') }}">Connexion</a>
                @if (Route::has('register'))
                  <a class="dropdown-item" href="{{ route('register') }}">Inscription</a>
                @endif
              </div>
            </li>
          @endauth
        @endif
      </ul>
    </div>
  </div>
</nav>
