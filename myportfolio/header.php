<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="l-header">
  <div class="c-header-description"><?php bloginfo( 'description' ); ?></div>
  <a class="c-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="c-logo__image">
      <img src="<?php echo esc_url( get_theme_file_uri( 'images/logo.png' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>">
    </div>
    <div class="c-logo__text"><?php bloginfo( 'name' ); ?></div>
  </a>
  <?php wp_nav_menu(
    array(
      'theme_location'  => 'globalnav',
      'container'       => 'div',
      'container_class' => 'c-global-nav',
    )
  ); ?>
</header>
