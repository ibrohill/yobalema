@extends ('layouts.index')
@section('titre','Ajout du Camion')

@section('content')

<div class="container-fluid py-5" style="background-color: #000; min-height: 100vh;">
    <br><br><br>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-lg border-white" style="background-color: #fff;">
                <div class="card-header bg-primary text-white">
                    <h3 class="m-0">Ajouter une Camion</h3>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/ajouter/traitementCamion" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="statut" class="form-label">Statut</label>
                            <select class="form-select" name="categorie" id="categorie" required>
                                <option value="voiture">Voiture </option>
                                <option value="pickup">Camion </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="Marque" class="form-label">Marque</label>
                            <input type="text" class="form-control" id="Marque" name="Marque">
                        </div>
                        <div class="mb-3">
                            <label for="Date" class="form-label">Date d'achat</label>
                            <input type="text" class="form-control" id="Date" name="Date" placeholder="Y/m/d">
                        </div>
                        <div class="mb-3">
                            <label for="Kilometrage" class="form-label">Kilométrage</label>
                            <input type="text" class="form-control" id="Kilometrage" name="Kilometrage">
                        </div>
                        <div class="mb-3">
                            <label for="Matricule" class="form-label">Matricule</label>
                            <input type="text" class="form-control" id="Matricule" name="Matricule">
                        </div>
                        <div class="mb-3">
                            <label for="Couleur" class="form-label">Couleur</label>
                            <input type="text" class="form-control" id="Couleur" name="Couleur">
                        </div>
                        <div class="mb-3">
                            <label for="Prix" class="form-label">Prix</label>
                            <input type="text" class="form-control" id="Prix" name="Prix">
                        </div>   
                        <div class="mb-3">
                            <label for="statut" class="form-label">Statut du  Camion</label>
                            <select class="form-select" id="statut" name="statut" required>
                                <option value="en marche">En marche</option>
                                <option value="en panne">En panne</option>
                                <option value="en réparation">En réparation</option>
                                <!-- Ajoutez d'autres options de statut au besoin -->
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
