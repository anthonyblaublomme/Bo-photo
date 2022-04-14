@extends('layout.app')

@section('content')


<div class="cadre ">
  <div class= "container-fluid text-center">
          <div class= "row ">
              
              <div class =" col-sm-6 bg-light mx-auto border border-5 border-dark rounded-left mt-5 mb-5 p-5">
               
                


      
   <div class="myform form ">
      <div class="logo mb-3">
      <h1 style="font-weight:bold;"> M'inscrire </h1>
         </div>
      </div>


      <form method="GET">

         <div class="form-group">
            <label for="exampleInputEmail1">NOM</label>
            <input type="text" name="lastname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Entrer votre nom" required>
         </div>

         <div class="form-group">
            <label for="exampleInputEmail1">Prénom</label>
            <input type="text" name="firstname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Entrer votre prénom" required>
         </div>

         <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entrer votre email" required>
         </div>

         <div class="form-group">
            <label for="exampleInputEmail1">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Entrer votre mot de passe" required>
         </div>

         <div class="col-md-12 text-center mb-3">
            <button name="formsend" id="formsend" type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">M'inscrire</button>
         </div>

         <div class="col-md-12 ">
            <div class="form-group">
               <p class="text-center"><a href="#" id="signin">Déjà parmi nous ?</a></p>
            </div>
       </div>

       </form>


</div>
</div>
</div>
</div>

</div>

</div>

</div>

</div>

<?php



// inclure sa propre base de donnée sans passer par le fichier .env ! 
require_once 'DBData.php';
global $db;


// $q  = $db->query("SELECT * FROM USERS ");

// while ($user = $q->fetch()) {
//   var_dump($users);

// }



if(isset($_GET['formsend'])) {

   $lastname = $_GET ['lastname'];
   $firstname = $_GET ['firstname'];
   $email = $_GET ['email'];

   if(!empty($lastname) && !empty($firstname) && !empty($email)) {

   echo "Votre nom est : " .$_GET ['lastname'] ."<br/>";
   echo "Votre prénom est : " .$_GET ['firstname'] ."<br/>";
   echo "Votre mail est : " .$_GET ['email'] ."<br/>";
   }

   
   
}

?>

@endsection