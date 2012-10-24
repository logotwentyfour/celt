<?php
/*
Template Name: Courses index
*/
get_header(); ?>
  
  <div class="page">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <section class="m-all t1 d1" role="complementary">
        <?php wp_nav_menu(array('menu'=>'Courses')); ?>
      </section>

      <section role="main" class="m-all t2 d2-d4">
        <header>
          <h1><?php the_title(); ?></h1>
        </header>
        
        <h2 id="agro-courses">Agroforestry Introductory Courses</h2>
        
        <ul class="course-index-list">
          <li>
            <div class="date">Saturday 7th July 2012:</div>
            <div class="title">Creating a forest garden Creating a forest garden Creating a forest garden</div>
            <a href="/creating-a-forest-garden">Book Now</a>
          </li>
          <li>
            <div class="date">Saturday 7th July 2012</div>
            <div class="title">Creating a forest garden</div>
            <a href="/creating-a-forest-garden">Book Now</a>
          </li>
        </ul>
        
        <h2 id="imecofarm-courses">CELT Courses at Imecofarm</h2>
        
        <ul class="course-index-list">
          <li>
            <div class="date">Saturday 7th July 2012</div>
            <div class="title">Creating a forest garden</div>
            <a href="/creating-a-forest-garden">Book Now</a>
          </li>
          <li>
            <div class="date">Saturday 7th July 2012</div>
            <div class="title">Creating a forest garden</div>
            <a href="/creating-a-forest-garden">Book Now</a>
          </li>
        </ul>
        
        <?php the_content(); ?>
      </section> <!-- end article section -->

    <?php endwhile; else: ?>
      <p>Whatever you were trying, it didn't work...</p>
    <?php endif; ?>
  
  </div> <?php #page ?>

<?php get_footer(); ?>