<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--
	Striped by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Javan的博客</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="/Public/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/Public/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/Public/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="/Public/assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Content -->
			<div id="content">
				<div class="inner">
					<!-- Post -->
						<article class="box post post-excerpt" style="min-height: 500px">
							<header>
								<!--
									Note: Titles and subtitles will wrap automatically when necessary, so don't worry
									if they get too long. You can also remove the <p> entirely if you don't
									need a subtitle.
								-->
								<h2><a href="#"><?php echo ($article["title"]); ?></a></h2>
								<p><?php echo ($article["remark"]); ?></p>
							</header>
							<div class="info">
								<!--
									Note: The date should be formatted exactly as it's shown below. In particular, the
									"least significant" characters of the month should be encapsulated in a <span>
									element to denote what gets dropped in 1200px mode (eg. the "uary" in "January").
									Oh, and if you don't need a date for a particular page or post you can simply delete
									the entire "date" element.

								-->
								<span class="date"><span class="month"><?php echo (date("M",$article["create_time"])); ?></span> <span class="day"><?php echo (date("j",$article["create_time"])); ?></span><span class="year">, <?php echo (date("Y",$article["create_time"])); ?></span></span>
								<!--
									Note: You can change the number of list items in "stats" to whatever you want.
								-->
								<ul class="stats">
									<li><a href="#" class="icon fa-comment"><?php echo ($article["comment_no"]); ?></a></li>
									<li><a href="#" class="icon fa-heart">32</a></li>
									<!--<li><a href="#" class="icon fa-twitter">64</a></li>
                                <li><a href="#" class="icon fa-facebook">128</a></li>-->
								</ul>
							</div>
							<?php if($item["img"] != ''): ?><a href="#" class="image featured"><img src="<?php echo ($item["img"]); ?>" alt="" /></a><?php endif; ?>
							<?php echo ($article["content"]); ?>
						</article>
					<div class="a-up">
						<p>上一篇：
							<?php if(empty($prev)): ?>&nbsp;没有了
								<?php else: ?>
							<a title="<?php echo ($prev['title']); ?>" href="<?php echo U('./article-'.$prev['id']);?>">&nbsp;<?php echo ($prev['title']); ?></a><?php endif; ?>
						</p>
					</div>
					<div class="a-down">
						<p>下一篇：
							<?php if(empty($next)): ?>&nbsp;没有了
							<?php else: ?>
								<a title="<?php echo ($prev['title']); ?>" href="<?php echo U('./article-'.$next['id']);?>">&nbsp;<?php echo ($next['title']); ?></a><?php endif; ?>
						</p>
					</div>

				</div>
			</div>

		<!-- Sidebar -->
		<div id="sidebar" style="min-height: 2000px">

	<!-- Logo -->
	<div class="top-section">
		<div class="profile-image">
			<img src="/Public/images/profile.jpg" alt="Javan">
		</div>
		<div class="profile-content">
			<h3 class="profile-title">Javan</h3>
			<p class="profile-description">tomorrow is another day</p>
		</div>
	</div>

	<!-- Nav -->
	<nav id="nav">
		<ul>
			<li class="<?php echo ($h); ?>"><a href="<?php echo U('Index/index');?>">Home</a></li>
			<li class="<?php echo ($a); ?>"><a href="<?php echo U('Archive/index');?>">Article</a></li>
			<li class="<?php echo ($p); ?>"><a href="#">Photo</a></li>
			<li class="<?php echo ($am); ?>"><a href="#">About Me</a></li>
			<li ><a href="#">Login</a></li>
			<li class="<?php echo ($e); ?>"><a href="<?php echo U('Article/index');?>">Add Article</a></li>
		</ul>
	</nav>

	<!-- Search -->
	<section class="box search">
		<form method="post" action="#">
			<input type="text" class="text" name="search" placeholder="Search" />
		</form>
	</section>
<!--
	&lt;!&ndash; Text &ndash;&gt;
	<section class="box text-style1">
		<div class="inner">
			<p>
				<strong>Striped:</strong> A free and fully responsive HTML5 site
				template designed by <a href="http://n33.co/">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a>
			</p>
		</div>
	</section>-->

	<!-- Recent Posts -->
	<section class="box recent-posts">
		<header>
			<h2>Recent Posts</h2>
		</header>
		<ul>
			<li><a href="#">Lorem ipsum dolor</a></li>
			<li><a href="#">Feugiat nisl aliquam</a></li>
			<li><a href="#">Sed dolore magna</a></li>
			<li><a href="#">Malesuada commodo</a></li>
			<li><a href="#">Ipsum metus nullam</a></li>
		</ul>
	</section>

	<!-- Recent Comments -->
	<section class="box recent-comments">
		<header>
			<h2>Recent Comments</h2>
		</header>
		<ul>
			<li>case on <a href="#">Lorem ipsum dolor</a></li>
			<li>molly on <a href="#">Sed dolore magna</a></li>
			<li>case on <a href="#">Sed dolore magna</a></li>
		</ul>
	</section>

	<!-- Calendar -->
	<section class="box calendar">
	<div class="inner">
		<?php echo ($calendar); ?>
	</div>
</section>

</div>

		<!-- Scripts -->
			<script src="/Public/assets/js/jquery.min.js"></script>
			<!--[if lte IE 8]><script src="/Public/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="/Public/assets/js/bootstrap.min.js"></script>
			<script src="/Public/assets/js/main.js"></script>

	</body>
</html>