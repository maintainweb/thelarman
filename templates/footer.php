<?php get_template_part('templates/footer', 'image'); ?>
<footer class="content-info" role="contentinfo">
  <div class="container">
  	<div class="row">
    <?php if( get_field('use_widgets', 'options') ) { ?>
      <?php dynamic_sidebar('sidebar-footer'); ?>
    <?php } else { ?>
        <section class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <?php if( get_field('name', 'options') ) { ?><p class="name"><?php echo the_field('name', 'options');?></p><?php } ?>
          <?php if( get_field('title', 'options') ) { ?><p class="title"><?php echo the_field('title', 'options');?></p><?php } ?>
          <p>Copyright &copy;<?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
        </section>
        <section class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <nav class="footer-navigation" role="navigation">
            <?php
              if (has_nav_menu('footer_navigation')) :
                wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => ''));
              endif;
            ?>
          </nav>
        </section>
        <section class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <p class="contact-me">Contact Me</p>
          <?php if( get_field('email', 'options') ) { ?><p class="email"><a href="mailto:<?php echo the_field('email', 'options');?>"><?php echo the_field('email', 'options');?></a></p><?php } ?>
          <?php if( get_field('phone', 'options') ) { ?><p class="phone"><a href="tel:<?php echo the_field('phone', 'options');?>"><?php echo the_field('phone', 'options');?></a></p><?php } ?>
        </section>
      <?php } ?>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>