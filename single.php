<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to 

<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<?php the_content('Read more...'); ?>

<p class="postmetadata before"><a href="<?php get_the_author_link(); ?>"><?php the_author(); ?></a></p>

<div class="navigation">

<?php posts_nav_link(); ?>

</div><!-- .navigation -->

<?php //comments_template(); ?>

</article> <!-- #post-n -->

<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<?php get_footer(); ?>