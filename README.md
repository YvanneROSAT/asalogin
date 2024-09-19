<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>README du Projet AsaLogin</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
        h1, h2, h3 { color: #333; }
        pre { background-color: #f4f4f4; padding: 10px; }
        code { color: #c7254e; background-color: #f9f2f4; padding: 2px 4px; }
        ul { list-style-type: disc; margin-left: 20px; }
        ol { list-style-type: decimal; margin-left: 20px; }
    </style>
</head>
<body>

<h1>AsaLogin</h1>

<h2>Introduction</h2>
<p>
    AsaLogin est une application web modulaire et polyvalente développée en PHP, JavaScript, CSS et HTML. Elle offre des pages de connexion, d'inscription, de mot de passe oublié et une page de redirection après la récupération du mot de passe. Le projet est conçu pour être facilement personnalisable en fonction de l'URL ou du dossier hôte, permettant de modifier, remplacer ou ajouter des éléments sur les pages.
</p>

<h2>Fonctionnalités Principales</h2>
<ul>
    <li>Formulaires de connexion, d'inscription et de récupération de mot de passe.</li>
    <li>Personnalisation dynamique de l'interface en fonction de l'hôte.</li>
    <li>Possibilité de surcharger les fichiers CSS, JS et les templates PHP.</li>
    <li>Structure modulaire grâce à l'utilisation de classes PHP.</li>
</ul>

<h2>Installation</h2>
<ol>
    <li>Clonez le dépôt du projet dans votre serveur web :
        <pre><code>git clone https://votre-repo-git/asalogin.git</code></pre>
    </li>
    <li>Assurez-vous que votre serveur supporte PHP.</li>
    <li>Configurez vos hôtes virtuels si nécessaire pour pointer vers le dossier du projet.</li>
</ol>

<h2>Utilisation</h2>
<p>
    L'application est conçue pour être utilisée telle quelle, avec une configuration et un comportement par défaut. Cependant, vous pouvez personnaliser l'application pour différents hôtes ou URLs en suivant les étapes ci-dessous.
</p>

<h3>Personnalisation par Hôte</h3>
<ol>
    <li>Dans le dossier <code>host/</code>, créez un nouveau dossier portant le nom de votre hôte (par exemple, <code>host/monhote.com/</code>).</li>
    <li>Dans ce dossier, vous pouvez ajouter les fichiers que vous souhaitez surcharger :
        <ul>
            <li><code>style.css</code> pour ajouter des styles CSS supplémentaires.</li>
            <li><code>style.replace.css</code> pour remplacer complètement le fichier CSS par défaut.</li>
            <li><code>script.js</code> pour ajouter ou remplacer des scripts JavaScript.</li>
            <li><code>header.php</code> et <code>footer.php</code> pour personnaliser les templates.</li>
            <li><code>logo.png</code> ou <code>logo.jpg</code> pour remplacer le logo par défaut.</li>
            <li><code>bg.jpg</code>, <code>bg.png</code>, ou <code>bg.jpeg</code> pour définir une image d'arrière-plan personnalisée.</li>
            <li><code>bg_color.txt</code> pour définir une couleur d'arrière-plan.</li>
            <li><code>config.json</code> pour configurer des options spécifiques (par exemple, cacher le logo).</li>
        </ul>
    </li>
</ol>

<h2>Structure du Projet</h2>
<ul>
    <li><code>assets/</code>: Contient les ressources par défaut.
        <ul>
            <li><code>css/style.css</code>: Styles CSS par défaut.</li>
            <li><code>js/script.js</code>: Scripts JavaScript par défaut.</li>
            <li><code>images/logo.jpg</code>: Logo par défaut.</li>
            <li><code>images/favicon.ico</code>: Favicon par défaut.</li>
        </ul>
    </li>
    <li><code>class/</code>: Contient les classes PHP.
        <ul>
            <li><code>asa_login.php</code>: Classe principale gérant la logique de l'application.</li>
        </ul>
    </li>
    <li><code>host/</code>: Contient les surcharges spécifiques aux hôtes.</li>
    <li><code>Templates/</code>: Contient les templates par défaut.
        <ul>
            <li><code>header.php</code></li>
            <li><code>footer.php</code></li>
        </ul>
    </li>
    <li><code>index.php</code>: Point d'entrée principal de l'application.</li>
</ul>

<h2>Description des Classes CSS</h2>
<p>Voici une liste des principales classes CSS utilisées dans l'application et leur rôle :</p>
<ul>
    <li><code>body</code>: Définit les styles de base du corps de la page.</li>
    <li><code>.section-connexion</code>: Conteneur principal pour la section de connexion. Peut avoir un arrière-plan personnalisé.</li>
    <li><code>.container-connexion</code>: Conteneur du formulaire de connexion.</li>
    <li><code>.logo-connexion</code>: Contient le logo affiché sur la page de connexion.</li>
    <li><code>.title-card-connexion</code>: Style du titre de la carte de connexion.</li>
    <li><code>.form-connexion</code>: Style général du formulaire de connexion.</li>
    <li><code>.label-email</code>: Style du label pour le champ email.</li>
    <li><code>.label-mdp</code>: Style du label pour le champ mot de passe.</li>
    <li><code>.input-custom</code>: Styles communs pour les champs de saisie du formulaire.</li>
    <li><code>.btn-submit</code>: Style du bouton de soumission du formulaire.</li>
    <li><code>.btn-submit a</code>: Style du lien à l'intérieur du bouton de soumission.</li>
</ul>

<h2>Personnalisation Avancée</h2>
<h3>Changer l'Arrière-plan</h3>
<p>Pour modifier l'arrière-plan de la section de connexion, vous pouvez :</p>
<ul>
    <li>Ajouter une image nommée <code>bg.jpg</code>, <code>bg.png</code> ou <code>bg.jpeg</code> dans le dossier de l'hôte.</li>
    <li>Ou créer un fichier <code>bg_color.txt</code> contenant le code hexadécimal de la couleur désirée.</li>
</ul>

<h3>Cacher le Logo</h3>
<p>Pour cacher le logo sur un hôte spécifique, créez un fichier <code>config.json</code> dans le dossier de l'hôte avec le contenu suivant :</p>
<pre><code>{
    "show_logo": false
}</code></pre>

<h2>Exemple de Configuration pour un Hôte</h2>
<p>Supposons que vous ayez un hôte <code>monhote.com</code>. Voici comment vous pouvez le configurer :</p>
<ol>
    <li>Créez le dossier <code>host/monhote.com/</code>.</li>
    <li>Ajoutez un fichier <code>style.css</code> pour surcharger ou ajouter des styles CSS.</li>
    <li>Ajoutez un fichier <code>config.json</code> si vous souhaitez modifier les paramètres (par exemple, cacher le logo).</li>
    <li>Ajoutez une image <code>logo.png</code> pour remplacer le logo par défaut.</li>
    <li>Ajoutez une image d'arrière-plan <code>bg.jpg</code> ou une couleur dans <code>bg_color.txt</code>.</li>
</ol>

</body>
</html>