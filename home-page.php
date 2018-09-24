<?php
/**
 * Template Name: Home
 *
 * @package refur
 */

	get_header('home');
?>
<h1>
    Bienvenue dans la famille Source de Vie à Fréjus
</h1>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
		
		             <div class="agenda-mois">
            <h2>
                Agenda du mois
            </h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Evènement</th>
                    </tr>
                </thead>
                <tbody>
		                <tr>
			                <th scope="row">Dimanche 2 septembre - 9h et 11h00 </th>
			                <td>Culte de rentrée</td>
		                </tr>
					  <tr>
			                <th scope="row">Mardi 4 septembre - 19h </th>
			                <td>Soirée Adoration</td>
		                </tr>
                    <tr>
                        <th scope="row">Vendredi 7 septembre - 19h </th>
                        <td>Soirée de rentrée des FJ</td>
                    </tr>
                    <tr>
	                    <th scope="row">3 au 16 septembre</th>
	                    <td>Opération tempête de prière</td>
                    </tr>
		                <tr>
			                <th scope="row">Mardi 11 septembre - 19h </th>
			                <td>Collège intégrité</td>
		                </tr>
					          <tr>
			                <th scope="row">Samedi 15 septembre - 14h </th>
			                <td>Femmes au Coeur de Dieu</td>
		                </tr>
					     <tr>
			                <th scope="row">Mardi 18 septembre - 19h </th>
			                <td>Soirée CASA</td>
		                </tr>
							     <tr>
			                <th scope="row">24 au 28 septembre - 19h </th>
			                <td>Daniel ARNOLD</td>
		                </tr>
                </tbody>
            </table>
        </div>
		
        <?php $catquery = new WP_Query( 'cat=4&posts_per_page=3' ); ?>
        <div class="post-recents">
            <h2>Actualités</h2>
            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
            <div class="col-sm-4 col-xs-12 card-news" style="margin-bottom: 50px;">
                <div class="">
                    <div class="article-thumbnail">
                        <?php refur_post_thumbnail(); ?>
                    </div>

                </div>
                <div class="last-article-content">
                    <div class="post-title-home">
                        <a href="<?php the_permalink() ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                        <?php refur_read_more();?>
                    </div>
                    <!-- .entry-summary -->

                </div>
            </div>

            <?php endwhile;
                    wp_reset_postdata();
                ?>
        </div>


        <?php $catquery = new WP_Query( 'cat=20&posts_per_page=1' ); ?>
        <div class="post-recents">
            <h2>La pensée du mois</h2>
            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
            <div class="col-sm-8 col-xs-12 card-news" style="margin-bottom: 50px;">
                <div class="last-article-content">
                    <div class="post-title-home">
                        <a href="<?php the_permalink() ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <div class="entry-summary">
                        <?php the_content(); ?>
                    </div>
                    <!-- .entry-summary -->

                </div>
            </div>
            <div class="col-sm-4 col-xs-12 trifena-bloc">
                <img src="https://eglisefrejus.fr/wp-content/uploads/2018/04/trifena-1.jpg" class="trifena-pic" alt="journal de trifena"
                />
                <p>
                    Chaque mois nous vous partagerons les pensées de Trifena, qui pourront vous encourager, vous inviter à la réflexion. Nous
                    bénissons notre soeur & nous vous invitons à suivre sa page Facebook.
                </p>
                <a href="https://www.facebook.com/Le-Journal-de-Trifena-340177236491497/">
                    <div class="suivre-trifena">
                        suivre
                    </div>
                </a>
            </div>
            <?php endwhile;
                    wp_reset_postdata();
                ?>
        </div>






        <header class="entry-header">
            <!-- <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->
        </header>
        <!-- .entry-header -->


        <div id="actuHp" class="row">
            &nbsp;



            <blockquote>L’église Source de Vie Fréjus vous souhaite la bienvenue sur son portail internet. Vous trouverez ici toutes
                les informations utiles afin de nous rejoindre, participer, entreprendre au sein de
                <strong>notre "Famille"</strong>. La famille est une de nos priorités, car nous pensons que
                <em>Dieu est le père de chacun d’entre nous</em> et que du plus jeune au plus ancien, nous représentons ce qu’il
                a de plus précieux. Source de vie se veut donc inter-générationnelle et multi-culturelle afin de refléter
                au mieux cette réalité biblique : "Jeunes et Vieux se réjouiront ensemble". Notre équipe ministérielle travaille
                à cuisiner un menu varié, nourrissant avec des aliments frais, sans conservateurs ni produits toxiques. Concrètement
                vous y retrouverez deux rendez-vous hebdomadaires :
                <ul>
                    <li style="list-style-type: none;">
                        <ul>
                            <li>notre célébration du dimanche matin à 9h00 et 11h00</li>
                            <li>le mardi 19h qui propose chaque semaine un format différent : soirée adoration ou intercession,
                                cours du soir ou
                                <strong>Jésus Coffee</strong>.</li>
                        </ul>
                    </li>
                </ul>
                Les
                <strong>enfants</strong> sont aussi une priorité car ils demandent plus que notre attention ou notre temps : ils
                ont droit aux meilleurs de notre amour, ils sont pour nous aussi l’église d’aujourd’hui . Les
                <strong>Séniors</strong> ne seront pas en reste. Une équipe travaille à démontrer que Dieu renouvelle chacun pendant
                la marche. Sans oublier les
                <strong>Jeunes</strong> qui se retrouvent autour de projets sportifs, musicaux, où convivialité et foi les rendent
                prêts à affronter les défis du 21eme siècle. Alors que vous soyez parent, célibataire, artiste, sportif,
                monsieur tout le monde, croyant ou non-croyant,
                <strong>
                    <u>vous trouverez toujours une place à notre table</u>
                </strong>. Parlant de table, nous privilégions les moments conviviaux de détentes ou de repas et nous vous attendons
                afin que jamais vous ne puissiez dire : "je n’ai pas trouvé une oreille pour m’écouter, une main pour m’aider".
                Enfin l’église Source de Vie c’est une école de vie, de foi, de pratique pour que chacun puisse trouver sa
                place et rentrer dans son appel. C’est un regard sur le dehors, une main tendue pour les déshérités, un mot
                d’amour pour ceux qui ne connaissent pas la paix, une église impliquée activement dans la société. Alors
                vous êtes de Fréjus et ses environs, ne cherchez plus et bienvenue dans la Famille Source de Vie</blockquote>

        </div>




        <br/>
        <br/>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 culte-info">
                    <h2 id="findUs">Vous désirez nous rejoindre ?</h2>
                    Rejoignez-nous aux cultes
                    <br/>
                    <br/>
                    <span class="important-text">tous les dimanches à 9h00 et 11h00 
                        <br/> tous les mardis à partir de 19h00</span> au :
                    <br/>
                    <br/> 128 rue de la Magdeleine
                    <br/> 83600 Fréjus
                    <br/>
                    <br/>
                    <a href="http://eglisefrejus.fr/contact/" class="btn" role="button">Nous contacter</a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="feature map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1448.6439815266074!2d6.7496976685516605!3d43.43370146681467!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9cb6918dc04cfc12!2zw4lnbGlzZSBkZSBGcsOpanVz!5e0!3m2!1sfr!2sfr!4v1478366206025"
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- #main -->
</div>
<!-- #primary -->

<?php get_footer(); ?>