{"filter":false,"title":"config_remove_cliente.php","tooltip":"/projeto/site/config_remove_cliente.php","undoManager":{"mark":61,"position":61,"stack":[[{"start":{"row":0,"column":0},"end":{"row":122,"column":0},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"en\">","","<head>","","  <meta charset=\"utf-8\">","  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">","  <meta name=\"description\" content=\"\">","  <meta name=\"author\" content=\"\">","","  <title>Heroic Features - Start Bootstrap Template</title>","","  <!-- Bootstrap core CSS -->","  <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">","","  <!-- Custom styles for this template -->","  <link href=\"css/heroic-features.css\" rel=\"stylesheet\">","","</head>","","<body>","","  <!-- Navigation -->","  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">","    <div class=\"container\">","      <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>","      <button class=\"navbar-toggler\" type=\"button\" ","        data-toggle=\"collapse\" data-target=\"#navbarResponsive\" ","        aria-controls=\"navbarResponsive\" aria-expanded=\"false\" ","        aria-label=\"Toggle navigation\"","      />","        <span class=\"navbar-toggler-icon\"></span>","      </button>","      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">","        <ul class=\"navbar-nav ml-auto\">","          <li class=\"nav-item active\">","            <a class=\"nav-link\" href=\"#\">Home","              <span class=\"sr-only\">(current)</span>","            </a>","          </li>","          <li class=\"nav-item\">","            <a class=\"nav-link\" href=\"#\">About</a>","          </li>","          <li class=\"nav-item\">","            <a class=\"nav-link\" href=\"#\">Services</a>","          </li>","          <li class=\"nav-item\">","            <a class=\"nav-link\" href=\"#\">Contact</a>","          </li>","        </ul>","      </div>","    </div>","  </nav>","  ","  ","  <?php","    $id=0;","    $nome=\"\";","    $endereco=\"\";","    ","    if(isset($_GET[\"id\"])){","      $id = (int) $_GET[\"id\"];","      $con = mysqli_connect(\"localhost\",\"bob\",\"bob\",\"univille\");","      $select = \"select * from cliente where codigo = ?\";","      $stmt = mysqli_prepare($con, $select);","      mysqli_stmt_bind_param($stmt, \"i\", $id);","      mysqli_stmt_execute($stmt);","      mysqli_stmt_bind_result($stmt, $result);","      $result = mysqli_stmt_get_result($stmt);","      $row = $result->fetch_assoc();","      $id=$row[\"codigo\"];","      $nome=$row[\"nome\"];","      $endereco=$row[\"endereco\"];","    }","  ?>","  ","  <!-- Page Content -->","  <div class=\"container\">","    ","    <!-- Jumbotron Header -->","    <header class=\"jumbotron my-4\">","      <p class=\"lead\">","        <h3>Clientes</h3>","        <form method=\"post\" action=\"savecliente.php\">","          ","          <input type=\"hidden\" name=\"Id\" value=\"<?=$id?>\"/>","          <div class=\"form-group\">","            <label for=\"inputNome\">Nome</label>","            <input type=\"text\" class=\"form-control\" id=\"inputNome\" ","              name=\"inputNome\" value=\"<?=$nome?>\"/>","          </div>","          <div class=\"form-group\">","            <label for=\"inputEndereco\">Endereço</label>","            <input type=\"text\" class=\"form-control\" id=\"inputEndereco\" ","              name=\"inputEndereco\" value=\"<?=$endereco?>\"/>","          </div>","          <button type=\"submit\" class=\"btn btn-primary\">Enviar</button>","        </form>","      </p>","","    </header>","","    ","","  </div>","  <!-- /.container -->","","  <!-- Footer -->","  <footer class=\"py-5 bg-dark\">","    <div class=\"container\">","      <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2019</p>","    </div>","    <!-- /.container -->","  </footer>","","  <!-- Bootstrap core JavaScript -->","  <script src=\"vendor/jquery/jquery.min.js\"></script>","  <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>","","</body>","","</html>",""],"id":1}],[{"start":{"row":56,"column":10},"end":{"row":58,"column":17},"action":"remove","lines":["","    $nome=\"\";","    $endereco=\"\";"],"id":2}],[{"start":{"row":61,"column":24},"end":{"row":61,"column":25},"action":"remove","lines":["*"],"id":3},{"start":{"row":61,"column":24},"end":{"row":61,"column":25},"action":"insert","lines":["c"]},{"start":{"row":61,"column":25},"end":{"row":61,"column":26},"action":"insert","lines":["d"]}],[{"start":{"row":61,"column":25},"end":{"row":61,"column":26},"action":"remove","lines":["d"],"id":4}],[{"start":{"row":61,"column":25},"end":{"row":61,"column":26},"action":"insert","lines":["o"],"id":5},{"start":{"row":61,"column":26},"end":{"row":61,"column":27},"action":"insert","lines":["d"]},{"start":{"row":61,"column":27},"end":{"row":61,"column":28},"action":"insert","lines":["i"]},{"start":{"row":61,"column":28},"end":{"row":61,"column":29},"action":"insert","lines":["g"]},{"start":{"row":61,"column":29},"end":{"row":61,"column":30},"action":"insert","lines":["o"]}],[{"start":{"row":68,"column":25},"end":{"row":70,"column":33},"action":"remove","lines":["","      $nome=$row[\"nome\"];","      $endereco=$row[\"endereco\"];"],"id":6}],[{"start":{"row":56,"column":8},"end":{"row":56,"column":9},"action":"remove","lines":["0"],"id":7}],[{"start":{"row":56,"column":8},"end":{"row":56,"column":9},"action":"insert","lines":["$"],"id":8},{"start":{"row":56,"column":9},"end":{"row":56,"column":10},"action":"insert","lines":["_"]},{"start":{"row":56,"column":10},"end":{"row":56,"column":11},"action":"insert","lines":["G"]},{"start":{"row":56,"column":11},"end":{"row":56,"column":12},"action":"insert","lines":["E"]},{"start":{"row":56,"column":12},"end":{"row":56,"column":13},"action":"insert","lines":["T"]}],[{"start":{"row":56,"column":13},"end":{"row":56,"column":15},"action":"insert","lines":["[]"],"id":9}],[{"start":{"row":56,"column":14},"end":{"row":56,"column":16},"action":"insert","lines":["\"\""],"id":10}],[{"start":{"row":56,"column":15},"end":{"row":56,"column":16},"action":"insert","lines":["i"],"id":11},{"start":{"row":56,"column":16},"end":{"row":56,"column":17},"action":"insert","lines":["d"]}],[{"start":{"row":56,"column":15},"end":{"row":56,"column":16},"action":"remove","lines":["i"],"id":12},{"start":{"row":56,"column":15},"end":{"row":56,"column":16},"action":"insert","lines":["I"]}],[{"start":{"row":56,"column":20},"end":{"row":69,"column":5},"action":"remove","lines":["","    ","    if(isset($_GET[\"id\"])){","      $id = (int) $_GET[\"id\"];","      $con = mysqli_connect(\"localhost\",\"bob\",\"bob\",\"univille\");","      $select = \"select codigo from cliente where codigo = ?\";","      $stmt = mysqli_prepare($con, $select);","      mysqli_stmt_bind_param($stmt, \"i\", $id);","      mysqli_stmt_execute($stmt);","      mysqli_stmt_bind_result($stmt, $result);","      $result = mysqli_stmt_get_result($stmt);","      $row = $result->fetch_assoc();","      $id=$row[\"codigo\"];","    }"],"id":13}],[{"start":{"row":66,"column":22},"end":{"row":66,"column":26},"action":"remove","lines":["post"],"id":14},{"start":{"row":66,"column":22},"end":{"row":66,"column":23},"action":"insert","lines":["d"]},{"start":{"row":66,"column":23},"end":{"row":66,"column":24},"action":"insert","lines":["e"]},{"start":{"row":66,"column":24},"end":{"row":66,"column":25},"action":"insert","lines":["l"]},{"start":{"row":66,"column":25},"end":{"row":66,"column":26},"action":"insert","lines":["e"]},{"start":{"row":66,"column":26},"end":{"row":66,"column":27},"action":"insert","lines":["t"]},{"start":{"row":66,"column":27},"end":{"row":66,"column":28},"action":"insert","lines":["e"]}],[{"start":{"row":65,"column":12},"end":{"row":65,"column":20},"action":"remove","lines":["Clientes"],"id":15},{"start":{"row":65,"column":12},"end":{"row":65,"column":13},"action":"insert","lines":["C"]},{"start":{"row":65,"column":13},"end":{"row":65,"column":14},"action":"insert","lines":["o"]},{"start":{"row":65,"column":14},"end":{"row":65,"column":15},"action":"insert","lines":["n"]},{"start":{"row":65,"column":15},"end":{"row":65,"column":16},"action":"insert","lines":["f"]},{"start":{"row":65,"column":16},"end":{"row":65,"column":17},"action":"insert","lines":["i"]},{"start":{"row":65,"column":17},"end":{"row":65,"column":18},"action":"insert","lines":["r"]},{"start":{"row":65,"column":18},"end":{"row":65,"column":19},"action":"insert","lines":["m"]},{"start":{"row":65,"column":19},"end":{"row":65,"column":20},"action":"insert","lines":["a"]}],[{"start":{"row":65,"column":20},"end":{"row":65,"column":21},"action":"insert","lines":[" "],"id":16},{"start":{"row":65,"column":21},"end":{"row":65,"column":22},"action":"insert","lines":["e"]},{"start":{"row":65,"column":22},"end":{"row":65,"column":23},"action":"insert","lines":["x"]},{"start":{"row":65,"column":23},"end":{"row":65,"column":24},"action":"insert","lines":["c"]},{"start":{"row":65,"column":24},"end":{"row":65,"column":25},"action":"insert","lines":["l"]},{"start":{"row":65,"column":25},"end":{"row":65,"column":26},"action":"insert","lines":["u"]},{"start":{"row":65,"column":26},"end":{"row":65,"column":27},"action":"insert","lines":["s"]},{"start":{"row":65,"column":27},"end":{"row":65,"column":28},"action":"insert","lines":["ã"]},{"start":{"row":65,"column":28},"end":{"row":65,"column":29},"action":"insert","lines":["o"]}],[{"start":{"row":65,"column":29},"end":{"row":65,"column":30},"action":"insert","lines":[" "],"id":17},{"start":{"row":65,"column":30},"end":{"row":65,"column":31},"action":"insert","lines":["d"]},{"start":{"row":65,"column":31},"end":{"row":65,"column":32},"action":"insert","lines":["o"]}],[{"start":{"row":65,"column":32},"end":{"row":65,"column":33},"action":"insert","lines":[" "],"id":18},{"start":{"row":65,"column":33},"end":{"row":65,"column":34},"action":"insert","lines":["c"]},{"start":{"row":65,"column":34},"end":{"row":65,"column":35},"action":"insert","lines":["l"]},{"start":{"row":65,"column":35},"end":{"row":65,"column":36},"action":"insert","lines":["i"]},{"start":{"row":65,"column":36},"end":{"row":65,"column":37},"action":"insert","lines":["e"]},{"start":{"row":65,"column":37},"end":{"row":65,"column":38},"action":"insert","lines":["n"]},{"start":{"row":65,"column":38},"end":{"row":65,"column":39},"action":"insert","lines":["t"]},{"start":{"row":65,"column":39},"end":{"row":65,"column":40},"action":"insert","lines":["e"]},{"start":{"row":65,"column":40},"end":{"row":65,"column":41},"action":"insert","lines":["?"]}],[{"start":{"row":66,"column":7},"end":{"row":80,"column":15},"action":"remove","lines":[" <form method=\"delete\" action=\"savecliente.php\">","          ","          <input type=\"hidden\" name=\"Id\" value=\"<?=$id?>\"/>","          <div class=\"form-group\">","            <label for=\"inputNome\">Nome</label>","            <input type=\"text\" class=\"form-control\" id=\"inputNome\" ","              name=\"inputNome\" value=\"<?=$nome?>\"/>","          </div>","          <div class=\"form-group\">","            <label for=\"inputEndereco\">Endereço</label>","            <input type=\"text\" class=\"form-control\" id=\"inputEndereco\" ","              name=\"inputEndereco\" value=\"<?=$endereco?>\"/>","          </div>","          <button type=\"submit\" class=\"btn btn-primary\">Enviar</button>","        </form>"],"id":19}],[{"start":{"row":66,"column":7},"end":{"row":66,"column":11},"action":"insert","lines":["    "],"id":20}],[{"start":{"row":66,"column":10},"end":{"row":66,"column":11},"action":"remove","lines":[" "],"id":21},{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"remove","lines":[" "]},{"start":{"row":66,"column":8},"end":{"row":66,"column":9},"action":"remove","lines":[" "]}],[{"start":{"row":66,"column":8},"end":{"row":66,"column":9},"action":"insert","lines":["<"],"id":22},{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"insert","lines":["p"]}],[{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"remove","lines":["p"],"id":23},{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"insert","lines":["p"]}],[{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"remove","lines":["p"],"id":24},{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"insert","lines":["p"]}],[{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"remove","lines":["p"],"id":25},{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"insert","lines":["p"]}],[{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"remove","lines":["p"],"id":26},{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"insert","lines":["p"]}],[{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"remove","lines":["p"],"id":27},{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"insert","lines":["p"]}],[{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"remove","lines":["p"],"id":28},{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"insert","lines":["p"]}],[{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"remove","lines":["p"],"id":29},{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"insert","lines":["p"]}],[{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"remove","lines":["p"],"id":30},{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"insert","lines":["p"]}],[{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"remove","lines":["p"],"id":31},{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"insert","lines":["p"]}],[{"start":{"row":66,"column":10},"end":{"row":66,"column":15},"action":"insert","lines":["></p>"],"id":32}],[{"start":{"row":66,"column":11},"end":{"row":68,"column":8},"action":"insert","lines":["","            ","        "],"id":33}],[{"start":{"row":67,"column":12},"end":{"row":67,"column":13},"action":"insert","lines":["<"],"id":34},{"start":{"row":67,"column":13},"end":{"row":67,"column":14},"action":"insert","lines":["a"]}],[{"start":{"row":67,"column":14},"end":{"row":67,"column":15},"action":"insert","lines":[" "],"id":35},{"start":{"row":67,"column":15},"end":{"row":67,"column":16},"action":"insert","lines":["h"]},{"start":{"row":67,"column":16},"end":{"row":67,"column":17},"action":"insert","lines":["r"]},{"start":{"row":67,"column":17},"end":{"row":67,"column":18},"action":"insert","lines":["e"]}],[{"start":{"row":67,"column":18},"end":{"row":67,"column":19},"action":"insert","lines":["f"],"id":36},{"start":{"row":67,"column":19},"end":{"row":67,"column":20},"action":"insert","lines":["="]}],[{"start":{"row":67,"column":20},"end":{"row":67,"column":22},"action":"insert","lines":["\"\""],"id":37}],[{"start":{"row":67,"column":22},"end":{"row":67,"column":23},"action":"insert","lines":[" "],"id":38},{"start":{"row":67,"column":23},"end":{"row":67,"column":24},"action":"insert","lines":["c"]}],[{"start":{"row":67,"column":24},"end":{"row":67,"column":25},"action":"insert","lines":["l"],"id":39},{"start":{"row":67,"column":25},"end":{"row":67,"column":26},"action":"insert","lines":["a"]},{"start":{"row":67,"column":26},"end":{"row":67,"column":27},"action":"insert","lines":["s"]},{"start":{"row":67,"column":27},"end":{"row":67,"column":28},"action":"insert","lines":["s"]},{"start":{"row":67,"column":28},"end":{"row":67,"column":29},"action":"insert","lines":["="]}],[{"start":{"row":67,"column":29},"end":{"row":67,"column":31},"action":"insert","lines":["\"\""],"id":40}],[{"start":{"row":67,"column":30},"end":{"row":67,"column":31},"action":"insert","lines":["b"],"id":41},{"start":{"row":67,"column":31},"end":{"row":67,"column":32},"action":"insert","lines":["t"]},{"start":{"row":67,"column":32},"end":{"row":67,"column":33},"action":"insert","lines":["n"]}],[{"start":{"row":67,"column":33},"end":{"row":67,"column":34},"action":"insert","lines":[" "],"id":42},{"start":{"row":67,"column":34},"end":{"row":67,"column":35},"action":"insert","lines":["b"]},{"start":{"row":67,"column":35},"end":{"row":67,"column":36},"action":"insert","lines":["t"]},{"start":{"row":67,"column":36},"end":{"row":67,"column":37},"action":"insert","lines":["t"]},{"start":{"row":67,"column":37},"end":{"row":67,"column":38},"action":"insert","lines":["n"]}],[{"start":{"row":67,"column":37},"end":{"row":67,"column":38},"action":"remove","lines":["n"],"id":43},{"start":{"row":67,"column":36},"end":{"row":67,"column":37},"action":"remove","lines":["t"]}],[{"start":{"row":67,"column":36},"end":{"row":67,"column":37},"action":"insert","lines":["n"],"id":44},{"start":{"row":67,"column":37},"end":{"row":67,"column":38},"action":"insert","lines":["="]}],[{"start":{"row":67,"column":37},"end":{"row":67,"column":38},"action":"remove","lines":["="],"id":45}],[{"start":{"row":67,"column":37},"end":{"row":67,"column":38},"action":"insert","lines":["-"],"id":46},{"start":{"row":67,"column":38},"end":{"row":67,"column":39},"action":"insert","lines":["w"]},{"start":{"row":67,"column":39},"end":{"row":67,"column":40},"action":"insert","lines":["a"]},{"start":{"row":67,"column":40},"end":{"row":67,"column":41},"action":"insert","lines":["r"]}],[{"start":{"row":67,"column":41},"end":{"row":67,"column":42},"action":"insert","lines":["n"],"id":47},{"start":{"row":67,"column":42},"end":{"row":67,"column":43},"action":"insert","lines":["i"]},{"start":{"row":67,"column":43},"end":{"row":67,"column":44},"action":"insert","lines":["n"]},{"start":{"row":67,"column":44},"end":{"row":67,"column":45},"action":"insert","lines":["g"]}],[{"start":{"row":67,"column":46},"end":{"row":67,"column":51},"action":"insert","lines":["></a>"],"id":48}],[{"start":{"row":67,"column":47},"end":{"row":67,"column":48},"action":"insert","lines":["S"],"id":49},{"start":{"row":67,"column":48},"end":{"row":67,"column":49},"action":"insert","lines":["I"]},{"start":{"row":67,"column":49},"end":{"row":67,"column":50},"action":"insert","lines":["M"]}],[{"start":{"row":67,"column":54},"end":{"row":68,"column":0},"action":"insert","lines":["",""],"id":50},{"start":{"row":68,"column":0},"end":{"row":68,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":68,"column":12},"end":{"row":68,"column":54},"action":"insert","lines":["<a href=\"\" class=\"btn btn-warning\">SIM</a>"],"id":51}],[{"start":{"row":68,"column":38},"end":{"row":68,"column":45},"action":"remove","lines":["warning"],"id":52},{"start":{"row":68,"column":38},"end":{"row":68,"column":39},"action":"insert","lines":["p"]},{"start":{"row":68,"column":39},"end":{"row":68,"column":40},"action":"insert","lines":["r"]},{"start":{"row":68,"column":40},"end":{"row":68,"column":41},"action":"insert","lines":["i"]},{"start":{"row":68,"column":41},"end":{"row":68,"column":42},"action":"insert","lines":["m"]},{"start":{"row":68,"column":42},"end":{"row":68,"column":43},"action":"insert","lines":["a"]},{"start":{"row":68,"column":43},"end":{"row":68,"column":44},"action":"insert","lines":["r"]},{"start":{"row":68,"column":44},"end":{"row":68,"column":45},"action":"insert","lines":["y"]}],[{"start":{"row":68,"column":47},"end":{"row":68,"column":50},"action":"remove","lines":["SIM"],"id":53},{"start":{"row":68,"column":47},"end":{"row":68,"column":48},"action":"insert","lines":["N"]},{"start":{"row":68,"column":48},"end":{"row":68,"column":49},"action":"insert","lines":["Ã"]},{"start":{"row":68,"column":49},"end":{"row":68,"column":50},"action":"insert","lines":["O"]}],[{"start":{"row":68,"column":21},"end":{"row":68,"column":22},"action":"insert","lines":["i"],"id":54},{"start":{"row":68,"column":22},"end":{"row":68,"column":23},"action":"insert","lines":["n"]},{"start":{"row":68,"column":23},"end":{"row":68,"column":24},"action":"insert","lines":["d"]},{"start":{"row":68,"column":24},"end":{"row":68,"column":25},"action":"insert","lines":["e"]},{"start":{"row":68,"column":25},"end":{"row":68,"column":26},"action":"insert","lines":["x"]},{"start":{"row":68,"column":26},"end":{"row":68,"column":27},"action":"insert","lines":["."]},{"start":{"row":68,"column":27},"end":{"row":68,"column":28},"action":"insert","lines":["p"]},{"start":{"row":68,"column":28},"end":{"row":68,"column":29},"action":"insert","lines":["h"]},{"start":{"row":68,"column":29},"end":{"row":68,"column":30},"action":"insert","lines":["p"]}],[{"start":{"row":67,"column":21},"end":{"row":67,"column":22},"action":"insert","lines":["r"],"id":55},{"start":{"row":67,"column":22},"end":{"row":67,"column":23},"action":"insert","lines":["e"]},{"start":{"row":67,"column":23},"end":{"row":67,"column":24},"action":"insert","lines":["m"]},{"start":{"row":67,"column":24},"end":{"row":67,"column":25},"action":"insert","lines":["o"]},{"start":{"row":67,"column":25},"end":{"row":67,"column":26},"action":"insert","lines":["v"]},{"start":{"row":67,"column":26},"end":{"row":67,"column":27},"action":"insert","lines":["e"]},{"start":{"row":67,"column":27},"end":{"row":67,"column":28},"action":"insert","lines":["c"]},{"start":{"row":67,"column":28},"end":{"row":67,"column":29},"action":"insert","lines":["l"]},{"start":{"row":67,"column":29},"end":{"row":67,"column":30},"action":"insert","lines":["i"]},{"start":{"row":67,"column":30},"end":{"row":67,"column":31},"action":"insert","lines":["e"]}],[{"start":{"row":67,"column":31},"end":{"row":67,"column":32},"action":"insert","lines":["n"],"id":56},{"start":{"row":67,"column":32},"end":{"row":67,"column":33},"action":"insert","lines":["t"]},{"start":{"row":67,"column":33},"end":{"row":67,"column":34},"action":"insert","lines":["."]},{"start":{"row":67,"column":34},"end":{"row":67,"column":35},"action":"insert","lines":["p"]},{"start":{"row":67,"column":35},"end":{"row":67,"column":36},"action":"insert","lines":["h"]},{"start":{"row":67,"column":36},"end":{"row":67,"column":37},"action":"insert","lines":["p"]}],[{"start":{"row":67,"column":37},"end":{"row":67,"column":38},"action":"insert","lines":["?"],"id":57},{"start":{"row":67,"column":38},"end":{"row":67,"column":39},"action":"insert","lines":["i"]},{"start":{"row":67,"column":39},"end":{"row":67,"column":40},"action":"insert","lines":["d"]}],[{"start":{"row":67,"column":40},"end":{"row":67,"column":41},"action":"insert","lines":["="],"id":58},{"start":{"row":67,"column":41},"end":{"row":67,"column":42},"action":"insert","lines":[">"]}],[{"start":{"row":67,"column":41},"end":{"row":67,"column":42},"action":"remove","lines":[">"],"id":59}],[{"start":{"row":67,"column":41},"end":{"row":67,"column":42},"action":"insert","lines":["<"],"id":60},{"start":{"row":67,"column":42},"end":{"row":67,"column":43},"action":"insert","lines":["?"]},{"start":{"row":67,"column":43},"end":{"row":67,"column":44},"action":"insert","lines":[">"]}],[{"start":{"row":67,"column":43},"end":{"row":67,"column":44},"action":"insert","lines":["?"],"id":61}],[{"start":{"row":67,"column":43},"end":{"row":67,"column":46},"action":"insert","lines":["$id"],"id":62}]]},"ace":{"folds":[],"scrolltop":540,"scrollleft":0,"selection":{"start":{"row":67,"column":21},"end":{"row":67,"column":33},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1588286842478,"hash":"fd6b0811b2ff635667c6fe768b3cf7c31f76b29d"}