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
            <div class="container">
                <article class="texto-imagem">
                    <div class="imagem"><?php echo odin_thumbnail(806, 680, true,true);?></div>
                    <div class="texto">
                        <h2>Há 7 anos colaborando com a segurança pública de Extrema</h2>
                        <?php the_content(); ?>
                        <a class="saiba-mais" href="#">Saiba mais sobre 
                            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.00003 0L0.590027 1.41L5.17003 6L0.590027 10.59L2.00003 12L8.00003 6L2.00003 0Z" fill="#01244e"/>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
        </section>

        <section class="editais-home">
            <div class="container">
                <article>
                    <h2>Fique por dentro das nossas atualizações</h2>
                    <div class="imagem">
                         <img class="logo-edital" src="<?php echo get_template_directory_uri(); ?>/assets/images/editais 1.png"/>
                    </div>
                   
                   <div class="tds-box">
                        <?php 
                            $args = array('post_type' => 'editais','posts_per_page' => 4);
                            $var = new WP_Query($args);    

                            if($var->have_posts()):
                                while($var->have_posts()):
                                    $var->the_post(); ?>
                                        <!-- <a href="<?php the_permalink()?>">  -->
                                         <a href=""> 
                                            <div class="box">
                                                <div class="titulo-data">
                                                    <h4>Edital nº <?php the_title(); ?> - <?php the_date(); ?></h4>
                                                </div>
                                                <div class="botao">
                                                    <span>Conferir</span>
                                                    <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.00003 0L0.590027 1.41L5.17003 6L0.590027 10.59L2.00003 12L8.00003 6L2.00003 0Z" fill="#01244e"/>
                                                    </svg>
                                                </div>
                                            </div>  
                                         </a>                           
                                    <?php
                                endwhile;
                            endif;
                        wp_reset_postdata(); ?>
                        <a class="ver-todos" href="">Ver todos
                            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.00003 0L0.590027 1.41L5.17003 6L0.590027 10.59L2.00003 12L8.00003 6L2.00003 0Z" fill="#01244e"/>
                            </svg>
                        </a>
                   </div>
                </article>
            </div>            
        </section>
	</main>
<?php
get_footer();
