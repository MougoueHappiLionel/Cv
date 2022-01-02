<?php
function connexionBDD() {
    $host = "localhost";
    $bd_name = "cv";
    $username = "root";
    $password = "";
    $connexion = FALSE;

    if (!$connexion) {
        try {
            //connexion a la base de données
            $bddPDO = new PDO('mysql:host=' .$host. ';dbname=' .$bd_name. '', $username, $password);
            $bddPDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $bddPDO;
          }catch(PDOException $exception) {
            echo "Erreur de connexion: " .$exception -> getMessage();
          }
      }

  }