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
		<!--
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
		-->
  		</nav>

	<?php if (have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
  		<div id="container">
  			<section>
				<article>
	      		<h1>
	      			<?php the_title(); ?>
	      			<!-- Wo bin ich hier? -->
	      		</h1>
					
		     		<p>
				   <!--   Diese Webseite stellt verschiedene Themen und Meinungen
				      vor. Sie sollen sich beim Lesen eine eigene Meinung zu den
			   	   verschiedenen Themen bilden und diese dann mit der restlichen
			      	Community teilen. Es werden interessante Diskussionen
			      	zustande kommen.
			      	
			      	<br />
			      	<br />
			      	
			      	<i>
			      		Probieren Sie es aus!
			      	</i> -->
			      	<?php the_content(); ?>
		      	</p>
		      	
		      	<br />
		      	<br />
					<!--
		     		<h1>
		        		Wie kann ich mitmachen?
		      	</h1>
		
			      <p>
				      Es ist ganz einfach mit anderen Personen zu interagieren:
				      Einfach im Menü unter "Kategorien" eine Kategorie und einen
				      interessanten Artikel wählen; schon sehen Sie die Kommentare
				      der anderen Benutzer und können <i class="keyword">komplett
				      anonym, kostenlos und ohne Anmeldung</i> eigene Ideen in die
				      Konversation mit einfliessen lassen.
				   </p>
				   <br />
			      <br />
		
		      	<h1>
		        		Weitere Informationen
		      	</h1>
		
	      		<p>
	      			Weitere Informationen können im <a href="./index.php?pid=99">FAQ-Bereich</a> 
	      			nachgelesen werden.
	      		</p> -->
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
