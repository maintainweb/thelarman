<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
  </article>
<?php endwhile; ?>
<div data-spy="affix" data-offset-top="600" class="arrow-to-top"><a href="#top"><i class="fa fa-5x fa-angle-up"></i></a></div>