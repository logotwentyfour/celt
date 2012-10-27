<?php
/*
Template Name: Courses show
*/
get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="m-all t1 d1" role="complementary">
      <?php wp_nav_menu(array('menu'=>'courses show')); ?>
    </section>

    <section role="main" class="m-all t2 d2-d4">
      <header>
        <h1><?php the_title(); ?></h1>
      </header>
      <?php the_content(); ?>
      
      <h2>Booking Form</h2>
      
      <form>
      
        <div class="m-all t2 d2">
          
          <fieldset>
            <label>First name</label>
            <input type="text">
          
            <label>First name</label>
            <input type="text">
          </fieldset>
          
          <fieldset>
            <label>Address Line 1</label>
            <input type="text">
            
            <label>Address Line 2</label>
            <input type="text">
            
            <label>Address Line 3</label>
            <input type="text">
            
            <label>County</label>
            <input type="text">
          </fieldset>
          
        </div>
      
        <div class="m-all t2 d3">
          <fieldset>
            <label>Email</label>
            <input type="text">
          
            <label>Telephone</label>
            <input type="text">
          </fieldset>
          
          <fieldset>
            <label>Date</label>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              December 2012
            </label>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              January 2012
            </label>
          </fieldset>
          
          <fieldset>
            <label>Course - Second Preference</label>
            <input type="text">
          </fieldset>
        </div>
      
        <div class="m-all t2 d4">
          <fieldset>
            <label>Voucher Purchase</label>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              €50
            </label>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              €75
            </label>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              €100
            </label>
          </fieldset>
          
          <fieldset>
            <label>Donation</label>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              €50
            </label>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              €75
            </label>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              €100
            </label>
          </fieldset>
          
          <input type="submit" value="Pay Now" class="btn btn-success">
        </div>
      
      </form>
      
    </section> <!-- end article section -->

  <?php endwhile; else: ?>
    <p>Whatever you were trying, it didn't work...</p>
  <?php endif; ?>

<?php get_footer(); ?>