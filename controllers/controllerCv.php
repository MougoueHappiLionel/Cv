<?php

require_once('models/modelCv.php');

  function addCvs() {
 
    if (isset($_POST['submit'])) {
 
      if (!empty($_POST['nom_complet'] && $_POST['statut'] && $_POST['date_nais'] && $_POST['region'] && $_POST['situation'] && $_POST['sante'] && $_POST['quartier'] && $_POST['ville'] && $_POST['pays'] && $_POST['telephone'] && $_POST['reseaux'] && $_POST['email'] && $_POST['social'] && $_POST['map'] && $_POST['entreprise'] && $_POST['start_date'] && $_POST['end_date'] && $_POST['role'] && $_POST['poste'] && $_POST['website'] && $_POST['institut'] && $_POST['date_ob'] && $_POST['diplome'] && $_POST['serie'])) {
        addCv($_POST['nom_complet'], $_POST['statut'], $_POST['date_nais'], $_POST['region'], $_POST['situation'], $_POST['sante'], $_POST['quartier'], $_POST['ville'], $_POST['pays'], $_POST['telephone'], $_POST['reseaux'], $_POST['email'], $_POST['social'], $_POST['map'], $_POST['entreprise'], $_POST['start_date'], $_POST['end_date'], $_POST['role'], $_POST['poste'], $_POST['website'], $_POST['institut'], $_POST['date_ob'], $_POST['diplome'], $_POST['serie']);
        getAllCvs();
      }else {
        echo "Tout les champ sont requis";
      }
    } else{
      include_once('views/formulaire.php');
    }

    
  }

  function getAllCvs()
  {
      $resultGetCvs = getCvs();
      if (!$resultGetCvs) {

        $message = "La recuperation des informations du cv n'a pas aboutit !";

      } else {

        $nb_cv = $resultGetCvs -> rowCount();
        if ($nb_cv == 0) {
            $message = "Il n'y a aucune information dans cv pour le moment !";
            addCvs();
        } else {
            require_once('views/afficher_cv.php');
        }

    }

    $resultGetCvs -> closeCursor();
  }
?>