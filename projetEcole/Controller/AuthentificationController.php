<?php
    require_once '../Models/UtilisateurModel.php';
    require_once '../config/database.php';
    require_once '../Dbo/DbAcces.php';

    if(isset($_POST['identifiant']) && isset($_POST['mdp'])){
        $user = new UtilisateurModel($_POST['identifiant'],$_POST['mdp']);
        $acces = new DbAcces($conn);
        $verifUser = $acces->VerifierUtilisateur($user);
        if($verifUser){
            header('Location:ListeController.php');
            exit();
        }else{
            echo "Identifiant ou mot de passe incorrect.";
        }
    }
?>