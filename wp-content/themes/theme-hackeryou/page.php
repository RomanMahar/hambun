<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <!-- puts in page title -->

         <h2><?php the_title(); ?></h2>
         <p><?php echo home_url(); ?></p>
         <p>the url for this page it <?php echo get_permalink(); ?></p>
         <p>the url for my blog post page is <?php echo get_permalink(4); ?></p>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>