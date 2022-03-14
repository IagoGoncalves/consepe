<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div>
	</div>

	<footer id="footer" role="contentinfo">
        <div class="container">
    		<section class="footer-email">
                <article class="info">
                    <svg width="42" height="34" viewBox="0 0 42 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M37.6667 0.333252H4.33332C2.04166 0.333252 0.18749 2.20825 0.18749 4.49992L0.166656 29.4999C0.166656 31.7916 2.04166 33.6666 4.33332 33.6666H37.6667C39.9583 33.6666 41.8333 31.7916 41.8333 29.4999V4.49992C41.8333 2.20825 39.9583 0.333252 37.6667 0.333252ZM37.6667 8.66658L21 19.0832L4.33332 8.66658V4.49992L21 14.9166L37.6667 4.49992V8.66658Z" fill="white"/>
                    </svg>
                    <span>contato@consepeextrema.org</span>
                </article>
                <article class="icn">
                    <a href="https://www.facebook.com/consepeextrema/" target="_blank">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.4603 0H12.5C5.63492 0 0 5.63492 0 12.5397V37.5C0 44.3651 5.63492 50 12.5 50H37.4603C44.3651 50 50 44.3651 50 37.4603V12.5397C50 5.63492 44.3651 0 37.4603 0ZM31.7064 25H26.9841V40.4762H21.0317V25H17.8571V18.6508H20.6349V15.9524C20.6349 13.4127 21.9048 9.40476 27.2619 9.40476H32.1429V14.6825H28.6905C28.1349 14.6825 27.381 15.0397 27.381 16.2698V18.6508H32.2619L31.7064 25Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/consepeextrema/" target="_blank">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.4211 21.7883C28.4298 20.4005 26.8041 19.4885 24.9801 19.4885C23.1562 19.4885 21.5305 20.4005 20.5392 21.7883C19.9048 22.7003 19.5083 23.8105 19.5083 25C19.5083 28.0135 21.9667 30.4719 24.9801 30.4719C27.9936 30.4719 30.452 28.0135 30.452 25C30.452 23.8105 30.0555 22.7003 29.4211 21.7883Z" fill="white"/>
                            <path d="M32.8708 21.8279C33.2673 22.6209 33.5052 23.8897 33.5052 25C33.5052 29.6788 29.6987 33.5249 24.9802 33.5249C20.2617 33.5249 16.4552 29.7184 16.4552 25C16.4552 23.8501 16.6931 22.6209 17.0897 21.8279H12.2919V34.5559C12.2919 36.2212 13.759 37.6883 15.4243 37.6883H34.5361C36.2015 37.6883 37.6686 36.2212 37.6686 34.5559V21.8279H32.8708Z" fill="white"/>
                            <path d="M36.2411 13.0255H31.6416V18.2991H36.8755V13.6996V12.9858L36.2411 13.0255Z" fill="white"/>
                            <path d="M37.4306 0.0197754H12.5297C5.63045 0.0197754 0 5.65023 0 12.5495V37.49C0 44.3497 5.63045 49.9801 12.5297 49.9801H37.4703C44.3695 49.9801 50 44.3497 50 37.4504V12.5495C49.9604 5.65023 44.3299 0.0197754 37.4306 0.0197754ZM40.4441 21.7882V34.5558C40.4441 37.8865 37.8668 40.4639 34.5361 40.4639H15.4243C12.0936 40.4639 9.51626 37.8865 9.51626 34.5558V21.7882V15.444C9.51626 12.1133 12.0936 9.53603 15.4243 9.53603H34.5361C37.8668 9.53603 40.4441 12.1133 40.4441 15.444V21.7882Z" fill="white"/>
                        </svg>
                    </a>
                </article>
            </section>
        </div>
        <div class="border-line"></div>
        <div class="container">
            <section class="footer-copy">
                <span class="right">Copyright 2022&#169; Todos os direitos reservados.</span>
                <a href="https://ideapublicidade.com.br/" target="_blank">
                    <img class="logo-idea" src="<?php echo get_template_directory_uri(); ?>/assets/images/idea.png"/>
                </a>
            </section>
        </div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
