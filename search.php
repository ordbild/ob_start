<?php get_header(); ?>

	<header class="page-header">
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php else : ?>
			<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
		<?php endif; ?>
	</header><!-- .page-header -->
  
	<?php if ( have_posts() ) : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
		
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
  	    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_permalink(); ?></a>
        <?php the_excerpt(); ?>
       
      <article>
       
		<?php endwhile; ?>

	<?php else : ?>

		<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'ob_start' ); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>



<?php get_footer(); ?>