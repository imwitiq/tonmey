<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
<?php $backend = Yii::app()->request->baseUrl .'/assets/admin'?>
 body ,ul, li,h2{margin:0px;padding:0px;list-style-type:none}
 body {font:13px Arial,Tahoma,"Simsun" ,sans-serif;text-align:left;}
 #warp {height:60px; background:url('<?php echo $backend ?> /images/nav.gif') repeat-x ;}
 #logo {padding:5px; color:white}
 #info{ position:absolute; right:100px;top:10px}
 #info span{color:white;margin-right:10px;}
 #info a {text-decoration:none;color:#C8E2B1;} 
 #info a:hover {text-decoration:underline;} 
 #panel {position:absolute;right:250px;top:10px}
 #panel li{float:left;}
 #panel a{display:block;color:white;padding:0px 7px 0px 5px;}
 #panel a:hover {color:#DD4B39}
 #panel a.current{background-color:white;color:black;font-weight:bold;}
 #header { margin-top:-2px;height:50px;background:url('<?php echo $backend ?> /images/bg2.gif') repeat-x; border-bottom:1px solid #EEE; }
</style>
</head>
<body>
	<div id="warp">
		<div id="logo"><h2>Tonmey online</h2></div>
		<div id="info"><span>欢迎登录后台</span>
		<a href="<?php Yii::app()->createUrl('admin/loginout')?>" target="_top">退出</a></div>	
		<ul id="panel">
			<li><a href="" target="leftFrame">主菜单</a></li>
			<li><a href="" target="leftFrame">系统设置</a></li>
			<li><a href="" target="leftFrame">系统缓存</a></li>
			<li><a href="" target="leftFrame">访问主页</a></li>
		</ul>
		<div id="header"></div>
	</div>
</body>
</html>
