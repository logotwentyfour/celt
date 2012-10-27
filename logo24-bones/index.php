<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
					<section class="m-all t1 d1" role="complementary"> <!--sidebar -->
            <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
  					  <div>
  					    <input type="text" name="s" id="s"/>
  					    <input type="submit" id="searchsubmit" value="Search" class="btn" />
  					  </div>
  					</form>
  					
  					<h3>Recent Posts</h3>
						<ul class="recent-posts">
						  <?php
						    $archive_query = new WP_Query('showposts=5');
						    while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
						  <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
						  <?php endwhile; ?>
						</ul>

            <h3>Archives</h3>
            <ul>
              <?php wp_get_archives('type=monthly'); ?>
            </ul>

            <?php $args = array(
            	'show_option_all'    => '',
            	'orderby'            => 'name',
            	'order'              => 'ASC',
            	'style'              => 'list',
            	'show_count'         => 0,
            	'hide_empty'         => 1,
            	'use_desc_for_title' => 1,
            	'child_of'           => 0,
            	'feed'               => '',
            	'feed_type'          => '',
            	'feed_image'         => '',
            	'exclude'            => '',
            	'exclude_tree'       => '',
            	'include'            => '',
            	'hierarchical'       => true,
            	'title_li'           => '',
            	'show_option_none'   => __('No categories'),
            	'number'             => null,
            	'echo'               => 1,
            	'depth'              => 0,
            	'current_category'   => 0,
            	'pad_counts'         => 0,
            	'taxonomy'           => 'category',
            	'walker'             => null
            ); ?>

            <h3>Topics</h3>
            <ul>
					    <?php wp_list_categories( $args ); ?> 
					  </ul>
					</section>

				    <div id="main" class="clearfix m-all t2 d2-d4" role="main">
				    	<h1>Blog</h1>
				    	<div class="blog-wrap">
				    	<div class="blog">
				    		

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
							    <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								
							    <p class="byline vcard"><?php _e('Posted', 'bonestheme'); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time> <?php _e('by', 'bonestheme'); ?> <span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&</span> <?php _e('filed under', 'bonestheme'); ?> <?php the_category(', '); ?>.</p>
						
						    </header> <!-- end article header -->
					
						    <section class="entry-content clearfix">
							    <?php the_content(); ?>
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">

    							<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>

						    </footer> <!-- end article footer -->
						    
						    <?php // comments_template(); // uncomment if you want to use them ?>
					
					    </article> <!-- end article -->
						
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
					        	<footer class="article-footer">
					        	    <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
					        	</footer>
					        </article>
					
					    <?php endif; ?>
					</div> <!-- end .blog -->
				</div> <!-- end .blog-wrap -->
				    </div> <!-- end #main -->
    
				    
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
