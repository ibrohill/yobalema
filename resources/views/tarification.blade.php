@extends ('layouts.index')
@section('titre','Tarification')

@section('content')
<div class="hero-wrap bg-dark" style="background-image: url('images/Capture.PNG');" data-stellar-background-ratio="0.5">
    <br>
    <div class="overlay"></div>
    <div class="container">
        <section class="ftco-section" >
            <div class="container" >
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <div class="card" >
                            <div class="card-body">
                              <div class="container">
                                 <h2>Tarification</h2>
                                 <img src="{{ $voiture->image }}" alt="">
                                 <h4>{{ $voiture->marque }} <br> réservée du {{ $reservation->start_date }} au {{ $reservation->end_date }}</h1>
                                 <h2> Par :  {{ $user->name }}</h2> 
                                 <h3> La Somme Total est de  :  <span style="color: rgb(250, 0, 0)">{{ $reservation->prix_total }}  Fr Cfa</span></p></h3>
                                 
                              </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection




