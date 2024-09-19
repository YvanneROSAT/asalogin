<?php
// Assurez-vous que l'objet AsaLogin est accessible
$asa_login = $GLOBALS['asa_login'];

// Définir dynamiquement le titre de la page pour host.test.com
$asa_login->set_title("AsaLogin (Host Test)");

$asa_login->load_favicon("host/host.test.com/favicon.ico");

// Ajouter des CSS et JS spécifiques
$asa_login->add_css("host/host.test.com/style.css");
$asa_login->add_js("host/host.test.com/script.js");
$asa_login->add_css("host/host.test.com/test.css");

// Ajouter du contenu spécifique avant et après la section
$asa_login->add_before_section_content('<div class="before-section">Contenu avant la section pour host.test.com</div>');
$asa_login->set_title_card_connexion("Connexion à host.test.com");
$asa_login->set_label_email("Adresse email");
$asa_login->add_after_section_content('<div class="after-section">Contenu après la section pour host.test.com</div>');

// Ajouter du contenu spécifique au body et au footer
$asa_login->add_bottom_section('<div class="additional-content">Contenu spécifique au body pour host.test.com</div>');
$asa_login->add_top_section('<div class="additional-content">Contenu spécifique au body pour host.test.com</div>');
$asa_login->add_footer_content('<div class="additional-footer">Contenu spécifique au footer pour host.test.com</div>');
?>