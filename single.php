<?php get_header(); ?>

<div id="hero">
    <img src="<?php echo get_template_directory_uri();?>/../../uploads/pexels-jaymantri-5439.jpg" alt="banner">
</div>

<div class="wrapper">
<main>
<?php if(have_posts()) :?>
<?php while(have_posts()) : the_post() ;?>
<article class="posts">
<h1><?php the_title() ;?></h1>
<div class="meta">
<span><b>Posted By: </b><?php the_author(); ?></span>
<span><b>Posted On: </b><?php the_time('F j, Y g:i a'); ?></span>
</div>

<!-- end meta -->
<?php the_content() ; ?>
</article>
<?php endwhile;?>

<?php endif; ?>

<span class="next-previous">
<?php (previous_post_link()) ? '%link' : '';?> &nbsp; &nbsp; <?php (next_post_link()) ? '%link' : '';?>
</span>

<?php comments_template(); ?>
</main>

<?php get_sidebar() ;?> 


</div>
<!-- end wrapper -->

<?php get_footer(); ?>