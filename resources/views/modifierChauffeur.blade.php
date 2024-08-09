<!-- modifierChauffeur.blade.php -->

@extends('layouts.index')
@section('titre', 'Modifier Chauffeur')

@section('content')
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier Chauffeur</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('chauffeur.update', $chauffeur->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="Nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="Nom" name="Nom" value="{{ $chauffeur->nom }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="Prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="Prenom" name="Prenom" value="{{ $chauffeur->prenom }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="numPermis" class="form-label">Numéro Permis</label>
                            <input type="text" class="form-control" id="numPermis" name="numPermis" value="{{ $chauffeur->numPermis }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="experience" class="form-label">Expérience</label>
                            <input type="text" class="form-control" id="experience" name="experience" value="{{ $chauffeur->experience }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="dateEmission" class="form-label">Date d'émission du permis</label>
                            <input type="date" class="form-control" id="dateEmission" name="dateEmission" value="{{ $chauffeur->dateEmission }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="dateExpiration" class="form-label">Date d'expiration du permis</label>
                            <input type="date" class="form-control" id="dateExpiration" name="dateExpiration" value="{{ $chauffeur->dateExpiration }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="categorie" class="form-label">Catégorie</label>
                            <select class="form-select" id="categorie" name="categorie" required>
                                <option value="A" @if($chauffeur->categorie == 'A') selected @endif>Type A</option>
                                <option value="A1" @if($chauffeur->categorie == 'A1') selected @endif>Type A1</option>
                                <option value="B" @if($chauffeur->categorie == 'B') selected @endif>Type B</option>
                                <option value="B1" @if($chauffeur->categorie == 'B1') selected @endif>Type B1</option>
                                <option value="B2" @if($chauffeur->categorie == 'B2') selected @endif>Type B2</option>
                                <option value="C" @if($chauffeur->categorie == 'C') selected @endif>Type C</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
