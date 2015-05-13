<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
        <!-- <div class="portfolioItem"> -->
        <h2><?php the_title(); ?></h2>
        <p><strong>Client Name: </strong><?php the_field('client_name') ?></p>
        <!-- </div> -->
        
    
        <?php the_terms($post->ID, 'technologies', '', ''); ?><i class="fa fa-home"></i>

        <div class="images">
        	<?php while(has_sub_field('images')) : ?>
        		<figure>
        			<?php $image = get_sub_field('image'); ?>
        			 <img src="<?php echo $image['sizes']['square']; ?>" alt="">
        			<figcaption><?php the_sub_field('caption') ?></figcaption>
        		</figure>
        	<?php endwhile; ?>
        </div>


        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>