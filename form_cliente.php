<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Heroic Features - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" 
        data-toggle="collapse" data-target="#navbarResponsive" 
        aria-controls="navbarResponsive" aria-expanded="false" 
        aria-label="Toggle navigation"
      />
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
  
  
  <?php
    $id=0;
    $nome="";
    $endereco="";
    
    if(isset($_GET["id"])){
      $id = (int) $_GET["id"];
      $con = mysqli_connect("localhost","bob","bob","univille");
      $select = "select * from cliente where codigo = ?";
      $stmt = mysqli_prepare($con, $select);
      mysqli_stmt_bind_param($stmt, "i", $id);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_bind_result($stmt, $result);
      $result = mysqli_stmt_get_result($stmt);
      $row = $result->fetch_assoc();
      $id=$row["codigo"];
      $nome=$row["nome"];
      $endereco=$row["endereco"];
    }
  ?>
  
  <!-- Page Content -->
  <div class="container">
    
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <p class="lead">
        <h3>Clientes</h3>
        <form method="post" action="savecliente.php">
          
          <input type="hidden" name="Id" value="<?=$id?>"/>
          <div class="form-group">
            <label for="inputNome">Nome</label>
            <input type="text" class="form-control" id="inputNome" 
              name="inputNome" value="<?=$nome?>"/>
          </div>
          <div class="form-group">
            <label for="inputEndereco">Endereço</label>
            <input type="text" class="form-control" id="inputEndereco" 
              name="inputEndereco" value="<?=$endereco?>"/>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
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
