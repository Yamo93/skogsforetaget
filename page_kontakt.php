<?php 
/*
Template Name: Kontaktsida
*/
    get_header();
?>

<section class="contact">
        <h1 class="contact__title">Kontakta oss</h1>
        <p class="contact__text">Vill du kontakta oss och ta reda på mer information? Skicka då iväg ett meddelande via kontaktformuläret nedan.</p>

        <?php
        if (have_posts()) : 
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </section>

<?php
    get_footer();
?>