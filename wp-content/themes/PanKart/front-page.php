<?php get_header(); ?>
    <!-- Commencer la boucle principale permettant d'afficher la page -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="content">
    <div class="content__wysiwyg">
        <?php the_content(); ?>
    </div>
    <section class="members">
        <h2 class="members__title sro">Voici les membres de notre groupe !</h2>
        <div class="members__container">
            <!-- Commencer la boucle des projets -->
            <div class="members__slideshow">
                <div id="slideshow">
                    <div id="s1">
                        <div id="s2">
                            <div id="s3">
                                <a class="next next1" href="#s2">Next</a>
                                <a class="prev prev2" href="#s1">Prev</a> - <a class="next next2" href="#s3">Next</a>

                                <a class="prev prev3" href="#s2">Prev</a>
                                <ul id="sContent">
                                    <li><img src="https://picsum.photos/800/600"
                                             alt="Lorem Picsum"
                                             width="800" height="600"/></li>
                                    <li><img src="https://picsum.photos/800/600"
                                             alt="Lorem Picsum"
                                             width="800" height="600"/></li>
                                    <li><img src="https://picsum.photos/800/600"
                                             alt="Lorem Picsum"
                                             width="800" height="600"/></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin de la boucle des projets -->
        </div>
    </section>
    <!-- Fin la boucle principale permettant d'afficher la page -->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>