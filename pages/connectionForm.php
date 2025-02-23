<?php
    require_once("../include/config.php"); 
    require_once("../include/connection.php"); 
    $titre = SITE_NAME . ' - Connexion';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/connection.css">
    <title><?php echo htmlspecialchars($titre);?></title>
</head>
<body>
    <section class="connection-panel" id="connection">
        <div id="login-header">
            <h1>Connexion</h1>
            <h2>Connectez-vous à votre compte</h2>
        </div>
        <div id="register-header">
            <h1>Inscription</h1>
            <h2>Pas encore de compte ? Créez en un dès maintenant !</h2>
        </div>
        
        <div class="toggle">
            <button class="left isSelect" onclick="toggleForm(false)" id="login-btn">Connection</button>
            <button class="right" onclick="toggleForm(true)" id="register-btn">Inscription</button>
        </div>
        
        <form method="POST" id="login-form">
            <label>Adresse e-mail</label>
            <input type="text" name="email" required>
            <label>Mot de passe</label>
            <input type="password" name="password" required>
            <button type="submit" class="button">Se connecter</button>
            <a href="#"><p class="missPass">Mot de passe oublié ?</p></a>
        </form>
        <form method="POST" id="register-form">
            <div class="names">
                <div class="field">
                    <label>Nom</label>
                    <input type="text" name="nom" required>
                </div>
                <div class="field">
                    <label>Prénom</label>
                    <input type="text" name="prenom" required>
                </div>
            </div>
            <label>Adresse e-mail</label>
            <input type="text" name="email" required>
            <label>Mot de passe</label>
            <input type="password" name="password" required>
            <label>Confirmer le mot de passe</label>
            <input type="password" name="password" required>
            <button type="submit" class="button">S'inscrire</button>
        </form>
    </section>
</body>
<script src="../assets/js/ConnectForm.js" type="text/javascript"></script>
</html>