<?php get_template_part('templates/footer', 'image'); ?>
<footer class="content-info" role="contentinfo">
  <div class="container">
  	<div class="row">
      <?php if (!dynamic_sidebar('sidebar-footer')){ ?>
        <nav class="footer-navigation" role="navigation">
          <?php
            if (has_nav_menu('footer_navigation')) :
              wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => ''));
            endif;
          ?>
        </nav>
      <?php } else { ?>
      	<?php dynamic_sidebar('sidebar-footer'); ?>
      	<p>Copyright &copy;<?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
      <?php } ?>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>