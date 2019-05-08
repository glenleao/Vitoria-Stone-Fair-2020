<?php
 include_once './conexao.php';
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

    <title>Listar palestras</title>
  </head>
  <body>
    <div class="container py-5">
    <h1>Listar palestras</h1>
    <?php
    //SQL para selecionar os registros
    $result_msg_cont = "SELECT * FROM palestras ORDER BY id ASC";

    //seleciona os registros
    $resultado_msg_cont = $conn->prepare($result_msg_cont);
    $resultado_msg_cont->execute();

    while ($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)){
      echo "ID: " . $row_msg_cont['id'] . "<br>";
      echo "Dia: " . $row_msg_cont ['dia'] . "<br>";
      echo "tema: " . $row_msg_cont['tema'] . "<br>";
      echo "Palestrante: " . $row_msg_cont['palestrante'] . "<br><hr>";
    }
    // SELECIONAR A DATA MAIS PROXIMA DA ATUAL
    $diaproximo = "SELECT * FROM palestras WHERE dia >= (SELECT max(dia) FROM palestras WHERE DIA != CONVERT (dia, GETDATE() ))";

    

    /* 
    https://forum.zwame.pt/threads/sql-obter-registos-da-data-mais-recente.637094/
    Então é realmente como o HellSpider sugere, só usaria MAX em vez de TOP + ORDER BY.
A query vai-te mostrar todas as entradas mais recentes, se tiveres uma só entrada com o dia de HOJE, mostra só essa entrada, mas como no exemplo do "algo que querias" tens MENOR ou IGUAL, imagino que seja isso que queiras. Embora "do dia mais recente que ele encontre ao dia actual." esteja a dar entender que queres obter por exemplo as actividades de HOJE e das do ultimo dia em que houve atividades. Nesses caso deve ser algo como:

SELECT *
FROM tabela
WHERE datainicio >= (SELECT max(datainicio) FROM tabela WHERE datainicio != CONVERT (datainicio, GETDATE() ) )

Se tiveres datas futuras inseridas na BD então só tens que colocar um limite superior igual da data actual.

    */

    ?>


    
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>