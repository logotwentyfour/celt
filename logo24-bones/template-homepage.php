<?php
/*
Template Name: Home Page
*/
get_header(); ?>
  
  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

    <section role="main">
      <header>
        <h1>Welcome</h1>
      </header>

      <p>CELT is a community group and registered charity involved in:</p>

      <ul>
        <li>Ecology</li>
        <li>Wildlife surveys</li>
        <li>Schools projects</li>
        <li>Nature conservation</li>
        <li>Renewable energy</li>
        <li>Native Tree Nursery</li>
        <li>Traditional Skills</li>
        <li>Native trees, Agroforestry</li>
        <li>Environmental education</li>
        <li>Planting</li>
        <li>Coppice crafts</li>
        <li>And More</li>
      </ul>
      
        <p class="notice">CELT (Registered Charity CHY 14519) welcome sponsorship of projects, programmes and events. Sponsors will benefit from any media coverage and will be included in our brochures and newsletters. Please get in touch if you can help - you can make an important contribution to environmental education and training.</p>

      
      <section class="latest-news"> 

        <article id="post-<?php the_ID(); ?>">
          <header class="entry-header">
            <a href='<?php the_permalink() ?>'
            rel='bookmark' title='<?php the_title(); ?>'>
              <h1 class="entry-title"><?php the_title(); ?></h1>
            </a>
        
            <?php if ( 'post' == get_post_type() ) : ?>
        
            <div class="entry-meta">
              <div class="post-author">
                <a href="<?php echo get_the_author_meta( 'user_url' ); ?>" title="Learn more about me"><?php the_author() ?></a>
                <?php read_time(); ?>
              </div>
              <div class="topics">
                <h3>Topics:</h3> <?php echo get_the_category_list(); ?>
              </div>
            </div><!-- .entry-meta -->
        
            <?php endif; ?>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <?php the_excerpt(); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            Written <time pubdate datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j Y'); ?></time>
          </div>
        </article>
        
      </section> <?php # /latest-news ?>

    </section> <?php # /main ?>
    
   <?php endwhile; ?>
   
  <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>