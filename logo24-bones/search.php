<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="wrap clearfix">
				  
				  <?php get_sidebar(); ?>
			
					<div id="main" class="clearfix m-all t2 d2-d4" role="main">
				
						<h1 class="archive-title"><span>Search Results for:</span> <?php echo esc_attr(get_search_query()); ?></h1>

						<div class="blog-wrap archives">
				      <div class="blog">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					      <article>

                  <h2><a href='<?php the_permalink() ?>'
                  rel='bookmark' title='<?php the_title(); ?>'><?php the_title(); ?></a></h2>
                  <p class="byline vcard">
                    <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time>
                  <?php if ( has_post_thumbnail() ) {
                  	the_post_thumbnail();
                  } ?>

                  <?php the_excerpt(); ?>

                </article>
					
					    <?php endwhile; ?>	
					
					        <?php if (function_exists('bones_page_navi')) { ?>
						        <?php bones_page_navi(); ?>
					        <?php } else { ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								        <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							        </ul>
					    	    </nav>
					        <?php } ?>
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    						    <header class="article-header">
    							    <h2><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h2>
    					    	</header>
    						    <section class="entry-content">
    							    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
    				    	</article>
					
					    <?php endif; ?>

					</div> <!-- end .blog -->
				</div> <!-- end .blog-wrap -->
			
				    </div> <!-- end #main -->
    			
    			</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>