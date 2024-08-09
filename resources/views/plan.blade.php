@extends('layouts.index')
@section('titre', 'Voiture')

@section('content')

<div class="hero-wrap" style="background-image: url('images/Capture.PNG');" data-stellar-background-ratio="0.5">
   <br><br><br><br><br>
   <div class="container">
      <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <h2 class="mb-3">Ou Somme nous</h2>
          {{-- <span class="subheading"> Nous sommes là pour vous aider. Vous cherchez les coordonnées du service client ? Explorez les ressources d'aide pour les produits concernés ci-dessous afin de trouver le meilleur moyen de résoudre votre problème.</span> --}}
       <br><br>
      </div>
    </div>
    
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <div id="map" style="height: 500px;"></div>
    <script>
      var map = L.map('map').setView([14.7167, -17.4677], 13);
    
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);
    
      L.marker([14.7167, -17.4677]).addTo(map)
        .bindPopup('Yobalema')
        .openPopup();
    </script>
      </div>
   </div>
</div>

@endsection
