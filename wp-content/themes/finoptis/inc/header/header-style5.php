<?php
    /*
    Header style 5   */

    global $finoptis_option;

    $sticky = $finoptis_option['off_sticky']; 
    $sticky_menu = ($sticky == 1) ? ' menu-sticky' : '';
    
    $header_width_meta = get_post_meta(get_the_ID(), 'header_width_custom', true);
    if ($header_width_meta != ''){
        $header_width = ( $header_width_meta == 'full' ) ? 'container-fluid': 'container';
    }else{
        $header_width = $finoptis_option['header-grid'];
        $header_width = ( $header_width == 'full' ) ? 'container-fluid': 'container';
    }
?>

<header id="rs-header" class="header-style5">
    <div class="header-inner<?php echo esc_attr($sticky_menu);?>">  
        <div class="toolbar-area">
            <div class="<?php echo esc_attr($header_width);?>">
                <div class="row-table">
                  <div class="col-cell">
                    <div class="toolbar-contact">
                      <ul class="rs-contact-info">
                        <?php if(!empty($finoptis_option['top-email'])) { ?>
                          <li class="rs-contact-email">
                              <i class="glyph-icon flaticon-email"></i>                   
                                <a href="mailto:<?php echo esc_attr($finoptis_option['top-email'])?>"><?php echo esc_html($finoptis_option['top-email'])?></a>                   
                          </li>
                        <?php } ?> 
                    </ul>
                    </div>
                  </div>
                  <div class="col-cell">
                    <div class="header-logo">
                      <?php  get_template_part('inc/header/logo'); ?>
                    </div>
                  </div>
                  <div class="col-cell">
                    <div class="toolbar-sl-share">
                      <ul class="clearfix">
                         <?php if(!empty($finoptis_option['phone'])) { ?>
                          <li class="rs-contact-phone">                                                       
                                <a href="tel:+<?php echo esc_attr(str_replace(" ","",($finoptis_option['phone'])))?>"> 
                                    <i class="fa flaticon-call"></i> 
                                    <?php echo esc_html($finoptis_option['phone']); ?>
                                </a>                   
                          </li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- Header Menu Start -->
        <?php
        $menu_bg = '';
        //check individual header 
        if(is_page() || is_single()){
            $menu_bg = get_post_meta(get_the_ID(), 'menu-type-bg', true);
        } elseif(is_home() && !is_front_page() || is_home() && is_front_page()){
            $menu_bg= get_post_meta(get_queried_object_id(), 'menu-type-bg', true);
        }
        $menu_bg_color = !empty($menu_bg) ? 'style=background:'.$menu_bg.'' : '';
        ?>
        <div class="menu-area" <?php echo wp_kses_post($menu_bg_color);?>>
            <div class="<?php echo esc_attr($header_width);?>">
                <div class="row">
                    <div class="col-sm-12 menu-responsive">  
                    <?php 
                    $offborder ="";
                    if(!empty($finoptis_option['off_canvas']) && !empty($finoptis_option['off_search'])):
                         $offborder="off-border-left"; 
                    endif;


                    if(!empty($finoptis_option['off_canvas'])): ?>
                    <div class="sidebarmenu-area text-right <?php echo esc_attr($offborder); ?>">
                          <?php 
                            //off convas here
                            get_template_part('inc/header/off-canvas');
                          ?> 
                    </div>
                    <?php endif; 


                    if(!empty($finoptis_option['off_search'])): ?>
                    <div class="sidebarmenu-search text-right">
                          <?php 
                            //include sticky search here
                            get_template_part('inc/header/search');
                          ?> 
                    </div>                    
                    <?php endif; 

                    //include Cart here
                    if(!empty($finoptis_option['wc_cart_icon'])) { ?>
                        <?php  get_template_part('inc/header/cart'); ?>
                    <?php } 


                       if(!empty($finoptis_option['off_canvas']) || !empty($finoptis_option['off_search'])):
                          $menu_right='nav-right-bar';
                        else:
                          $menu_right=''; 
                        endif;

                      if(is_page_template('page-single.php')){
                          require get_parent_theme_file_path('inc/header/menu-single.php'); 
                      }else{
                          require get_parent_theme_file_path('inc/header/menu.php'); 
                      }        
                      
                      ?>
                     
                    
                </div>
                </div>
            </div> 
        </div>
        <!-- Header Menu End -->
    </div>
    <?php 
      get_template_part( 'inc/breadcrumbs' );
    ?>
</header>
<!-- End Slider area  -->
<div>
  <?php  
    get_template_part('inc/header/slider/slider');
   ?>
</div>