<?php
/**
 * Sidebar Template
 *
 * This template is used to display the sidebar section of the theme.
 *
 * @package My_WordPress_Theme
 */

// Check if the sidebar is active and display it
if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <aside id="secondary" class="widget-area">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #secondary -->
<?php endif; ?>