<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>后台菜单</title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/assets/admin/css/main.css" />
	<style type="text/css">
		 body ,dl, dt,dd,h2,ul,li{margin:0px;padding:0px;list-style-type:none}
		 body {font:13px Arial,Tahoma,"Simsun",sans-serif;text-align:left;}
		 
	</style>
</head>

<body>
 <div id="left-sidebar">
	<dl id="menu">
    <dt class="list_active"><span class="micon" id="menu_dashboard"></span><a href="<?php echo $this->createUrl('admin/main')?>"  target="mainFrame">快捷菜单</a></dt>
	
		<dt><span class="micon" id="menu_content"></span><a href="<?php echo $this->createUrl('article/view')?>"  target="mainFrame">内容管理</a></dt>
		<dd>
			<ul>
				<li><a href="<?php echo $this->createUrl('article/create')?>" target="mainFrame">文章发布</a></li>
                <li><a href="<?php echo $this->createUrl('article/admin')?>" target="mainFrame">文章管理</a></li>
			</ul>
		</dd>	
		<dt><span class="micon" id="menu_resource"></span><a href=""  target="mainFrame">资源管理</a></dt>
		<dd>
			<ul>
				<li><a href="" target="mainFrame">1</a></li>
                <li><a href="" target="mainFrame">1</a></li>
			</ul>
		</dd>	
		<dt><span class="micon" id="menu_user"></span><a href=""  target="mainFrame">用户管理</a></dt>
		<dd>
			<ul>
				<li><a href="" target="mainFrame">1</a></li>
                <li><a href="" target="mainFrame">1</a></li>
			</ul>
		</dd>
		<dt><span class="micon" id="menu_page"></span><a href=""  target="mainFrame">页面管理</a></dt>
		<dd>
			<ul>
				<li><a href="" target="mainFrame">1</a></li>
                <li><a href="" target="mainFrame">1</a></li>
			</ul>
		</dd>
		<dt><span class="micon" id="menu_manage"></span><a href=""  target="mainFrame">系统管理</a></dt>
		<dd>
			<ul>
				<li><a href="" target="mainFrame">1</a></li>
                <li><a href="" target="mainFrame">1</a></li>
			</ul>
		</dd>
		<dt><span class="micon" id="menu_caching"></span><a href=""  target="mainFrame">缓存管理</a></dt>	
		<dd>
			<ul>
				<li><a href="" target="mainFrame">1</a></li>
                <li><a href="" target="mainFrame">1</a></li>
			</ul>
		</dd>
	</dl>
 </div>
</body>
</html>
