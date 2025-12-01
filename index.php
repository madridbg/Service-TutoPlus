<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Tuto+</title>
    <link rel="stylesheet" href="./public/css/style-index.css">
</head>

<body>

    <header>
        <img src="./public/assets/logo-ahuntsic.png" alt="Logo du collège Ahuntsic" class="logo-ahuntsic">
        <div class="logo">Tuto+</div>
        <nav>
            <a href="index.php">Accueil</a>
            <?php if (isset($_GET['tutore'])) {
                echo "<a href=\"tutore.html\">Espace Tutoré</a>";
            } elseif (isset($_GET['tuteur'])) {
                echo "<a href=\"tuteur.html\">Espace Tuteur</a>";
            } elseif (isset($_GET['admin'])) {
                echo "<a href=\"admin.html\">Espace Admin</a>";
            } else {
                echo "<a href=\"connexion.html\">Connexion</a>";
            }
            ?>
        </nav>
    </header>

    <section class="description">
        <h1>Bienvenue à Tuto+</h1>
        <p>Vous recherchez de l'aide pour un cours de Techniques de l'informatique ? <br> Inscrivez-vous dès maintenant
            et réservez une séance avec l'un de nos tuteurs!</p>
        <a href="inscription.php">Commencer</a>
    </section>

    <section class="features">
        <div class="feature-box">
            <h3>Une équipe de tuteurs qualifiés</h3>
            <p>Apprenez aux côtés d'étudiants habiles dans le domaine.</p>
        </div>

        <div class="feature-box">
            <h3>Plage horaire flexible</h3>
            <p>Sélectionnez une date à travers toutes les disponibilités des tuteurs.</p>
        </div>

        <div class="feature-box">
            <h3>Séances personnalisées</h3>
            <p>Toute séance peut être personnalisée selon vos besoins.</p>
        </div>
    </section>

    <section class="offered-courses">
        <div class="section-title">
            <h2>Cours Offerts</h2>
            <p>Nos tuteurs sont spécialisés dans les axes principaux du programme.</p>
        </div>

        <div class="courses-grid">
            <div class="course-card">
                <div class="icon">🌐</div>
                <h3>Programmation Web 1</h3>
                <p>Apprenez les bases du développement web avec HTML, CSS et JavaScript pour créer des interfaces modernes et réactives.</p>
            </div>

            <div class="course-card">
                <div class="icon">🔒</div>
                <h3>Réseaux et sécurité</h3>
                <p>Comprenez le fonctionnement des réseaux, la configuration des routeurs (Cisco) et les principes fondamentaux de la cybersécurité.</p>
            </div>

            <div class="course-card">
                <div class="icon">🗄️</div>
                <h3>Bases de données</h3>
                <p>Maîtrisez le langage SQL, la modélisation de données et la gestion de l'information pour structurer efficacement vos projets.</p>
            </div>
        </div>
    </section>

    <section class="info">
        <h2>À propos de Tuto+</h2>
        <p>
            Tuto+ est une équipe dédiée à aider les étudiants en Techniques de l'informatique du Collège Ahuntsic. Un
            service personnalisé
            vous est offert peu importe la branche informatique choisie. L'équipe de tuteurs sont des étudiants tels que
            vous, toujours
            prêts à vous aider!
        </p>
    </section>

    <footer>
        © 2025 Tuto+ — Collège Ahuntsic <br> Madrid Boutin-Guénette - Emerick Lanthier - Jacob Somphanthabansouk
    </footer>

</body>