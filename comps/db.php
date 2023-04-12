<?php
session_start();

try {
    $conn = new PDO("mysql:host=localhost;dbname=baction", "root", "");
} catch (\Throwable $e) {
    print "Erreur " . $e->getMessage() . "<br/>";
}


if (isset($_POST["soumettre"])) {


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $ville = $_POST['ville'];
    $pays = $_POST['pays'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
    $registDate = date('Y-m-d h:i:s', time());


    try {
        $req = " INSERT INTO `formulaire_adhesion` (`id`, `Name`, `Firstname`, `Dayborn`, `City`, `Country`, `Number`, `Email`, `Dayregist`) VALUES (NULL, '$nom', '$prenom', '$date_naissance', '$ville', '$pays', '$numero', '$email', '$registDate')";
        $conn->query($req);

        echo "<center><h2>Enregistrement effectuer avec succes </h2></center>";
        $_SESSION['message'] = "Enregistrement reussi avec succès";

        header('Location: ../Contact.php');
        exit(0);
    } catch (\Throwable $e) {
        echo "<center><h2>Erreur lors de l'enregistrement " . $e->getMessage() . "</h2></center>";

        $_SESSION['message'] = "L'enregistrement a échoué veuillez réessayer ou contact notre service";

        header('Location: ../Contact.php');
        exit(0);
    }
}
