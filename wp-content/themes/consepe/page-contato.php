<?php
/**
 * Template Name: Contato
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>
	<main id="contato" class="contato" tabindex="-1" role="contato">
		<section class="breadcrumb">
			<img class="logo-edital" src="<?php echo get_template_directory_uri(); ?>/assets/images/background_sobre1.png"/>
			<div class="container">
				<ul>
					<li>
						<a href="<?php echo esc_url( home_url( 'noticia' ) ); ?>">
							<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.00003 12L7.41003 10.59L2.83003 6L7.41004 1.41L6.00004 -1.23266e-07L3.48568e-05 6L6.00003 12Z" fill="#404040"/>
							</svg>
							home |
						</a>
					</li>
					<li class="atual"><h1><?php the_title(); ?></h1></li>
				</ul>
			</div>
		</section>
		<section class="container">
			<article class="banner">
				<img class="imagem" src="<?php echo get_template_directory_uri(); ?>/assets/images/back-contato.png"/>
			</article>
			<article class="infos">
				<?php 
		            $args = array('post_type' => 'contatos','posts_per_page' => -1);
		            $var = new WP_Query($args);    

		            if($var->have_posts()):
		                while($var->have_posts()):
		                    $var->the_post(); ?>
		                        <div class="box">
		                        	<?php the_title(); ?>
		                        </div>
		                    <?php
		                endwhile;
		            endif;
		        wp_reset_postdata(); ?>
			</article>
			<article class="formulario">
					<h2 class="fontzero">Fale conosco!</h2>
					<form id="formulario" class="form-contato" name="enviar-email" method="post">
						
		            </form>
				</article>
		</section>
	</main>
<?php
get_footer();
