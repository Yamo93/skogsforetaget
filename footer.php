<footer class="footer">
    <?php wp_nav_menu(array( 'theme_location' => 'footer_menu' )); ?>
        <p class="socialfollow">Följ oss på</p>
        <div class="socialmedia">
            <i class="fab fa-instagram icon"></i>
            <i class="fab fa-facebook-f icon"></i>
            <i class="fab fa-twitter icon"></i>
            <i class="fab fa-pinterest-p icon"></i>

        </div>
        <p class="copy">Copyright &copy; 2019 av <span>Yamo Gebrewold</span></p>
        <?php wp_footer(); ?>
    </footer>

    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
</body>
</html>