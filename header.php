<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ) ?>">
<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <title><?php bloginfo( 'name' ) ?></title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="icon" href="./img/favicon.ico" type="image/x-icon">
  <?php wp_head(); ?>
</head>
<body>
  <div>
    <header>
      <h2><?php echo bloginfo('name') ?></h2>
      <nav>
        <div>
          <?php
            define( 'header_menu', array(
              'menu'                 => '',
              'container'            => '',
              'container_class'      => '',
              'container_id'         => '',
              'container_aria_label' => '',
              'menu_class'           => '',
              'menu_id'              => '',
              'echo'                 => true,
              'fallback_cb'          => 'wp_page_menu',
              'before'               => '',
              'after'                => '',
              'link_before'          => '',
              'link_after'           => '',
              'items_wrap'           => '<ul class="%2$s">%3$s</ul>',
              'item_spacing'         => 'preserve',
              'depth'                => 0,
              'walker'               => '',
              'theme_location'       => 'header-nav',
            ));

            wp_nav_menu( header_menu );
          ?>
        </div> <!-- End of ??? -->
        <div>
          <?php
            define( 'other_menu', array(
              'menu'                 => '',
              'container'            => '',
              'container_class'      => '',
              'container_id'         => '',
              'container_aria_label' => '',
              'menu_class'           => '',
              'menu_id'              => '',
              'echo'                 => true,
              'fallback_cb'          => 'wp_page_menu',
              'before'               => '',
              'after'                => '',
              'link_before'          => '',
              'link_after'           => '',
              'items_wrap'           => '<ul class="%2$s">%3$s</ul>',
              'item_spacing'         => 'preserve',
              'depth'                => 0,
              'walker'               => '',
              'theme_location'       => 'header-under',
            ));
            wp_nav_menu( other_menu );
          ?>
        </div>  <!-- End of ??? -->
      </nav>   <!-- End of ??? -->
    </header> <!-- End of ??? -->