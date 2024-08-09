@extends('layouts.index')
@section('titre', 'Voiture')

@section('content')
<div class="hero-wrap" style="background-image: url('images/Capture.PNG'); " data-stellar-background-ratio="0.5">
    {{-- <section class="ftco-section testimony-section" style="background-color: rgb(0, 0, 0); color: white;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Nos voitures</h2>
            @if(auth()->check() && auth()->user()->role === 'admin')
                <a href="{{ route('ajouterChauffeur') }}" class="navbar-brand">Cliquez ici pour Ajouter des chauffeurs</a>
            @endif
            <br><br><br><br>
        </div>        
         <div class="container">
            <div class="row justify-content-center mb-5">
               @foreach($afficher as $chauffeur)
               <div class="col-md-4 ftco-animate">
                  <div class="blog-entry justify-content-end"> --}}
                     {{-- <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('images/person_4.jpg') }}');"></a> --}}
                     {{-- <img src="{{ $chauffeur->image }}" class="block-20" alt="{{$chauffeur->nom   }}">
                      
                     <div class="text pt-4">
                        <div class="meta mb-3">
                           <a class="navbar-brand" href="index.html">{{ $chauffeur->nom }} <span>{{ $chauffeur->prenom }}</span></a>
                           <br>
                           <div>Type de Permis: {{ $chauffeur->categorie }}</div>
                           <div>Numéro de Permis: {{ $chauffeur->numPermis }}</div>
                     </div> --}}
                        {{-- <span class="subheading">Expérience: {{ $chauffeur->experience }}</span>
                        <p>{{ $chauffeur->dateEmission }}</p>
                        <h3>Tarifications :</h3>
                        @foreach($reservations as $reservation)
                           @if($reservation->voiture_id == $chauffeur->voiture_id)
                           <span class="subheading">Voiture réservée du {{ $reservation->start_date }} au {{ $reservation->end_date }} </span>
                                 <p>Prix total : {{ $reservation->prix_total }} Fr Cfa</p>
                           @endif
                        @endforeach
                        @if(auth()->check() && auth()->user()->role === 'admin')
                        <form action="{{ route('chauffeur.destroy', $chauffeur->id) }}" method="POST">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-white btn-outline-white mr-1">Supprimer</button>
                       </form>
                        @endif
                        
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </section> --}}
  

{{-- 
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
                                  <button type="submit" class="btn btn-white btn-outline-white mr-1" style="color: rgb(237, 15, 15)">Supprimer</button>
                              </form>
                              @endif
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>
          </div>
          
        </div>
    </section> --}}




<section class="ftco-section testimony-section" style="background-color: rgb(0, 0, 0); color: white;">
   <div class="container">
       <div class="row justify-content-center mb-5">
           <div class="col-md-7 text-center heading-section ftco-animate">
       <h2 class="mb-3" style="color: aliceblue">Nos Chauffeur</h2>
       @if(auth()->check() && auth()->user()->role === 'admin')
           <a href="{{ route('ajouterChauffeur') }}" class="navbar-brand">Cliquez ici pour Ajouter des chauffeurs</a>
       @endif
       <br><br><br><br>
   </div>        
    <div class="container">
       <div class="row justify-content-center mb-5">
          @foreach($afficher as $chauffeur)
          <div class="col-md-4 ftco-animate">
             <div class="blog-entry justify-content-end">
                {{-- <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('images/person_4.jpg') }}');"></a> --}}
                <img src="{{ $chauffeur->image }}" class="block-20" alt="{{$chauffeur->nom   }}">
                 
                <div class="text pt-4">
                   <div class="meta mb-3">
                      <a class="navbar-brand" href="index.html">{{ $chauffeur->nom }} <span>{{ $chauffeur->prenom }}</span></a>
                      <br>
                      <div>Type de Permis: {{ $chauffeur->categorie }}</div>
                      <div>Numéro de Permis: {{ $chauffeur->numPermis }}</div>
                </div>
                   <span class="subheading">Expérience: {{ $chauffeur->experience }}</span>
                   <p>{{ $chauffeur->dateEmission }}</p>
                   
                   @if(auth()->check() && auth()->user()->role === 'admin')
                   <form action="{{ route('chauffeur.destroy', $chauffeur->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-white btn-outline-white mr-1">Supprimer</button>
<a href="{{ route('chauffeur.modifier', $chauffeur->id) }}" class="btn btn-primary">Modifier</a>
                  </form>
                   @endif
                   
                </div>
             </div>
          </div>
          @endforeach
       </div>
    </div>
 </section>

 
<br><br><br>
<section class="ftco-section services-section ftco-no-pt ftco-no-pb">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <h5 class="mb-2" style="color: rgb(0, 0, 0);">EVALUATION DES CLIENTS</h5>
         </div>
      </div>
      @php $i = 0; @endphp
      @foreach($afficher as $chauffeur)
      @if($i % 5 == 0)
      <div class="row">
         @endif
         <div class="col-md-4 ftco-animate">
            <div class="media block-6 services">
               <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                     <div class="icon">
                        <h4>{{ $chauffeur->nom }} {{ $chauffeur->prenom }}</h4>
                     </div>
                  </div>
                  @forelse($chauffeur->evaluations as $evaluation)
                  <div class="col-md-12">
                     <h3 class="heading mb-0 pl-3">Note: {{ $evaluation->note }}</h3>
                     <p class="pl-3" >Commentaire: {{ $evaluation->commentaire }}</p>
                  </div>
                  @empty
                  <div class="col-md-12">
                     <p>Aucune évaluation disponible pour ce chauffeur.</p>
                  </div>
                  @endforelse
               </div>
            </div>
         </div>
         @if($i % 3 == 2 || $loop->last)
      </div>
      @endif
      @php $i++; @endphp
      @endforeach
   </div>
</section>
<br><br><br><br><br><br>

@endsection





