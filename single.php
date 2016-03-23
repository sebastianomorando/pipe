<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to ">

<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<p class="postmetadata before"><?php _e('Posted by '); ?><a href="<?php get_the_author_link(); ?>"><?php the_author(); ?></a></p>
AAAAAAAA


<?php the_content('Read more...'); ?>

<div class="navigation">

<?php posts_nav_link(); ?>

</div><!-- .navigation -->

<?php comments_template(); ?>

</div> <!-- #post-n -->

<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>