    </div><!--CLOSE .content.body-->
</div><!--CLOSE .wrap.body-->

<div id="uc-foot-wrap" class="wrap foot">
    
    <div class="content foot"><!--TODO: dynamic sidebar in footer-->
        
        <?php
        get_sidebar( 'foot' ); // includes sidebar-foot.php
        ?>
        
    </div>
    
<!--below this point, no change from huskypress-->

	<div id="uc-foot" class="container">
		<ul id="uc-foot-links">
			<li><a href="http://uconn.edu/azindex.php">UConn A-Z Index</a></li>
			<li><a href="http://uconn.edu/">UConn Home</a></li>
			<li><a href="http://transcoder.usablenet.com/tt/referrer">Text Only</a></li>
			<li><a href="http://uconn.edu/disclaimers-and-copyrights.php">Disclaimers,
					Privacy &amp; Copyright</a></li>
	
			<li><a href="<?php bloginfo('url'); ?>/wp-admin/">Secure Login</a></li>
			<li id="uc-copyright">&copy; University of Connecticut</li>
		</ul>
	</div>
</div>
<!--foot-wrap-->
<?php /* "Just what do you think you're doing Dave?" */ ?>

    <?php wp_footer(); ?>
</body>
</html>