<?php
wp_nav_menu(array(
    'container_class' => 'nav primary',
    'container_id' => 'nav-primary',
    'theme_location' => 'nav_primary',
    'container' => 'nav',
    'items_wrap' => '<ul>%3$s</ul>'
  ));

  echo '<button class="nav-toggle" id="nav-toggle">Menu</button>';