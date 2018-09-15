<?php
/*
    Template Name: Company
*/
get_header(); ?>

    <p>
        トップページコンテンツ
    </p>

    <?php if ( have_posts() ) : ?>
    <!-- entry -->
    <section class="entry-list">
        <?php
        while ( have_posts() ) {
            the_post();
            get_template_part( 'content', get_post_format() );
        }

        // ページナビゲーション
        the_posts_pagination( array(
            'prev_text'          => '&lt; PREV',
            'next_text'          => "NEXT &gt;",
        ) );
        ?>
    </section>
    <!-- /entry -->

    <?php endif; ?>


<!-- /container -->

<?php get_footer(); ?>
