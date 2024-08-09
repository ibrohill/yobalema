@extends ('layouts.index')
@section('titre','Evaluation')

@section('content')
<div class="hero-wrap" style="background-image: url('images/2682844.jpg');" data-stellar-background-ratio="0.5">
  <br><br><br>
<section class="ftco-section ftco-no-pt ftco-no-pb">
   
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-7 heading-section text-center ftco-animate">
               <h2 class="mb-3">Formulaire d'évaluation du chauffeur</h2>
               @if (session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
               @endif     
           </div>
       </div> 
       
       <div class="row justify-content-center">
           <div class="col-md-8 ftco-animate">
               <form action="{{ route('evaluerChauffeur') }}" method="POST">
                         @csrf
                         <label for="chauffeur_id" class="label">Sélectionner le chauffeur :</label>
                         <select name="chauffeur_id" id="chauffeur_id" class="form-control" required>
                             @foreach($chauffeurs as $chauffeur)
                             <option value="{{ $chauffeur->id }}">{{ $chauffeur->nom }} {{ $chauffeur->prenom }}</option>
                             @endforeach
                         </select>
                  
                         <label for="note" class="label">Note (1-5) :</label>
                         <input type="number" class="form-control" name="note" id="note" min="1" max="5" required>
                  
                         <label for="commentaire" class="label">Commentaire :</label>
                         <textarea name="commentaire" class="form-control" id="commentaire" rows="4"></textarea>
                  
                         <button type="submit" class="btn btn-primary mt-3">Envoyer</button>  
               </form>
           </div>
       </div>
   </div>
</section>
