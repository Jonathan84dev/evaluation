<!doctype html>
<html lang="en">
  <head>
    <title>Formulaire d'Ajout d'un Logement</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <h5>Formulaire d'ajout d'un logement</h5>
  <div class=bloc2>
    <form action="traitement_ajout.php" method="post" enctype="multipart/form-data">
    <label for="fname">Titre</label><br>
     <input type="text" id="titre" name="titre" value="" required><br><br>

    <label for="lname">Adresse</label><br>
    <input type="text" id="adresse" name="adresse" value="" required><br><br>

    <label for="fname">Ville</label><br>
    <input type="text" id="ville" name="ville" value="" required><br><br>

    <label for="fname">CP</label><br>
    <input type="number" id="cp" name="cp" maxlength="5" required><br><br>

    <label for="fname">Surface</label><br>
    <input type="number" id="surface" name="surface" value="" required><br><br>

    <label for="fname">Prix</label><br>
    <input type="number" id="prix" name="prix" value="" required><br><br>

    <label for="fname">Photo</label><br>
    <input type="file" name="photo_appart"><br>

    <label for="fname">Type</label><br>
    <select name="type" required>
    <option value="1" selected>Vente</option>
    <option value="0">Location</option>
    </select><br/><br/>

    <label for="fname">Description</label><br>
    <input type="text" id="description" name="description" value=""><br><br>

    <input type="submit" value="Ajouter !">
    </form> 
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>