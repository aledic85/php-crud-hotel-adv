<?php

  if ($_POST["id"]) {

    $id = $_POST["id"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];

    $servername = "localhost";
    $username = "root";
    $password = "juventus";
    $dbname = "Prova1";

    $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_errno) {

        echo ("Connection failed: " . $conn->connect_error);
        return;
      }

      $sql = "UPDATE paganti
              SET name = '$name', lastname = '$lastname'
              WHERE id = $id";

      $conn->query($sql);
      $conn->close();
  }

?>
