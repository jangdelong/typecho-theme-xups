<?php 
/**
 * @package      xups
 * @author       Jelon
 * @version      0.0.1
 * @since        2015-01-05
 * @link         http://jelon.in
 * @todo         头部页面文件
 */

?>

<!DOCTYPE HTML>
<html lang="zh-CN"> 
<head>
<meta charset="<?php $this->options->charset(); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php 
$this->archiveTitle(array(
    'category'  =>  _t('分类 %s 下的文章'),
    'search'    =>  _t('包含关键字 %s 的文章'),
    'tag'       =>  _t('标签 %s 下的文章'),
    'author'    =>  _t('%s 发布的文章')
), '', ' - '); 
?><?php $this->options->title(); ?>
</title>
<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/normalize.css'); ?>" >
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>" >

<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<!--[if lt IE 9]>
<script src="<?php $this->options->themeUrl('js/html5.js'); ?>"></script>
<![endif]-->

<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>

</head>

<body class="home">
<!--[if lt IE 8]>
<div class="browsehappy">
    当前网页 <strong>不支持</strong> 
    你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>.
</div>
<![endif]-->

<!-- 博客头部 -->
<header class="header">
    <section class="container header-main">
        <div class="logo">
            <a href="<?php $this->options->siteUrl(); ?>">
                <div class="cover">
                    <span class="name"><?php $this->options->title(); ?></span>
                    <span class="description"><?php $this->options->description(); ?></span>
                </div>
            </a>
        </div>
        <div class="dropnav icon-paragraph-justify" id="JELON__btnDropNav"></div>

        <ul class="menu hidden" id="JELON__menu">
            <li class="item <?php if ($this->is('index')): ?>current<?php endif; ?>"><a class="icon-home" href="<?php $this->options->siteUrl(); ?>" title="首页"> 首页</a></li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while ($pages->next()): ?>
                <li class="item <?php if ($this->is('page', $pages->slug)): ?>current<?php endif; ?>"><a class="icon-<?php echo $pages->slug; ?>" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"> <?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
        <div class="profile clearfix">
            <div class="feeds fl">
                <p class="links">
                    <a href="#">百度</a>
                    |
                    <a href="#">腾讯UED</a>
                    |
                    <a href="#">百度UED</a>
                </p>
                <p class="sns">
                    <a href="#" class="sinaweibo"><b>■</b> 新浪微博</a>
                    <a href="#" class="qqweibo"><b>■</b> 腾讯微博</a>
                    <a href="javascript: void(0);" class="wechat">
                        <b>■</b> 
                        微信
                        <span class="popover">
                            <img src="<?php $this->options->themeUrl('img/wechat.png'); ?>" width="120" height="120" alt="我的微信" >
                            <i class="arrow"></i>
                        </span>
                    </a>
                </p>
            </div>
            <div class="avatar fr">
                <img src="<?php $this->options->themeUrl('img/1.jpg'); ?>" alt="avatar" title="Jelon" >
            </div>
        </div>
    </section>
</header>
<!--  / 博客头部 -->

<!-- body container -->
<div class="container body clearfix">