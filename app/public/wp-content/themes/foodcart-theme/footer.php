    <footer>
        <div class="footer-item">
            <a href="<?php echo site_url(); ?>" class="logo"><img src="#" alt="LOGO."></a>
        </div>
        <div class="footer-item">
            <h4 id="contact">Business Name</h4>
            <ul>
                <li><a href="email:#">food@cart.com</a></li>
                <li><a href="tel:#">111-111-1111</a></li>
                <li class="ad">1234 foodcart ave Gravytown, OR 97777</li>
                <ul class="socials">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>            
                </ul>
                </ul>
        </div>
        <div class="footer-item">
            <h4>Explore</h4>
            <nav>
                <?php wp_nav_menu(array(
                    'theme_location' => 'footerMenuLocation'
                )); ?>
            </nav>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>