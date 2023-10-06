<?php

$data = array_map('trim', $_POST);

$firstname = htmlentities($data['firstname']);
$name = htmlentities($data['name']);
$email = htmlentities($data['email']);
$phone = htmlentities($data['phone']);
$select = htmlentities($data['select']);
$message = htmlentities($data['message']);

$errors = [];

if (empty($firstname)) {
    $errors[] = 'Le champ prénom doit être renseigné';
}

if (empty($name)) {
    $errors[] = 'Le champ nom doit';
}

if (empty($email)) {
    $errors[] = 'Le champ email doit être renseigné';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'l\'adresse email n\'est pas au bon format';
}

if (empty($phone)) {
    $errors[] = 'Le champ numéro doit être renseigné';
}

if (empty($select)) {
    $errors[] = 'Le champ option doit être renseigné';
}

if (strlen($message) < 30) {
    $errors[] = 'Le champ message doit contenir plus de 30 caractères';
}

if (!empty($errors)) {
    require 'error.php';
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif - Réclamation</title>
    
</head>

<body>

    <header>
        <h1>Nous traitons votre retour.</h1>
        
    </header>

    <main>
        <div class="merci">
        <?php 
        echo 'Merci ' .$firstname .' ' .$name .' de nous avoir contacter pour ' .$select .'. ' 
        .' Un de nos conseillers vous contactera soit à l’adresse: ' .$email .' ou par téléphone au: '
        .$phone .' dans les plus brefs délais pour traiter votre demande : ' .$message ; 
        ?>
        </div>
    </main>
</body>

</html>