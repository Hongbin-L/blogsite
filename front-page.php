<?php 
get_header(); 
/* Template Name: Front Page */
?>

<div id="hero">
    <img src="<?php echo get_template_directory_uri();?>/../../uploads/pexels-photo-2202012.jpg" alt="banner">
</div>

<div class="wrapper">
<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail(); ?>
<?php endif;?>

<?php while(have_posts()) : the_post() ;?>

<?php the_content() ; ?>
<?php endwhile;?>

</div>
<!-- end wrapper -->

<?php get_footer(); ?>