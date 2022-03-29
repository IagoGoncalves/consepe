<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	<main id="noticia" class="noticia" tabindex="-1" role="noticia">
		<section class="breadcrumb">
			<img class="logo-edital" src="<?php echo get_template_directory_uri(); ?>/assets/images/background_sobre1.png"/>
			<div class="container">
				<ul>
					<li>
						<a href="<?php echo esc_url( home_url( 'noticia' ) ); ?>">
							<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.00003 12L7.41003 10.59L2.83003 6L7.41004 1.41L6.00004 -1.23266e-07L3.48568e-05 6L6.00003 12Z" fill="#404040"/>
							</svg>
							Notícias |
						</a>
					</li>
					<li class="atual"><h1><?php the_title(); ?></h1></li>
				</ul>
			</div>
		</section>
		<div class="container">
			<section class="banner">
				<div class="imagem">
					<?php echo odin_thumbnail(1597, 600, true,true);?>
				</div>
				<article class="fonte">
					<div class="conjunto">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52 6.47 22 11.99 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 11.99 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20Z" fill="#404040" fill-opacity="0.6"/>
							<path d="M12.5 7H11V13L16.25 16.15L17 14.92L12.5 12.25V7Z" fill="#404040" fill-opacity="0.6"/>
						</svg>
						<p class="data"><?php the_time('d \d\e F \d\e Y') ?></p>
					</div>
					<p class="referencia">Imagem: Divulgação</p>
				</article>
			</section>
			<section class="conteudo">
				<article class="palavras">
					<h2 class="destaque"><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<div class="icones">
						<a href="#" onclick='history.go(-1)' class="back">
							<svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32 26L33.41 24.59L28.83 20L33.41 15.41L32 14L26 20L32 26Z" fill="#404040"/>
                            </svg>
							<span>Voltar</span>
						</a>
						<div>
							<span class="share">Compartilhe em: </span>
							<a href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" target="_blank" title="Compartilhar <?php the_title();?> no Facebook">
								<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.402 18V11.034H14.735L15.084 8.326H12.402V6.598C12.402 5.814 12.62 5.279 13.744 5.279H15.178V2.857C14.4838 2.78334 13.7861 2.74762 13.088 2.75C11.021 2.75 9.606 4.012 9.606 6.33V8.326H7.268V11.034H9.606V18H1C0.734784 18 0.48043 17.8946 0.292893 17.7071C0.105357 17.5196 0 17.2652 0 17V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H12.402Z" fill="#3B5998"/>
								</svg>
							</a>
							<a href="http://twitter.com/intent/tweet?text=<?php the_title();?><?php the_permalink();?>&via=seunomenotwitter" title="Twittar sobre <?php the_title();?>" target="_blank">
								<svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M21.1623 2.65605C20.3989 2.99374 19.5893 3.21552 18.7603 3.31405C19.634 2.79148 20.288 1.96906 20.6003 1.00005C19.7803 1.48805 18.8813 1.83005 17.9443 2.01505C17.3149 1.34163 16.4807 0.895012 15.5713 0.744633C14.6618 0.594255 13.7282 0.74854 12.9156 1.1835C12.1029 1.61846 11.4567 2.30973 11.0774 3.14984C10.6981 3.98995 10.607 4.93183 10.8183 5.82905C9.15541 5.7457 7.52863 5.31357 6.04358 4.56071C4.55854 3.80785 3.24842 2.7511 2.1983 1.45905C1.82659 2.0975 1.63125 2.82328 1.6323 3.56205C1.6323 5.01205 2.3703 6.29305 3.4923 7.04305C2.82831 7.02215 2.17893 6.84283 1.5983 6.52005V6.57205C1.5985 7.53775 1.93267 8.47366 2.54414 9.22111C3.15562 9.96855 4.00678 10.4815 4.9533 10.673C4.33691 10.8401 3.6906 10.8647 3.0633 10.745C3.33016 11.5763 3.8503 12.3032 4.55089 12.8242C5.25147 13.3451 6.09742 13.6338 6.9703 13.65C6.10278 14.3314 5.10947 14.835 4.04718 15.1322C2.98488 15.4294 1.87442 15.5143 0.779297 15.382C2.69099 16.6115 4.91639 17.2642 7.1893 17.262C14.8823 17.262 19.0893 10.889 19.0893 5.36205C19.0893 5.18205 19.0843 5.00005 19.0763 4.82205C19.8952 4.23022 20.6019 3.49707 21.1633 2.65705L21.1623 2.65605Z" fill="#00ACEE"/>
								</svg>
							</a>
							<a href="#" onclick="linkedin(event, '<?php the_permalink();?>', '<?php the_title();?>');return false;">
								<svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.94043 2.00002C4.94017 2.53046 4.7292 3.03906 4.35394 3.41394C3.97868 3.78883 3.46986 3.99929 2.93943 3.99902C2.409 3.99876 1.90039 3.78779 1.52551 3.41253C1.15062 3.03727 0.940165 2.52846 0.94043 1.99802C0.940695 1.46759 1.15166 0.958988 1.52692 0.584103C1.90218 0.209218 2.411 -0.00124153 2.94143 -0.000976312C3.47186 -0.000711096 3.98047 0.210257 4.35535 0.585517C4.73024 0.960777 4.9407 1.46959 4.94043 2.00002ZM5.00043 5.48002H1.00043V18H5.00043V5.48002ZM11.3204 5.48002H7.34043V18H11.2804V11.43C11.2804 7.77002 16.0504 7.43002 16.0504 11.43V18H20.0004V10.07C20.0004 3.90002 12.9404 4.13002 11.2804 7.16002L11.3204 5.48002Z" fill="#0E76A8"/>
								</svg>
							</a>
							<a href="" id="whatsapp-share-btt" rel="nofollow" target="_blank" title="Compartilhar <?php the_title();?> no Whatsapp">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0.00401338 20L1.35601 15.032C0.465151 13.5049 -0.00289063 11.768 1.34322e-05 10C1.34322e-05 4.477 4.47701 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20C8.23279 20.0029 6.49667 19.5352 4.97001 18.645L0.00401338 20ZM6.39101 5.308C6.26188 5.31602 6.13569 5.35003 6.02001 5.408C5.91153 5.46943 5.81251 5.54622 5.72601 5.636C5.60601 5.749 5.53801 5.847 5.46501 5.942C5.09542 6.423 4.89662 7.01342 4.90001 7.62C4.90201 8.11 5.03001 8.587 5.23001 9.033C5.63901 9.935 6.31201 10.89 7.20101 11.775C7.41501 11.988 7.62401 12.202 7.84901 12.401C8.9524 13.3725 10.2673 14.073 11.689 14.447L12.258 14.534C12.443 14.544 12.628 14.53 12.814 14.521C13.1053 14.506 13.3896 14.4271 13.647 14.29C13.813 14.202 13.891 14.158 14.03 14.07C14.03 14.07 14.073 14.042 14.155 13.98C14.29 13.88 14.373 13.809 14.485 13.692C14.568 13.606 14.64 13.505 14.695 13.39C14.773 13.227 14.851 12.916 14.883 12.657C14.907 12.459 14.9 12.351 14.897 12.284C14.893 12.177 14.804 12.066 14.707 12.019L14.125 11.758C14.125 11.758 13.255 11.379 12.724 11.137C12.668 11.1126 12.608 11.0987 12.547 11.096C12.4786 11.089 12.4095 11.0967 12.3443 11.1186C12.2791 11.1405 12.2193 11.1761 12.169 11.223V11.221C12.164 11.221 12.097 11.278 11.374 12.154C11.3325 12.2098 11.2754 12.2519 11.2098 12.2751C11.1443 12.2982 11.0733 12.3013 11.006 12.284C10.9409 12.2666 10.877 12.2445 10.815 12.218C10.691 12.166 10.648 12.146 10.563 12.109L10.558 12.107C9.98592 11.8572 9.45624 11.5198 8.98801 11.107C8.86201 10.997 8.74501 10.877 8.62501 10.761C8.23159 10.3842 7.88873 9.95801 7.60501 9.493L7.54601 9.398C7.50364 9.33416 7.46937 9.2653 7.44401 9.193C7.40601 9.046 7.50501 8.928 7.50501 8.928C7.50501 8.928 7.74801 8.662 7.86101 8.518C7.9551 8.39832 8.04289 8.27382 8.12401 8.145C8.24201 7.955 8.27901 7.76 8.21701 7.609C7.93701 6.925 7.64701 6.244 7.34901 5.568C7.29001 5.434 7.11501 5.338 6.95601 5.319C6.90201 5.313 6.84801 5.307 6.79401 5.303C6.65972 5.29633 6.52515 5.29766 6.39101 5.307V5.308Z" fill="#57AB7A"/>
								</svg>
							</a>
						</div>
					</div>
				</article>
				<article class="recentes">
					<?php 
		            $args = array('post_type' => 'noticia','posts_per_page' => 3);
		            $var = new WP_Query($args);    

		            if($var->have_posts()):
		                while($var->have_posts()):
		                    $var->the_post(); ?>
		                        <div class="box">
		                        	<a href="<?php the_permalink()?>">
		                        	<div class="imagem">
		                        		<?php echo odin_thumbnail(1000, 650, true,true);?>
		                        	</div>
		                        	<div class="conteudo">
			                        	<h3><?php the_title(); ?></h3>
		                        	</div>
		                        	</a>  
		                        </div>
		                    <?php
		                endwhile;
		            endif;
		        wp_reset_postdata(); ?>
				</article>
			</section>
		</div>
	</main>
	<script type="text/javascript">
		//Constrói a URL depois que o DOM estiver pronto
		document.addEventListener("DOMContentLoaded", function() {
		    //conteúdo que será compartilhado: Título da página + URL
		    var conteudo = encodeURIComponent(document.title + " " + window.location.href);
		    //altera a URL do botão
		    document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
		}, false);


		   linkedin = function (event, s, a){
		    event.preventDefault();
		    window.open('https://www.linkedin.com/cws/share?url=' +s+ '?name=' +a, 'newwindow', 'width=680, height=450');
		};
	</script>
<?php
get_footer();
