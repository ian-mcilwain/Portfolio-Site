<?php get_header(); ?>

<div class="main singlePortfolioMain">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
        <h2><?php the_title(); ?></h2>
        <div class="images">
        	<?php while(has_sub_field('images')) : ?>
        		<figure>
        			<?php $image = get_sub_field('image'); ?>
        			 <img src="<?php echo $image['sizes']['full']; ?>" alt="">
        			<figcaption><?php the_sub_field('caption') ?></figcaption>
        		</figure>
        	<?php endwhile; ?>
        </div>


        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
  <?php include('sidebar-portfolio.php'); ?>
</div> <!-- /.main -->

<?php get_footer(); ?>