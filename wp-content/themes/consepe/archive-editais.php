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

	<main id="editais" class="editais" tabindex="-1" role="editais">
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
						<h1 class="desabilitado">Home</h1>
					</li>
					<li class="atual"><h1>Editais</h1></li>
				</ul>
			</div>
		</section>
		<section class="editais-bloco">
            <div class="container">
                <article>
                    <h2>Faça download dos editais</h2>
                    <div class="logo-edital">
                    	<img  src="<?php echo get_template_directory_uri(); ?>/assets/images/editais 1.png"/>
                   </div>
                    <div class="tds-box">
                        <?php 
                            $args = array('post_type' => 'editais','posts_per_page' => -1);
                            $var = new WP_Query($args);    

                            if($var->have_posts()):
                                while($var->have_posts()):
                                    $var->the_post(); ?>
                                        <!-- <a href="<?php the_permalink()?>">  -->
                                        <div class="box">
                                            <div class="titulo-edital">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 0H6C4.9 0 4 0.9 4 2V14C4 15.1 4.9 16 6 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0ZM9.5 7.5C9.5 8.33 8.83 9 8 9H7V11H5.5V5H8C8.83 5 9.5 5.67 9.5 6.5V7.5ZM14.5 9.5C14.5 10.33 13.83 11 13 11H10.5V5H13C13.83 5 14.5 5.67 14.5 6.5V9.5ZM18.5 6.5H17V7.5H18.5V9H17V11H15.5V5H18.5V6.5ZM7 7.5H8V6.5H7V7.5ZM2 4H0V18C0 19.1 0.9 20 2 20H16V18H2V4ZM12 9.5H13V6.5H12V9.5Z" fill="#112D4E"/>
                                                </svg>
                                                <span>Edital nº <?php the_title(); ?> - <?php the_time('d \d\e F \d\e Y') ?></span>
                                            </div>

                                            <a href="">
                                                <div class="down-edit">
                                                    <span>fazer download do documento</span>
                                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M0 17.1458H14V15.1458H0V17.1458ZM14 6.14575H10V0.145752H4V6.14575H0L7 13.1458L14 6.14575Z" fill="white"/>
													</svg>

                                                </div>
                                            </a>  
                                        </div>  
                                    <?php
                                endwhile;
                            endif;
                        wp_reset_postdata(); ?>
                   </div>
                </article>
            </div>            
        </section>
	</main>

<?php
get_footer();
