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
        <section class="texto-home">
            <article class="texto-imagem">
                <div class="imagem"><?php the_post_thumbnail();?></div>
                <div class="texto">
                    <h2 class="titulo">Há 7 anos colaborando com a segurança pública de Extrema</h2>
                    <?php the_content(); ?>
                    <a class="saiba-mais" href="#">Saiba mais sobre 
                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.00003 0L0.590027 1.41L5.17003 6L0.590027 10.59L2.00003 12L8.00003 6L2.00003 0Z" fill="#01244e"/>
                        </svg>
                    </a>
                </div>
            </article>
        </section>
        <section class="editais">
            <div class="container">
                <h3>Fique por dentro das nossas atualizações</h3>
                <article>
                    
                </article>
            </div>
        </section>
	</main>
<?php
get_footer();
