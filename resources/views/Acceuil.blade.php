@extends ('layouts.index')
@section('titre','Acceuil')

@section('content')
<div class="hero-wrap" style="background-image: url('images/footer-bg.jpg');  data-stellar-background-ratio="0.5">
  
  <br><br><br>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text">
	            <h1 class="mb-4">Maintenant C'est <span style="color: rgb(255, 119, 0)"> facile  pour toi de se deplacer</span></h1>
               <h5 class="mb-4" style="color: rgb(255, 255, 255)">
	               ✅ Voitures récentes et bien équipées <br>
                  ✅ Tarifs compétitifs et transparents <br>
                  ✅ Service clientèle de première classe <br>
                  ✅ Réservation facile en ligne ou par téléphone
               </h5>
            </div>
          </div>
        <div class="form-group">
          <a href="{{ route('client') }}" class="btn btn-primary py-3 px-4 shake">RESERVER UNE VOITURE AVEC CHAUFFEUR</a>
        </div>

          <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
            <form action="/ajouter/Traitementlocation" method="POST"  enctype="multipart/form-data">
               @csrf
           </form>           
          </div>
        </div>
      </div>
    </div>
<br><br><br>
<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
      <div class="row no-gutters">
          <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/Apple-Maps-update-FR-only-2022-3D-experience_inline.jpg.slideshow-medium_2x.jpg);">
          </div>
          <div class="col-md-6 wrap-about py-md-5 ftco-animate">
              <div class="heading-section mb-5 pl-md-5">
                  <span class="subheading">Location de Voitures avec Chauffeur</span>
                  <h2 class="mb-4">Découvrez nos Voitures et Chauffeurs Qualifiés</h2>

                  <p>Embarquez pour un voyage confortable et sûr avec notre service de location de voitures avec chauffeur. Nos chauffeurs expérimentés et nos véhicules bien entretenus sont prêts à vous emmener où vous le souhaitez, quand vous le souhaitez.</p>
                  <p>Grâce à notre technologie de géolocalisation avancée, vous pouvez suivre en temps réel la position de votre chauffeur et de votre voiture. Cela vous permet de planifier votre trajet en toute confiance, sachant que vous serez toujours informé de l'emplacement exact de votre voiture.</p>
                  <p>Explorez notre flotte de voitures de luxe, de berlines confortables et de vans spacieux, et réservez votre prochain trajet dès aujourd'hui. Voyagez avec style et tranquillité d'esprit.</p>
                  <p><a href="{{ route('Plan') }}" class="btn btn-primary">Ou Nous sommes</a></p>
              </div>
          </div>
      </div>
  </div>
</section>
    <br><br>
    <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                  <span class="subheading">Nos Voitures disponible 24h/24</span>
                  <h2 class="mb-2">Reserver La Voiture de votre Choix a partir de 24h</h2>
              </div>
          </div>
          <div class="row">
              @foreach($voitures as $voiture)
              <div class="col-md-4">
                  <div class="car-wrap ftco-animate">
                      <div  style="background-image: url(images/car-1.jpg);">
                        <img src="{{ $voiture->image }}" class="img d-flex align-items-end" alt="{{ $voiture->marque }}">
                      </div>
                      <div class="text p-4 text-center">
                          <h2 class="mb-0">{{ $voiture->marque }}</h2>
                          <p>Couleur: {{ $voiture->couleur }}</p>
                          <p>Kilométrage: {{ $voiture->kilometrage }}</p>
                          <p class="d-flex mb-0 d-block">
                              <a href="{{ route('reservation.create', ['voiture_id' => $voiture->id]) }}" class="btn btn-black btn-outline-black mr-1">Réserver maintenant</a>
                          </p>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
      <br><br>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2">Reserver Le Camion de votre Choix a partir de 24h</h2>
            </div>
        </div>
        <div class="row">
            @foreach($camions as $camion)
            <div class="col-md-4">
                <div class="car-wrap ftco-animate">
                    <div  style="background-image: url(images/car-1.jpg);">
                      <img src="{{ $camion->image }}" class="block-20" alt="{{ $camion->marque }}">
                    </div>
                    <div class="text p-4 text-center">
                        <h2 class="mb-0">{{ $camion->marque }}</h2>
                        <p>Couleur: {{ $camion->couleur }} </p>
                        <p>Kilométrage: {{ $camion->kilometrage }}</p>
                        <p class="d-flex mb-0 d-block">
                            <a href="{{ route('reservationCamion.create', ['camion_id' => $camion->id]) }}" class="btn btn-black btn-outline-black mr-1">Réserver maintenant</a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>
    <br><br><br>
    <section class="feature spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-4">
                  <div class="feature__text">
                      <div class="section-title">
                          <span>Découvrez Yobalema</span>
                          <h2>Le meilleur service de covoiturage</h2>
                      </div>
                      <div class="feature__text__desc">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                              ut labore et</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                              viverra maecenas accumsan lacus vel facilisis.</p>
                      </div>
                      {{-- <div class="feature__text__btn">
                          <a href="#" class="primary-btn">About Us</a>
                          <a href="#" class="primary-btn partner-btn">Our Partners</a>
                      </div> --}}
                  </div>
              </div>
              <div class="col-lg-4 offset-lg-4">
                  <div class="row">
                      <div class="col-lg-6 col-md-4 col-6">
                          <div class="feature__item">
                              <div class="feature__item__icon">
                                  <img src="{{ asset('ib/img/feature/feature-1.png') }}" alt="">
                                  
                              </div>
                              <h6>Engine</h6>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-4 col-6">
                          <div class="feature__item">
                              <div class="feature__item__icon">
                                  <img src="{{ asset('ib/img/feature/feature-2.png') }}" alt="">
                              </div>
                              <h6>Turbo</h6>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-4 col-6">
                          <div class="feature__item">
                              <div class="feature__item__icon">
                                  <img src="{{ asset('ib/img/feature/feature-3.png') }}" alt="">
                              </div>
                              <h6>Colling</h6>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-4 col-6">
                          <div class="feature__item">
                              <div class="feature__item__icon">
                                  <img src="{{ asset('ib/img/feature/feature-4.png') }}" alt="">
                              </div>
                              <h6>Suspension</h6>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-4 col-6">
                          <div class="feature__item">
                              <div class="feature__item__icon">
                                  <img src="{{ asset('ib/img/feature/feature-5.png') }}" alt="">
                              </div>
                              <h6>Electrical</h6>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-4 col-6">
                          <div class="feature__item">
                              <div class="feature__item__icon">
                                  <img src="{{ asset('ib/img/feature/feature-6.png') }}" alt="">
                              </div>
                              <h6>Brakes</h6>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
 @endsection 

 