</main>
<!-- Footer -->


<footer>
    <nav>
    <?php wp_nav_menu(array(
        'theme_location' => 'main',
        'container' => false
    )); ?>
    </nav>
    <div class="copyright">
        &copy; D&D
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>