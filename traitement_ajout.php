<!doctype html>
<html lang="en">
  <head>
    <title>Ajout d'un logement</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        
  <? 
  // Connexion à la base de données et preparation de l'INSERT
    $bdd = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8;port=3306', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $request = "INSERT INTO logement (titre, adresse, ville, cp, surface, prix, photo, type, description) VALUES ( :titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type, :description)";
    $response = $bdd->prepare($request); 

    
    // déclaration des variables :
    // recup du fichier depuis le formulaire
    $photo = $_FILES['photo_appart']; 

    // récupération des infos nécessaires aux conditions de fichier :
    $tailledufichier = $photo['size'];
    $pathinfodata = pathinfo($photo['name']); // retourne le chemin du fichier

    // récuperation du nom du fichier, de son extension et déclaration des ext autorisées :
    $nomdufichier = $pathinfodata['filename']; 
    $extensiondufichier = $pathinfodata['extension']; //renvoit l'extension du fichier
    $extensionsautorisees = ["png", "jpg"]; // check des extensions autorisées
    
    // enregistrement du fichier selon le format souhaité :
    $timestamp=time();
    $nouveaunomdufichier = "logement_" . $timestamp . "." . $extensiondufichier; // composition du nouveau nom de fichier


    // début des conditions d'acceptation de la photo (taille et type de fichier)

    if ($tailledufichier > 3000000)
    {   
        echo "Votre fichier est trop volumineux";
    } 
    elseif (!in_array($extensiondufichier,$extensionsautorisees))
    {
        echo "Attention, il faut impérativement un fichier png ou jpg !";
    }

    // si tout est OK, execution de la requête :
    else {

            $response->execute([
            'titre' => $_POST['titre'],
            'adresse' => $_POST['adresse'],
            'ville' => $_POST['ville'],
            'cp' => $_POST['cp'],
            'surface' => $_POST['surface'],
            'prix' => $_POST['prix'],
            'photo' => $nouveaunomdufichier,
            'type' => $_POST['type'],
            'description' => $_POST['description'],
            ]); 
    
            // création et déplacement du fichier dans le répertoire suivant :
            mkdir('C:\MAMP\htdocs\evaluation\uploads',0700);
            move_uploaded_file($photo['tmp_name'],  __DIR__  . '/uploads/' . $nouveaunomdufichier);
        }
    
        header('Location: index2.php');

    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>