<?php
  $header_height = get_field('header_height');
  if( empty($header_height) ){
    $header_height = get_field('default_header_height', 'options');
  }
  $header_color = get_field('header_color');
  if( empty($header_color) ){
    $header_color = get_field('default_header_color', 'options');
  }

  $primarycolor = get_field('primary_color', 'options');
  $secondarycolor = get_field('secondary_color', 'options');
  $tertiarycolor = get_field('tertiary_color', 'options');

  $lead_top = get_field('lead_top');
  $custom_page_title = get_field('page_title');
  $lead_bottom = get_field('lead_bottom');

  $header_background_image = get_field('header_background_image');
  if( empty($header_background_image) ){
    $header_background_image = get_field('default_header_background_image', 'options');
  }
  // vars
  $header_background_image_url = $header_background_image['url'];
  $header_background_image_title = $header_background_image['title'];
  $header_background_image_alt = $header_background_image['alt'];
  $header_background_image_caption = $header_background_image['caption'];

  // size
  $size = 'header-image';
  $headerback = $header_background_image['sizes'][ $size ];
  $headerbackwidth = $header_background_image['sizes'][ $size . '-width' ];
  $headerbackheight = $header_background_image['sizes'][ $size . '-height' ];

  $header_image = get_field('header_image');
  // vars
  if( !empty($header_image) ){
  $header_image_url = $header_image['url'];
  $header_image_title = $header_image['title'];
  $header_image_alt = $header_image['alt'];
  $header_image_caption = $header_image['caption'];

  // size
  $size = 'large';
  $headerimage = $header_image['sizes'][ $size ];
  $headerimagewidth = $header_image['sizes'][ $size . '-width' ];
  $headerimageheight = $header_image['sizes'][ $size . '-height' ];
  }
 ?>

    <div id="header-background-image" class="">
      <div class="header-inner">
          <style>
           #header-background-image {
            background-image: url(<?php echo $headerback; ?>);
            <?php if( !empty($header_color) ){ ?>background-color: <?php echo $header_color; ?>;<?php } ?>
            <?php if( !empty($header_height) ){ ?>height: <?php echo $header_height; ?>px;<?php } ?>
            }
            #header-background-image h1 {
              <?php if( !empty($primarycolor) ){ ?>color: <?php echo $primarycolor; ?>;<?php } ?>
            }
           #header-image {

            }
          </style>
          <?php if( !empty($lead_top) ){ ?><p class="lead lead-top"><?php echo $lead_top; ?></p><?php } ?>
          <h1><?php if( empty($custom_page_title) ){ ?><?php echo roots_title(); ?><?php } else { echo $custom_page_title; } ?></h1>
          <?php if( !empty($lead_bottom) ){ ?><p class="lead lead-bottom"><?php echo $lead_bottom; ?></p><?php } ?>
      </div>
    </div>
    <?php if( !empty($header_image) ){ ?>
    <div id="header-image" class="">
      <img class="img-responsive" width="<?php echo $headerimagewidth; ?>px" height="<?php echo $headerimageheight; ?>px" border="0" alt="<?php echo $header_image_alt; ?>" title="<?php echo $header_image_title; ?>" src="<?php echo $headerimage; ?>">
    </div>
    <?php } ?>
