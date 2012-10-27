<?php get_header(); ?>
			
			<div id="content">

        <?php get_sidebar(); ?>

					<div id="main" class="clearfix m-all t2 d2-d4" role="main">
						<div class="blog-wrap">
				    	<div class="blog">


						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix single'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<header class="article-header">
							
									<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
							
									<p class="byline vcard">
						        Published by
						        <span class="author"><?php the_author(); ?></span>
						        <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time>
						        <br>Topics:
						        <?php the_category(', '); ?></p>
						
								</header> <!-- end article header -->
					
								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->

                <nav class="nav-blog">
                  <span class="nav-previous"><?php previous_post_link( '%link', __( '<span>&larr;</span> <i>Previous</i>', 'twentyeleven' ) ); ?></span>
                  <span class="nav-next"><?php next_post_link( '%link', __( '<i>Next</i> <span>&rarr;</span>', 'twentyeleven' ) ); ?></span>
                </nav>
                
                <ul class="share-links">
                  <li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="Share this post on Facebook" target="_blank">
                  <i class="icon-facebook-sign"></i>
                  <b>Share this post on Facebook</b></a></li>
                  <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="Share this post on Google Plus" target="_blank">
                  <i class="icon-google-plus-sign"></i>
                  <b>Share this post on Google Plus</b></a></li>
                </ul>

							</article> <!-- end article -->
					
						<?php endwhile; ?>			
					
						<?php else : ?>
					
							<article id="post-not-found" class="hentry clearfix">
					    		<header class="article-header">
					    			<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					    		</header>
					    		<section class="entry-content">
					    			<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					    		</section>
					    		<footer class="article-footer">
					    		    <p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
					    		</footer>
							</article>
					
						<?php endif; ?>
				
						</div> <!-- end .blog -->
				</div> <!-- end .blog-wrap -->
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>