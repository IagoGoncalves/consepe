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
                            $args = array('post_type' => 'editais','posts_per_page' => 3);
                            $var = new WP_Query($args);    

                            if($var->have_posts()):
                                while($var->have_posts()):
                                    $var->the_post(); ?>
                                        <!-- <a href="<?php the_permalink()?>">  -->
                                        <div class="box">
                                            <a href="">
                                                <div class="titulo-data">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 0H6C4.9 0 4 0.9 4 2V14C4 15.1 4.9 16 6 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0ZM9.5 7.5C9.5 8.33 8.83 9 8 9H7V11H5.5V5H8C8.83 5 9.5 5.67 9.5 6.5V7.5ZM14.5 9.5C14.5 10.33 13.83 11 13 11H10.5V5H13C13.83 5 14.5 5.67 14.5 6.5V9.5ZM18.5 6.5H17V7.5H18.5V9H17V11H15.5V5H18.5V6.5ZM7 7.5H8V6.5H7V7.5ZM2 4H0V18C0 19.1 0.9 20 2 20H16V18H2V4ZM12 9.5H13V6.5H12V9.5Z" fill="#112D4E"/>
                                                    </svg>
                                                    <h4>Edital nº <?php the_title(); ?> - <?php the_date(); ?></h4>
                                                </div>
                                            <a href="">
                                                <div class="botao">
                                                    <span>Conferir</span>
                                                    <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.00003 0L0.590027 1.41L5.17003 6L0.590027 10.59L2.00003 12L8.00003 6L2.00003 0Z" fill="#01244e"/>
                                                    </svg>
                                                </div>
                                            </a>  
                                        </div>  
                                    <?php
                                endwhile;
                            endif;
                        wp_reset_postdata(); ?>
                        <div class="ver-todos" >
                            <a href="">Ver todos
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.00003 0L0.590027 1.41L5.17003 6L0.590027 10.59L2.00003 12L8.00003 6L2.00003 0Z" fill="#01244e"/>
                                </svg>
                            </a>
                        </div>
                   </div>
                </article>
            </div>            
        </section>

        <section class="noticias-home">
            <div class="container">
                <article class="info-noticias">
                    <h2>exercitation ullamco laboris nisi</h2>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                    <div class="botoes" >
                        <a href="" class="cnt-lendo">continuar lendo
                            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.00003 0L0.590027 1.41L5.17003 6L0.590027 10.59L2.00003 12L8.00003 6L2.00003 0Z" fill="#01244e"/>
                            </svg>
                        </a>
                        <a href="" class="veja-mais">ver mais notícias</a>
                    </div>
                </article>
                <article class="noticia-imagem">
                    
                </article>
            </div>
        </section>
	</main>
<?php
get_footer();
