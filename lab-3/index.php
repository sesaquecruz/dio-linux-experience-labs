<html>

<head>
  <title>Teste PHP</title>
</head>

<body>
  <?php
  ini_set("display_errors", 1);
  header('Content-Type: text/html; charset=iso-8859-1');

  echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

  // Configurações

  $servername = "";
  $username = "";
  $password = "";
  $database = "";

  // Criar conexão

  $link = new mysqli($servername, $username, $password, $database);

  if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
  }

  // Salva os dados

  $host_name = gethostname();

  $query = "INSERT INTO Test (host) VALUES ('$host_name')";

  if ($link->query($query) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $link->error;
  }

  ?>
</body>
</html>