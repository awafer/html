<?php
include("conn.php");
include("notice.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE><?=$title?></TITLE>
<NOSCRIPT><IFRAME SRC="*.html"></IFRAME></NOSCRIPT>
<body oncontextmenu="window.event.returnValue=false" onkeypress="window.event.returnValue=false" onkeydown="window.event.returnValue=false" onkeyup="window.event.returnValue=false" ondragstart="window.event.returnValue=false" onselectstart="event.returnValue=false">
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false" leftmargin="0" onmouseover="self.status='��ӭ������<?=$title?>�ٷ���վ!;return true">
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<link rel="stylesheet" href="css/css.css" type="text/css">
<META content="MSHTML 6.00.2900.2180" name=GENERATOR></HEAD>
<BODY bottomMargin=0 leftMargin=0 topMargin=0 rightMargin=0>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD align=middle bgColor=#e4dbd1><TABLE height=590 cellSpacing=0 cellPadding=0 width=980 border=0>
<TBODY><TR><TD><TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD width=390><TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD height=130><TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD colSpan=3 height=20><img height=20 src="image/main_logo_top.jpg" width=390 border=0></TD>
</TR><TR><TD width=10 height=110><IMG height=110 src="image/main_logo_left.jpg" width=10 border=0></TD>
<TD width=300 height=110><img height=110 src="image/main_logo_main.jpg" width=300 border=0></TD>
<TD width=80 height=110><IMG height=110 src="image/main_logo_right.jpg" width=80 border=0></TD></TR></TBODY></TABLE></TD></TR>
<TR><TD background=image/main_left.jpg height=460>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0><TBODY><TR>
<TD vAlign=top align=right colSpan=3 height=400><a href="rank.php?id=lv">
<IMG height=70 src="image/rank.jpg" width=30 border=0></a></TD>
</TR><TR>
<TD width=90 height=60></TD><TD vAlign=top align=middle width=220 height=60>
<TABLE height=30 cellSpacing=0 cellPadding=0 width=220 background=image/main_stats_bar.jpg border=0>
<TBODY>
<TR>
<TD style="PADDING-LEFT: 10px" width=63>�ŷ�״̬:</TD>
<TD width=157 align=middle><div align="left">
<?php
switch ($rs[0]) {
case 0:
print "<a>ά��</a>";
break;
case $rs[0] < 50:
print "<a>����</a>";
break;
case $rs[0] < 100:
print "<a>����</a>";
break;
case $rs[0] < 150:
print "<a>��æ</a>";
break;
case $rs[0] < 200:
print "<a>�ǳ���æ</a>";
break;
default:
print "<a>����</a>";
}
?> | ��������:
<?=$num?>
</div></TD></TR></TBODY></TABLE></TD>
<TD width=80 height=60></TD>
</TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD>
<TD width=590>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD height=100>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD width=140>
<a href="name.php"><IMG height=100 src="image/icon_1.jpg" width=140 border=0></a></TD>
<TD width=140><A href="reg.php"><IMG height=100 src="image/icon_2.jpg" width=140 border=0></A></TD>
<TD width=140><A href="down.php"><IMG height=100 src="image/icon_3.jpg" width=140 border=0></A></TD>
<TD width=140><a href="<?=$bbsurl?>"><IMG height=100 src="image/icon_4.jpg" width=140 border=0></a></TD>
<TD width=30><IMG height=100 src="image/main_icon_right.jpg" width=30 border=0></TD>
</TR></TBODY></TABLE></TD></TR><TR><TD height=460>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0><TBODY><TR>
<TD align=middle width=560 background=image/main_content.jpg>
<DIV style="OVERFLOW-Y: auto; OVERFLOW-X: auto; WIDTH: 550px; HEIGHT: 450px">
<TABLE style="BACKGROUND-ATTACHMENT: scroll" height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0><TBODY><TR>
<TD vAlign=top><TABLE height=450 cellSpacing=0 cellPadding=0 width=550 border=0><TBODY><TR>
<TD vAlign=top width=190><TABLE cellSpacing=0 cellPadding=0 width=190 border=0>
<TBODY><TR>
<TD><IMG height=40 src="image/gameinfo_top.gif" width=190 border=0></TD>
</TR><TR><TD align=middle background=image/gameinfo_bg.gif>
<TABLE cellSpacing=0 cellPadding=0 width=160 align=center border=0><TBODY><TR>
<TD class=name_M>��Ϸ����:RPG<br>
  ���鱶��:Exp 10x<br>
  ע��״̬:����ע��<br>
  �ʺ�����:
  <?=$num1?>
  <br>
  ��ɫ����:
  <?=$num2?>
  <br>
  ��������:
  <?=$num?></TD>
</TR></TBODY></TABLE></TD></TR><TR><TD>
<IMG height=120 src="image/gameinfo_bottom.gif" width=190 border=0></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=190 border=0>
<TBODY><TR>
<TD><IMG height=40 src="image/index_menu_top_01.gif" width=190 border=0></TD>
</TR><TR><TD align=middle background=image/index_menu_bg.gif>
<TABLE cellSpacing=0 cellPadding=2 width=160 border=0><TBODY><TR>
<TD align=middle width=160 height=100>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0><TBODY><TR><TD height=30>
<DIV align=center><A href="tencent://message/?uin=<?=$qq1?>&Site=<?=$title?>&Menu=yes"><IMG alt=���������ҷ���Ϣ src="http://wpa.qq.com/pa?p=1:<?=$qq1?>:7" border=0></A></DIV>
</TD><TD><DIV align=center>һ�ſͷ�</DIV></TD></TR><TR><TD height=30><DIV align=center>
<A href="tencent://message/?uin=<?=$qq2?>&Site=<?=$title?>&Menu=yes"><IMG alt=���������ҷ���Ϣ src="http://wpa.qq.com/pa?p=1:<?=$qq2?>:7" border=0></A></DIV></TD><TD>
<DIV align=center>����֧��</DIV></TD></TR></TBODY></TABLE></TD></TR><TR>
<TD align=middle>���������Ϸ���κε�����,��������<SPAN class=name_M><?=$title?></SPAN>�ͷ���ѯ!</TD></TR></TBODY></TABLE></TD></TR><TR>
<TD><IMG height=15 src="image/index_menu_bottom.gif" width=190 border=0>
</TD></TR></TBODY></TABLE></TD><TD vAlign=top width=360>
<TABLE height=60 cellSpacing=0 cellPadding=0 width=360 border=0><TBODY><TR>
<TD style="PADDING-LEFT: 12px" height=40><img height=60 src="image/logo.jpg" width=340 border=0></TD>
</TR></TBODY></TABLE>
<TABLE height=130 cellSpacing=0 cellPadding=0 width=360 border=0><TBODY><TR>
<TD style="PADDING-RIGHT: 15px" align=right background=image/index_top.gif height=40>More...</TD></TR><TR>
<TD style="PADDING-RIGHT: 10px; PADDING-LEFT: 15px" vAlign=top background=image/index_bg.gif>
<TABLE cellSpacing=0 cellPadding=0 width=330 border=0><TBODY><TR>
<TD colspan="2"> <?=$xtgg1?></TD></TR><TR>
<TD colspan="2"> <?=$xtgg2?></TD></TR><TR>
<TD colspan="2"> <?=$xtgg3?></TD></TR><TR>
<TD colspan="2"> <?=$xtgg4?></TD></TR><TR>
<TD colspan="2"></TD></TR>
</TBODY></TABLE></TD></TR><TR>
<TD height=15><IMG height=15 src="image/index_bottom(2).gif" width=360 border=0></TD>
</TR></TBODY></TABLE>
<TABLE height=130 cellSpacing=0 cellPadding=0 width=360 border=0><TBODY><TR>
<TD style="PADDING-RIGHT: 15px" align=right background=image/index_top(1).gif height=40>More...</TD></TR><TR>
<TD style="PADDING-RIGHT: 10px; PADDING-LEFT: 15px" vAlign=top background=image/bg_02.gif>
<table cellspacing=0 cellpadding=0 width=330 border=0><tbody><tr>
<td> <?=$yxgg1?></td></tr><tr>
<td> <?=$yxgg2?></td></tr><tr>
<td> <?=$yxgg3?></td></tr><tr>
<td> <?=$yxgg4?></td></tr>
</tbody></table></TD></TR><TR>
<TD height=15><IMG height=15 src="image/index_bottom(1).gif" width=360 border=0></TD>
</TR></TBODY></TABLE><TABLE height=130 cellSpacing=0 cellPadding=0 width=360 border=0><TBODY><TR>
<TD style="PADDING-RIGHT: 15px" align=right background=image/index_top(2).gif height=40>More...</TD></TR><TR>
<TD style="PADDING-RIGHT: 10px; PADDING-LEFT: 15px" vAlign=top background=image/bg_03.gif> </TD></TR><TR>
<TD style="PADDING-RIGHT: 10px; PADDING-LEFT: 15px" vAlign=top background=image/bg_03.gif>
<br>��������:��������Ϸ���ϳ����ռ��ڻ�����,���κ���ҵĿ�Ľ��ṩ��ħ����Ϸ������,�о�,����,����֮��,������Ȩ�����֪<BR>��ϵ��ʽ:Email:<span class="name_M">
<?=$email?>
</span></TD>
</TR><TR><TD height=15>
<IMG height=15 src="image/index_bottom.gif" width=360 border=0></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV></TD>
<TD width=30><IMG height=460 src="image/main_right.jpg" width=30 border=0></TD></TR></TBODY></TABLE></TD></TR>
<TR><TD height=30><IMG height=30 src="image/main_footer.jpg" width=590 border=0></TD>
</TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
</BODY></HTML>