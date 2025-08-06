<?php 
// Template Name: Gallery
?>

<?php get_header(); ?>

<ul>
	<?php $galleryConstant = "k_gallery_"; $i = 1; while ($i <= 60) : ?>
	<li class="img-wrapper">
        <img loading="lazy" 
            srcset="<?php print_r(get_field($galleryConstant . $i)['sizes']['medium']); 
            ?> <?php print_r(get_field($galleryConstant . $i)['sizes']['medium-width']); 
            ?>w, <?php print_r(get_field($galleryConstant . $i)['sizes']['medium_large']); 
            ?> <?php print_r(get_field($galleryConstant . $i)['sizes']['medium_large-width']); 
            ?>w, <?php print_r(get_field($galleryConstant . $i)['sizes']['large']); 
            ?> <?php print_r(get_field($galleryConstant . $i)['sizes']['large-width']); 
            ?>w, <?php print_r(get_field($galleryConstant . $i)['sizes']['1536x1536']); 
            ?> <?php print_r(get_field($galleryConstant . $i)['sizes']['1536x1536-width']); 
            ?>w, <?php print_r(get_field($galleryConstant . $i)['sizes']['2048x2048']); 
            ?> <?php print_r(get_field($galleryConstant . $i)['sizes']['2048x2048-width']); 
            ?>w," src="<?php print_r(get_field($galleryConstant . $i)['url']); 
            ?>"
        >
	</li>
	<?php $i++; endwhile ?>
</ul>

<style>
    ul {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        list-style: none;
        padding: 10px;
    }
        
    img {
        max-width: 100%;
    }
    
    li.img-wrapper {
        display: inline-flex;
        flex-grow: 1;
    }
    
    li.img-wrapper:first-child, 
    li.img-wrapper:nth-child(2), 
    li.img-wrapper:nth-child(n+39):nth-child(-n+42) {
        flex-basis: 41%;			
    }
    
    li.img-wrapper:nth-child(n+3):nth-child(-n+5), 
    li.img-wrapper:nth-child(n+10):nth-child(-n+18), 
    li.img-wrapper:nth-child(n+23):nth-child(-n+31), 
    li.img-wrapper:nth-child(n+36):nth-child(-n+38), 
    li.img-wrapper:nth-child(n+43):nth-child(-n+45), 
    li.img-wrapper:nth-child(n+54):nth-child(-n+56) {
        flex-basis: 31%;
    }
    
    li.img-wrapper:nth-child(n+6):nth-child(-n+9), 
    li.img-wrapper:nth-child(n+19):nth-child(-n+22), 
    li.img-wrapper:nth-child(n+32):nth-child(-n+35), 
    li.img-wrapper:nth-child(n+46):nth-child(-n+53), 
    li.img-wrapper:nth-child(n+57):nth-child(-n+60) {
        flex-basis: 23%;
    }
    
    @media (max-width: 821px) {
        ul {
            padding: 5px;
            gap: 5px;	
        }
    }	
</style>	
				
<?php get_footer(); ?>