<?php
  $footer_height = get_field('footer_height');
  if( empty($footer_height) ){
    $footer_height = get_field('default_footer_height', 'options');
  }
  $footer_color = get_field('footer_color');
  if( empty($footer_color) ){
    $footer_color = get_field('default_footer_color', 'options');
  }

  $footer_background_image = get_field('footer_background_image');
  if( empty($footer_background_image) ){
    $footer_background_image = get_field('default_footer_background_image', 'options');
  }
  // vars
  $footer_background_image_url = $footer_background_image['url'];
  $footer_background_image_title = $footer_background_image['title'];
  $footer_background_image_alt = $footer_background_image['alt'];
  $footer_background_image_caption = $footer_background_image['caption'];

  // size
  $size = 'header-image';
  $footerback = $footer_background_image['sizes'][ $size ];
  $footerbackwidth = $footer_background_image['sizes'][ $size . '-width' ];
  $footerbackheight = $footer_background_image['sizes'][ $size . '-height' ];

 ?>

<style>
  footer.content-info {
    background-image: url(<?php echo $footerback; ?>);
    <?php if( !empty($footer_color) ){ ?>background-color: <?php echo $footer_color; ?>;<?php } ?>
    <?php if( !empty($footer_height) ){ ?>height: <?php echo $footer_height; ?>px;<?php } ?>
  }
</style>