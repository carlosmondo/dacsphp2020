<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CRUD Web">
  <meta name="author" content="Carlos Mondo">

  <title>Listagem de Albuns Ouvidos</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Início</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content -->
  <div class="container">
    
    <?php
      include 'dbconnect.php';
      $sql = "select * from albuns";
	    $result = mysqli_query($con,$sql);
    ?>
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <p class="lead">
        <a href="form_album.php" class="btn btn-primary">Incluir</a>
        <h3>Listagem de albuns</h3>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Artista</th>
              <th scope="col">Album</th>
              <th scope="col">Gêneros</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php
              while($row = $result->fetch_row()){
            ?>
            <tr>
              <td><?=$row[0]?></td>
              <td><?=$row[1]?></td>
              <td><?=$row[2]?></td>
              <td><?=$row[3]?></td>
              <td>
                <a href="form_album.php?id=<?=$row[0]?>" class="btn btn-primary">Alterar</a>
                <a href="confirm_remove_album.php?id=<?=$row[0]?>" class="btn btn-warning">Deletar</a>
              </td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </p>

    </header>

    

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
