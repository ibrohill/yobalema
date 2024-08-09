@extends('layouts.index')
@section('titre', 'Modifier Voiture')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier Voiture</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('voiture.update', $voiture->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="Marque" class="form-label">Marque</label>
                            <input type="text" class="form-control" id="Marque" name="Marque" value="{{ $voiture->marque }}">
                        </div>
                        <div class="mb-3">
                            <label for="Date" class="form-label">Date d'achat</label>
                            <input type="text" class="form-control" id="Date" name="Date" value="{{ $voiture->date_achat }}">
                        </div>
                        <div class="mb-3">
                            <label for="Kilometrage" class="form-label">Kilométrage</label>
                            <input type="text" class="form-control" id="Kilometrage" name="Kilometrage" value="{{ $voiture->kilometrage }}">
                        </div>
                        <div class="mb-3">
                            <label for="Matricule" class="form-label">Matricule</label>
                            <input type="text" class="form-control" id="Matricule" name="Matricule" value="{{ $voiture->matricule }}">
                        </div>
                        <div class="mb-3">
                            <label for="Couleur" class="form-label">Couleur</label>
                            <input type="text" class="form-control" id="Couleur" name="Couleur" value="{{ $voiture->couleur }}">
                        </div>
                        <div class="mb-3">
                            <label for="Prix" class="form-label">Prix</label>
                            <input type="text" class="form-control" id="Prix" name="Prix" value="{{ $voiture->prix }}">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="statut" class="form-label">Statut de la voiture</label>
                            <select class="form-select" id="statut" name="statut" required>
                                <option value="en marche" {{ $voiture->statut == 'en marche' ? 'selected' : '' }}>En marche</option>
                                <option value="en panne" {{ $voiture->statut == 'en panne' ? 'selected' : '' }}>En panne</option>
                                <option value="en réparation" {{ $voiture->statut == 'en réparation' ? 'selected' : '' }}>En réparation</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
