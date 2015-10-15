<?php 
/**
 * @package      xups
 * @author       Jelon
 * @version      0.0.1
 * @since        2015-01-05
 * @todo         通用（分类、搜索、标签、作者）页面文件
 * @link         http://jelon.in
 *
 */

?>

<?php $this->need('header.php'); ?>
	<!-- 文章部分 -->
	<section class="content">
		<div class="content-main widget">
			<h3 class="widget-hd"><strong><?php $this->archiveTitle(array(
				'category' => _t('分类 ` %s ` 下的文章'),
				'search'   => _t('包含关键字 ` %s ` 的文章'),
				'tag'      => _t('标签 ` %s ` 下的文章'),
				'author'   => _t('` %s ` 发布的文章')
			), '', '');?></strong></h3>
			
			<?php if ($this->have()): ?>
				<?php while ($this->next()): ?>
				<!-- 文章 -->
				<article class="post">
					<header>
						<?php $this->category(','); ?>
						<h4 class="post-title"><a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a></h4>
					</header>
					<p class="post-meta"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> 发表于 <?php $this->date('Y-m-d'); ?></p>
					<div class="post-content">
 						<div  class="post-excerpt">
							<?php $this->excerpt(360, ' ... '); ?>
							<p class="more"><a href="<?php $this->permalink(); ?>" title="<?php $this->title(); ?>">阅读剩下更多</a></p>
						</div>
						<div class="post-thumbnail">
							<?php Thumbnail_Plugin::show($this); ?>
						</div> 
					</div>
					<p class="post-meta">
						<span class="post-views">阅读 (<?php Views_Plugin::theViews('', '', 1); ?>)</span>
						<a href="<?php $this->permalink(); ?>/#comments" class="post-comments">评论 (<?php $this->commentsNum(); ?>)</a>
						<span class="post-tags">
							标签：
							<?php $this->tags(' / ', true, '无'); ?>
						</span>
					</p>
				</article>
				<?php endwhile; ?>
			<?php else: ?>
				<article class="post article">
					<header class="text-center">
						<h4 class="post-title">Oooops, <?php _e('没有找到内容'); ?></h4>
					</header>
				</article>
			<?php endif; ?>
			<!-- 分页 -->

			<?php $this->pageNav('前一页', '后一页'); ?>
		</div>
	</section>
	<!-- / 文章部分 -->
	<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>