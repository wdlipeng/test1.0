<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date: 2016-6-10
*/

define('IN_TG', true);
require  dirname(__FILE__).'\includes\common.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>多用户留言系统-注册</title>
<link rel="shortcut icon"  href="favicon.ico"/>
<link rel="stylesheet" type="text/css" href="styles/1/basic.css" /> 
<link rel="stylesheet" type="text/css" href="styles/1/register.css" /> 
</head>
<body>
<?php require ROOT_PATH.'/includes/header.inc.php';?>
<div id=register>
<h2>用户注册</h2>
<form method="post" action='post.php'>
<dl>
<dt>请认真填写一下内容</dt>
			<dd>用 户 名：<input type="text" name="username" class="text" /> (*必填，至少两位)</dd>
			<dd>密　　码：<input type="password" name="password" class="text" /> (*必填，至少六位)</dd>
			<dd>确认密码：<input type="password" name="notpassword" class="text" /> (*必填，同上)</dd>
			<dd>密码提示：<input type="text" name="question" class="text" /> (*必填，至少两位)</dd>
			<dd>密码回答：<input type="text" name="answer" class="text" /> (*必填，至少两位)</dd>
			<dd>性　　别：<input type="radio" name="sex" value="男" checked="checked" />男 <input type="radio" name="sex" value="女" />女</dd>
			<dd id="face" class="face"><input type="hidden" name="face" value="face/m01.gif" /><img src="face/m01.gif" alt="头像选择" onclick="javascript:window.open('face.php','face','width=400,height=400,top=0,left=0')" id="faceimg" /></dd>
			<dd>电子邮件：<input type="text" name="email" class="text" /> (*必填，激活账户)</dd>
			<dd>　Q Q 　：<input type="text" name="qq" class="text" /></dd>
			<dd>主页地址：<input type="text" name="url" class="text" value="http://" /></dd>
			<dd>验 证 码：<input type="text" name="code" class="text yzm"  /> <img src="code.php" id="code" /></dd>
			<dd><input type="submit" class="submit" value="注册" /></dd>
<dd></dd>
</dl>
</form>
</div>
<?php
require ROOT_PATH.'/includes/footer.inc.php';
?>
</body>
</html>