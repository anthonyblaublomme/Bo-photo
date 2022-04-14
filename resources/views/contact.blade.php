@extends('layout.app')

@section('content')

<div class="cadre ">
  <div class= "container-fluid ">
          <div class= "row ">
              
              <div class =" col-sm-6 bg-light mx-auto border border-5 border-dark rounded-left mt-5 mb-5 p-5">
                 
                



<!--Section: Contact v.2-->
<section class="mb-4 text-center">

    <!--Section heading-->
    <h1 style="font-weight:bold;"> Contactez-nous </h1>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Si vous avez la moindre question, n'hésitez pas à nous envoyer un message.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Votre Nom</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Votre E-mail</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Sujet</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Votre message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>Boris Peto</p>
                </li>
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>91000 Saint Michel sur Orge</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>06-06-06-06-06</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>Bo-photo@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

</div>

</div>

</div>
</div>

@endsection