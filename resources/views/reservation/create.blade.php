@extends ('layouts.index')
@section('titre','Acceuil')

@section('content')
<div class="hero-wrap" style="background-image: url('{{ asset('images/Capture.PNG') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <br><br>
    <div class="container">
        <section class="ftco-section">
            <div class="container">
                
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <div class="card shadow-lg border-white">
                            <div class="card-header bg-primary text-white">Formulaire de Réservation</div>
                            <div class="card-body">
                                <h2>Réserver cette voiture</h2>
                                <form action="{{ route('reservation.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="voiture_id" value="{{ $voiture->id }}">
                                    <div class="mb-3">
                                        <label for="start_date" class="form-label">Date de début :</label>
                                        <input type="date" name="start_date" id="start_date" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="end_date" class="form-label">Date de fin :</label>
                                        <input type="date" name="end_date" id="end_date" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Reserver</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
    
@endsection
