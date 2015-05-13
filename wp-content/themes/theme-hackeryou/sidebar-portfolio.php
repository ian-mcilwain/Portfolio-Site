<div class="sidebar">
	<ul class="xoxo">
		<h2>Technologies Used</h2>
		  <div class="sidebarTechnologies clearfix">

		  <?php $tech= get_the_terms($post->ID, 'technologies', '', ''); ?>

			<?php foreach ($tech as $tec ) {
				echo "<span>";
				echo $tec->name;
				echo "</span>";

			} ?>
		  </div>
	</ul>

		<a class="webAddress"  target="_blank" href="<?php the_field('web_address'); ?>"><h2>View it Live!</h2></a>
		<?php  dynamic_sidebar( 'portfolio-widget-area' ); ?>


</div>
	
