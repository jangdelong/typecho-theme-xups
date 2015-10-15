<?php 
/**
 * @package      xups
 * @author       Jelon
 * @version      0.0.1
 * @since        2015-01-05
 * @todo         404页面文件
 * @link         http://jelon.in
 *
 */

?>
<?php $this->need('header.php'); ?>
	<!-- 文章部分 -->
	<section class="content">
		<div class="content-main widget">
			<h3 class="widget-hd"><strong>Ooops, 404!!</strong></h3>
			<!-- 文章 -->
			<article class="post article">
				<header class="text-center">
					<h4 class="post-title">Oooops, 404! <?php _e('页面没找到'); ?></h4>
				</header>
			</article>
		</div>
	</section>
	<!-- / 文章部分 -->
	<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>