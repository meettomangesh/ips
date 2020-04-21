<?php
$icon_css = $title_css = $title_spacing = $padding_icon = '';




if ( $title_color != '' ) {    
     $title_css  .= "color: {$title_color};";  
}

if ( $spacing_top != '' ) {  
    $title_spacing .= "padding-top: {$spacing_top}px;";  
}

if ( $spacing_bottom != '' ) {
    $title_spacing .= "margin-bottom: {$spacing_bottom}px;";
}

if ( $title_size != '' ) {
    $title_size   = (int) $title_size;
    $title_css   .= "font-size: {$title_size}px;";
}

?>
<div class="rs-services">
	<div class="service-inner services-style-2 services-<?php echo $align; ?> <?php echo $css_class; ?> <?php echo $css_class_custom; ?>" data-icon-hover="<?php echo $title_hover;?>" data-icon-color="<?php echo $title_color;?>">
		<div class="services-wrap"> 
			<div class="services-item">
				<div class="services-icon">
					<?php echo $imageClass; ?>
				</div>

				<div class="services-desc" <?php echo $desc_bg; ?>>	
					<h2 class="services-title services-title2"><a <?php echo $attributes; ?> style="<?php echo $title_css;?>" ><?php echo $title; ?></a></h2>
					<p <?php echo $desc_color; ?> ><?php echo $atts['content']; ?></p>
				</div>		
			</div>	
		</div>
	</div>
</div>