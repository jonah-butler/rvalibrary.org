<?php

$left_intro_image          =   get_field('left_intro_image');
$intro_image               =   get_field('intro_image');
$add_section_navigation    =   get_field('add_section_navigation');
$intro_header_text         =   get_field('intro_header_text');
$intro_section_content     =   get_field('intro_section_content');




$list_of_groups = [];
if(have_rows('group_repeater')){
  $i = 0;
  while ( have_rows('group_repeater') ) : the_row();
  $list_of_groups[$i] = ['group_title'=>get_sub_field('group_title'),
                          ];
  $i++;
endwhile;//group_repeater
}//group_repeater endif









?>


<div class="intro_div_holder_shadow" style="background-color: #022437;">
  <div class="container">
      <div class="row">
        <div class="col-xs-12 block_colored tiles_left_text">
          <div class="discovery_intro_container">
            <div class="discovery_browse">
                <h3 class="h3_hard_coded_heading" style="color: #fdbe12;"><?php echo $intro_header_text;?></h3>
                <!-- <span class="underline left"></span> -->
                <?php if($add_section_navigation):?>
                  <ul class="discovery_navigation fa-ul">
                    <?php for ($i = 0; $i < count($list_of_groups); $i++):?>

                      <li>
                        <a href="#<?php echo sanitize_title($list_of_groups[$i]['group_title']);?>">
                          <i class="discovery_bullet_icon fa-li fas fa-chevron-right"></i><h5 style="margin-left: -10px;"><?php echo $list_of_groups[$i]['group_title'];?></h5>
                        </a>
                      </li>
                    <?php endfor; // list_of_groups?>
                  </ul>
               <?php endif;?>

              <?php echo $intro_section_content;?>

            </div>
          </div><!-- block_section-->
        </div>
      </div><!--row-->
  </div><!--container-fluid-->
</div>