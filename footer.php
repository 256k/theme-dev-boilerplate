

          <div class="footer">
            <p>
            <?php
            $args = array(
              'theme_location' => 'footer'
            );
            wp_nav_menu( $args ); ?>
            </p>
          </div>
<?php wp_footer(); ?>
</body>

</html>
