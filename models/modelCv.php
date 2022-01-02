<?php

	require_once('models/model.php');
/**
 * 
 */


function  addCv($nom_complet, $statut, $date_nais, $region, $situation, $sante, $quartier, $ville, $pays, $telephone, $reseaux, $email, $social, $map,$entreprise, $start_date, $end_date, $poste, $role, $website, $institut, $date_ob, $diplome, $serie) {

    $bddPDO = connexionBDD();
    $requete = $bddPDO -> prepare('INSERT INTO experience(nom_complet, statut, date_nais, region, situation, sante, quartier, ville, pays, telephone, reseaux, email, social, map, entreprise, start_date, end_date, role, poste, website, institut, date_ob, diplome, serie) VALUES (:nom_complet, :statut, :date_nais, :region, :situation, :sante, :quartier, :ville, :pays, :telephone, :reseaux, :email, :social, :map, :entreprise, :start_date, :end_date, :role, :poste, :website, :institut, :date_ob, :diplome,) :serie');

    $requete->bindValue(':nom_complet', $nom_complet); 
    $requete->bindValue(':statut', $statut); 
    $requete->bindValue(':date_nais', $date_nais); 
    $requete->bindValue(':region', $region); 
    $requete->bindValue(':situation', $situation); 
    $requete->bindValue(':sante', $sante); 
    $requete->bindValue(':quartier', $quartier); 
    $requete->bindValue(':ville', $ville); 
    $requete->bindValue(':pays', $pays); 
    $requete->bindValue(':telephone', $telephone); 
    $requete->bindValue(':reseaux', $reseaux);     
    $requete->bindValue(':email', $email); 
    $requete->bindValue(':social', $social);
    $requete->bindValue(':map', $map); 
    $requete->bindValue(':entreprise', $entreprise); 
    $requete->bindValue(':start_date', $start_date);  
    $requete->bindValue(':end_date', $end_date); 
    $requete->bindValue(':poste', $poste);
    $requete->bindValue(':role', $role);
    $requete->bindValue(':website', $website);  
    $requete->bindValue(':institut', $institut); 
    $requete->bindValue(':date_ob', $date_ob);
    $requete->bindValue(':diplome', $diplome);
    $requete->bindValue(':serie', $serie);

    $result = $requete-> execute();

    return $result;
}

function  getCvs() {

    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM personne ORDER BY id ASC";
    $resultGetCourses = $bddPDO->query($requete);

    return $resultGetCourses;
}

function getCv($id){
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM personne WHERE id = $id";
    $result = $bddPDO->query($requete);
    $data = $result->fetch(PDO::FETCH_ASSOC);
    return $data;
}


