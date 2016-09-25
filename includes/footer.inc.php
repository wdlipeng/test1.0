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
if (!defined('IN_TG')) {
    exit('Access Defined!');
}
$end_time=_runtime();
?>
<div id="footer">
<p>本次页面加载时间为<?php echo round(($end_time-START_TIME),4); ?>秒</p>
<p>版权所有 翻版必究</p>
<p>飘城俱乐部，源代码可以任意更改</p>
</div>