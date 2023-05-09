<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package phamtung
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />


	<?php wp_head(); ?>
</head>
    <body>
        <!-- HEADER -->
        <div class="header">
            <div class="container g-0 h-100">
                <div class="header__wrap">
                    <div class="header__logo">
                        <a href="<?php echo "http://".$_SERVER['HTTP_HOST'];?>" class="link--format header__logo-link">
                            <img
                                class="header__logo-img"
                                src="https://wvvf.net/wp-content/uploads/2021/10/new-logo.png"
                                alt=""
                            />
                        </a>
                    </div>

                    <div class="header__info w-100">
                        <div class="header__brand-name">
                            WVVF - World Vovinam Federation
                        </div>
                        <div class="header__navbar">
                            <div class="navbar__mini" id="btnMenu">
                                <span class="navbar__mini__item-icon">
                                    <i class="las la-bars"></i>
                                </span>
                                <span class="navbar__mini__title">menu</span>
                            </div>
                            <nav id="site-navigation" class="main-navigation">
															<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'phamtung' ); ?></button>
															<?php
															wp_nav_menu(
																array(
																	'theme_location' => 'menu-1',
																	'menu_id'        => 'primary-menu',
																	'menu_class'=>'navbar text-light'
																)
															);

															// $menu_name = 'menu-1'; //menu slug
															// $locations = get_nav_menu_locations();
															// $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
															// $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
															// foreach ( $menuitems as $item ) {
															// 	echo( $item->title);
															// }
															

															?>
														</nav><!-- #site-navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>