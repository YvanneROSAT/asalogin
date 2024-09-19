<?php

class AsaLogin {
    private $host;
    public $host_dir;
    private $default_css = 'assets/css/style.css';
    private $default_js = 'assets/js/script.js';
    private $title = 'asalogin';
    private $additional_css = [];
    private $additional_js = [];
    private $before_section_content = [];
    private $after_section_content = [];
    private $bottom_section = [];
    private $top_section = [];
    private $footer_content = [];
    private $default_favicon = "assets/images/favicon.ico";
    private $title_card_connexion = "Connexion";
    private $label_email = "Email";
    private $show_logo = true;

    public function __construct() {
        $this->host = $_SERVER['HTTP_HOST'];
        $this->host_dir = 'host/' . $this->host;
        $this->load_config();
    }

    // Setters and Getters

    public function get_label_email(): string {
        return $this->label_email;
    }

    public function set_label_email(string $label_email): void {
        $this->label_email = $label_email;
    }

    public function set_show_logo(bool $show): void {
        $this->show_logo = $show;
    }

    public function is_logo_visible(): bool {
        return $this->show_logo;
    }

    public function get_title_card_connexion(): string {
        return $this->title_card_connexion;
    }

    public function set_title_card_connexion(string $title_card_connexion): void {
        $this->title_card_connexion = $title_card_connexion;
    }

    public function get_title(): string {
        return $this->title;
    }

    public function set_title(string $title): void {
        $this->title = $title;
    }

    // Add CSS and JS

    public function add_css(string $css): void {
        $this->additional_css[] = $css;
    }

    public function add_js(string $js): void {
        $this->additional_js[] = $js;
    }

    public function get_additional_css(): array {
        return $this->additional_css;
    }

    public function get_additional_js(): array {
        return $this->additional_js;
    }

    // Add content before and after the section

    public function add_before_section_content(string $content): void {
        $this->before_section_content[] = $content;
    }

    public function get_before_section_content(): array {
        return $this->before_section_content;
    }

    public function add_after_section_content(string $content): void {
        $this->after_section_content[] = $content;
    }

    public function get_after_section_content(): array {
        return $this->after_section_content;
    }

    // Add content to body and footer

    public function add_bottom_section(string $content): void {
        $this->bottom_section[] = $content;
    }

    public function get_bottom_section(): array {
        return $this->bottom_section;
    }
    public function add_top_section(string $content): void {
        $this->top_section[] = $content;
    }

    public function get_top_section(): array {
        return $this->top_section;
    }

    public function add_footer_content(string $content): void {
        $this->footer_content[] = $content;
    }

    public function get_footer_content(): array {
        return $this->footer_content;
    }

    // Load CSS and JS and method

    public function load_css(): array {
        $css_files = [$this->default_css];
        if (file_exists($this->host_dir . '/style.replace.css')) {
            return [$this->host_dir . '/style.replace.css'];
        }
        if (file_exists($this->host_dir . '/style.css')) {
            $css_files[] = $this->host_dir . '/style.css';
        }
        return $css_files;
    }

    public function load_js(): string {
        if (file_exists($this->host_dir . '/script.js')) {
            return $this->host_dir . '/script.js';
        }
        return $this->default_js;
    }

    // favicon
    public function load_favicon(): string {
        $favicon_path = $this->host_dir . '/favicon.ico';
        if (file_exists($favicon_path) && pathinfo($favicon_path, PATHINFO_EXTENSION) === 'ico') {
            return $favicon_path;
        }
        return $this->default_favicon;
    }

    public function load_logo(): string {
        $extensions = ['png', 'jpg'];
        foreach ($extensions as $ext) {
            $logo_path = $this->host_dir . "/logo.$ext";
            if (file_exists($logo_path)) {
                return $logo_path;
            }
        }
        return 'assets/images/logo.jpg';
    }

    public function load_bg_style(): string {
        $extensions = ['jpg', 'jpeg', 'png'];
        foreach ($extensions as $ext) {
            $bg_image = $this->host_dir . "/bg.$ext";
            if (file_exists($bg_image)) {
                return "background-image: url('$bg_image'); background-size: cover; background-position: center;";
            }
        }
    
        return "";
    }

    public function load_config(): void {
        $config_path = $this->host_dir . '/config.json';
        if (file_exists($config_path)) {
            $config = json_decode(file_get_contents($config_path), true);
            if (isset($config['show_logo'])) {
                $this->set_show_logo($config['show_logo']);
            }
        }
    }    
    
}
?>