<?php
// foreach ($data as $role) {
//     echo $role->getId_proprietaire()." ".$role->getNom()."<br/>";
//   }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Login System</title>
  <link rel="stylesheet" href="public/css/style.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>


  </style>
  <script>
    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TASNIM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/ts_immo/Proprietaire/formulaire">AjoutProprietaire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/ts_immo/Proprietaire/listProprietaire">ListeProprietaire</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="mt-5 mb-3 clearfix">
            <a href="http://localhost/ts_immo/Proprietaire/formulairel" class="btn btn-dark pull-right mt-3"> Ajouter nouveau proprietaire</a>
          </div>

          <table class="table table-dark table-hover table-bordered shadow " width="80%">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>DateNaissance</th>
                <th>LieuNaissance</th>
                <th>Civilité</th>
                <th>Code Piece Identite</th>
                <th>Numero Piece Identite</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($data as $proprietaire) {
                echo "<tr>";
                echo "<td>" . $proprietaire->getId() . "</td>";
                echo "<td>" . $proprietaire->getNom() . "</td>";
                echo "<td>" . $proprietaire->getPrenom() . "</td>";
                echo "<td>" . $proprietaire->getDateNaissance() . "</td>";
                echo "<td>" . $proprietaire->getLieuNaissance() . "</td>";
                echo "<td>" . $proprietaire->getCivilite() . "</td>";
                echo "<td>" . $proprietaire->getCodePieceIdentite() . "</td>";
                echo "<td>" . $proprietaire->getNumeroPieceIdentite() . "</td>";
                echo "<td>";
                echo '<a href="http://localhost/ts_immo/Proprietaire/detailsProprietaire/' . $proprietaire->getId() . '" class="mr-3" data-toggle="tooltip"><span class="fa fa-address-card  btn btn-warning"></span></a>';
                echo '<a href="http://localhost/ts_immo/Proprietaire/editProprietaire/' . $proprietaire->getId() . '" class="mr-3" data-toggle="tooltip"><span class="fa fa-edit btn btn-info"></span></a>';
                echo '<a href="http://localhost/ts_immo/Proprietaire/delete/' . $proprietaire->getId() . '"  data-toggle="tooltip"><span class="fa fa-trash btn btn-danger "></span></a>';
                echo "</td>";
                echo "</tr>";
              }
              echo "</tbody>";
              echo "</table>";
              ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>