<?php 
    session_start();
    include("connect.php"); ?>


<?php

if (isset($_POST['soumettre'])){

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $ville = $_POST['ville'];
    $pays = $_POST['pays'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];



    $query = "INSERT INTO formulaire_adhesion (Name, Firstname, Dayborn, City, Countrie, Number, Email) VALUES (:nom, :prenom, :date_naissance, :ville, :pays, :numero ,:email, NOW)";
    $query_run = $conn->prepare($query);

    $data = [
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':date_naissance' => $date_naissance,
        ':ville' =>  $ville,
        ':pays' => $pays,
        ':numero' => $numero,
        ':email' => $email,
    ];

    $query_execute = $query_run->execute($data);



    if($query_execute) {
    
        $_SESSION['message'] = "enregistrement reussi avec succès";

        header('Location: contact.php');
        exit(0);

    }
    else {
        $_SESSION['message'] = "L'enregistrement a échoué veuillez réessayer ou contact notre service";

        header('Location: contact.php');
        exit(0);
    }

}







?>
