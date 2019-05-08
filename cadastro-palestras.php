<?php
 session_start();
 ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/animate.css">


    <title>Cadastrar Palestras</title>
  </head>
  <body>
    <div class="container py-5 animated fadeInLeft">
    <h1>Cadastro de Palestras 2 </h1>
    <?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
    ?>
    <form method="POST" action="proc_cad_palestra.php">
      <label>Data:</label>
      <input type="date" name="dia" placeholder=""><br><br>
      <label>Tema:</label>
      <input type="text" name="tema" placeholder="Inserir tema palestra"><br><br>
      <label>Palestrante:</label>
      <input type="text" name="palestrante" placeholder="Inserir palestrante"><br><br>
      <input type="submit" name="SendCadPalestra" value="Cadastrar">

      
    </form>
    <a href="listar-palestras.php"><button class="btn btn-success mt-5">Listar registros</button></a>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>