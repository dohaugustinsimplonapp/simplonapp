<!DOCTYPE html>
<html>
    <head>
        <title>Simplon</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
        <link rel="stylesheet" href="bootstrap.css">
    </head>
    <body>
        <h1>INSCRIPTION SIMPLON CI</h1>
        <form action="enregistrer.php" method="post">
              <div class="form-group">
                <label for="nom">Entrez Votre Nom</label>
                <input type="text" class="form-control" name="nom" placeholder=" ">
              </div>
              <div class="form-group">
                <label for="prenom">Entrez Votre Prenom</label>
                <input type="text" class="form-control" name="prenom" placeholder=" ">
              </div>
              <div class="form-group">
                <label for="tel">Entrez Votre numero de Telephone</label>
                <input type="text" class="form-control" name="tel" placeholder=" ">
              </div>
              <div class="form-group">
                <label for="mail">Entrez Votre adresse email</label>
                <input type="text" class="form-control" name="mail" placeholder=" ">
              </div>
                  <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
        <script type="text/javascript" href="bootstrap.bundle.min.js"></script> 
    </body>
</html>