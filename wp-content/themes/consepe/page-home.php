<?php
/**
 * Template Name: Home
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>
	<main id="home" class="home" tabindex="-1" role="main">
		<h1 class="desabilitado"><?php the_title(); ?></h1>
		<title><?php the_title(); ?></title>
		<section class="banner">
			<?php 
                    $args = array('post_type' => 'banner','posts_per_page' => 1);
                    $var = new WP_Query($args);    

                    if($var->have_posts()):
                        while($var->have_posts()):
                            $var->the_post();
                            $subtitle =  get_post_meta( $post->ID,'subtitle', true );
                            ?>  
                            <div class="conteudo">
                                <div class="box">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_post_thumbnail();?>
                                </div>                                
                            </div>                                
                            <?php
                        endwhile;
                    endif;
                wp_reset_postdata(); ?>
           
		</section>
        <section class="texto">
            <article class="texto-imagem">
                <?php the_post_thumbnail();?>
                <div class="texto-info">
                    <h2 class="texto-titulo">Há 7 anos colaborando com a segurança pública de Extrema</h2>
                    <?php the_content(); ?>
                    <button class="saiba-mais">Saiba mais sobre   </button>
                </div>
            </article>
        </section>
        <section>
            
        </section>
	</main>
<?php
get_footer();
