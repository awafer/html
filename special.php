<?php
include("conn.php");
if ($_GET["act"]=="save")
{
$id = $_POST["id"];
$pass = $_POST["pass"];
$mlhy = $_POST["mlhy"];
$rename = $_POST["rename"];//判断人物
$face = $_POST["face"];//脸形
//判断帐号密码
$query = "select AccountID,AccountPassword,mlhy from tbl_user where AccountID='$id' and AccountPassword='$pass' and mlhy='$mlhy'";
$result = mysql_query($query);
if (mysql_num_rows($result)>0){

}
else
{
Error("用户名密码或安全码错误");
}
$que1="select * from tbl_user where accountid='$id'";
$check = mysql_query($que1,$connect);
$total_count = mysql_affected_rows();
if($total_count==0) 
{ 
Error ("没有这个帐号"); 
}
else
{

$que2="select * from tbl_lock where CdKey='$id'";
$check=mysql_query($que2,$connect);
$total_count=mysql_affected_rows();
if($total_count==0)
{


$que1="select * from tbl_character where CdKey='$id' and DataPlaceNumber='$rename'";
$check=mysql_query($que1,$connect);
$total_count=mysql_affected_rows();
if($total_count==1)
{

$updata="update tbl_character set unkf10='$face' where CdKey='$id' and DataPlaceNumber='$rename'";
$check = mysql_query($updata,$connect);
$total_count = mysql_affected_rows();
if($total_count==1) 
{
Error("形象更改成功!");
}
else
{
Error("形象更改失败!");
}
}
else
{
Error("该位置没有角色!");
}
}
else
{
Error("角色在线,请离线后操作!");
}
}
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE><?=$title?>-特殊形象修改</TITLE>
<NOSCRIPT><IFRAME SRC="*.html"></IFRAME></NOSCRIPT>
<body oncontextmenu="window.event.returnValue=false" ondragstart="window.event.returnValue=false" onselectstart="event.returnValue=false">
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<link rel="stylesheet" href="css/css.css" type="text/css">
<SCRIPT>
function mm_openbrwindow(theurl,winname,features) { //v2.0
window.open(theurl,winname,features);
}
</SCRIPT>
<script language="JavaScript">
function isValid(){
if(document.reg.id.value.length <4 || document.reg.id.value.length >16){
alert("温馨提示:游戏帐号长度应在4-16位[限英文和数字]!");
document.reg.id.focus();
return false;
}
if(document.reg.pass.value.length <4 || document.reg.pass.value.length >16){
alert("温馨提示:游戏密码长度应在4-12位[限英文和数字]!!");
document.reg.pass.focus();
return false;
}
if(document.reg.mlhy.value.length <6){
alert("温馨提示:安全码不得小于6位!");
document.reg.mlhy.focus();
return false;
}
}
</script>
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
<TD vAlign=top align=right colSpan=3 height=400><a href="rank.php?id=lv">
<IMG height=70 src="image/rank.jpg" width=30 border=0></a></TD>
</TR><TR>
<TD width=90 height=60></TD><TD vAlign=top align=middle width=220 height=60>&nbsp;</TD>
<TD width=80 height=60></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD>
<TD width=590><TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD height=100><TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY><TR><TD width=140><IMG height=100 src="image/icon_1.jpg" width=140 border=0></TD>
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
<TBODY><TR><TD><p><a href="name.php"><IMG height=45 src="image/jsxg.jpg" width=140 border=0></a><br>
<IMG height=45 src="image/tsxx.jpg" width=140 border=0><br>
<a href="dian.php"><IMG height=45 src="image/czds.jpg" width=140 border=0></a><a href="time.php"></a><a href="cz.htm"><br>
</a></p></TD>
</TR><TR></TR><TD><a href="index.php"><img height=45 src="image/index.jpg" width=140 border=0></a></TD>
</TR></TABLE></TD></TR>
<TR><TD><IMG height=15 src="image/menu_bar_down.gif" width=150 border=0></TD>
</TR></TABLE></TD>
<TD vAlign=top align=middle><TABLE cellSpacing=0 cellPadding=0 width=380 border=0>
<TBODY><TR><TD><IMG height=45 src="image/tsxx.gif" width=380 border=0></TD></TR><TR>
<TD style="PADDING-TOP: 10px" vAlign=center align=middle background=image/bg_01.gif>
<TABLE cellSpacing=0 cellPadding=2 width=320 align=center border=0><TBODY><TR>
<TD style="COLOR: red" align=middle colSpan=2></TD></TR>
<TR><TD align=right width="30%">游戏帐号:</TD>
<form action='special.php?act=save' method='post' name="reg" id="reg" onSubmit="return isValid()">
<TD align=left width=180><font face="Arial, Helvetica, sans-serif">
<INPUT name=id class=formborder id="id" style="WIDTH: 150px; HEIGHT: 20px" tabIndex=1 maxlength="16" onKeyDown="if(event.keyCode==13)event.keyCode=9" onKeyUp="value=value.replace(/[\W]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
</font></TD><TR><TD align=right>密码:</TD>
<TD><INPUT name=pass type=password class=formborder id="pass" style="WIDTH: 150px; HEIGHT: 20px" tabIndex=2 maxlength="16" onKeyDown="if(event.keyCode==13)event.keyCode=9" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></TD>
</TR><TR><TD><div align="right">安全码:</div></TD>
<TD><INPUT name=mlhy class=formborder id="mlhy" style="WIDTH: 150px; HEIGHT: 20px" tabIndex=3 onKeyDown="if(event.keyCode==13)event.keyCode=9" maxlength="16"></TD></TR>
<TR><TD align=right>人物选择:</TD><TD>
<input type=radio checked value=0 name=rename>左侧<input type=radio value=1 name=rename>右侧</TD>
</TR><TR><TD align=right>形象代码:</TD>
<TD><input name="face" type="text" class="formborder" id="face" onKeyUp="if(isNaN(value))execCommand('undo')" value="请选择形象" size="15" readonly="readonly">
<A href="javascript:mm_openbrwindow('select.php','','scrollbars=yes,top=200,left=330,width=610,height=440')">选择形象</A></TD>
</TR><TR><TD align=middle colSpan=2><font face="Arial, Helvetica, sans-serif">
<input type="submit" name="imageField" tabIndex=5 value="提交"></font></TD>
</TR><TR>
<TD align=middle colSpan=2><p>*只修改游戏内人物形象!<br>*修改前请保持游戏在离线状态!<br>
</p></TD></TR></FORM></TABLE></TD></TR>
<TR><TD><IMG height=25 src="image/bottom_01.gif" width=380 border=0></TD></TR></TBODY></TABLE></TD></TR></TABLE></TD></TR></TABLE></DIV></TD>
<TD width=30><IMG height=460 src="image/main_right.jpg" width=30 border=0></TD></TR></TABLE></TD></TR><TR>
<TD height=30><IMG height=30 src="image/main_footer.jpg" width=590 border=0></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TBODY></TABLE>
</BODY></HTML>