<?php get_header();?>

<div class="container content-page">
    <div class="row">
        <div class="offset-xl-1 col-xl-8 offset-md-1 col-md-7">
            <section role="main">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h1 class="text-left"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </section>
        </div>

        <div class="col-xl-3 col-md-4">
            <div class="quote-sidebar">
                <p>
                    “I do not believe that any of us would exchange places with any other people or any other
                    generation. The energy, the faith, the devotion which we bring to this endeavour will light our
                    country and all who serve it. And the glow from that fire can truly light the world.
                </p>

                <p>
                    And so, my fellow Americans, ask not what your country can do for you; ask what you can do for
                    your country. My fellow citizens of the world, ask not what America will do for you, but what,
                    together, we can do for the freedom of man.”
                </p>
                <div class="divider"></div>
                <div class="quote-author">
                    President Barack Obama
                </div>
                <div class="quote-info">
                    Speech at the 2008 Inaguration
                </div>
                <img class="flag" src="/wp-content/themes/dddc-theme/images/icon-flag.svg" alt="Flag Icon">
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
