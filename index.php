<?php
require_once 'class/asa_login.php';

$asa_login = new AsaLogin();

// Charger les fichiers CSS et JS
$css_files = $asa_login->load_css();
$custom_js = $asa_login->load_js();
$custom_favicon = $asa_login->load_favicon();

// Global variables
$GLOBALS['css_files'] = $css_files;
$GLOBALS['custom_js'] = $custom_js;
$GLOBALS['custom_favicon'] = $custom_favicon;
$GLOBALS['asa_login'] = $asa_login;

// Permettre des modifications spécifiques à chaque hôte
if (file_exists($asa_login->host_dir . '/index.php')) {
    include $asa_login->host_dir . '/index.php';
}

include 'Templates/header.php';
?>
    <?php foreach ($GLOBALS['asa_login']->get_before_section_content() as $content): ?>
        <?= $content; ?>
    <?php endforeach; ?>

    <section class="section-connexion" style="<?= $GLOBALS['asa_login']->load_bg_style(); ?>">
        <?php foreach ($GLOBALS['asa_login']->get_bottom_section() as $content): ?>
            <?= $content; ?>
        <?php endforeach; ?>
        <div class="container-connexion">
            <?php if ($GLOBALS['asa_login']->is_logo_visible()): ?>
                <div class="logo-connexion">
                    <img src="<?= $GLOBALS['asa_login']->load_logo(); ?>" alt="logo" width="100" height="100">
                </div>
            <?php endif; ?>
            <h1 class="title-card-connexion"><?= $GLOBALS['asa_login']->get_title_card_connexion(); ?></h1>
            <form action="login.php" method="post" class="form-connexion">
                <label for="email" class="label-email"><?= $GLOBALS['asa_login']->get_label_email(); ?></label>
                <input type="email" name="email" class="input-custom" id="email" required>
                <label for="password" class="label-mdp">Mot de passe</label>
                <input type="password" name="password" class="input-custom" id="password" required>
                <button type="submit" class="btn-submit">
                    <a href="#">Connexion</a>
                </button>
            </form>
        </div>
        <?php foreach ($GLOBALS['asa_login']->get_bottom_section() as $content): ?>
            <?= $content; ?>
        <?php endforeach; ?>
    </section>

    <?php foreach ($GLOBALS['asa_login']->get_after_section_content() as $content): ?>
        <?= $content; ?>
    <?php endforeach; ?>

<?php
include 'Templates/footer.php';
?>