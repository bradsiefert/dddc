<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <section id="content" role="main">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="header">
                            <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
                        </header>
                        <section class="entry-content">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                            <?php the_content(); ?>
                            <div class="entry-links"><?php wp_link_pages(); ?></div>
                        </section>
                    </article>
                    <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
                <?php endwhile; endif; ?>
            </section>
        </div>
    </div>
</div>

<div class="container footer-callout">
    <div class="row">
        <div class="offset-lg-1 col-lg-4 col-sm-6">
            <dl class="dl-lg">
                <dt>Join Us on Slack</dt>
                <dd>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id
                    enim facilisis, at posuere turpis adipiscing.
                </dd>
                <div class="btn btn-primary btn-lg mb-5">Sign Up for DDDC Slack</div>
            </dl>
        </div>

        <div class="offset-lg-2 col-lg-4 col-sm-6">
            <dl class="dl-lg">
                <dt>Other Thing To Do…</dt>
                <dd>
                    Sed dictum a justo quis ultrices. Aenean congue orci quis tortor rhoncus fringilla. Mauris congue
                    mi eu mollis faucibus.
                </dd>
                <div class="btn btn-primary btn-lg mb-5">Do it!</div>
            </dl>
        </div>
    </div>
</div>

<?php get_footer(); ?>
