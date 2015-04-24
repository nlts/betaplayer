<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>WREK Live Stream</title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/grid_player_beta.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bar-ui.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/Skeleton-2.0.4/css/skeleton.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/Skeleton-2.0.4/css/normalize.css" type="text/css" media="screen" />
	<?php wp_enqueue_script('jquery'); ?>
	<script type="text/javascript" src="http://www3.eng.wrek.org/wp-includes/js/jquery/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('wpurl'); ?>/wp-content/plugins/song-request/widget.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/soundmanager2.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/bar-ui.js"></script>
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
		body { margin-top: 10px; margin-right: 5px; margin-left: 5px; }
		#widget_sp img { display: block; margin: 0 auto; }
		.widget-hidden { display: none; }
		#stream-now-playing h4 { text-transform: none; }
		#stream-playlist { min-height: 140px; max-height: 140px; overflow: auto; }
		#stream-options { position: inherit; bottom: 0; right: 0; }
		#player-top { position: relative; margin-bottom: 20px; }
		#player-logo { height: 110px; }
		#stream-now-playing { margin-bottom: 0px; }
		#stream-flash-player { border: 1px solid #DBDDDE; border-top: 0px none; background: #fff; height: 30px; }
		#stream-now-links { margin-top: 27px; }
		.stream-playlist-time { color: #835B6C; }
		#stream-song a { color: #835B6C; font-weight: bold; }
                #stream-show { line-height: 1.5rem; }
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

		.sm2-bar-ui {
		 font-size: 16px;
		}
		.sm2-bar-ui .sm2-main-controls,
		.sm2-bar-ui .sm2-playlist-drawer {
		 background-color: #6795D0;
		}
		.column {
			min-width: 300px;
			max-width: 350px;
		}
		.container {
			max-width: 720px;
		}

		input.streamSelect {
			background: #F1F1F1;
			display: block;
			color: #000;
			font-size: 11px;
			line-height: 20px;
			font-weight: bold;
			padding: 2px 5px;
			height: 24px;
			width: auto;
			margin-bottom: -20px;
			margin-top: -10px;
		}
		input.streamSelect:hover {
			background: #835B6C;
			color: #fff;
		}
		.sm2-bar-ui {
			padding-top: 0.4em;
		}
		#stream-list {
			margin-right: 53px;
			float:right;
			width: 50px;
			margin-top: -80px;
		}
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
$streamclass = ($stream == "hd2")?"hd2":"onair"; 
switch($stream) {
	case "hd2":
		$stream_url = "http://streaming.wrek.org:8000/wrek_HD-2";
		break;
	case "24kbps":
		$stream_url = "http://streaming.wrek.org:8000/wrek_live-24kb-mono";
		break;
	default:
		$stream_url = "http://streaming.wrek.org:8000/wrek_live-128kb";
	}
?>

<body id="stream-player">
	<div class="container" id="<?=$streamclass?>">
		<div class="one-half column feature" id="player-left">
			<div class="clearfix" id="player-top">
				<a href="<?php echo home_url( '/' ); ?>" target="_blank" id="player-logo">
					<img src="<?php bloginfo('template_directory'); ?>/images/tinylogo.png" alt="<?php bloginfo('name'); ?>" />
				</a>
					<div id="stream-list" class="clearfix">
						<form><input class="streamSelect" type="button" value="On Air (Hi-Fi)"  onclick="location.href='?stream=128kbps'"></form>
						<form><input class="streamSelect" type="button" value="On Air (Lo-Fi)"  onclick="location.href='?stream=24kbps'"></form>
						<form><input class="streamSelect" type="button" value="HD2"  onclick="location.href='?stream=hd2'"></form>
					</div>
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
				<div class="sm2-bar-ui  flat full-width">
			 <div class="bd sm2-main-controls">
			  <div class="sm2-inline-texture"></div>
			  <div class="sm2-inline-gradient"></div>
			  <div class="sm2-inline-element sm2-button-element">
			    <div class="sm2-button-bd">
			    <div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
			    <a href="#play" class="sm2-inline-button play-pause">Play / pause</a>
			   </div>
			  </div>
			  <div class="sm2-inline-element sm2-inline-status">
			   <div class="sm2-playlist">
			    <div class="sm2-playlist-target">
			     <!-- playlist <ul> + <li> markup will be injected here -->
			     <!-- if you want default / non-JS content, you can put that here. -->
			     <noscript><p>JavaScript is required.</p></noscript>
			    </div>
			   </div>
			   <div class="sm2-progress" style="display:none;">
			    <div class="sm2-row">
			    <div class="sm2-inline-time">0:00</div>
			     <div class="sm2-progress-bd">
			      <div class="sm2-progress-track">
			       <div class="sm2-progress-bar"></div>
			       <div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
			      </div>
			     </div>
			     <div class="sm2-inline-duration">0:00</div>
			    </div>
			   </div>
			  </div>
			  <div class="sm2-inline-element sm2-button-element sm2-volume">
			   <div class="sm2-button-bd">
			    <span class="sm2-inline-button sm2-volume-control volume-shade"></span>
			    <a href="#volume" class="sm2-inline-button sm2-volume-control">volume</a>
			   </div>
			  </div>
			 </div>
			 <div class="bd sm2-playlist-drawer sm2-element">
			  <div class="sm2-inline-texture">
			   <div class="sm2-box-shadow"></div>
			  </div>
			  <div class="sm2-playlist-wrapper">
			    <ul class="sm2-playlist-bd">
			    <li id="onair">
			      <a href=<?=$stream_url?>>
			      <!--
			        <b><span id="stream-show"></span></b>
			        <span id="stream-song"></span>
			        -->
			      </a>
			    </li>
			    </ul>
			  </div>
			 </div>
			</div>
			</div>
		
		</div>
		<div class="one-half column feature" id="sidebar">
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
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/player.js"></script>
</body>
</html>
