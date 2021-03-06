<?php
/*
 Template Name: Template blank
 */
get_header(); 
get_template_part( 'header-border-bottom', 'index' ); 

?>
  <section id="main-page">
  <div class="container">
        <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'beauthemes' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
          </div><!-- .entry-content -->
        </article><!-- #post -->
      <?php endwhile; ?>
    

<?php get_footer(); ?>

