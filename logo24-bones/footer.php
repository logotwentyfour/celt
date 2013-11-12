
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

</body>
</html>