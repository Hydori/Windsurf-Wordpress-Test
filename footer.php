    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="site-info">
            <nav aria-label="<?php esc_attr_e( 'Menu pied de page', 'mon-theme' ); ?>">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'menu_id'        => 'footer-menu',
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav>

            <p>
                &copy; <?php echo date( 'Y' ); ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </p>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
