@extends ('layouts.index')
@section('titre','Aide')

@section('content')
<div class="hero-wrap" style="background-image: url('images/Capture.PNG');" data-stellar-background-ratio="0.5">
   
   <br><br><br><br><br>
   <div class="container">
      <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <h2 class="mb-3" style="color: aliceblue">Bienvenue sur le chat de l'assistance Yobalema </h2>
          <span class="subheading" style="color: aliceblue"> Nous sommes là pour vous aider. Vous cherchez les coordonnées du service client ? Explorez les ressources d'aide pour les produits concernés ci-dessous afin de trouver le meilleur moyen de résoudre votre problème.</span>
       <br><br>

       

      </div>
    </div>
    <section class="ftco-section services-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center">
          {{-- <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading" style="color: aliceblue">Découvrez Nos Offres</span>
            <h2 class="mb-2" style="color: aliceblue">Explorez Nos Services</h2>
          </div> --}}
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-customer-support"></span></div>
                  <h3 class="heading mb-0 pl-3" style="color: aliceblue">Support Client 24/7</h3>
                </div>
                <p style="color: aliceblue">Notre équipe dévouée est disponible à tout moment pour vous aider avec toutes vos questions liées aux voitures.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-route"></span></div>
                  <h3 class="heading mb-0 pl-3" style="color: aliceblue">De Multiples Lieux</h3>
                </div>
                <p style="color: aliceblue">Explorez une multitude de lieux où vous pouvez récupérer ou déposer votre voiture de location sans tracas.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-online-booking"></span></div>
                  <h3 class="heading mb-0 pl-3" style="color: aliceblue">Réservations Faciles</h3>
                </div>
                <p style="color: aliceblue">Vivez une réservation sans accroc grâce à notre système de réservation en ligne convivial.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-rent"></span></div>
                  <h3 class="heading mb-0 pl-3" style="color: aliceblue">Voitures de Location Premium</h3>
                </div>
                <p style="color: aliceblue">Choisissez parmi notre flotte de voitures de location haut de gamme pour un voyage confortable et stylé.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
      </div>
   </div>
</div>
@endsection
