<?php

function virifier() {

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

	array_push($errors, 'veuuller svp ajouter votre nome'); }

  if ($Prenom === '') {

    array_push($errors, 'veuuller svp ajouter votre nome');}

  if ($NumTel === '') {

    array_push($errors, 'veuuller svp ajouter votre nome');}

  if ($DateDepart === '') {

    array_push($errors, 'veuuller svp ajouter votre nome');}

  if ($DateRetour === '') {

    array_push($errors, 'veuuller svp ajouter votre nome');}

 if ($Genre === null ) {

	array_push($errors, 'veuuller svp ajouter votre gender matahchemch');

} if ($Statut === null ) {

	array_push($errors, 'veuuller svp ajouter votre gender matahchemch');

} if ($Raisons === null ) {

	array_push($errors, 'veuuller svp ajouter votre gender matahchemch');

}

  return $errors;

}


function affich_err() {

  $errors = virifier();

  if ($errors !== []) {



  foreach ($errors as $error) {
      echo '<div > '  . $error . '</div>' 
      ;
    }



  echo ' <a href="index.php">page1</a>';

  }

}

// afficher tout les errors
$errs = affich_err();





function Afficher(){

  $all = virifier();

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