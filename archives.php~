<?php 
/*
 * Template Name: Archives
 */
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>

	<body>
  		<p id="logo">
  			<a href="./">
  				<img src="./bilder/logo.png" alt="logo">
  			</a>
  		</p>

  		<nav id="menue">
    		<ul>
      		<li>
      			<a href="index.php" id="menueSelected">Startseite</a>
      		</li>

      		<li>
        			<a href="./kategorien/">Kategorien</a>

        			<ul>
          			<li>
            			<a href="./kategorien/it/">IT</a>
          			</li>

          			<li>
            			<a href="./kategorien/politik/">Politik</a>
          			</li>

          			<li>
            			<a href="./kategorien/sonstiges/">Sonstiges</a>
          			</li>
        			</ul>
      		</li>
    		</ul>
  		</nav>

	<?php if (have_posts()) : ?>
	<?php while(have_posts()) : the_post() ?>
  		<div id="container">
  			<section>
				<article>
	      		<h1>
	      			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
	      			<!-- Wo bin ich hier? -->
	      		</h1>
			      <?php the_content(); ?>
	    		</article>
  			</section>
  		</div>
  		<?php endwhile; ?>
  		<?php else : ?>
  			<h2>Es wurden keine Artikel gefunden.</h2>
		<?php endif; ?>  			
		<?php get_footer(); ?>
	</body>
</html>