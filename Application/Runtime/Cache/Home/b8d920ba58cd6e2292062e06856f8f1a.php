<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--
	Striped by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Javan article</title>
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
					<h3 style="margin:20px 0 30px 0"><?php echo ($archive_title); ?></h3>
					<?php if(empty($article_list)): ?><p>暂时没有文章</p><?php endif; ?>
					<?php foreach($article_list as $year => $months):?>
						<?php foreach($months as $month => $articles):?>
					<!-- Post -->
						<div class="archive">
							<span class="date"><span class="month"><?php echo ($month); ?></span><span class="year">, <?php echo ($year); ?></span></span>
							<hr />
								<?php foreach($articles as $article):?>
									<p><a href="<?php echo U('./article-'.$article['id']);?>"><?php echo ($article["title"]); ?></a></p>
								<?php endforeach; ?>
						</div>
						<?php endforeach; ?>
					<?php endforeach; ?>

					<!-- Pagination -->
					<div class="pagination">
	<!--<a href="#" class="button previous">Previous Page</a>-->
	<div class="pages">
		<?php echo ($page); ?>
	</div>
	<?php echo ($single_next); ?>
</div>

				</div>
			</div>

		<!-- Sidebar -->
		<div id="sidebar" style="min-height: 2000px">
			<div>
				<ul  style="margin-left: 10px;font-size: 16px;">
					<li class="current"><a href="<?php echo U('Index/index');?>">Home</a></li>
					<li><a href="<?php echo U('Archive/index');?>">Article</a></li>
					<li><a href="#">Photo</a></li>
					<li><a href="#">About Me</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</div>

			<!-- Recent Posts -->
			<section class="box recent-posts">
				<header>
					<h2>Archive</h2>
				</header>
				<ul style="font-size:12px;padding-left: 10px;">
					<?php if(is_array($archive)): $i = 0; $__LIST__ = $archive;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('./archive-'.$item['a_id']);?>"><?php echo ($item["a_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
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