<?php
/**
 * Template Name: Contact
 *
 * @package refur
 */

	get_header();
?>

	<div id="primary" class="content-area col-xs-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>
<div id="contactFacebook">
		<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '95100348886',
          xfbml      : true,
          version    : 'v2.6'
        });
      };

      (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
<p>Vous pouvez également nous contacter via facebook et le formulaire ci-dessous :</p>
    <div class="fb-page"
         data-href="https://www.facebook.com/Sourcedeviefrejus/"
         data-tabs="messages"
         data-width="400"
         data-height="300"
         data-small-header="true">
      <div class="fb-xfbml-parse-ignore">
        <blockquote></blockquote>
      </div>
    </div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
