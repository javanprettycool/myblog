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
		<link rel="stylesheet" href="/Public/other/css/select2.min.css" />
	</head>
	<body>

		<!-- Content -->
			<div class="article-group">
				<div>
				<form class="form-horizontal">
					<div class="form-group">
						<label >文章标题</label>
						<input type="text" class="form-control input-sm" id="title" value="<?php echo ($info["a_title"]); ?>"/>
					</div>

					<div class="form-group">
						<label >分类</label>
						<select id="archive" style="width:200px;">
							<?php if(is_array($archive)): $i = 0; $__LIST__ = $archive;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><option value="<?php echo ($item["a_id"]); ?>"><?php echo ($item["a_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
					</div>

					<div class="form-group">
						<label >描述</label>
						<div>
							<textarea rows="3" class="form-control" id="remark" name="remark"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label >封面</label>
						<div>
							<div class="imageBox-article">
								<div class="thumbBox-article"></div>
								<div class="spinner" style="display: none">Loading...</div>
							</div>
							<?php if(!empty($info['id'])): ?><input id="img" value="<?php echo ($info["img"]); ?>" type="hidden" /><?php endif; ?>
							<input type="file" id="file"/>
							<p class="help-block">Example block-level help text here.</p>
						</div>
					</div>

					<div class="form-group">
						<label>文章内容</label>
						<script id="container" name="content" type="text/plain"></script>
					</div>

					<div class="form-group">
						<label  class="col-sm-2">显示</label>
						<div class="col-sm-10">
							<label><input type="radio" name="show" value="0" /> Not show</label>
							<label><input type="radio" name="show" value="1" checked/> Show</label>
							<label><input type="radio" name="show" value="2" /> Hot</label>
						</div>
					</div>

					<div class="form-actions">
						<button type="button" class="btn btn-success" id="add">提交</button>
					</div>
				</form>
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
			<script src="/Public/Other/Js/jquery-ui.custom.js"></script>
		<!--[if lte IE 8]><script src="/Public/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="/Public/assets/js/bootstrap.min.js"></script>
			<script src="/Public/other/js/jquery.gritter.min.js"></script>
			<script src="/Public/other/js/jquery.nicescroll.min.js"></script>
			<script src="/Public/assets/js/main.js"></script>
			<script src="/Public/Ueditor/ueditor.config.js"></script>
			<script src="/Public/Ueditor/ueditor.all.min.js"></script>
			<script src="/Public/other/js/cropbox-min.js"></script>
			<script src="/Public/assets/js/layer.js"></script>
			<script src="/Public/other/js/select2.full.min.js"></script>

		<script>
			$(document).ready(function(){
				var ue = UE.getEditor('container');
				//$('.spinner').spinner();
				var head = $('#img').val();
				if(!head){
					head = '/Public/images/pic01.jpg';
				}
				var options = {
					thumbBox: '.thumbBox-article',
					spinner: '.spinner',
					imgSrc: head
				};
				var cropper = $('.imageBox-article').cropbox(options);
				$('#file').on('change', function() {
					var reader = new FileReader();
					reader.onload = function(e) {
						options.imgSrc = e.target.result;
						cropper = $('.imageBox-article').cropbox(options);
					};
					reader.readAsDataURL(this.files[0]);
					this.files = [];
				});

				$('#archive').select2();

				$("#add").on('click', function () {
					var title = $('#title').val();
					var archive = $('#archive').val();
					var keyword = $('#keyword').val();
					var remark = $('#remark').val();
					var img = cropper.getDataURL();
					var content = UE.getEditor('container').getContent();
					var time = $('#time').val();
					var show = $('input[name="show"]:checked').val();

					$.ajax({
						type : 'post',
						url : "<?php echo U('Article/articleAdd');?>",
						async : true,
						data : {
							"title":title,
							"remark":remark,
							"img":img,
							"pid":archive,
							"time":time,
							"content":content,
							"view":show
						},
						success : function(data){
							if (data.error == 0) {
								layer.msg('新增成功');
								window.location.href="<?php echo U('Index/index');?>";
							} else {
								layer.msg('新增失败');
							}
						}
					});
				});


			});



		</script>


	</body>
</html>