<?php get_header(); ?>
<?php get_sidebar(); ?>

	<body>
  		<p id="logo">
  			<a href="<?php get_home_url(); ?>">
  				<img src="http://localhost/wordpress/wp-content/uploads/2015/04/logo.png" alt="logo">
  			</a>
  		</p>

  		<nav id="menue">
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
  		</nav>

		<div id="container">
			<section>
				<?php while (have_posts()) : the_post(); ?>
					<article>
	      		<h1>
	      			<?php the_title(); ?>
	      		</h1>
					
		     		<p>	
			      	<?php the_content(); ?>
		      	</p>
		      	<br />
		      	<br />
				<?php endwhile;?>
			</section>
		</div>


  			
			
	    		
  			
		<?php get_footer(); ?>
	</body>
</html>
