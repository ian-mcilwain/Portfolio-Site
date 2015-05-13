<?php

/*
	Template Name: Home Page
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      
    
      <?php the_content(); ?>
      

    <?php endwhile; // end the loop?>
    <div id="aboutMe" class="aboutMe clearfix">


        <h2>About Me</h2>
    
        <img src="<?php echo get_template_directory_uri(); ?>/images/headshot.jpg" alt="A picture of me">

        <p>I am a front end developer who builds fun and challenging stuff for the web.</p>
        <p>I am relatively new to the development world, but lucked out and found HackerYou.  While at HackerYou, I had the pleasure of learning HTML5, CSS, SASS, JavaScript, jQuery, Github, WordPress, and a variety of methods of pre-processing. </p>
        <p>This site is dedicated to the cool things that I built while in school.  </p>
        <p>Check out some of my work below!</p>
    </div> <!-- about me ends here -->





    <?php $latestPosts = new WP_Query(array(
    	'post_type' => 'portfolio', // we only want blog posts
    	'posts_per_page' => 6
    )); ?>
    <div class="portfolioItems" id="portfolio">
    <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>
		<div class="portfolioItem">
    <?php
    
    $thumb_id = get_post_thumbnail_id();
    
    $thumb_url = wp_get_attachment_image_src($thumb_id,'portfolioImage', true);
    
    
    ?>
    <a href="<?php echo get_permalink(); ?> "><img src="<?php  echo $thumb_url[0];?> " alt=""></a>
    <h2> <?php the_title(); ?></h2>
		<?php the_excerpt(); ?>
      <div class="technologies"><?php $tech= get_the_terms($post->ID, 'technologies', '', ''); ?>

            <?php foreach ($tech as $tec ) {
                echo "<span>";
                echo $tec->name;
                echo "</span>";

            } ?></div>
    <a class="webAddress"  target="_blank" href="<?php the_field('web_address'); ?>">View it Live!</a>
    
    </div> <!-- portfolioItem ends here -->
    <?php endwhile; //end custom loop ?> 
    </div> <!-- portfolioItems ends here -->

    <?php wp_reset_postdata(); // return env back to regular scheduled programming ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>