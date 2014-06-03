<?php get_template_part('templates/footer', 'image'); ?>
<footer class="content-info" role="contentinfo">
  <div class="container">
  	<div class="row">
      <?php if (! dynamic_sidebar('sidebar-footer')){ ?>
        <p>Hello</p>
      <?php } else { ?>
    	<?php dynamic_sidebar('sidebar-footer'); ?>
    	<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
      <?php } ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
