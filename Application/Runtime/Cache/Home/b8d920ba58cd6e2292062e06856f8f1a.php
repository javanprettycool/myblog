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
					<?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><!-- Post -->
						<article class="box post post-excerpt">
							<header>
								<!--
									Note: Titles and subtitles will wrap automatically when necessary, so don't worry
									if they get too long. You can also remove the <p> entirely if you don't
									need a subtitle.
								-->
								<h2><a href="#"><?php echo ($item["title"]); ?></a></h2>
								<p><?php echo ($item["remark"]); ?></p>
							</header> 
						</article>
						<hr /><?php endforeach; endif; else: echo "" ;endif; ?>
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

				<ul  style="margin-left: 10px;font-size: 16px;">
					<li class="current"><a href="<?php echo U('Index/index');?>">Home</a></li>
					<li><a href="<?php echo U('Archive/index');?>">Article</a></li>
					<li><a href="#">Photo</a></li>
					<li><a href="#">About Me</a></li>
					<li><a href="#">Login</a></li>
				</ul>


			<!-- Recent Posts -->
			<section class="box recent-posts">
				<header>
					<h2>Archive</h2>
				</header>
				<ul>
					<li><a href="#">Lorem ipsum dolor</a></li>
					<li><a href="#">Feugiat nisl aliquam</a></li>
					<li><a href="#">Sed dolore magna</a></li>
					<li><a href="#">Malesuada commodo</a></li>
					<li><a href="#">Ipsum metus nullam</a></li>
				</ul>
			</section>

			<!-- Calendar -->
			<section class="box calendar">
				<div class="inner">
					<table>
	<caption>July 2014</caption>
	<thead>
	<tr>
		<th scope="col" title="Monday">M</th>
		<th scope="col" title="Tuesday">T</th>
		<th scope="col" title="Wednesday">W</th>
		<th scope="col" title="Thursday">T</th>
		<th scope="col" title="Friday">F</th>
		<th scope="col" title="Saturday">S</th>
		<th scope="col" title="Sunday">S</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td colspan="4" class="pad"><span>&nbsp;</span></td>
		<td><span>1</span></td>
		<td><span>2</span></td>
		<td><span>3</span></td>
	</tr>
	<tr>
		<td><span>4</span></td>
		<td><span>5</span></td>
		<td><a href="#">6</a></td>
		<td><span>7</span></td>
		<td><span>8</span></td>
		<td><span>9</span></td>
		<td><a href="#">10</a></td>
	</tr>
	<tr>
		<td><span>11</span></td>
		<td><span>12</span></td>
		<td><span>13</span></td>
		<td class="today"><a href="#">14</a></td>
		<td><span>15</span></td>
		<td><span>16</span></td>
		<td><span>17</span></td>
	</tr>
	<tr>
		<td><span>18</span></td>
		<td><span>19</span></td>
		<td><span>20</span></td>
		<td><span>21</span></td>
		<td><span>22</span></td>
		<td><a href="#">23</a></td>
		<td><span>24</span></td>
	</tr>
	<tr>
		<td><a href="#">25</a></td>
		<td><span>26</span></td>
		<td><span>27</span></td>
		<td><span>28</span></td>
		<td class="pad" colspan="3"><span>&nbsp;</span></td>
	</tr>
	</tbody>
</table>
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