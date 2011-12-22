<?php
include("conn.php");
if ($_GET["act"]=="save")
{
$id = $_POST["id"];
$pass = $_POST["pass"];
$mlhy = $_POST["mlhy"];
$userip =  getip();
$data = date("Y-m-d h:i:s");
/*//IP注册限制
$checkip = mysql_query("SELECT * FROM tbl_user WHERE regip = '" . $userip . "'");
if (mysql_num_rows($checkip)>0)
{
Error ("每人只能註册一个号");
}
*/
$sql1="select * from tbl_user where CdKey='$id'";
$check=mysql_query($sql1,$connect);
$total_count=mysql_affected_rows();
if($total_count==0)
{
$sql2="insert into tbl_user (AccountID,AccountPassword,EnableFlg,TrialFlg,DownFlg,ExpFlg,SequenceNumber,UseFlg,BadMsg,CdKey,mlhy,time,ip) values ('$id','$pass','1','8','0','0','1','1','0','$id','$mlhy','$data','$userip')";
$result = mysql_query($sql2);
$total_count = mysql_affected_rows();
if($total_count==1) 
{
Error("注册成功!");
}
else
{
Error("注册失败!");
}
}
else
{
Error("用户名重复!");
}
}
function getip() {
   if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
   $ip = getenv("HTTP_CLIENT_IP");
   else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
   $ip = getenv("HTTP_X_FORWARDED_FOR");
   else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
   $ip = getenv("REMOTE_ADDR");
   else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
   $ip = $_SERVER['REMOTE_ADDR'];
   else
   $ip = "unknown";
   return($ip);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE><?=$title?>-帐号注册</TITLE>
<NOSCRIPT><IFRAME SRC="*.html"></IFRAME></NOSCRIPT>
<body oncontextmenu="window.event.returnValue=false" ondragstart="window.event.returnValue=false" onselectstart="event.returnValue=false">
<META http-equiv=Content-Type content="text/html; charset=<?=$char?>">
<link rel="stylesheet" href="css/css.css" type="text/css">
<script language="JavaScript">
function isValid(){
if(document.reg.id.value.length <4 || document.reg.id.value.length >16){
alert("温馨提示:游戏帐号长度应在4-16位[限英文和数字]!");
document.reg.id.focus();
return false;
}
if(document.reg.pass.value.length <4 || document.reg.pass.value.length >16){
alert("温馨提示:游戏密码长度应在4-16位[限英文和数字]!");
document.reg.pass.focus();
return false;
}
if (reg.pass.value != reg.pass2.value){
alert("温馨提示:两次输入的密码不一致,请重新输入!");
document.reg.pass2.value = ""
document.reg.pass2.focus();
return false;
}
if(document.reg.mlhy.value.length <6 || document.reg.pass.value.length >16){
alert("温馨提示:安全码长度应在6-16位[限英文和数字]!");
document.reg.mlhy.focus();
return false;
}
if (reg.id.value == reg.user.value){
alert("温馨提示:推荐人不能填写自己,没有请为空!");
document.reg.user.value = ""
document.reg.user.focus();
return false;
}
}
</script><META content="MSHTML 6.00.2900.2180" name=GENERATOR>
</HEAD>
<BODY bottomMargin=0 leftMargin=0 topMargin=0 rightMargin=0>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD align=middle bgColor=#e4dbd1>
<TABLE height=590 cellSpacing=0 cellPadding=0 width=980 border=0>
<TBODY><TR><TD>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD width=390><TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD height=130><TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD colSpan=3 height=20><IMG height=20 src="image/main_logo_top.jpg" width=390 border=0></TD>
</TR><TR>
<TD width=10 height=110><IMG height=110 src="image/main_logo_left.jpg" width=10 border=0></TD>
<TD width=300 height=110><img height=110 src="image/main_logo_main.jpg" width=300 border=0></TD>
<TD width=80 height=110><IMG height=110 src="image/main_logo_right.jpg" width=80 border=0></TD>
</TR></TBODY></TABLE></TD></TR>
<TR><TD background="image/main_left.jpg" height=460>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD vAlign=top align=right colSpan=3 height=400><a href="rank.php?id=lv">
<IMG height=70 src="image/rank.jpg" width=30 border=0></a></TD>
</TR><TR>
<TD width=90 height=60></TD><TD vAlign=top align=middle width=220 height=60>&nbsp;</TD>
<TD width=80 height=60></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD><TD width=590>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0><TBODY><TR><TD height=100>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0><TBODY><TR>
<TD width=140><a href="name.php"><img height=100 src="image/icon_1.jpg" width=140 border=0></a></TD>
<TD width=140><a href="reg.php"><IMG height=100 src="image/icon_2.jpg" width=140 border=0></a></TD>
<TD width=140><a href="down.php"><IMG height=100 src="image/icon_3.jpg" width=140 border=0></a></TD>
<TD width=140><a href="<?=$bbsurl?>"><IMG height=100 src="image/icon_4.jpg" width=140 border=0></a></TD>
<TD width=30><IMG height=100 src="image/main_icon_right.jpg" width=30 border=0></TD>
</TR></TBODY></TABLE></TD></TR>
<TR><TD height=460><TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD align=middle width=560 background="image/main_content.jpg">
<DIV style="OVERFLOW-Y: auto; OVERFLOW-X: auto; WIDTH: 550px; HEIGHT: 450px">
<TABLE style="BACKGROUND-ATTACHMENT: scroll" height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD vAlign=top><TABLE cellSpacing=0 cellPadding=0 width=530 border=0>
<TBODY><TR><TD vAlign=top width=150><TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
<TBODY><TR><TD><IMG height=15 src="image/menu_bar_top.gif" width=150 border=0></TD></TR><TR>
<TD align=middle background="image/menu_bar_bg.gif">
<TABLE cellSpacing=0 cellPadding=0 border=0><TBODY><TR><TD><IMG height=45 src="image/reg.jpg" width=140 border=0></TD></TR>
<TR><TD><p><A href="change.php"><IMG height=45 src="image/reg_repasswd.jpg" width=140 border=0><br>
</A><a href="lost.php"><img src="image/reg_getpw.jpg" width="140" height="45" border="0"></a><a href="id.php"><br>
</TD></TR><TR><TD><a href="index.php"><img height=45 src="image/index.jpg" width=140 border=0></a></TD>
</TR></TBODY></TABLE></TD></TR><TR><TD><img height=15 src="image/menu_bar_down.gif" width=150 border=0></TD>
</TR></TBODY><form action='reg.php?act=save' method='post' name="reg" id="reg" onSubmit="return isValid()">
</TABLE></TD><TD vAlign=top align=middle>
<TABLE cellSpacing=0 cellPadding=0 width=380 border=0>
<TBODY><TR><TD><IMG height=45 src="image/register.gif" width=380 border=0></TD>
</TR><TR><TD style="PADDING-TOP: 10px" align=middle background="image/bg_01.gif">
<TABLE cellSpacing=0 cellPadding=0 width=320 align=center border=0><TR><TD style="COLOR: red" align=middle colSpan=2></TD></TR><TR><TD align=right>游戏帐号:</TD><TD><font face="Arial, Helvetica, sans-serif">
<INPUT name=id class=formborder id="id" style="WIDTH: 150px; HEIGHT: 20px" tabIndex=1 maxlength="16" onKeyDown="if(event.keyCode==13)event.keyCode=9" onKeyUp="value=value.replace(/[\W]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
</font></TD></TR><TR>
<TD colspan="2" align=right><span class="name_F">请使用4-16字以内[限英文和数字]</span></TD>
</TR><TR><TD align=right>游戏密码:</TD>
<TD><input name=pass type=password class=formborder id="pass" style="WIDTH: 150px; HEIGHT: 20px" tabindex=2 maxlength="16" onKeyDown="if(event.keyCode==13)event.keyCode=9" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></TD></TR>
<TR><TD align=right>确认密码:</TD>
<TD><input name=pass2 type=password class=formborder id="pass2" style="WIDTH: 150px; HEIGHT: 20px" tabindex=2 maxlength="16" onKeyDown="if(event.keyCode==13)event.keyCode=9" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></TD>
</TR><TR><TD colspan="2" align=right><span class="name_F">请使用4-16字以内[限英文和数字]</span></TD>
</TR><TR><TD align=right>安全码:</TD>
<TD><input name=mlhy class=formborder id="mlhy" style="WIDTH: 150px; HEIGHT: 20px" tabindex=5 onKeyDown="if(event.keyCode==13)event.keyCode=9" maxlength="16"></TD>
</TR><TR><TD colspan="2" align=right><span class="name_F">安全码用来找回密码使用,请牢记!</span></TD></TR>
<TR><TD class=name_F align=middle colSpan=2 height=28>当您按下注册时就表示你接受及理解<A href="rule.php">声明条款</A></TD>
</TR>
<TR><TD align=middle colSpan=2><font face="Arial, Helvetica, sans-serif"><input type="submit" name="imageField" tabIndex=6 value="注册">
</font></TD></TR></TABLE></TD></TR>
<TR><TD><IMG height=25 src="image/bottom_01.gif" width=380 border=0></TD>
</TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV></TD>
<TD width=30><IMG height=460 src="image/main_right.jpg" width=30 border=0></TD>
</TR></TBODY></TABLE></TD></TR>
<TR><TD height=30><IMG height=30 src="image/main_footer.jpg" width=590 border=0></TD>
</TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
</BODY></HTML>