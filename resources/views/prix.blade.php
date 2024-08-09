@extends ('layouts.index')
@section('titre','Prix')

@section('content')
<div class="hero-wrap bg-dark" style="background-image: url('images/Capture.PNG');" data-stellar-background-ratio="0.5">
    <br><br><br><br>
    <div class="overlay"></div>
    <div class="container">
      <section class="ftco-section services-section ftco-no-pt ftco-no-pb">
         <div class="container">
           <div class="row justify-content-center">
             <div class="col-md-12 heading-section text-center ftco-animate mb-5">
               <span class="subheading">Nos Prix</span>
               <h3 class="heading mb-0 pl-3" style="color: aliceblue">Disponible 24h/24 7j/7</h3>
             </div>
           </div>
           <div class="row d-flex">
             <div class="col-md-3 d-flex align-self-stretch ftco-animate">
               <div class="media block-6 services">
                 <div class="media-body py-md-4">
                   <div class="d-flex mb-3 align-items-center">
                     <div class="icon"><span class="flaticon-customer-support"></span></div>
                     <h1 class="heading mb-0 pl-3" style="color: aliceblue">Prix en 24h :</h1>
                   </div>
                   <h2  style="color: aliceblue">25.000 fr CFA</h2>
                 </div>
               </div>      
             </div>
           </div>
         </div>
       </section>
    </div>
</div>
@endsection
