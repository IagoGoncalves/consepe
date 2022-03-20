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

	<main id="consepe" class="consepe" tabindex="-1" role="consepe">
		<section class="breadcrumb">
			<img class="logo-edital" src="<?php echo get_template_directory_uri(); ?>/assets/images/background_sobre1.png"/>
			<div class="container">
				<ul>
					<li>
						<a href="<?php echo esc_url( home_url( 'home' ) ); ?>">
							<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.00003 12L7.41003 10.59L2.83003 6L7.41004 1.41L6.00004 -1.23266e-07L3.48568e-05 6L6.00003 12Z" fill="#404040"/>
							</svg>
							Home |
						</a>
					</li>
					<li class="atual"><h1><?php the_title();?></h1></li>
				</ul>
			</div>
		</section>
		<div class="container">
			<section class="info">
				<article class="texto">
					<h2 class="destaque">Há 7 anos colaborando com a segurança pública de Extrema</h2>
					<div class="sobre"><?php the_content();?></div>
				</article>
				<article class="fluxo">
					<h2>Confira os membros do Consepe</h2>
					<div>
						<img class="logo-edital" src="<?php echo get_template_directory_uri(); ?>/assets/images/fluxograma.png"/>
					</div>
				</article>
				<article class="estatuto">
					<?php $pdf =  get_post_meta( $post->ID,'arquivo-consepe', true);?>
					<span class="confira">Clique e confira Estatuto do Consepe</span>
					<a href="<?php echo $pdf?>" download="<?php the_title()?>" class="down-estatuto">
						<span>fazer download do documento</span>
						<svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 17H14V15H0V17ZM14 6H10V0H4V6H0L7 13L14 6Z" fill="white"/>
						</svg>
					</a>
				</article>
			</section>
		</div>
	</main>

<?php
get_footer();
