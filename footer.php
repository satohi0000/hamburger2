<footer class="l-footer">
  <div class="l-footer__center">
    <?php 
            wp_nav_menu( array( 
                'theme_location' => 'footer-menu' 
            ) ); 
        ?>    
  </div>
  <div class="l-footer__copyright">
    <p>Copyright: RaiseTech</p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
