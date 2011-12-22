<?php
include("conn.php");
$i=1;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE><?=$title?>-排行榜Top<?=$cgi?></TITLE>
<NOSCRIPT><IFRAME SRC="*.html"></IFRAME></NOSCRIPT>
<body oncontextmenu="window.event.returnValue=false" ondragstart="window.event.returnValue=false" onselectstart="event.returnValue=false">
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<link rel="stylesheet" href="css/css.css" type="text/css">
<META content="MSHTML 6.00.2900.2180" name=GENERATOR></HEAD>
<BODY bottomMargin=0 leftMargin=0 topMargin=0 rightMargin=0>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD align=middle bgColor=#e4dbd1>
<TABLE height=590 cellSpacing=0 cellPadding=0 width=980 border=0><TBODY><TR><TD>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0><TBODY><TR><TD width=390>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0><TBODY><TR><TD height=130>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0><TBODY><TR>
<TD colSpan=3 height=20><IMG height=20 src="image/main_logo_top.jpg" width=390 border=0></TD></TR>
<TR><TD width=10 height=110><IMG height=110 src="image/main_logo_left.jpg" width=10 border=0></TD>
<TD width=300 height=110><IMG height=110 src="image/main_logo_main.jpg" width=300 border=0></TD>
<TD width=80 height=110><IMG height=110 src="image/main_logo_right.jpg" width=80 border=0></TD></TR></TBODY></TABLE></TD></TR>
<TR><TD background=image/main_left.jpg height=460>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0><TBODY><TR>
<TD vAlign=top align=right colSpan=3 height=400><p><a href="rank.php?id=lv"><IMG src="image/rank.jpg" width=30 height=70 border=0 scr= "image/shop.jpg"><br>
</a></p>
  </TD>
</TR><TR>
<TD width=90 height=60></TD><TD vAlign=top align=middle width=220 height=60>&nbsp;</TD>
<TD width=80 height=60></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD>
<TD width=590><TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD height=100><TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD width=140><a href="name.php"><IMG height=100 src="image/icon_1.jpg" width=140 border=0></a></TD>
<TD width=140><A href="reg.php"><IMG height=100 src="image/icon_2.jpg" width=140 border=0></A></TD>
<TD width=140><A href="down.php"><IMG height=100 src="image/icon_3.jpg" width=140 border=0></A></TD>
<TD width=140><a href="<?=$bbsurl?>"><IMG height=100 src="image/icon_4.jpg" width=140 border=0></a></TD>
<TD width=30><IMG height=100 src="image/main_icon_right.jpg" width=30 border=0></TD></TR></TBODY></TABLE></TD></TR>
<TR><TD height=460><TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD align=middle width=560 background=image/main_content.jpg>
<DIV style="OVERFLOW-Y: auto; OVERFLOW-X: auto; WIDTH: 550px; HEIGHT: 450px">
<TABLE style="BACKGROUND-ATTACHMENT: scroll" height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD vAlign=top><TABLE cellSpacing=0 cellPadding=0 width=530 border=0>
<TBODY><TR><TD vAlign=top width=150><TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
<TBODY><TR><TD><IMG height=15 src="image/menu_bar_top.gif" width=150 border=0></TD></TR>
<TR><TD align=middle background=image/menu_bar_bg.gif><TABLE cellSpacing=0 cellPadding=0 border=0>
<TBODY><TR><TD><p><a href="rank.php?id=lv"><IMG height=45 src="image/rank_lv.jpg" width=140 border=0></a><br>      
<a href="rank.php?id=zj"><IMG height=45 src="image/rank_zj.jpg" width=140 border=0></a><br>      
<a href="rank.php?id=gold"><IMG height=45 src="image/rank_gold.jpg" width=140 border=0></a><a href="index.php"><br>
<img height=45 src="image/index.jpg" width=140 border=0></a>
      </TD>
</TR></TABLE></TD></TR>
<TR><TD><IMG height=15 src="image/menu_bar_down.gif" width=150 border=0></TD>
</TR></TABLE></TD>
<TD vAlign=top align=middle><TABLE cellSpacing=0 cellPadding=0 width=380 border=0>
<TBODY><TR><TD><IMG height=45 src="image/rank_lv_1.gif" width=380 border=0></TD>
</TR><TR>
<TD style="PADDING-TOP: 10px" vAlign=center align=middle background=image/bg_01.gif>
<TABLE cellSpacing=0 cellPadding=2 width=320 align=center border=0><TBODY><TR>
<TD style="COLOR: red" align=middle></TD></TR>
<TR>
  <TD align=center>
    <p><?php
	if ($_GET["id"]=="lv")
        {

$page=isset($_GET['page'])?intval($_GET['page']):1;
$showtime=date("Y-m-d H:i");
$i=1;
if($cgpage==1){
$total=mysql_num_rows(mysql_query("select CdKey FROM tbl_character"));
$pagenum=ceil($total/$cgi);
}else{
$page = "1";
}

$ph =mysql_query("SELECT a.Name,a.Lv,a.CdKey,a.Exp FROM  tbl_character a  where a.Lv>=$cglv ORDER BY a.Exp DESC LIMIT ".(($page-1)*$cgi).", $cgi");
echo ("<b><font size=\"2\" color=\"#FF0000\"><span style=\"text-decoration: none\">
<table border=\"1\" cellspacing=\"0\" cellpadding=\"0\" id=\"table1\" bordercolor=\"#00CCFF\">
<tr><td><p align=\"center\"><b>等级排行</b></td><td><p align=\"center\"><b>角色等级</b></td><td><p align=\"center\"><b>角色姓名</b></td><td><p align=\"center\"><b>角色经验</b></td>");
while ($row = mysql_fetch_array($ph, MYSQL_NUM)) {
	echo ("<tr><td><p align=\"center\">".($cgi*($page-1)+$i++)."</td><td><p align=\"center\">$row[1]</td><td><p align=\"right\">$row[0]</td><td><p align=\"right\">$row[3]</td>");
   }
echo ("</table>");
echo ("
<b><font size=\"1\" color=\"#00CCFF\">
	更新时间 :$showtime </b></font><br>
");
if($cgpage==1){
if($page<$pagenum && $page>1){
echo ("<a href='?id=lv&page=".($page-1)."'>上一页</a>|$page|<a href='?id=lv&page=".($page+1)."'>下一页</a>"); 
}else if($page==1){
echo ("上一页|$page|<a href='?id=lv&page=".($page+1)."'>下一页</a>"); 
}else if($page==$pagenum){
echo ("<a href='?id=lv&page=".($page-1)."'>上一页</a>|$page|下一页 - <a href='rank.php?id=lv'>等级排行榜首页</a>"); 
}else 
{echo ("<a href='?id=lv&page=1'>返回第一页</a> - <a href='rank.php?id=lv'>等级排行榜首页</a>");

}

}
	mysql_free_result($ph);
	mysql_close($connect);
}
	?>
      <?php
	        if ($_GET["id"]=="zj")
{

$page=isset($_GET['page'])?intval($_GET['page']):1;
$showtime=date("Y-m-d H:i");
$i=1;
if($cgpage==1){
$total=mysql_num_rows(mysql_query("select CdKey FROM tbl_character"));
$pagenum=ceil($total/$cgi);
}else{
$page = "1";
}

$ph =mysql_query("SELECT a.Name,a.Lv,a.CdKey,a.DuelPoint FROM  tbl_character a  where a.DuelPoint>=$cgzj ORDER BY a.DuelPoint DESC LIMIT ".(($page-1)*$cgi).", $cgi");
echo ("<b><font size=\"2\" color=\"#FF0000\"><span style=\"text-decoration: none\">
<table border=\"1\" cellspacing=\"0\" cellpadding=\"0\" id=\"table1\" bordercolor=\"#00CCFF\">
<tr><td><p align=\"center\"><b>战绩排行</b></td><td><p align=\"center\"><b>角色等级</b></td><td><p align=\"center\"><b>角色姓名</b></td><td><p align=\"center\"><b>角色战绩</b></td>");
while ($row = mysql_fetch_array($ph, MYSQL_NUM)) {
	echo ("<tr><td><p align=\"center\">".($cgi*($page-1)+$i++)."</td><td><p align=\"center\">$row[1]</td><td><p align=\"right\">$row[0]</td><td><p align=\"right\">$row[3]</td>");
   }
echo ("</table>");
echo ("
<b><font size=\"1\" color=\"#00CCFF\">更新时间 :$showtime </b></font><br>
");
if($cgpage==1){
if($page<$pagenum && $page>1){
echo ("<a href='?id=zj&page=".($page-1)."'>上一页</a>|$page|<a href='?id=zj&page=".($page+1)."'>下一页</a>"); 
}else if($page==1){
echo ("上一页|$page|<a href='?id=zj&page=".($page+1)."'>下一页</a>"); 
}else if($page==$pagenum){
echo ("<a href='?id=zj&page=".($page-1)."'>上一页</a>|$page|下一页 - <a href='rank.php?id=zj'>战绩排行榜首页</a>"); 
}else 
{echo ("<a href='?id=zj&page=1'>返回第一页</a> - <a href='rank.php?id=zj'>战绩排行榜首页</a>");

}

}
	mysql_free_result($ph);
	mysql_close($connect);
	}
	?><?php
      if ($_GET["id"]=="gold")
{












$page=isset($_GET['page'])?intval($_GET['page']):1;
$showtime=date("Y-m-d H:i");
$i=1;
if($cgpage==1){
$total=mysql_num_rows(mysql_query("select CdKey FROM tbl_character"));
$pagenum=ceil($total/$cgi);
}else{
$page = "1";
}

$ph =mysql_query("SELECT a.Name,a.Lv,a.CdKey,a.Money FROM  tbl_character a  where a.Money>=$cggold ORDER BY a.Money DESC LIMIT ".(($page-1)*$cgi).", $cgi");
echo ("<b><font size=\"2\" color=\"#FF0000\"><span style=\"text-decoration: none\">
<table border=\"1\" cellspacing=\"0\" cellpadding=\"0\" id=\"table1\" bordercolor=\"#00CCFF\">
<tr><td><p align=\"center\"><b>金钱排行</b></td><td><p align=\"center\"><b>角色等级</b></td><td><p align=\"center\"><b>角色姓名</b></td><td><p align=\"center\"><b>角色金钱</b></td>");
while ($row = mysql_fetch_array($ph, MYSQL_NUM)) {
	echo ("<tr><td><p align=\"center\">".($cgi*($page-1)+$i++)."</td><td><p align=\"center\">$row[1]</td><td><p align=\"right\">$row[0]</td><td><p align=\"right\">$row[3]</td>");
   }
echo ("</table>");
echo ("
<b><font size=\"1\" color=\"#00CCFF\">
	更新时间 :$showtime </b></font><br>
");
if($cgpage==1){
if($page<$pagenum && $page>1){
echo ("<a href='?id=gold&page=".($page-1)."'>上一页</a>|$page|<a href='?id=gold&page=".($page+1)."'>下一页</a>"); 
}else if($page==1){
echo ("上一页|$page|<a href='?id=gold&page=".($page+1)."'>下一页</a>"); 
}else if($page==$pagenum){
echo ("<a href='?id=gold&page=".($page-1)."'>上一页</a>|$page|下一页 - <a href='rank.php?id=gold'>金钱排行榜首页</a>"); 
}else 
{echo ("<a href='?id=gold&page=1'>返回第一页</a> - <a href='rank.php?id=gold'>金钱排行榜首页</a>");

}

}
	mysql_free_result($ph);
	mysql_close($connect);
}
	?><?php

if ($_GET["id"]!="lv" and $_GET["id"]!="zj" and $_GET["id"]!="xf" and $_GET["id"]!="gold")
{
echo "获取信息失败,请检查连接路径是否正确!";
  }	?></p>    </TD>
</TABLE></TD></TR>
<TR><TD><IMG height=25 src="image/bottom_01.gif" width=380 border=0></TD></TR></TBODY></TABLE></TD></TR></TABLE></TD></TR></TABLE></DIV></TD>
<TD width=30><IMG height=460 src="image/main_right.jpg" width=30 border=0></TD></TR></TABLE></TD></TR><TR>
<TD height=30><IMG height=30 src="image/main_footer.jpg" width=590 border=0></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TBODY></TABLE>
</BODY></HTML>