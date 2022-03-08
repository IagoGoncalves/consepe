<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="noticias" class="noticias" tabindex="-1" role="noticiais">
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
						<title>Noticias</title>
					</li>
					<li class="atual"><h1>Noticias</h1></li>
				</ul>
			</div>
		</section>
		<section class="container">
			<article class="first-block">
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
				                        	<p><?php echo excerpt(30); ?></p>
			                        	</div>
			                        </a>
		                        </div>		                        
		                    <?php
		                endwhile;
		            endif;
		        wp_reset_postdata(); ?>
		        <p class="borda-first"></p>
			</article>
			<article class="second-block">
				<?php 
					$args = array('post_type' => 'noticia', 'posts_per_page' => get_option('posts_per_page'), 'paged' => get_query_var('paged', -1), );
		            $var = new WP_Query($args);    

		            if($var->have_posts()):
		                while($var->have_posts()):
		                    $var->the_post();?>
		                  

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
		        <div class="page">
                    <p class="borda-left"></p>
                    <div class="swiper-pagination">
                    </div>
                    <p class="borda-middle"></p>
                    <article>
                        <div href="" class="esquerda swiper-button-prev">
                            <svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="1" y="1" width="58" height="38" rx="9" stroke="#112D4E" stroke-width="2"/>
                                <path d="M32 26L33.41 24.59L28.83 20L33.41 15.41L32 14L26 20L32 26Z" fill="#112D4E"/>
                            </svg>
                        </div>
                        <div href="" class="direita swiper-button-next">
                            <svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="1" y="1" width="58" height="38" rx="9" stroke="#112D4E" stroke-width="2"/>
                                <path d="M28 14L26.59 15.41L31.17 20L26.59 24.59L28 26L34 20L28 14Z" fill="#112D4E"/>
                            </svg>
                        </div>
                    </article>
                    <p class="borda-right"></p>
                </div>  
			</article>
		</section>
	</main>

<?php
get_footer();
