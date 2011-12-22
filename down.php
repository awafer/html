<?php
include("conn.php");
if ($_GET["id"]=="dlq")
{
header("location:down/dlq.rar");	//登陆器下载修改地址
}
if ($_GET["id"]=="img")
{
header("location:down/img.rar");	//6.0图档下载修改地址
}
if ($_GET["id"]=="setup")
{
header("location:http://www.crossgate.com.cn/downloads/download.html");
}
if ($_GET["id"]=="bd")
{
header("location:down/bd.rar");	//补丁下载修改地址
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE><?=$title?>-相关下载</TITLE>
<NOSCRIPT><IFRAME SRC="*.html"></IFRAME></NOSCRIPT>
<body oncontextmenu="window.event.returnValue=false" ondragstart="window.event.returnValue=false" onselectstart="event.returnValue=false">
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<link rel="stylesheet" href="css/css.css" type="text/css">
<META content="MSHTML 6.00.2900.2180" name=GENERATOR>
</HEAD><BODY bottomMargin=0 leftMargin=0 topMargin=0 rightMargin=0>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD align=middle bgColor=#e4dbd1>
<TABLE height=590 cellSpacing=0 cellPadding=0 width=980 border=0>
<TBODY><TR><TD>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD width=390><TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD height=130><TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD colSpan=3 height=20><IMG height=20 src="image/main_logo_top.jpg" width=390 border=0></TD></TR><TR>
<TD width=10 height=110><IMG height=110 src="image/main_logo_left.jpg" width=10 border=0></TD>
<TD width=300 height=110><IMG height=110 src="image/main_logo_main.jpg" width=300 border=0></TD>
<TD width=80 height=110><IMG height=110 src="image/main_logo_right.jpg" width=80 border=0></TD></TR></TBODY></TABLE></TD></TR>
<TR><TD background="image/main_left.jpg" height=460>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD vAlign=top align=right colSpan=3 height=400><a href="rank.php?id=lv">
<IMG height=70 src="image/rank.jpg" width=30 border=0></a></TD>
</TR><TR>
<TD width=90 height=60></TD><TD vAlign=top align=middle width=220 height=60>&nbsp;</TD>
<TD width=80 height=60></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD><TD width=590>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0><TBODY><TR><TD height=100>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0><TBODY><TR>
<TD width=140><a href="name.php"><IMG height=100 src="image/icon_1.jpg" width=140 border=0></a></TD>
<TD width=140><a href="reg.php"><IMG height=100 src="image/icon_2.jpg" width=140 border=0></a></TD>
<TD width=140><IMG height=100 src="image/icon_3.jpg" width=140 border=0></TD>
<TD width=140><a href="<?=$bbsurl?>"><IMG height=100 src="image/icon_4.jpg" width=140 border=0></a></TD>
<TD width=30><IMG height=100 src="image/main_icon_right.jpg" width=30 border=0></TD></TR></TBODY></TABLE></TD></TR>
<TR><TD height=460><TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD align=middle width=560 background="image/main_content.jpg">
<DIV style="OVERFLOW-Y: auto; OVERFLOW-X: auto; WIDTH: 550px; HEIGHT: 450px">
<TABLE style="BACKGROUND-ATTACHMENT: scroll" height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD vAlign=top><TABLE cellSpacing=0 cellPadding=0 width=530 border=0>
<TBODY><TR><TD vAlign=top width=150><TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
<TBODY><TR><TD><IMG height=15 src="image/menu_bar_top.gif" width=150 border=0></TD></TR><TR>
<TD align=middle background="image/menu_bar_bg.gif">
<TABLE cellSpacing=0 cellPadding=0 border=0><TBODY><TR><TD><IMG height=45 src="image/download_client.jpg" width=140 border=0></TD>
</TR><TR><TD><p><IMG height=45 src="image/download_login.jpg" width=140 border=0><br>
<img src="image/download_sf.jpg" width="140" height="45" border="0"><a href="zh.htm"></a></p>
</TD></TR><TR><TD><a href="index.php"><img height=45 src="image/index.jpg" width=140 border=0></a></TD>
</TR></TBODY></TABLE></TD></TR><TR><TD><img height=180 src="image/menu_bar_bottom.gif" width=150 border=0></TD>
</TR></TBODY></TABLE></TD><TD vAlign=top align=middle><TABLE cellSpacing=0 cellPadding=0 width=380 border=0>
<TBODY><TR><TD><IMG height=45 src="image/download.gif" width=380 border=0></TD>
</TR><TR><TD style="PADDING-TOP: 10px" align=middle background="image/bg_01.gif">
<TABLE cellSpacing=0 cellPadding=0 width=320 align=center border=0><TR><TD style="COLOR: red" align=middle></TD></TR>
<TR><TD class=name_F align=middle height=28><table cellspacing="0" cellpadding="0">
<TR><TD borderColor="#e4e4e4" align="middle" width="320" height="30">下载列表</TD></TR>
<TR><TD borderColor="#e4e4e4" align="middle" height="25"><strong><?$title?>登陆器 <A href="down.php?id=dlq">点击下载</A></strong><BR>推荐家庭用户安装使用[玩游戏必下载]</TD></TR>
<TR><TD borderColor="#e4e4e4" align="middle" height="25"><strong><?$title?>6.0图档更新包 <A href="down.php?id=img">点击下载</A></strong><BR>更新魔力6.0的图档资源[玩游戏必下载]</TD></TR>
<TR><TD borderColor="#e4e4e4" align="middle" height="25"><strong><?$title?>游戏完整客户端 <A href="down.php?id=setup" target="_blank">点击下载</A></strong><BR>没客户端的需要先下载此客户端(要使用公服转私服补丁)</TD>
<TR><TD borderColor="#e4e4e4" align="middle" height="25"><strong><?$title?>补丁压缩包 <A href="down.php?id=bd">点击下载</A></strong><BR>补丁包括:GF转SF补丁.如果您已转SF,就可不必下载</TD></TR>
</table>  </TD></TR>
</TABLE></TD></TR>
<TR><TD><IMG height=25 src="image/bottom_01.gif" width=380 border=0></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV></TD>
<TD width=30><IMG height=460 src="image/main_right.jpg" width=30 border=0></TD></TR></TBODY></TABLE></TD></TR>
<TR><TD height=30><IMG height=30 src="image/main_footer.jpg" width=590 border=0></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
</BODY></HTML>