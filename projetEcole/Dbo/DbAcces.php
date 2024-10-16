<?php
    require_once '../Models/EleveModel.php';
    class DbAcces{
        private $conn;
        public function __construct($conn){
            $this->conn = $conn;
        }

        public function InsertionEleve($eleve){
            try {
                // Utilise $this->conn ici
                $requete = $this->conn->query("INSERT INTO eleves(nom,prenom,date_naissance,numero,matricule,sexe,secteur,filiere,niveau) 
                VALUES('".$eleve->getNom()."','".$eleve->getPrenom()."','".$eleve->getDate_naissance()."','".$eleve->getNumero()."','".$eleve->getMatricule()."','".$eleve->getSexe()."','".$eleve->getSecteur()."','".$eleve->getFiliere()."','".$eleve->getNiveau()."')");
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function ListeEleve() {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM eleves");
                
                // Récupération des résultats
                $eleves = [];
                while ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $eleves[] = new EleveModel(
                        $row["id"], 
                        $row["nom"], 
                        $row["prenom"], 
                        $row["date_naissance"], 
                        $row["numero"], 
                        $row["matricule"], 
                        $row["sexe"], 
                        $row["secteur"], 
                        $row["filiere"], 
                        $row["niveau"]
                    );
                }
        
                return $eleves; // Renvoie le tableau d'élèves
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }
        
        public function VerifierUtilisateur($utilisateur) {
            try {
                // Préparer la requête SQL pour éviter les injections SQL
                $requete = $this->conn->prepare("SELECT * FROM utilisateur WHERE uti = :util AND mdp = :modp");
                
                // Exécuter la requête en liant les paramètres
                $requete->execute([
                    ':util' => $utilisateur->getUti(),
                    ':modp' => $utilisateur->getMdp()
                ]);
                
                // Vérifier si une ligne correspond
                if ($requete->rowCount() > 0) {
                    return true;
                } else {
                    return false;
                }
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }
        

        public function SupprimerEleve($id){
            try{
                $requete = $this->conn->query("DELETE FROM eleves WHERE id =".$id);
                return true;
            }catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }
        
    }
?>