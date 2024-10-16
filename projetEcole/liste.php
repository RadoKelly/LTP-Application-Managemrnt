
<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/liste.css">
    <title>Liste Eleve</title>
</head>
</head>
<body>
    <div class="container">

      <header>
          <div class="filterEntries">
              <div class="entries">
                  Show <select name="" id="">
                      <option value="10">10</option>
                      <option value="20">20</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                  </select> entries
              </div>

              <div class="filter">
                  <label for="search">Rechercher</label>
                  <input type="search" name="search" id="search" placeholder="Entrer nom">
              </div>
          </div>

          <div class="addMemberBtn">
              <a href="../formulaire.php"><button>Ajouter Membre</button></a>
          </div>
      </header>

      <table>

          <thead>
              <tr class="heading">
                  <th>id</th>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Date de naissance</th>
                  <th>N°</th>
                  <th>Matricule</th>
                  <th>Sexe</th>
                  <th>Secteur</th>
                  <th>Filière</th>
                  <th>Niveau</th>
                  <th>Action</th>
              </tr>
          </thead>

          <tbody>
          <?php
              foreach($lesEleves as $eleve):?>
              <tr class="tbody">
                  <td><?php echo $eleve->getId(); ?></td>
                  <td><?php echo $eleve->getNom(); ?></td>
                  <td><?php echo $eleve->getPrenom(); ?></td>
                  <td><?php echo $eleve->getDate_naissance(); ?></td>
                  <td><?php echo $eleve->getNumero(); ?></td>
                  <td><?php echo $eleve->getMatricule(); ?></td>
                  <td><?php echo $eleve->getSexe(); ?></td>
                  <td><?php echo $eleve->getSecteur(); ?></td>
                  <td><?php echo $eleve->getFiliere(); ?></td>
                  <td><?php echo $eleve->getNiveau(); ?></td>
                  <td>
                      <button class="btn voir"><img src="../public/img/eye.svg" alt=""></button>
                      <button class="btn edit" ><img src="../public/img/edit.svg" alt=""></button>
                      <a href="./SupprimerEleveController.php/?id=<?php echo $eleve->getId(); ?>" id="mylink"><button class="btn delete" ><img src="../public/img/delete.svg" alt=""></button></a>
                  </td>
              </tr>
              <?php endforeach ?>
          </tbody>

      </table>

      <footer>
        <span>Afficher 1 à 10 </span>
        <div class="pagination" >
            <button>Prev</button>
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>5</button>
            <button>Next</button>
        </div>
      </footer>
    </div>

    <!-- Popup Form -->
 
    <div class="dark_bg">

            <div class="popup">
                <header>
                    <h2 class="modalTitle">Completer le Formulaire</h2>
                    <button class="closeBtn">&times;</button>
                </header>

                <div class="body">
                    <form action="#" id="myForm">
                        <div class="imgholder">
                            <label for="uploading" class="upload">
                                <input type="file" name="" id="uploading" class="picture">
                                <i>+</i>
                            </label>
                            <img src="../public/img/pic_profile.svg" alt="" width="150" height="150" class="img">
                        </div>

                        <div class="inputFieldContainer">
                            <div class="nameField">
                                <div class="form_control">
                                    <label for="fname">Nom</label>
                                    <input type="text" name="" id="fname" required>
                                </div>

                                <div class="form_control">
                                    <label for="lname">Prenom</label>
                                    <input type="text" name="" id="lname" required>
                                </div>
                            </div>

                            <div class="ageCityField">
                                <div class="form_control">
                                    <label for="age">Age</label>
                                    <input type="text" name="" id="age" required>
                                </div>

                                <div class="form_control">
                                    <label for="age">City</label>
                                    <input type="text" name="" id="age" required>
                                </div>
                            </div>

                            <div class="postSalary">
                                    <div class="form_control">
                                        <label for="position">Position</label>
                                        <input type="text" name="" id="position" required>
                                    </div>

                                    <div class="form_control">
                                        <label for="salary">Salary</label>
                                        <input type="text" name="" id="salary" required>
                                    </div>
                            </div>

                            <div class="form_control">
                                        <label for="sDate">Start Date</label>
                                        <input type="date" name="" id="sDate" required>
                                    </div>

                                    <div class="form_control">
                                        <label for="email">Email</label>
                                        <input type="email" name="" id="email" required>
                                    </div>
                                    
                                    <div class="form_control">
                                        <label for="number">Phone:</label>
                                        <input type="number" name="" id="number" required>
                                    </div> 
                        </div>
                    </div>
                    </form>
                    <footer>
                        <button form="myForm" class="submitBtn">Ajouter</button>
                    </footer>
            </div>

            
    </div>
    

<script src="../public/js/liste.js"></script>
</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_table_fancy by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jun 2021 23:14:10 GMT -->
</html>
