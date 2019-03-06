</main>
<!-- Footer -->


<footer>
    <div id="banner">
        <h1>D&D</h1>
        <p>Design et Développement Web</p>
        <i class="fa fa-facebook-square"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-dribbble"></i>
        <i class="fa fa-github-alt"></i>
        <i class="fa fa-codepen"></i>
        <i class="fa fa-linkedin"></i>
    </div>

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