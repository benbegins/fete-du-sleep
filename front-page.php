<?php get_header(); ?>

<div class="home">

    <!-- HERO -->
    <section class="home-hero lg:min-h-screen flex items-center" id="hero">
        <div class="container md:grid md:grid-cols-2 md:items-center md:gap-14 lg:grid-cols-12 lg:gap-0">
            <!-- Texte -->
            <div class="md:col-start-2 lg:col-span-7 lg:col-start-6">
                <h1 class="home-hero__title reveal font-title text-2xl opacity-0">Bienvenue à <br>La Fête du Sleep&nbsp;!</h1>
                <div class="lg:w-7/12 lg:ml-auto">
                    <div class="home-hero__intro reveal my-10 text-lg opacity-0"><?php the_field('intro_site'); ?></div> 
                    <a href="#formules" class="home-hero__btn reveal btn-primary opacity-0">Voir mes formules</a>    
                </div>
            </div>
            <!-- Image -->
            <div class="mt-20 relative md:mt-0 md:col-start-1 md:row-start-1 lg:col-span-4">
                <div class="home-hero__img-container">
                    <?php 
                    $image = get_field('photo_intro'); 
                    ?>
                    <img 
                        class="home-hero__img"
                        src="<?= $image['sizes']['xl']; ?>" 
                        alt="<?= $image['alt']; ?>" 
                        srcset="<?= $image['sizes']['xxl'] . ' ' . $image['sizes']['xxl-width'] . 'w, ' . 
                            $image['sizes']['xl'] . ' ' . $image['sizes']['xl-width'] . 'w, ' .
                            $image['sizes']['large'] . ' ' . $image['sizes']['large-width'] . 'w, ' .
                            $image['sizes']['medium_large'] . ' ' . $image['sizes']['medium_large-width'] . 'w'; ?>"
                        sizes="(max-width: 1024px) 100vw,
                            70vh"
                    >    
                </div>
                <div class="home-hero__img-border"></div>
            </div>
        </div>
    </section> 

    <!-- SERVICES -->
    <section class="home-services section-pad" id="services">
        <div class="container">
            <div class="relative">
                <h2 class="section-title mb-5 lg:mb-0">Services</h2>
                <div class="md:grid md:grid-cols-2 md:gap-5 lg:grid-cols-12">
                    <div class="line-title"></div>
                    <div class="lg:col-span-6 lg:col-start-2 lg:pr-4">
                        <h3 class="font-title font-bold text-xl"><? the_field('titre_services') ?></h3>
                        <p class="font-title font-bold text-lg"><? the_field('sous-titre_services') ?></p>    
                    </div>
                    <div class="md:pl-4 lg:col-span-4">
                        <p class="mt-10 md:mt-0"><? the_field('paragraphe_1_services') ?></p>
                        <p class="mt-10"><? the_field('paragraphe_2_services') ?></p>
                    </div>    
                </div>
            </div>
        </div>
    </section>

    <!-- FORMULES -->
    <section class="home-formules section-pad overflow-hidden" id="formules">
        <div class="container md:grid md:grid-cols-3 md:gap-5 md:items-start lg:gap-10">

            <?php 
                $formules = get_field('formules');
                $index = 0;

                foreach($formules as $formule):
                    $index ++;
            ?>

            <div class="home-formules__item <?= 'formule-' . $index; ?>">

                <!-- Title -->
                <h2 class="font-title font-bold text-xl text-center"><?= $formule['titre']; ?></h2>

                <!-- Description -->
                <div class="my-5 leading-loose"><?= $formule['description']; ?></div>

                <!-- Price -->
                <h3 class="font-bold text-lg text-green text-center"><?= $formule['prix']; ?> €</h3>

                <!-- Mention -->
                <?php if($formule['mention']): ?>
                <p class="text-sm text-center mt-5"><?= $formule['mention']; ?></p>
                <?php endif; ?>

                <!-- icon -->
                <div class="home-formules__item__img">
                    <img src="<?= get_template_directory_uri() . '/dist/img/icon-formule-' . $index . '.svg'; ?>" alt="">
                </div> 

                <!-- Background -->
                <div class="home-formules__item__bg"></div> 
            </div>    

            <?php endforeach; ?>
        </div>
        <div class="text-center mt-20">
            <a href="#contact" class="btn-primary">Contactez-moi</a>
        </div>
    </section>

    <!-- QUI SUIS-JE -->
    <section class="home-quisuisje section-pad" id="quisuisje">
        <div class="container">
            <div class="relative">
                <h2 class="section-title mb-5 lg:mb-0">Qui suis-je ?</h2>
            </div>
            <div class="lg:grid lg:grid-cols-12 lg:gap-5 lg:items-center">
                <div class="line-title"></div>
                <h3 class="text-2xl font-bold font-title lg:col-span-10 lg:pb-10">Moi, c'est Candice.</h3>
                <div class="text-lg my-10 lg:my-0 lg:col-span-4 lg:col-start-2"><? the_field('intro_qui_suis-je') ?></div>
                <div class="relative lg:col-span-6">
                    <div class="home-quisuisje__img-container">
                        <?php 
                        $image = get_field('photo_qui_suis-je'); 
                        ?>
                        <img 
                            class="absolute object-cover w-full h-full"
                            src="<?= $image['sizes']['xl']; ?>" 
                            alt="<?= $image['alt']; ?>" 
                            srcset="<?= $image['sizes']['xxl'] . ' ' . $image['sizes']['xxl-width'] . 'w, ' . 
                                $image['sizes']['xl'] . ' ' . $image['sizes']['xl-width'] . 'w, ' .
                                $image['sizes']['large'] . ' ' . $image['sizes']['large-width'] . 'w, ' .
                                $image['sizes']['medium_large'] . ' ' . $image['sizes']['medium_large-width'] . 'w'; ?>"
                            sizes="(max-width: 1024px) 100vw,
                                70vh"
                        >   
                    </div>
                    <div class="home-quisuisje__img-border"></div>
                    <div class="home-quisuisje__certif-bedaine">
                        <img src="<?= get_template_directory_uri(); ?>/dist/img/certif-bedaine.png" alt="Certification Bedaine Urbaine">
                    </div>
                </div>
                <div class="lg:col-span-5 lg:col-start-7">
                    <div class="my-10"><?php the_field('paragraphe_1_qui_suis-je'); ?></div>
                    <h3 class="text-lg font-title font-bold">Je suis une Sleep Coach certifiée Bedaine Urbaine.</h3>
                    <div><?php the_field('paragraphe_bedaine_urbaine'); ?></div>
                </div>
            </div>
           
        </div>
    </section>

    <!-- Contact -->
    <section class="home-contact section-pad" id="contact">
        <div class="container">
            <div class="relative">
                <h2 class="section-title hidden lg:block">Contact</h2>
            </div>
            <div class="text-center">
                <h3 class="text-xl font-bold font-title">Contactez-moi !</h3> 
                <p class="mt-5 md:w-1/2 md:mx-auto lg:w-1/3">Envoyez-moi un mail ou contactez-moi par message privé sur mon <a href="https://www.instagram.com/lafetedusleep/" target="_blank" class="underline hover:text-green">compte Instagram</a>.</p>
                <div class="mt-10">
                    <a href="mailto:&#99;&#111;&#110;ta%63%74&#64;%6ca%66et%65%64%75s&#108;%65&#101;p%2e&#99;%6fm" class="btn-primary">Envoyez-moi un mail</a>
                    <a href="https://www.instagram.com/lafetedusleep/" target="_blank" class="btn-primary btn-transparent mt-5 md:mt-0 md:ml-5 lg:ml-10">Écrivez-moi sur Insta</a>
                </div>   
            </div>
        </div>
    </section>

</div>

    

<?php get_footer(); ?>