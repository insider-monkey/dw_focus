<?php  
/**
 * The Sidebar containing the widgets for blog page.
 */
?>

<?php if( is_active_sidebar( 'dw_focus_blog_sidebar' ) ) { ?>
    <div id="secondary" class="widget-area span3" role="complementary">
    <?php dynamic_sidebar('dw_focus_blog_sidebar'); ?>
    </div>
<?php } else { ?>
        <?php get_sidebar(); ?>
<?php } ?>