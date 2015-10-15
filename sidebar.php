<?php 
/**
 * @package      xups
 * @author       Jelon
 * @version      0.0.1
 * @since        2015-01-05
 * @todo         侧边栏页面文件
 * @link         http://jelon.in
 *
 */

?>
<!-- 侧栏部分 -->
<aside class="sidebar">
	<!-- 搜索 -->
	<section class="widget" id="searchform">
		<h3 class="widget-hd"><strong>搜索一下</strong></h3>
		<form class="search-form" method="post" action="./" role="search" >
			<input type="text" name="s" class="form-control" placeholder="搜一下又不会怀孕~" >
			<input type="submit" class="btn" value="搜索" >
		</form>
	</section>

	<!-- 最新文章 -->
	<section class="widget">
		<h3 class="widget-hd"><strong><?php _e('文章分类'); ?></strong></h3>
		<ul class="widget-bd">
			<?php 
				$this->widget('Widget_Metas_Category_List')
					->parse('<li><a href="{permalink}">{name}</a> <span class="badge">( {count} )</span></li>'); 
			?>
		</ul>
	</section>

	<section class="widget">
		<h3 class="widget-hd"><strong><?php _e('最近评论'); ?></strong></h3>
		<ul class="ds-recent-comments" data-num-items="10" data-show-avatars="1" data-show-time="1" data-show-admin="1" data-excerpt-length="70"></ul>
		<!--多说js加载开始，一个页面只需要加载一次 -->
		<script type="text/javascript">
			var duoshuoQuery = {short_name:"jelon123"};
			(function() {
				var ds = document.createElement('script');
				ds.type = 'text/javascript';ds.async = true;
				ds.src = 'http://static.duoshuo.com/embed.js';
				ds.charset = 'UTF-8';
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
			})();
		</script>
		<!--多说js加载结束，一个页面只需要加载一次 -->
	</section>
</aside>
<!-- / 侧栏部分 -->