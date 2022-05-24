<?php get_header(); ?>

    <!-- content -->

    <?php while(have_posts()) : the_post();?>

    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="gpu">
    
    <?php endwhile; ?>

    <?php get_template_part('includes/contact') ?>

    <!-- content -->

<?php get_footer(); ?>