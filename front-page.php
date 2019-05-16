<?php 
    get_header();
?>
    <section class="hero">
        <div class="hero__left">
            <h1 class="hero__left-title">Vi sköter allt skogsrelaterat. Din <span>bekvämlighet</span> är vårt mål.</h1>
        </div>
        <div class="hero__right"></div>
    </section>
    <section class="features">
        <div class="features__box">
            <div class="features__box-img"></div>
            <div class="info">
                <h3 class="features__box-title">Senaste nytt</h3>
                <p class="features__box-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita hic ea nobis voluptate ratione dolore officiis a ut, excepturi consectetur? Iste, aspernatur aut voluptatibus voluptas assumenda unde magnam tempora molestias!</p>
                <a href="<?php echo site_url('/nyheter'); ?>" class="features__box-btn">Läs mer</a>
            </div>
        </div>
        <div class="features__box">
            <div class="features__box-img"></div>
            <div class="info">
                <h3 class="features__box-title">Om oss</h3>
                <p class="features__box-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita hic ea nobis voluptate ratione dolore officiis a ut, excepturi consectetur? Iste, aspernatur aut voluptatibus voluptas assumenda unde magnam tempora molestias!</p>
                <a href="<?php echo site_url('/om-oss'); ?>" class="features__box-btn">Läs mer</a>
            </div>
        </div>
        <div class="features__box">
            <div class="features__box-img"></div>
            <div class="info">
                <h3 class="features__box-title">Kontakta oss</h3>
                <p class="features__box-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita hic ea nobis voluptate ratione dolore officiis a ut, excepturi consectetur? Iste, aspernatur aut voluptatibus voluptas assumenda unde magnam tempora molestias!</p>
                <a href="<?php echo site_url('/kontakt'); ?>" class="features__box-btn">Läs mer</a>
            </div>
        </div>
    </section>
    

<?php
    get_footer();
?>