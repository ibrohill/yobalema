@extends ('layouts.index')
@section('titre','Ajout chauffeur')

@section('content')
<div class="container-fluid py-5" style="background-color: #000000; min-height: 100vh;">
    <br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-lg border-white" style="background-color: #fff;">
                <div class="card-header bg-primary text-white">
                    <h3 class="m-0">Ajouter un chauffeur</h3>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/ajouter/traitementChauffeur" method="POST" enctype="multipart/form-data" style="color: #000000; background-color: white">
                        @csrf
                        <div class="mb-3">
                            <label for="Nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="Nom" name="Nom" required>
                        </div>
                        <div class="mb-3">
                            <label for="Prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="Prenom" name="Prenom" required>
                        </div>
                        <div class="mb-3">
                            <label for="numPermis" class="form-label">Numéro Permis</label>
                            <input type="text" class="form-control" id="numPermis" name="numPermis" required>
                        </div>
                        <div class="mb-3">
                            <label for="experience" class="form-label">Expérience</label>
                            <input type="text" class="form-control" id="experience" name="experience" required>
                        </div>
                        <div class="mb-3">
                            <label for="dateEmission" class="form-label">Date d'émission du permis</label>
                            <input type="date" class="form-control" id="dateEmission" name="dateEmission" required>
                        </div>
                        <div class="mb-3">
                            <label for="dateExpiration" class="form-label">Date d'expiration du permis</label>
                            <input type="date" class="form-control" id="dateExpiration" name="dateExpiration" required>
                        </div>
                        <div class="mb-3">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <label for="categorie" class="form-label">Catégorie</label>
                            <select class="form-select" id="categorie" name="categorie" required>
                                <option value="A">Type A</option>
                                <option value="A">Type A1</option>
                                <option value="B">Type B</option>
                                <option value="B">Type B1</option>
                                <option value="B">Type B2</option>
                                <option value="C">Type C</option>
                            </select>
                        </div>                        
                        <div class="mb-3">
                            <label for="image" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-secondary">Ajouter un chauffeur</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
