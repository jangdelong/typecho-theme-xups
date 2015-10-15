<?php 
/**
 * @package      xups
 * @author       Jelon
 * @version      0.0.1
 * @since        2015-01-05
 * @todo         独立页面文件
 * @link         http://jelon.in
 *
 */

?>
<?php $this->need('header.php'); ?>
<!-- 页面部分 -->
<section class="content">
	<div class="content-main widget">
		<!-- 文章 -->
		<article class="post article">
			<header class="text-center">
				<h4 class="post-title"><a href="javascript: void(0);"><?php $this->title(); ?></a></h4>
			</header>

			<div class="post-content">
				<?php $this->content(); ?>
			</div>

		</article>


		<!-- 文章评论 -->
		<?php $this->need('comments.php'); ?>
	</div>
</section>
<!-- / 页面部分 -->
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>