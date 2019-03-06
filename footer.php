</main>
<!-- Footer -->


<footer>


    <nav>
    <?php wp_nav_menu(array(
        'theme_location' => 'footer',
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