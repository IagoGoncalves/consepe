<?php
/**
 * Template Name: Consepe
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

	<main id="consepe" class="consepe" tabindex="-1" role="main">
		<img class="logo-edital" src="<?php echo get_template_directory_uri(); ?>/assets/images/background_sobre1.png"/>
		<div>
			<section class="home-consepe">
				<a href="">
					<svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1" width="58" height="38" rx="9" stroke="#112D4E" stroke-width="2"/>
                        <path d="M32 26L33.41 24.59L28.83 20L33.41 15.41L32 14L26 20L32 26Z" fill="#112D4E"/>
                    </svg>
					<span>home</span>
				</a>
				<span>consepe</span>
			</section>
			<section class="info">
				<article class="texto">
					<h2><?php the_title();?></h2>
					<?php the_content();?>
				</article>
				<article class="fluxo">
					<h2>Confira os membros do Consepe</h2>
					<!-- imagem -->
				</article>
				<article class="confira">
					<span>Clique e confira Estatuto do Consepe</span>
					<a href=""></a>
				</article>
			</section>
		</div>
	</main>

<?php
get_footer();
