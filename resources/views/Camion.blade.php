@extends('layouts.index')
@section('titre', 'Camion')

@section('content')

<div class="hero-wrap" style="background-image: url('images/Capture.PNG'); " data-stellar-background-ratio="0.5">
    <section class="ftco-section testimony-section" style="background-color: rgb(0, 0, 0); color: white;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <br><br>
                    @if(auth()->check() && auth()->user()->role === 'admin')
                    <a href="{{ route('ajouterCamion') }}" class="navbar-brand">Cliquez ici pour Ajouter d'autre Camion</a>
                    @endif
                </div>
            </div>
            <div class="row ftco-animate" style="overflow-x: auto;">
                <div class="d-flex flex-nowrap" id="carContainer">
                  @foreach($camions as $camion)
                  <div class="col-md-4">
                    <div class="request-form ftco-animate car-section">
                      <img src="{{ $camion->image }}" class="block-20" alt="{{ $camion->marque }}">
                      <div class="text pt-4" style="color: rgb(255, 239, 10);">
                        <strong> <p class="mb-4" style="color: white;">{{ $camion->marque }}  {{ $camion->couleur }}</p> </strong>
                        <p class="name " style="color: white;">{{ $camion->kilometrage }} Km</p>
                        <span class="position" style="color: white;">{{ $camion->date_achat }} {{ $camion->prix }}</span>
                        <h5 style="color: white;">{{ $camion->statut }}</h5>
                        @if(auth()->check() && auth()->user()->role === 'admin')
                        <form action="{{ route('Camion.destroy', $camion->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-white btn-outline-white mr-1"
                                  style="color: rgb(237, 15, 15)">Supprimer</button>
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

 
