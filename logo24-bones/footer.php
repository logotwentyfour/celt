  
    <footer role="contentinfo">
      <nav>
        <?php bones_footer_links(); ?>
      </nav>
      <?php
        query_posts('p=771');
        if(have_posts()):
          while(have_posts()): the_post();
            the_content();
          endwhile;
        endif;
        wp_reset_query();
      ?>
    </footer>
  
  </div> <!-- .wrapper -->
    
  <!-- all js scripts are loaded in library/bones.php -->
  <?php wp_footer(); ?>
  
  <!-- Add the Gridset js overlay here in development -->
  <script src="https://get.gridsetapp.com/10484/overlay/"></script>
  
  <!-- Gold Gridlet add a horizontal baseline grid for type in development -->
  <script src="<?php bloginfo('template_directory'); ?>/library/js/libs/ggs.js"></script>
</body>
</html>