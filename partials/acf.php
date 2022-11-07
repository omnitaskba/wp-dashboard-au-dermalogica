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
        $cf_is_private = get_sub_field('cf_is_private');

    ?>
    <div class="contact_form">
      <div class="container">

        <?php 
          if(!is_user_logged_in() && $cf_is_private ) {
            echo lockedContent($title, $accordion=true);
          }else{
        ?>
          <?php if($cf_title != ''){ ?>
            <div class="sectionTitle">
              <h2><?php echo $cf_title; ?></h2>
            </div>
          <?php } ?>
          <?php if($cf_subtitle != ''){ echo '<p>'.$cf_subtitle.'</p>'; } ?>

          <div class="cf">
            <?php echo do_shortcode($cf_form_shortcode); ?>
          </div>
        <?php } ?>

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

      elseif( get_row_layout() == 'three_column_block_resources' ):

        $tcbr_title = get_sub_field('tcbr_title');
        $tcbr_remove_topbottom_padding = get_sub_field('tcb_remove_topbottom_padding');

    ?>
    <div class="three_column_block_resourcces <?php if(!$tcbr_remove_topbottom_padding){ echo 'py-20'; } ?>">
      <div class="container px-6">

      <?php if($tcbr_title != ''){ ?>
        <div class="sectionTitle">
          <h2><?php echo $tcbr_title; ?></h2>
        </div>
      <?php } ?>

      <?php

        if( have_rows('tcbr_items') ){
          $i=0;
          echo '<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10">';
          while ( have_rows('tcbr_items') ){
            the_row(); $i++;

            $tcbr_i_image = get_sub_field('tcbr_i_image');
            $tcbr_i_description = get_sub_field('tcbr_i_description');
            $tcbr_i_title = get_sub_field('tcbr_i_title');
            $tcbr_i_link = get_sub_field('tcbr_i_link');

            echo '
            <div class="item">
              <div>
                <a href="'.$tcbr_i_link['url'].'" style="background-image:url('.wp_get_attachment_image_url($tcbr_i_image['ID'], 'full', '').');" class="image" '.($tcbr_i_link['target']=='_blank' ? 'target="_blank"' : '').'><a>
                '.($tcbr_i_title != '' ? '<h3><a href="'.$tcbr_i_link['url'].'" '.($tcbr_i_link['target']=='_blank' ? 'target="_blank"' : '').'>'.$tcbr_i_title.'</a></h3>' : '').'
                '.($tcbr_i_description != '' ? '<p>'.$tcbr_i_description.'</p>' : '').'
              </div>
              '.($tcbr_i_link ? '<a href="'.$tcbr_i_link['url'].'" '.($tcbr_i_link['target']=='_blank' ? 'target="_blank"' : '').' class="button">'.$tcbr_i_title.'</a>' : '').'
            </div>
            ';
          }
          echo '</div>';
        }

      ?>

      </div>
    </div>

    <?php

      elseif( get_row_layout() == 'hero_cta' ):

        $hcta_image = get_sub_field('hcta_image');
        $hcta_title = get_sub_field('hcta_title');
        $hcta_description = get_sub_field('hcta_description');

    ?>
    <div class="hero_cta">
        <div class="container">
          <div class="flex flex-col lg:flex-row justify-between items-center">
            <div class="w-full lg:w-1/3">
              <?php echo wp_get_attachment_image($hcta_image['ID'], 'large', ''); ?>
            </div>
            <div class="w-full lg:w-2/3">
              <div class="lg:px-10 py-6">
                <h2><?php echo $hcta_title; ?></h2>
                <p><?php echo $hcta_description; ?></p>
              </div>
            </div>
          </div>
        </div>
    </div>

    <?php

      elseif( get_row_layout() == 'hero_carousel' ):

        $hc_full_width = get_sub_field('hc_full_width');
        $rand = mt_rand(000,999);

    ?>
    <div class="hero_carousel <?php if(!$hc_full_width){ echo 'container'; } ?>" data-id="hc<?php echo $rand; ?>">
      <div id="hc<?php echo $rand; ?>">
        <?php

          if( have_rows('hc_items') ){
            $i=0;
            while ( have_rows('hc_items') ){
              the_row(); $i++;

              $hc_i_image = get_sub_field('hc_i_image');
              $hc_i_title = get_sub_field('hc_i_title');
              $hc_i_subtitle = get_sub_field('hc_i_subtitle');
              $hc_i_button = get_sub_field('hc_i_button');

              echo '
              <div class="item" style="background-image:url('.wp_get_attachment_image_url($hc_i_image['ID'], 'full', '').');">
              <div class="container">
                  <div class="max-w-xl '.($hc_full_width ? '' : 'px-4').'">
                  '.($hc_i_title != '' ? '<h2>'.$hc_i_title.'</h2>' : '').'
                  '.($hc_i_subtitle != '' ? '<p>'.$hc_i_subtitle.'</p>' : '').'
                  '.($hc_i_button ? '<div class="flex items-start mt-6"><a href="'.$hc_i_button['url'].'" '.($hc_i_button['target']=='_blank' ? 'target="_blank"' : '').' class="button">'.$hc_i_button['title'].'</a></div>' : '').'
                  </div>
              </div>
              </div>
              ';
            }
          }

        ?>
      </div>
      <button type="button" id="prev_hc<?php echo $rand; ?>" class="icon-chevron-left"></button>
      <button type="button" id="next_hc<?php echo $rand; ?>" class="icon-chevron-right"></button>
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

      endif;
    endwhile;

  else :

   // no layouts found

  endif;

?>