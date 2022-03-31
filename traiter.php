<?php

function verifier() {

    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $NumTel = $_POST['NumTel'];
    $DateDepart = $_POST['DateDepart'];
    $DateRetour = $_POST['DateRetour'];
    $Genre = $_POST['Genre'];
    $Statut = $_POST['Statut'];
    $Raisons = $_POST['Raisons'];


	$errors = [];    
  
  if ($Nom === '') {

	array_push($errors, 'veuillez svp ajouter votre nom'); }

  if ($Prenom === '') {

    array_push($errors, 'veuillez svp ajouter votre prenom');}

  if ($NumTel === '') {

    array_push($errors, 'veuillez svp ajouter votre numero de telephone');}

  if ($DateDepart === '') {

    array_push($errors, 'veuillez svp ajouter votre date de depart');}

  if ($DateRetour === '') {

    array_push($errors, 'veuillez svp ajouter votre date de retour');}

 if ($Genre === null ) {

	array_push($errors, 'veuillez svp ajouter votre genre');

} if ($Statut === null ) {

	array_push($errors, 'veuillez svp ajouter votre statu');

} if ($Raisons === null ) {

	array_push($errors, 'veuillez svp ajouter vos raisons');

}

  return $errors;

}


function affich_err() {

  $errors = verifier();

  if ($errors !== []) {



  foreach ($errors as $error) {
      echo '<div > '  . $error . '</div>' 
      ;
    }



  echo ' <a href="index.php">page1</a>';

  }

}

// afficher tout les erreurs
$errs = affich_err();





function Afficher(){

  $all = verifier();

  if ($all === []) {

    if(isset($_POST['Nom'])){
        echo "Nom : ". $_POST['Nom'] ."<br>";
    }
    if(isset($_POST['Prenom'])){
      echo "Prénom : ".$_POST['Prenom']."<br>";
    }
    if(isset($_POST['NumTel'])){
      echo "Numéro de Téléphone : ".$_POST['NumTel']."<br>";
    }
    if(isset($_POST['DateDepart'])){
        echo "Date de départ : ".$_POST['DateDepart']."<br>";
    }
    if(isset($_POST['DateRetour'])){
        echo "Date de retour : ".$_POST['DateRetour']."<br>";
    }
    if(isset($_POST['Adresse'])){
        echo "Adresse : ".$_POST['Adresse']."<br>";
    }
    if(isset($_POST['Genre'])){
        echo "Genre : ".$_POST['Genre']."<br>";
    }
    if(isset($_POST['Statut'])){
        echo "Statut : ".$_POST['Statut']."<br>";
    }
    if(isset($_POST['Raisons'])){
        echo "Raisons du déplacement: ".$_POST['Raisons']."<br>";
    }

  }
}

Afficher();


?>
