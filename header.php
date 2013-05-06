<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?> &#8249; University of Connecticut</title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<!-- **** UCONN TEMPLATE BEGINS **** -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen"/>
<!--[if gte IE 6]><style type="text/css">@import "http://web2.uconn.edu/webtools/test3/global/4.0/head-foot/hf-ie.css";</style><![endif]-->
<!--[if gte IE 6]><style type="text/css">@import "http://web2.uconn.edu/webtools/test3/global/4.0/middle/base/ie.css";</style><![endif]-->
<!--[if gte IE 6]><style type="text/css">@import "http://web2.uconn.edu/webtools/test3/global/4.0/middle/uconn/ie.css";</style><![endif]-->
<link rel="stylesheet" type="text/css" href="http://web2.uconn.edu/webtools/test3/global/4.0/head-foot/hf-print.css" media="print"/>
<link rel="stylesheet" type="text/css" href="http://web2.uconn.edu/webtools/test3/global/4.0/middle/uconn/print.css" media="print"/>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://web2.uconn.edu/webtools/global/4.0/head-foot/head.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/nav.js"></script>
<script type="text/javascript" src="https://alert.uconn.edu/alert/alert.js"></script>
<!-- **** UCONN TEMPLATE ENDS **** -->
</head>
<body>
<div id="uc-skip"> <a href="#skipSearch">Skip to Search</a><br/>
	<a href="#skipNav">Skip to Navigation</a><br/>

	<a href="#skipContent">Skip to Content</a> </div>
<div id="uc-head-wrap">
	<div id="uc-head" class="container">
		<h1><a href="http://uconn.edu" id="uc-uconn"><img src="http://web2.uconn.edu/webtools/global/4.0/head-foot/images/uconn-blueG.png" alt="University of Connecticut" width="229" height="90" /></a> <strong id="uc-website-title"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></strong></h1>
		<div id="uc-search"> <a name="skipSearch" id="skipSearch"></a>
			<form action="http://uconn.edu/search.php" method="get">
				<fieldset>
					<legend id="uc-search-legend">Search</legend>
					<ul>
						<li>
							<label for="cx1">
								<input type="radio" id="cx1" checked="checked" value="004595925297557218349:65_t0nsuec8" name="cx" />
								UConn </label>
						</li>
						<li>
							<label for="cx3">
								<input type="radio" id="cx3" value="people" name="cx" />
								People </label>

						</li>
					</ul>
					<label id="uc-search-keyword">Keyword</label>
					<input type="text" size="17" class="searchBox" name="q" id="q" title="Search..."/>
					<input type="hidden" value="160" name="page_id"/>
					<input type="hidden" value="FORID:10" name="cof"/>
					<input type="hidden" value="UTF-8" name="ie"/>
					<input type="submit" name="sa" id="sa" value="Go" />

				</fieldset>
			</form>
		</div>
	</div>
	<!--head-->
</div>
<script type="text/javascript">doCufon();</script> 
<!--head-wrap-->


<!--above this point, no change from huskypress theme-->


<div class="wrap nav"> <a name="skipNav" id="skipNav"></a>
	<div id="nav" class="content nav"><!--must have #nav for superfish to work...-->
		<div class="sf-menu sf-js-enabled sf-shadow"><!--can't get rid of this unless i want to come up with an alternative to superfish...-->
            
		  <?php  wp_nav_menu(); ?>
	
        </div>
        <div class="clear"></div><!-- not ideal, but this is the only way since overflow:auto breaks the dropdowns. -->
    </div><!--CLOSE .wrap.nav-->
	<a name="skipContent" id="skipContent"></a>
</div><!--CLOSE .content.nav-->

<div class="wrap body">
	<div class="content body" role="main">