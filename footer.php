<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package refur
 */

?>
			</div>
		</div>
	</div><!-- #content -->
	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
<a href="http://www.protestants.org/" target="_blank"><img src="https://eglisefrejus.fr/wp-content/uploads/2018/07/Logo_FPF_Fédération_Protestante_de_France-e1532781839281.png" style="max-width:130px" alt="fédération protestante de france"/></a>				<a href="http://assemblees-de-dieu.org/" target="_blank"><img src="https://eglisefrejus.fr/wp-content/uploads/2018/07/logo_add.png" style="max-width:130px" alt="assemblees de dieu"/></a></div>
			<div class="footer-logo col-md-8 col-sm-8 col-xs-8">
				"Source de Vie" 128, Rue de la Magdeleine 83600 Fréjus
                          <div class="footer-nav"><a href="/"><span>Accueil</span></a><a href="https://eglisefrejus.fr#findUs"><span>Nous trouver</span></a><a href="https://eglisefrejus.fr#findUs"><span>Nous soutenir</span></a></div>
			</div><!-- .footer -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
jQuery(document).ready(function(){
jQuery.post(
    'https://graph.facebook.com',
    {
        id: '<?php echo $url; ?>',
        scrape: true
    },
    function(response){
        console.log(response);
    }
);
})
</script>
</body>
</html>
