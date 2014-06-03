<?php
global $r;
$background_image = get_sub_field('section_background_image');
$background_color = get_sub_field('section_background_color');

  if( !empty($background_image) ):

    // vars
    $url = $background_image['url'];
    $title = $background_image['title'];
    $alt = $background_image['alt'];
    $caption = $background_image['caption'];

    // sizes
    $size = 'medium';
    $med = $background_image['sizes'][ $size ];
    $medwidth = $background_image['sizes'][ $size . '-width' ];
    $medheight = $background_image['sizes'][ $size . '-height' ];

endif; ?>
<style>
  .single-page-section-<?php echo $r; ?> {
  <?php if( !empty($background_image) ): ?>
      background-image: url(<?php echo $med; ?>);
  <?php endif; ?>
  <?php if( !empty($background_color) ): ?>
      background-color: <?php echo $background_color; ?>;
  <?php endif; ?>
  }
</style>