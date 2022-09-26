<?php



// if( have_rows('hc_items') ){
//   $i=0;
//   while ( have_rows('hc_items') ){
//     the_row(); $i++;
//
//     $hc_i_image = get_sub_field('hc_i_image');
//
//     echo '
//       <div style="background:url('.$hc_i_image['sizes']['max'].');"></div>';
//   }
// }

if( have_rows('flexible_content') ):
    while ( have_rows('flexible_content') ) : the_row();

      if( get_row_layout() == 'banner_block_#1_full_image' ):

        $bb1_main_title = get_sub_field('bb1_main_title');

    ?>
    <div class="container px-6">
      <div class="banner_block_1">

      <?php if($bb1_main_title != ''){ ?>
        <div class="sectionTitle">
          <h2><?php echo $bb1_main_title; ?></h2>
        </div>
      <?php } ?>

      <?php

        if( have_rows('bb1_items') ){
          $i=0;
          while ( have_rows('bb1_items') ){
            the_row(); $i++;

            $bb1_i_image = get_sub_field('bb1_i_image');
            $bb1_i_overtitle = get_sub_field('bb1_i_overtitle');
            $bb1_i_title = get_sub_field('bb1_i_title');
            $bb1_i_link = get_sub_field('bb1_i_link');

            echo '
            <div class="item">
              <a href="'.$bb1_i_link['url'].'" style="background-image:url('.wp_get_attachment_image_url($bb1_i_image['ID'], 'full', '').');" class="image" '.($bb1_i_link['target']=='_blank' ? 'target="_blank"' : '').'><a>
              '.($bb1_i_overtitle != '' ? '<h4>'.$bb1_i_overtitle.'</h4>' : '').'
              '.($bb1_i_title != '' ? '<h3><a href="'.$bb1_i_link['url'].'" '.($bb1_i_link['target']=='_blank' ? 'target="_blank"' : '').'>'.$bb1_i_title.'</a></h3>' : '').'
            </div>
            ';
          }
        }

      ?>

      </div>
    </div>

    <?php

      elseif( get_row_layout() == 'top_page' ):

        $tp_title = get_sub_field('tp_title');

    ?>
    <div class="top_page">
      <div class="container">
        <h1><?php echo $tp_title; ?></h1>
      </div>
    </div>

    <?php

      elseif( get_row_layout() == 'contact_form' ):

        $cf_title = get_sub_field('cf_title');
        $cf_subtitle = get_sub_field('cf_subtitle');
        $cf_form_shortcode = get_sub_field('cf_form_shortcode');

    ?>
    <div class="contact_form">
      <div class="container">

        <?php if($cf_title != ''){ ?>
          <div class="sectionTitle">
            <h2><?php echo $cf_title; ?></h2>
          </div>
        <?php } ?>
        <?php if($cf_subtitle != ''){ echo '<p>'.$cf_subtitle.'</p>'; } ?>

        <div class="cf">
          <?php echo do_shortcode($cf_form_shortcode); ?>
        </div>


      </div>
    </div>

    <?php

      elseif( get_row_layout() == 'three_column_block' ):

        $tcb_title = get_sub_field('tcb_title');
        $tcb_subtitle = get_sub_field('tcb_subtitle');
        $tcb_bg_color = get_sub_field('tcb_bg_color');
        $tcb_remove_topbottom_padding = get_sub_field('tcb_remove_topbottom_padding');

    ?>
    <div style="background-color:<?php echo $tcb_bg_color; ?>;" class="three_column_block <?php if(!$tcb_remove_topbottom_padding){ echo 'py-20'; } ?>">
      <div class="container px-6">

      <?php if($tcb_title != ''){ ?>
        <div class="sectionTitle">
          <h2><?php echo $tcb_title; ?></h2>
        </div>
      <?php } ?>
      <?php if($tcb_subtitle != ''){ echo '<p>'.$tcb_subtitle.'</p>'; } ?>

      <?php

        if( have_rows('tcb_items') ){
          $i=0;
          echo '<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10">';
          while ( have_rows('tcb_items') ){
            the_row(); $i++;

            $tcb_i_image = get_sub_field('tcb_i_image');
            $tcb_i_overtitle = get_sub_field('tcb_i_overtitle');
            $tcb_i_title = get_sub_field('tcb_i_title');
            $tcb_i_link = get_sub_field('tcb_i_link');

            echo '
            <div class="item">
              <a href="'.$tcb_i_link['url'].'" style="background-image:url('.wp_get_attachment_image_url($tcb_i_image['ID'], 'full', '').');" class="image" '.($tcb_i_link['target']=='_blank' ? 'target="_blank"' : '').'><a>
              '.($tcb_i_overtitle != '' ? '<h4>'.$tcb_i_overtitle.'</h4>' : '').'
              '.($tcb_i_title != '' ? '<h3><a href="'.$tcb_i_link['url'].'" '.($tcb_i_link['target']=='_blank' ? 'target="_blank"' : '').'>'.$tcb_i_title.'</a></h3>' : '').'
            </div>
            ';
          }
          echo '</div>';
        }

      ?>

      </div>
    </div>

    <?php

      elseif( get_row_layout() == '' ):

        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');

    ?>

    <?php

      elseif( get_row_layout() == '' ):

        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');

    ?>

    <?php

      elseif( get_row_layout() == '' ):

        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');

    ?>

    <?php

      elseif( get_row_layout() == '' ):

        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');

    ?>

    <?php

      elseif( get_row_layout() == '' ):

        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');
        // $ = get_sub_field('');

    ?>

    <?php

      endif;
    endwhile;

  else :

   // no layouts found

  endif;

?>