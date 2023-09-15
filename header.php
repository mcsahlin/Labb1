<?php 
$menu = wp_get_nav_menu_items('main-menu');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Labb 1</title>
  <?php wp_head(); ?>
</head>

<body>

  <div id="wrap">

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-xs-8 col-sm-6">
            <a class="logo" href="index.html">Labb 1</a>
          </div>
          <div class="col-sm-6 hidden-xs">
            <form id="searchform" class="searchform">
              <div>
                <label class="screen-reader-text">Sök efter:</label>
                <input type="text" />
                <input type="submit" value="Sök" />
              </div>
            </form>
          </div>
          <div class="col-xs-4 text-right visible-xs">
            <div class="mobile-menu-wrap">
              <i class="fa fa-search"></i>
              <i class="fa fa-bars menu-icon"></i>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="mobile-search">
      <form id="searchform" class="searchform">
        <div>
          <label class="screen-reader-text">Sök efter:</label>
          <input type="text" />
          <input type="submit" value="Sök" />
        </div>
      </form>
    </div>
    
    <?php
    wp_nav_menu(array(
      'theme_location' => 'primary_menu',
      'container' => 'nav',
      'container_id' => 'nav',
      'menu_class' => 'menu',
      'items_wrap' => '<div class="container"><div class="row"><div class="col-xs-12"><ul class="%2$s">%3$s</ul></div></div></div>',
      'add_li_class' => is_page() ? 'current-menu-item' : '', 
    ));
?>