<?php 
/**
 * @package      xups
 * @author       Jelon
 * @version      0.0.1
 * @since        2015-01-05
 * @todo         日志页面文件
 * @link         http://jelon.in
 *
 */

?>
<?php $this->need('header.php'); ?>
<!-- 文章部分 -->
<section class="content">
	<div class="content-main widget">
		<!-- 文章 -->
		<article class="post article">
			<header class="text-center">
				<h4 class="post-title"><a href="javascript: void(0);"><?php $this->title(); ?></a></h4>
			</header>
			<p class="post-meta text-center"> <?php $this->author(); ?> 发表于 <?php $this->date('Y-m-d g:i A'); ?></p>
			<div class="post-content">
				<?php $this->content(); ?>
			</div>
			<p class="post-meta">
				<span class="post-views">阅读 (<?php Views_Plugin::theViews('', '', 1); ?>)</span>
				<span class="post-cat">分类：<?php $this->category(','); ?></span>
				<span class="post-tags">
					标签：
					<?php $this->tags(' / ', true, '无'); ?>
				</span>
			</p>
		</article>
		<div class="article-share clearfix text-center">
			<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
			<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
		</div>
		<div class="article-nav clearfix">
			<span class="prev fl">
				<?php $this->thePrev('上一篇：<br >%s', '上一篇：<br >没有上一篇了'); ?>
			</span>

			<span class="prev fr">
				<?php $this->theNext('下一篇：<br >%s', '下一篇：<br >没有下一篇了'); ?>
			</span>
		</div>

		<!-- 文章评论 -->
		<?php $this->need('comments.php'); ?>
	</div>
</section>
<!-- / 文章部分 -->
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>