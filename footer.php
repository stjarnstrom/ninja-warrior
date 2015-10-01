<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ninja Warrior
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer" role="contentinfo">
        <div class="name-copyright"> 
            SAMURAJ &copy; 2015
        </div>
        <div class="footer-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_id' => 'footer-menu' ) ); ?>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo get_option("ninja_warrior_google_analytics"); ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>
