<?php 
    get_header();
?>
        <div class="newswrapper">
    <section class="mainnews">
        <?php echo do_shortcode('[adl-post-slider id=64]'); ?>
        <div class="wrapper">
            <?php 
            global $wp_query;
            $args = array_merge( $wp_query->query_vars, ['posts_per_page' => 4 ] );
            query_posts( $args );

                if (have_posts()) : 
                    while (have_posts()) : 
                        the_post();
                        ?>

            <div class="mainnews__box">
                <?php // the_content(); ?>
                <div class="mainnews__box-topinfo">
                    <p class="subject">
                    <?php foreach((get_the_category()) as $category){
                        echo $category->name."<br>";
                    }	?>    
                    </p>
                    <p class="date"><?php echo get_the_date(); ?></p>
                </div>
                <!-- <div class="mainnews__box-img"></div> -->
                <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('medium');
                } else { 
                ?>
                <div class="mainnews__box-img"></div>
                <?php
                }
                ?>
                <div class="mainnews__box-info">
                    <h3 class="title"><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <p class="author">Av <strong><?php the_author(); ?></strong></p>
                    <a href="<?php the_permalink(); ?> " class="readmore">Läs mer</a>
                </div>
            </div>

                <?php 
                    endwhile;
                endif;
            ?>
        </div>
    </section>
    <section class="newsfeed">
        <h2 class="newsfeed__title">Urval av artiklar</h2>
        <div class="newsfeed__feed">
        <?php 
            get_search_form();
            global $wp_query;
            $args = array_merge( $wp_query->query_vars, ['posts_per_page' => 3, 'orderby' => 'rand'] );
            query_posts( $args );
            if (have_posts()) : 
                while (have_posts()) :
                    the_post();
                    ?>
                <div class="newsfeed__post">
                    
                    <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('thumbnail');
                        } else { 
                    ?>
                    <img src="<?php bloginfo('template_directory'); ?>/img/mini1.jpg" alt="Bild på arbetare" class="newsfeed__post-img">
                    <?php
                        }
                    ?>
                    <div class="info">
                        <h3 class="title"><?php the_title(); ?></h3>
                        <p class="date"><?php echo get_the_date(); ?></p>
                        <a href="<?php the_permalink(); ?> " class="readmore">Läs mer</a>
                    </div>
                </div>
                    <?php
                endwhile;
            endif;
        ?>
        </div>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Widgets") ) : ?>
        <?php endif;?>

    </section>
    </div>

<?php
    get_footer();
?>