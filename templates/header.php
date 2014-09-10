<div class="container-desktop-top container hidden-xs">
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_bloginfo('url') ?>/assets/img/less-logo_208x100.jpg" alt="LESS 17" width="208" height="100" />
    </a>

    <div class="pull-right header-right">
        <p class="phone-number"><a href="tel:1-403-228-9199">1.403.228.9199</a></p>
        <p class="address">930 17TH AVE SW</p>
        <p class="address">CALGARY, AB</p>
    </div>
</div>

<header class="banner navbar navbar-default" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand visible-xs-block" href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_bloginfo('url') ?>/assets/img/less-logo_208x100.jpg" alt="LESS 17" width="80"/>
      </a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
