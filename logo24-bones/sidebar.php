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
