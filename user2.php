<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link href="style.css" rel="stylesheet"/> 
        <title>page user</title>
    </head>
    <body>
        <div class="container"> 
        <p>Bonjour !</p>
        <p>Tu t'appelles <?= $_POST['firstname'].' '.$_POST['lastname']; ?> !</p>
        <p>Si tu veux changer de prénom, <a href="exo2.php">clique ici</a> pour revenir à la page du formulaire.</p>
        </div>
    </body>
</html>

