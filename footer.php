</main>

<footer>
    <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container'      => false,
            'menu_class'     => 'footer-menu',
        ));
    ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>