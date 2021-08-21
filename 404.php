<?php
get_header();

?>
<div id="hero">
    <img src="<?php echo get_template_directory_uri();?>/../../uploads/pexels-jaymantri-5439.jpg" alt="banner">
</div>
<div class="wrapper">

<main>
<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'final' ); ?></h2>
<p><?php _e( 'It looks like nothing was found at this location. Maybe try another search?', 'final' ); ?></p>
<?php get_search_form(); ?>
<h3>Please feel free to browse through our pages!</h3>
<?php wp_list_pages() ;?>
</main>

<aside>
This is 404 page
</aside>

</div>
<!-- end wrapper -->
<?php
get_footer();

?>