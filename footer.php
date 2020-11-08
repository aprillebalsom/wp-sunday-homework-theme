<?php wp_footer(); ?>

<?php
    $args = [
        'theme_location' => 'footer-menu',
    ];
    wp_nav_menu( $args );
?>

</body>
</html>