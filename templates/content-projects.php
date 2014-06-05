<?php
$args = array(
  'post_type' => 'project',
  'posts_per_page'  =>  14,
  'orderby' =>  'menu_order',
  'order' =>  'ASC'
);
$project_query = new WP_Query( $args ); ?>
<h1>My Projects</h1>
<?php while ($project_query->have_posts()) : $project_query->the_post(); ?>
  <?php get_template_part('templates/single', 'project'); ?>
<?php endwhile; ?>