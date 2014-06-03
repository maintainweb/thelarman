<?php
  $image = get_sub_field('image');

        if( !empty($image) ):

          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          // sizes
          $size_thumbnail = 'thumbnail';
          $large = $image['sizes'][ $size_thumbnail ];
          $width = $image['sizes'][ $size_thumbnail . '-width' ];
          $height = $image['sizes'][ $size_thumbnail . '-height' ];

          $size_medium = 'medium';
          $large = $image['sizes'][ $size_medium ];
          $width = $image['sizes'][ $size_medium . '-width' ];
          $height = $image['sizes'][ $size_medium . '-height' ];

          $size_large = 'large';
          $large = $image['sizes'][ $size_large ];
          $width = $image['sizes'][ $size_large . '-width' ];
          $height = $image['sizes'][ $size_large . '-height' ];

?>

<img class="img-responsive" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" src="<?php echo $large; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" >

<?php endif; ?>