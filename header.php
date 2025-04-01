<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); // Carregar scripts e estilos necessários do tema ?>
</head>
<body <?php body_class(); ?>>
    <header class="header-eight">
        <div class="header-eight__topbar">
            <div class="auto-container">
                <ul class="header-eight__topbar__info">
                    <li>
                        <i class="flaticon-email-2"></i>
                        <a href="mailto:contato@versys.com">contato@versys.com</a>
                    </li>
                    <li>
                        <i class="flaticon-pin-1"></i>
                        Avenida Carlos Gomes 700, 606 - Boa Vista, Porto Alegre - RS | 90480-000
                    </li>
                </ul>
                <div class="header-eight__topbar__right">
                    <p>Bem-vindo a Versys consultoria</p>
                    <div class="header-eight__topbar__social">
                        <a href="#" class="fab fa-facebook-square"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-pinterest-p"></a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="mainmenu-eight main-header">
            <div class="auto-container">
                <div class="nav-outer mainmenu-eight__inner">
                    <div class="mainmenu-eight__left">
                        <a href="<?php echo home_url(); ?>">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-branca.avif"
                                width="134"
                                alt="Linoor - Digital Agency NextJS Template"
                            />
                        </a>
                        <div class="mobile-nav-toggler">
                            <span class="icon flaticon-menu-2"></span>
                            <span class="txt">Menu</span>
                        </div>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary_menu', // Defina essa localização no functions.php
                                'container' => false,
                                'menu_class' => 'navigation clearfix',
                                'fallback_cb' => false,
                            ));
                            ?>
                        </div>
                    </nav>
                    <div class="mainmenu-eight__right">
                        <div class="search-btn mainmenu-eight__search">
                            <button type="button" class="theme-btn search-toggler">
                                <span class="flaticon-magnifying-glass"></span>
                            </button>
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=555198987137" class="mainmenu-eight__call">
                            <span class="mainmenu-eight__call__icon">
                                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                            </span>
                            <span class="mainmenu-eight__call__text">
                                Entre em contato <br />WhatsApp:
                                <strong>(51) 9 9898-7137</strong>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <?php // Fim do cabeçalho ?>