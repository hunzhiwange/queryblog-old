<?php if(!defined('DOYOUHAOBABY_ROOT')) {exit('hi,friend!');}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php dyhb_header();?>
</head>
<body>
<div class="header">
	<div id="header">
<div id="banner">
	<h1 id="blogtitle"><a href="./" title="<?php echo $front_common['2'];?>-<?php echo $dyhb_options[blog_title];?>-<?php echo $front_header['0'];?>"><?echo $dyhb_options[blog_title];?></a></h1>		
<p id="bloginfo"><?php echo $dyhb_options[blog_information];?></p>
 <div style="padding-top:50px;"><img src="<?php echo  $dyhb_options['default_header'];?>" width="880" height="138"/></div>
								</div>
</div>
<div class="clear"></div>
<div class='menu'>
<ul>
<?php $the_page=_blog_pagenavbar('current','');
if($the_page):foreach($the_page as $value):?>
<li id="<?php echo $value['css_id'];?>"><a href='<?php echo $value['url'];?>'><?php echo $value['name'];?></a></li>
<?endforeach;endif;?>
</ul>

	</div>

</div>
</div>
<!--wrap主体开始-->
<div id="wrap">
<div style="text-align:center;"><?php echo $dyhb_options['ad_header'];?></div>
<!-- content开始 -->
<div id="content-wrap">
<div class="blog_notice"><?php notice();?></div>