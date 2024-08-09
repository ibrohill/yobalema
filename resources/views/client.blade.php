@extends('layouts.index')
@section('titre', 'Client')

@section('content')
<div class="hero-wrap" style="background-image: url('images/footer-bg.jpg');  data-stellar-background-ratio="0.5">
  <br><br>
  @if (session('success'))
  <div class="alert alert-success w-50 mx-auto" role="alert" style="font-size: 16px; margin-top: 20px;">
      {{ session('success') }}
  </div>
@endif
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

          <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
            <form action="{{ route('reservation.store') }}" method="POST" class="request-form ftco-animate" enctype="multipart/form-data">
                @csrf
                <h2>Réserver Votre Voiture</h2>
                <div class="form-group">
                    <label for="Nom" class="label">Nom & Prénom</label>
                    <input type="text" class="form-control" id="Nom" name="Nom" placeholder="Nom complet" required>
                </div>
                <div class="form-group">
                    <label for="Drop-off-location" class="label">POINT DE CHUTE</label>
                    <input type="text" class="form-control" id="Drop-off-location" name="Drop-off-location" placeholder="Dakar, Thies, Mbour, etc" required>
                </div>
                <div class="d-flex">
                    <div class="form-group mr-2">
                        <label for="start_date" class="label">DATE DE RAMASSAGE</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="form-group ml-2">
                        <label for="end_date" class="label">DATE DE DÉPÔT</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label for="chauffeur_id" class="label">Sélectionnez un chauffeur :</label>
                    <select name="chauffeur_id" id="chauffeur_id" class="form-control">
                        @foreach($chauffeurs as $chauffeur)
                        <option value="{{ $chauffeur->id }}">{{ $chauffeur->nom }} {{ $chauffeur->prenom }}</option>
                        @endforeach
                    </select>
                </div> --}}
                <div class="form-group">
                    <label for="voiture_id" class="label">Sélectionnez une voiture :</label>
                    <select name="voiture_id" id="voiture_id" class="form-control">
                        @foreach($voitures as $voiture)
                        <option value="{{ $voiture->id }}">{{ $voiture->marque }} {{ $voiture->couleur }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Valider" class="btn btn-primary py-3 px-4">
                </div>
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
                  <p><a href="#" class="btn btn-primary">Maps</a></p>
              </div>
          </div>
      </div>
  </div>
</section>
<br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Évaluation du Chauffeur</div>
                   
                    <div class="card-body">
                        <form action="{{ route('evaluerChauffeur') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="chauffeur_id">Sélectionner le chauffeur :</label>
                                <select name="chauffeur_id" id="chauffeur_id" class="form-control" required>
                                    @foreach($chauffeurs as $chauffeur)
                                        <option value="{{ $chauffeur->id }}">{{ $chauffeur->nom }} {{ $chauffeur->prenom }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="note">Note (1-5) :</label>
                                <input type="number" class="form-control" name="note" id="note" min="1" max="5" required>
                            </div>

                            <div class="form-group">
                                <label for="commentaire">Commentaire :</label>
                                <textarea name="commentaire" class="form-control" id="commentaire" rows="4"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <section class="ftco-section services-section img" style="background-image: url(images/whyDriveWithUs_desktop.svg); background-size: cover; background-position: center;" data-stellar-background-ratio="0.8">
        <div class="overlay"></div>
          <div class="container">
              <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Découvrez Yobalema</span>
              <h2 class="mb-3">Le meilleur service de covoiturage</h2>
            </div>
          </div>
              <div class="row">
                  <div class="col-md-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services services-2">
                <div class="media-body py-md-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                  <h3>Voyagez en toute confiance avec Yobalema</h3>
                  <p>Découvrez notre service de covoiturage de qualité. Des trajets confortables et sécurisés vous attendent. Réservez dès maintenant !</p>
                </div>
              </div>      
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services services-2">
                <div class="media-body py-md-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select"></span></div>
                  <h3>Faites des économies avec Yobalema</h3>
                  <p>Voyagez à moindre coût avec notre service de covoiturage. Économisez du temps et de l'argent tout en protégeant l'environnement.</p>
                </div>
              </div>      
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services services-2">
                <div class="media-body py-md-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                  <h3>Rejoignez la communauté Yobalema</h3>
                  <p>Partagez vos trajets et rencontrez de nouvelles personnes avec Yobalema. Inscrivez-vous dès maintenant et découvrez une nouvelle façon de voyager !</p>
                </div>
              </div>      
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services services-2">
                <div class="media-body py-md-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
                  <h3>Enjoy The Ride</h3>
                  <p>A small river named Duden flows by their place and supplies it with you</p>
                </div>
              </div>      
            </div>
              </div>
          </div>
      </section>



@endsection
