<?php
    require_once '../Models/EleveModel.php';
    require_once '../Dbo/DbAcces.php';
    require_once '../config/database.php';
    $contro = new DbAcces($conn);
    $idParam = $_GET['id'];
    $verif = $contro->SupprimerEleve($idParam);
    if($verif){
         header("Location:../ListeController.php");
    }else{
        echo 'Erreur';
    }