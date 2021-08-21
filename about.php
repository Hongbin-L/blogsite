<?php 
get_header(); 
/* Template Name: About Page */
?>

<div id="hero">
    <img src="<?php echo get_template_directory_uri();?>/../../uploads/pexels-jaymantri-5439.jpg" alt="banner">
</div>

<div class="wrapper">
<main>
<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail(); ?>
<?php endif;?>

<?php while(have_posts()) : the_post() ;?>

<?php the_content() ; ?>
<?php endwhile;?>


</main>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'sidebar-about' ); ?>
</aside><!-- #secondary -->

</div>
<!-- end wrapper -->

<?php get_footer(); ?>