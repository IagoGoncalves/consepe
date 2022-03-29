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
		                        	<?php if ($logradouro != '' and $logradouro != '-') { ?>
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
				<form class="contact2-form" id="contato" name="enviar-email" method="post">	
					<input class="tipo-email" type="hidden" name="tipo-email" value="contato">	
					<h2 class="fontzero">Fale conosco!</h2>			
					<div class="campos campo1">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="Nome"></span>
					</div>

					<div class="campos campo3">
						<input class="input2" type="text" name="assunto">
						<span class="focus-input2" data-placeholder="Assunto"></span>
					</div>

					<div class="campos campo1">
						<textarea class="input2 area" name="message"></textarea>
						<span class="focus-input2" data-placeholder="Mensagem"></span>
					</div>
					<!-- Recaptcha -->
						<div class="g-recaptcha_align campo4">
							<div class="g-recaptcha" data-sitekey="6Le8TSMfAAAAAL8rnNMyMred2hFtaPIgYUNcToX_"></div>
						</div>	
						<script>
						    window.onload = function() {
						    var recaptcha = document.forms["contato"]["g-recaptcha-response"];
						    recaptcha.required = true;
						    recaptcha.oninvalid = function(e) {
						    	// fazer algo, no caso to dando um alert
						    	alert("Por favor Click no reCaptcha para validar o Formulario.");
						      }
						    }
						</script>		
					
					<div class="valida-envio"></div>
						<svg width='50px' height='50px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-default load"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(0 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(30 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.08333333333333333s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(60 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.16666666666666666s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(90 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.25s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(120 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.3333333333333333s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(150 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.4166666666666667s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(180 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(210 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5833333333333334s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(240 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.6666666666666666s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(270 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.75s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(300 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.8333333333333334s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(330 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.9166666666666666s' repeatCount='indefinite'/></rect>
						</svg>
					<div class="botao-enviar" >
						<button class="btn botao-enviar" value="submit">Enviar</button>
					</div>
				</form>	
			</section>
		</section>
	</main>
<?php
get_footer();
