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
						<a href="<?php echo esc_url( home_url( 'home' ) ); ?>">
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
		                    $var->the_post();?>
		                    <?php
		                    	$telefone =  get_post_meta( $post->ID,'telefone', true);
								$logradouro =  get_post_meta( $post->ID,'logradouro-gratuito', true);
		                    	$endereco =  get_post_meta( $post->ID,'endereco-gratuito', true);
								$numero =  get_post_meta( $post->ID,'numero-gratuito', true);
								$complemento =  get_post_meta( $post->ID,'complemento-gratuito', true);
								$bairro =  get_post_meta( $post->ID,'bairro-gratuito', true);
								$cidade =  get_post_meta( $post->ID,'cidade-gratuito', true);
								$estado =  get_post_meta( $post->ID,'estado-gratuito', true);
							?>

	                        <div class="box">
	                        	<span class="nome">
		                        	<p><?php the_title(); ?> - </p>
		                        	<?php if ($telefone != '') { ?>
										<p class="telefone"><?php echo $telefone?> <br></p>
										<?php } else { ?>
											<p style="display: none;"></p>
									<?php } ?>
	                        	</span>
	                        	<span class="conteudo">
		                        	<?php if ($logradouro != '') { ?>
										<p><?php echo $logradouro?> <?php echo $endereco?>, <?php echo $numero?> <br></p>
										<?php } else { ?>
											<p style="display: none;"></p>
									<?php } ?>

									

									<?php if ($complemento != '') { ?>
										<p><?php echo $complemento?> </p>
										<?php } else { ?>
											<p style="display: none;"></p>
									<?php } ?>
								</span>
								<span class="conteudo2">
									<?php if ($bairro != '') { ?>
										<p><?php echo $bairro?> </p>
										<?php } else { ?>
											<p style="display: none;"></p>
									<?php } ?>

									<?php if ($cidade != '') { ?>
										<p><?php echo $cidade?>/<?php echo $estado?></p>
										<?php } else { ?>
											<p style="display: none;"></p>
									<?php } ?>
								</span>
	                        </div>

		                    <?php
		                endwhile;
		            endif;
		        wp_reset_postdata(); ?>
			</article>
			<section class="formulario container">
				<form class="contact2-form">	
					<h2 class="fontzero">Fale conosco!</h2>			
					<div class="campos campo1">
						<input class="input2" type="text" name="name" required>
						<span class="focus-input2" data-placeholder="Nome"></span>
					</div>

					<div class="campos campo3">
						<input class="input2" type="text" name="assunto" required>
						<span class="focus-input2" data-placeholder="Assunto"></span>
					</div>

					<div class="campos campo1">
						<textarea class="input2 area" name="message" required></textarea>
						<span class="focus-input2" data-placeholder="Mensagem"></span>
					</div>
					<div class="botao-enviar">
						<button class="btn">Enviar</button>
					</div>
				</form>	
			</section>
		</section>
	</main>
<?php
get_footer();
