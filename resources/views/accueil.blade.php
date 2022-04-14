@extends('layout.app')

@section('content')






<div class="fas fa-car-side fa-3x ">

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active thumbnail">
      <div class="texte_centrer">N'hésitez plus pour vos photos. Contactez BO PHOTO</div>
      <img src="/images/appareil.png" class="d-block w-100" alt="...">
      
      <!-- <div class="caption">
      
            <p>Image 1 test.</p>
          </div> -->
    </div>
    <div class="carousel-item">
      <img src="/images/appareil2.jpg" class="d-block w-100" alt="...">
      <!-- Afficher du texte en dessous  -->
      <!-- <div class="caption">
            <p>C'est du texte pour du test.</p>
          </div> -->
    </div>
    <div class="carousel-item">
      <img src="/images/appareil3.jpg" class="d-block w-100" alt="...">
      <!-- <div class="caption">
            <p>C'est du texte po3333ur du test.</p>
          </div> -->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <div class="cadre ">
  <div class= "container-fluid ">
          <div class= "row ">
              
              <div class =" col-sm-6 bg-light mx-auto border border-5 border-dark rounded-left mt-5 mb-5 p-5">
                <p style="font-style:italic;">Photographe depuiiiiis blablabla c'est les choses de la vie</p>
                <p style="font-weight:bold;">C'est la suite du texte toi meme tu sais</p>
                


              </div>

          </div>
          
        </div>

  </div>

  <div class="cadre ">
  <div class= "container-fluid d-flex justify-content-around flex-direction: column ">
          <div class= "row ">
              
              <div class =" col-sm-6 bg-light mx-auto border border-5 border-dark rounded-left mb-5 p-5">
                <p style="font-style:italic;">Photographe depuiiiiis blablabla c'est les choses de la vie</p>
                <p style="font-weight:bold;">C'est la suite du texte toi meme tu sais</p>
                


              </div>

              <div class =" col-sm-6 bg-light mx-auto border border-5 border-dark rounded-left mb-5 p-5">
                <p style="font-style:italic;">Photographe depuiiiiis blablabla c'est les choses de la vie</p>
                <p style="font-weight:bold;">C'est la suite du texte toi meme tu sais</p>
                


              </div>

              
          </div>
        </div>

  </div>

  <br>
<div class="bg-image">
  <img
    src="/images/IMG_7570.jpg"
    class="img-fluid"
    alt="Sample"
  />
  <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
    <div class="d-flex justify-content-center align-items-center h-100">
      <p class="text-white mb-0">En découvrir plus ?</p>
    </div>
  </div>
</div>

<img src="/images/IMG_7570.jpg" class="img-fluid" alt="" width="250px">
<img src="/images/IMG_7572.jpg" class="img-fluid" alt="" width="250px">
<img src="/images/IMG_7657.jpg" class="img-fluid" alt="" width="250px">

<div class="col-md-4">
      <div class="thumbnail mask" style="background-color: rgba(0, 0, 0, 0.6);">>
        <a href="/images/IMG_7657.jpg" target="_blank">
          <img src="/images/IMG_7657.jpg" alt="IMG" style="width: 80px">
          <div class="caption">
            <p>C'est du texte pour du test.</p>
          </div>
</div>

<div class="container">
  <img src="/images/appareil.png" alt="image">

  <div class="texte_centrer">N'hésitez plus pour vos photos. Contactez BO PHOTO</div>
 
</div>




@endsection
