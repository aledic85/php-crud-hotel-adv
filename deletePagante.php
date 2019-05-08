<?php

  if ($_POST["id"]) {

    $id = $_POST["id"];

    $servername = "localhost";
    $username = "root";
    $password = "juventus";
    $dbname = "Prova1";

    $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_errno) {

        echo ("Connection failed: " . $conn->connect_error);
        return;
      }

      $sql1 = "DELETE
              FROM pagamenti
              WHERE pagante_id = $id";

      $sql2 = "DELETE
              FROM paganti
              WHERE id = $id";

      $conn->query($sql1);
      $conn->query($sql2);
      $conn->close();
  }

?>
