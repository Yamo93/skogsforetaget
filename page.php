<?php 
    get_header();
?>

<section class="page">
<?php
        if (have_posts()) : 
            while (have_posts()) :
                the_post();
                ?>
            <h1 class="page__title"><?php the_title(); ?></h1>
            <?php the_content(); ?>

            <?php
            endwhile;
        endif;
        ?>
    </section>

<?php
    get_footer();
?>