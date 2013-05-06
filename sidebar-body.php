<aside class="body">
	<?php 

    if ( is_tree( '17' ) ) { // if current page is 'Programs' or it's ancestor...
        if ( ! dynamic_sidebar( 'programs' ) ?> 
            <h2>Programs</h2>
            <em>This is the additional sidebar content that is displayed only on the "Programs" page and it's ancestors.</em>
    <?php endif; endif; ?>
    
	<?php if ( ! dynamic_sidebar( 'sitewide' ) ) ?>
        <h2>Sitewide</h2>
        <em>This is the sidebar content that is displayed throughout the site.</em>
    <?php endif; ?>
    
</aside>