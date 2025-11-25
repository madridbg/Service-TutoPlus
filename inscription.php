<?php
session_start();

$message_succes = "";
$message_erreur = "";

if (isset($_GET['action'])) {

    $action = $_GET['action'];

    if ($action == 'register_tutore') {
        header("Location: tutore.html");
        exit();
    } elseif ($action == 'register_tuteur') {
        $message_succes = "<strong>Candidature reçue !</strong><br>Votre profil est en cours d'analyse par l'administration.<br>Vous recevrez une réponse par courriel.";
    } elseif ($action == 'register_admin') {

        header("Location: admin.html");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Tuto+</title>
    <link rel="stylesheet" href="./public/css/style-profile.css">
    <link rel="stylesheet" href="./public/css/style-rdv.css">
    <link rel="stylesheet" href="./public/css/style-inscription.css">
</head>

<body>

    <header>
        <img src="./public/assets/logo-ahuntsic.png" alt="Logo du collège Ahuntsic" class="logo-ahuntsic">
        <div class="logo">Tuto+</div>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="connexion.html">Connexion</a>
        </nav>
    </header>

    <main class="profile-container">

        <div class="profile-header">
            <h1>Créer un compte</h1>
            <p>Rejoignez la communauté Tuto+.</p>
        </div>

        <div class="login-wrapper">
            <div class="profile-card login-card">

                <?php if ($message_succes): ?>
                    <div style="padding: 30px;">
                        <div class="alert-box alert-success">
                            <?php echo $message_succes; ?>
                        </div>
                        <a href="index.php" class="btn-action">Retour à l'accueil</a>
                    </div>

                <?php else: ?>
                    <div class="login-tabs">
                        <button class="tab-btn active" onclick="openTab(event, 'tutore')"
                            data-target="tutore">Tutoré</button>
                        <button class="tab-btn" onclick="openTab(event, 'tuteur')" data-target="tuteur">Devenir
                            Tuteur</button>
                        <button class="tab-btn" onclick="openTab(event, 'admin')" data-target="admin">Admin</button>
                    </div>

                    <div class="login-content">

                        <?php if ($message_erreur && isset($_GET['action']) && $_GET['action'] == 'register_tutore')
                            echo "<div class='alert-box alert-error'>$message_erreur</div>"; ?>

                        <div id="tutore" class="form-section active">
                            <span class="login-icon">🎓</span>
                            <h3 style="text-align:center; border:none; margin-bottom:15px;">Inscription Étudiant</h3>

                            <form class="needs-form" action="inscription.php" method="GET">
                                <input type="hidden" name="action" value="register_tutore">

                                <div class="form-row-split">
                                    <div class="champ">
                                        <label>Prénom</label>
                                        <input type="text" name="prenom" required>
                                    </div>
                                    <div class="champ">
                                        <label>Nom</label>
                                        <input type="text" name="nom" required>
                                    </div>
                                </div>
                                <div class="champ">
                                    <label>DA (7 chiffres)</label>
                                    <input type="text" name="da" placeholder="1234567" required>
                                </div>
                                <div class="champ">
                                    <label>Mot de passe</label>
                                    <input type="password" name="pwd" required>
                                </div>

                                <button type="submit" class="btn-action">Créer mon compte</button>
                            </form>
                        </div>

                        <div id="tuteur" class="form-section">
                            <span class="login-icon">👨‍🏫</span>
                            <h3 style="text-align:center; border:none; margin-bottom:15px;">Candidature Tuteur</h3>

                            <form class="needs-form" action="inscription.php" method="GET">
                                <input type="hidden" name="action" value="register_tuteur">

                                <div class="champ">
                                    <label>Courriel Ahuntsic</label>
                                    <input type="text" name="email" placeholder="@collegeahuntsic.qc.ca" required>
                                </div>
                                <div class="champ">
                                    <label>Expertise principale</label>
                                    <select class="rdv-select" name="expertise">
                                        <option>Programmation Web et mobile</option>
                                        <option>Réseaux et sécurité</option>
                                    </select>
                                </div>
                                <div class="champ">
                                    <label>Mot de passe</label>
                                    <input type="password" name="pwd" required>
                                </div>

                                <button type="submit" class="btn-action">Soumettre candidature</button>
                            </form>
                        </div>

                        <div id="admin" class="form-section">
                            <span class="login-icon">⚙️</span>
                            <h3 style="text-align:center; border:none; margin-bottom:15px; color:#333;">Création Admin</h3>

                            <?php if ($message_erreur)
                                echo "<div class='alert-box alert-error'>$message_erreur</div>"; ?>

                            <form class="needs-form" action="inscription.php" method="GET">
                                <input type="hidden" name="action" value="register_admin">

                                <div class="champ">
                                    <label>Identifiant</label>
                                    <input type="text" name="identifiant" required>
                                </div>
                                <div class="champ">
                                    <label>Mot de passe</label>
                                    <input type="password" name="pwd" required>
                                </div>

                                <button type="submit" class="btn-action btn-admin">Créer Admin</button>
                            </form>
                        </div>

                    </div>
                    <div class="login-footer">
                        <p>Déjà membre ? <a href="connexion.html" style="color: #c71717; font-weight: bold;">Se connecter</a>
                        </p>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </main>

    <footer>
        © 2025 Tuto+ — Collège Ahuntsic
    </footer>

    <script>
        function openTab(evt, tabName) {
            var sections = document.getElementsByClassName("form-section");
            for (var i = 0; i < sections.length; i++) {
                sections[i].classList.remove("active");
            }
            var tablinks = document.getElementsByClassName("tab-btn");
            for (var i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }
    </script>
</body>

</html>