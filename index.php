<?php
get_header();

if ( have_posts() ) :

  /* Start the Loop */
  while ( have_posts() ) : the_post(); ?>
  <div class="blog-page">

  <a href="<?php the_permalink(); ?>"><h1>working? <?php the_title(); ?></h1> </a>
  <p>
    <?php the_content();?>
  </p>
  <hr />


  </div>
<?php  endwhile;


else :

  echo "busted";

endif;
get_footer();

?>
