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

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="name-copyright"> 
            SAMURAJ &copy; 2015 Samuraj Kommunikation AB 
        </div>
        <div class="footer-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_id' => 'footer-menu' ) ); ?>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
