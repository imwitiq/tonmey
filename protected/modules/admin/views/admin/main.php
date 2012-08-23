<?php $backend = Yii::app()->request->baseUrl .'/assets/admin'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台主页面</title>
<link rel="stylesheet" type="text/css" href="<?php echo $backend ?>/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $backend ?>/css/screen.css" />

<style type="text/css">
 body {font:13px Arial,Tahoma,"Simsun" ,sans-serif;text-align:left;} 
 #wrap { padding: 2em }
</style>
</head>
<body>
<div id="wrap">		
 	
	<p>资源上传</p>
	<div>
		<ul class="shortcut-buttons-set">
			<li>
				<a href="" class="shortcut-button">
				<span>
					<img alt="icon" src="<?php echo $backend?>/images/content_icons/flash.png" width=64 height=64><br />
					上传FLASH动画
				</span>
				</a>
			</li>

			<li>
				<a href="" class="shortcut-button">
				<span>
					<img alt="icon" src="<?php echo $backend?>/images/content_icons/audio.png" width=64 height=64><br />
					上传音乐
				</span>
				</a>
			</li>

			<li>
				<a href="" class="shortcut-button">
				<span>
					<img alt="icon" src="<?php echo $backend?>/images/content_icons/media.png" width=64 height=64><br />
					上传视频
				</span>
				</a>
			</li>

			<li>
				<a href="" class="shortcut-button">
				<span>
					<img alt="icon" src="<?php echo $backend?>/images/upload_file.png" width=64 height=64><br />
					上传应用
				</span>
				</a>
			</li>
			</ul>
		<div style="clear:both"></div>
	</div>

	<p>内容发布</p>
	<div>
		<ul class="shortcut-buttons-set">
			<li>
				<a href="<?php echo $this->createUrl('article/create');?>" class="shortcut-button">
				<span>
					<img alt="icon" src="<?php echo $backend?>/images/content_icons/richtext.png" width=64 height=64><br />
					 文章发布
				</span>
				</a>
			</li>	
		<div style="clear:both"></div>
	</div>


 
</div>
</body>
</html>
