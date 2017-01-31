

          <div class="footer">
            <p> hi footer!
            <?php
            $args = array(
              'theme_location' => 'footer'
            );
            wp_nav_menu( $args ); ?>
            </p>
          </div>
<?php wp_footer(); ?>


</script>
</body>

</html>
