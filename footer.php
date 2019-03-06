</main>
<!-- Footer -->


<footer>
    <div>
        <h1>D&D</h1>
        <p>Design et Développement Web</p>
        <i class="fab fa-facebook-square"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-dribbble"></i>
        <i class="fab fa-github-alt"></i>
        <i class="fab fa-codepen"></i>
        <i class="fab fa-linkedin"></i>
    </div>

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