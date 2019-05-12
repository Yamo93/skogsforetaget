<?php 
    get_header();
?>

    <section class="post">
        <!-- <div class="post__img"></div> -->
        <?php 
            // check if the post has a Post Thumbnail assigned to it.
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else {

        ?>

        <div class="post__img"></div>
        
        <?php
            }
        ?>

        <?php 
            if (have_posts()) : 
                while (have_posts()) :
                    the_post();
        ?>
        <!-- <p class="post__date"> -->
            <p class="post__date">
            <?php foreach((get_the_category()) as $category){
                echo $category->name;
            }	?>    
            | <?php the_date(); ?> | Av <span><?php the_author(); ?></span></p>
        <!-- </p> -->

        <h1 class="post__title"><?php the_title(); ?></h1>

        <p class="post__para"><?php the_content(); ?></p>
        <?php
                endwhile;
            endif;
        ?>
        
    </section>

<?php
    get_footer();
?>