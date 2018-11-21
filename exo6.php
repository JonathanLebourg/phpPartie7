<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>ExoPhp6 - Partie7</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" /> 
        <link href="style.css" rel="stylesheet"/>  
    </head>
    <body>
        <div class="container">
            <h1>ExoPhp6 - Partie7</h1>
            <p>Avec le formulaire de l'exercice 5, Si des données sont passées en <b>POST</b> ou en <b>GET</b>, le formulaire ne doit pas être affiché.
                <br />Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
                <br />Utiliser qu'une seule page.</p>
        </div>    
        <div class="container">
            <?php
            //affiche les données du formulaire si les champs sont remplis
            if (!empty($_POST['civility']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) {
                echo $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
            } else {
                ?>
                <!--formulaire demandant une liste déroulante(Mr ou Mme), nom, prénom rediriger vers la page index.php avec la méthode POST-->
            <form action="exo6.php" method="POST">
                <label for="civility">Sexe</label>
                <Select name="civility">
                    <option>Mr</option>
                    <option>Mme</option>
                </select>
                <label for="lastname">Nom : </label>
                <input type="text" name="lastname" placeholder="Norris" />
                <label for="firstname">Prénom : </label>
                <input type="text" name="firstname" placeholder="Chuck" />
                <input type="submit" value="Envoyer" />
            </form>
            <?php } ?>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
