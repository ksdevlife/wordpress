

<?php get_header(); ?>
    <h1>page.html</h1>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>

            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

            <?php
            the_content();
        }
    }
    ?>
<?php get_footer(); ?>