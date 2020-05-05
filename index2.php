<!doctype html>
<html lang="en">
  <head>
    <title>Liste des appartements</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<? 

$bdd = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8;port=3306', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$request = "SELECT * FROM logement";
$response = $bdd->query($request);
$logement = $response->fetchAll(PDO::FETCH_ASSOC); 
 ?>
<p>
Lien formulaire d'ajout de logement : <a href="formulaire.php">cliquez ici !</a></p>
<p>
Liste des logements disponibles :</p> 

<? // début de la boucle pour affichage :

foreach ($logement as $logements)
    { ?>
    <div class=bloc1>
        <img class=miniature src="uploads/<?= $logements['photo'] ?>"></img>
        Nom du logement : <? echo $logements['titre']; ?> <br/>
        Adresse du logement : <? echo $logements['adresse']; ?> <br/>
        Ville : <? echo $logements['ville']; ?> <br/>
        Code Postal : <? echo $logements['cp']; ?> <br/>
        Surface en m2 : <? echo $logements['surface']; ?> <br/>
        Prix en euros : <? echo $logements['prix']; ?> <br/>

        Type de logement : 
        <? if  ($logements['type']==0)
                { echo "Vente"; }
        else 
                {echo "Location";}
        ; ?> <br/>
        Description : <? echo $logements['description'] ?> <br/>
        La page détaillée du bien : <a href="show.php?id=<?=$logements['id_logement'] ?>">Plus de détails</a>
    </div><br/><br/>
        
        <?
    } 

    
    ?>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>