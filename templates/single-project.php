<?php
$size = 'large';
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id, $size);
$image_url = $image_url[0];
$classes = array(
    'col-xs-12',
    'col-sm-6',
    'col-md-6',
    'col-lg-6',
 );
?>
  <article <?php post_class($classes); ?>>
    <a href="<?php the_permalink(); ?>" class="">
    <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail($size, array('class' => 'img-responsive'));
    }
    ?>
    </a>
    <a href="<?php the_permalink(); ?>" class="">
      <footer>
        <h2 class="entry-title"><?php the_title(); ?></h2>
      </footer>
    </a>
  </article>