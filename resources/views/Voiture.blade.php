@extends('layouts.index')
@section('titre', 'Voiture')

@section('content')

<div class="hero-wrap" style="background-image: url('images/Capture.PNG'); " data-stellar-background-ratio="0.5">
  <!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Inclure la bibliothèque Slick Carousel -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  
  <section class="ftco-section testimony-section" style="background-color: rgb(0, 0, 0); color: white;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <br><br>
                    @if(auth()->check() && auth()->user()->role === 'admin')
                    <a href="{{ route('ajouter') }}" class="navbar-brand">Cliquez ici pour Ajouter d'autre voitures</a>
                    @endif
                </div>
            </div>
            <div class="row ftco-animate" style="overflow-x: auto;">
              <div class="d-flex flex-nowrap" id="carContainer">
                  @foreach($afficher as $voiture)
                  <div class="col-md-4 text-center">
                      <div class="request-form ftco-animate car-section">
                          <img src="{{ $voiture->image }}" class="block-20" alt="{{ $voiture->marque }}">
                          <div class="text pt-4" style="color: rgb(255, 239, 10);">
                              <span class="position" style="color: rgb(255, 174, 0);">Marque: {{ $voiture->marque }}</span><br>
                              <span class="position" style="color: rgb(213, 199, 199);">De couleur : {{ $voiture->couleur }}</span><br>
                                <span class="position" style="color: white;">{{ $voiture->kilometrage }} Km</span><br>
                              <span class="position" style="color: white;">Date Achat: {{ $voiture->date_achat }} <br> {{ $voiture->prix }}</span>
                              <h5 style="color: white;">{{ $voiture->statut }}</h5>
                              @if(auth()->check() && auth()->user()->role === 'admin')
                              <form action="{{ route('voiture.destroy', $voiture->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <br>
                                  <button type="submit" class="btn btn-white btn-outline-white mr-1" style="color: rgb(237, 15, 15)">Supprimer</button>
                                  <a href="{{ route('voiture.modifier', $voiture->id) }}" class="btn btn-primary">Modifier</a>
                                </form>
                                
                              @endif
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>
          </div>
          
        </div>
    </section>
    
</div>


<style>
  .car-section {
      background-color: black;
      color: white;
      /* Ajoutez d'autres styles personnalisés si nécessaire */
  }
</style>


 <section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Découvrez Yobalema</span>
        <h2>Le meilleur service de covoiturage</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="blog-entry ftco-animate">
          <img src="{{asset('images/car-9.jpg')}}" class="block-20" alt="">
          </a>
          <div class="text mt-3">
            <h3 class="heading"><a href="#">La solution de covoiturage la plus fiable</a></h3>
            <p>Profitez d'un trajet confortable et sûr avec Yobalema. Économisez du temps et de l'argent tout en réduisant votre empreinte carbone.</p>
            
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blog-entry ftco-animate">
          <img src="{{asset('images/car-8.jpg')}}" class="block-20" alt="">
          <div class="text mt-3">
            <h3 class="heading"><a href="#">La solution de covoiturage la plus fiable</a></h3>
            <p>Profitez d'un trajet confortable et sûr avec Yobalema. Économisez du temps et de l'argent tout en réduisant votre empreinte carbone.</p>
            
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blog-entry ftco-animate">
          <img src="{{asset('images/car-6.jpg')}}" class="block-20" alt="">
          <div class="text mt-3">
            <h3 class="heading"><a href="#">La solution de covoiturage la plus fiable</a></h3>
            <p>Profitez d'un trajet confortable et sûr avec Yobalema. Économisez du temps et de l'argent tout en réduisant votre empreinte carbone.</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 @endsection 

 
