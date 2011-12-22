<?php
include("conn.php");
include("notice.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<TITLE>公告文件</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<style type="text/css">
*{
margin:0 auto;
}
body {
	font-size:12px;
	font-family:"宋体";
	background:#DFEAF4;
	text-align:center;
}
a {color:000000; text-decoration:none;}
a:hover {color:993333;}
#top10 {
	border:1px solid #336699;
	width:400px;
	height:100px;
	background:#fff;
	text-align:left;
	opacity:.6; filter:alpha(opacity=60);
}
#top10 ul {
	padding:5px;
}
#top10 ul li {
	height:15px;
	list-style:none;
	padding-left:35px;
	line-height:18px;
	border-bottom:1px solid #fff;
}
.li_01 { background:#AFCAE4 url(image/top/01.gif) no-repeat; }
.li_02 { background:#BFD5EA url(image/top/02.gif) no-repeat; }
.li_03 { background:#CFDFEF url(image/top/03.gif) no-repeat; }
.li_04 { background:#DFEAF4 url(image/top/04.gif) no-repeat; }
.li_05 { background:#EFF4FA url(image/top/05.gif) no-repeat; }
.li_06 { background:#EFF4FA url(image/top/06.gif) no-repeat; }
.li_07 { background:#EFF4FA url(image/top/07.gif) no-repeat; }
.li_08 { background:#EFF4FA url(image/top/08.gif) no-repeat; }
.li_09 { background:#EFF4FA url(image/top/09.gif) no-repeat; }
.li_10 { background:#EFF4FA url(image/top/10.gif) no-repeat; }

</style>
</HEAD>
<BODY>
<div id="top10">
  <ul>
    <li class="li_01"><?=$yxgg1?></li>
    <li class="li_02"><?=$yxgg2?></li>
    <li class="li_03"><?=$yxgg3?></li>
    <li class="li_04"><?=$yxgg4?></li>
    <li class="li_05"><?=$yxgg5?></li>
    <li class="li_06"><?=$yxgg6?></li>
    <li class="li_07"><?=$yxgg7?></li>
    <li class="li_08"><?=$yxgg8?></li>
    <li class="li_09"><?=$yxgg9?></li>
    <li class="li_10"><?=$yxgg10?></li>
	<li class="li_11"> 服务器状态:
      <?php
switch ($rs[0]) {
case 0:
print "<a>维护</a>";
break;
case $rs[0] < 50:
print "<a>正常</a>";
break;
case $rs[0] < 100:
print "<a>良好</a>";
break;
case $rs[0] < 150:
print "<a>繁忙</a>";
break;
case $rs[0] < 200:
print "<a>非常繁忙</a>";
break;
default:
print "<a>超载</a>";
}
?> | 在线人数:<?=$num?> | 时间:<?=$showtime?>
    </li>
  </ul>
</div>
</BODY>
</HTML>