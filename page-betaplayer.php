<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
	<title>WREK Live Player</title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/grid_player.css" type="text/css" media="screen" />
	<?php wp_enqueue_script('jquery'); ?>
	<script type="text/javascript" src="http://www3.eng.wrek.org/wp-includes/js/jquery/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('wpurl'); ?>/wp-content/plugins/song-request/widget.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/player.js"></script>
	<style type="text/css">
		#player-logo { background: url('<?php bloginfo('template_directory'); ?>/images/tinylogopurple.png'); width: 110px; height: 110px; display: block }
		#player-logo img {
			background-color: #FBFBFB;
			opacity: 100;
			filter: alpha(opacity=100);
		} #player-logo:hover img {
			opacity: 0;
			filter: alpha(opacity=0);
		} #player-logo:hover, #player-logo, #player-logo img {
			-webkit-transition: all .2s ease-in;
			-moz-transition: all .2s ease-in;
			transition: all .2 ease-in;
		}
		html, body { height: auto; }
		body { margin-top: 10px; }
		#widget_sp img { display: block; margin: 0 auto; }
		.widget-hidden { display: none; }
		#stream-now-playing h4 { text-transform: none; }
		#stream-playlist { height: 90px; overflow: auto; }
		#stream-options { position: absolute; bottom: 0; right: 0; }
		#player-top { position: relative; margin-bottom: 20px; }
		#player-logo { height: 110px; }
		#stream-now-playing { margin-bottom: 0px; }
		#stream-flash-player { border: 1px solid #DBDDDE; border-top: 0px none; background: #fff; height: 30px; }
		#stream-now-links { margin-top: 27px; }
		.stream-playlist-time { color: #835B6C; }
		#stream-song a { color: #835B6C; font-weight: bold; }
		#stream-frame { border-right: 1px #DBDDDE solid; display: inline-block; float: left; }
		#stream-support { display: inline-block; width: 138px; height: 30px; line-height: 30px; color: #835B6C; float: right; font-size: 15px; text-align: center; *display: block; }
		#stream-support:hover, #player-menu li a:hover { text-decoration: underline; }
		#player-menu { float: right; font-size: 15px; }
		#player-menu li { float: left; margin-left: 15px; }
		#player-menu li:first-child { margin-left: 0; }
		#player-menu li a { color: #929496; }
		#stream-options { text-transform: uppercase; color: #fff; margin-right: 0; }
		#stream-options li { float: left; width: 150px; height: 24px; }
		#stream-options li a { background: #F1F1F1; display: block; color: #000; font-size: 12px; line-height: 20px; font-weight: bold; padding: 2px 5px; }
		#stream-options li a:hover { background: #835B6C; color: #fff; }
		#stream-options li ul { position: absolute; left: -999em; }
		#stream-options li:hover ul { left: auto; bottom: 24px; }
		#stream-options li:hover li { border-bottom: 1px #fff solid; }
		#arrow { border-left: 1px solid #FFFFFF;
		color: #835B6C;
		float: right;
		height: 22px;
		margin-right: -5px;
		margin-top: -2px;
		padding-top: 2px;
		text-align: center;
		width: 22px;
		display: block;
		*display: none; }
		#stream-options a:hover #arrow { color: #fff; }
	</style>
	<script type="text/javascript">//<![CDATA[
	// Google Analytics for WordPress by Yoast v4.1.3 | http://yoast.com/wordpress/google-analytics/
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount','UA-25459132-1']);
	_gaq.push(['_setCustomVar',1,'logged-in','administrator',1],['_trackPageview'],['_trackPageLoadTime']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	//]]></script>
</head>
<?php $stream = $_GET["stream"];
$streamclass = ($stream == "hd2")?"hd2":"onair"; ?>
<body id="stream-player">
	<div class="container_18" id="<?=$streamclass?>">
		<div class="grid_9 suffix_1" id="player-left">
			<div class="clearfix" id="player-top">
				<a href="<?php echo home_url( '/' ); ?>" target="_blank" id="player-logo">
					<img src="<?php bloginfo('template_directory'); ?>/images/tinylogo.png" alt="<?php bloginfo('name'); ?>" />
				</a>
				<ul id="stream-options" class="grid_4 prefix_2">
					<li><a href="?stream=128kbps">Pick a Stream <span id="arrow">&#x25B2;</span></a>
						<ul id="stream-list" class="clearfix">
							<li><a href="?stream=128kbps">On Air (Hi-Fi)</a></li>
							<li><a href="?stream=24kbps">On Air (Lo-Fi)</a></li>
							<li><a href="?stream=hd2">HD2</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div id="stream-player-group">
				<div class="widget" id="stream-now-playing">
					<h4>WREK Program Stream</h4>
					<h5 id="stream-show"><a href="/shows/" target="_blank"><?=($stream == "hd2")?"HD2":"Unknown"?></a></h5>
					<span id="stream-song"></span>
					<span class="widget-links" id="stream-now-links">
						<a href="/schedule/" target="_blank">Schedule</a> | <a href="/playlist/" target="_blank">Playlist</a> | <a href="/shows/" target="_blank">Shows</a> | <a href="/library/" target="_blank">Library</a> | <a href="/archive/" target="_blank">Archive</a>
					</span>	
				</div>
				<div id="stream-flash-player">
					<iframe src="/wp-content/scripts/ffmp3/player.php?stream=<?=$stream?>" width="209" height="30" scrolling="no" id="stream-frame" frameborder="0">Sorry, you need support for iframes and flash!</iframe>
					<a href="http://www.wrek.org/donate/" id="stream-support" target="_blank">Support WREK</a>
				</div>
			</div>
		</div>
		<div class="grid_8" id="sidebar">
			<div class="widget clearfix" id="stream-playlist">
				<h4>Recent Tracks</h4>
				<ul id="playlist">
					<li><?=($stream == "hd2")?"HD2 doesn't currently have a playlist. Coming soon!":"No recent tracks available."?></li>
				</ul>
			</div>
			<?php the_widget("SongRequestWidget", array('title' => "Request A Song"), array(
		'before_widget' => '			<div id="stream-songrequest" class="widget widget_songrequestwidget clearfix">',
		'after_widget' => '					</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>')); ?>
			<ul id="player-menu">
				<li><a href="/help/" target="_blank">Help</a></li>
				<li><a href="/contact/" target="_blank">Contact Us</a></li>
				<li><a href="/listen/" target="_blank">More Ways to Listen</a></li>
			</ul>
		</div>
	</div>
</body>
</html>
