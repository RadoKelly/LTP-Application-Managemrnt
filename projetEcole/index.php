<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="img">
            <img src="./public/img/true_friends.svg" alt="">
        </div>
        <div class="login-container">
            <form action="Controller/AuthentificationController.php" method="post">
                <img class="avatar" src="./public/img/pic_profile.svg" alt="">
                <h2>Bienvenue</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Identifiant</h5>
                        <input class="input" name="identifiant" type="text">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Mot de Passe</h5>
                        <input class="input" name="mdp" type="password">
                    </div>
                </div>
                <a href="./formulaire.php">Mot de passe oublié</a>
                <input type="submit" class="btn" value="Se connecter">
            </form>
        </div>
    </div>
    <script src="./public/js/main.js"></script>
</body>
</html>
