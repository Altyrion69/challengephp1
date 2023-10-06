<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non</title>
    
</head>
<body>

    <main>
        <div class="errorPanel">
            
            <p>Nous rencontrons les problèmes suivants pour traiter votre demande : </p>
            <ul>
                <?php foreach($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
            <p>
                <a href="form.html">Retour au formulaire</a>
            </p>
        </div>
    </main>
    
</body>
</html>
