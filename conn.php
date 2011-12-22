<?
//数据库连接设定 数据库地址 帐号 密码
$connect=mysql_connect("127.0.0.1","root","") or die("帐号、密码或数据库地址错误!无法连接到Mysql");
//数据库库名
mysql_select_db("rogue")or die("无法连接数据库!");
function Error($msg)
{
echo("<Script>
window.alert(\"$msg\")
history.go(-1)
</Script>");
exit;
}
//网页显示信息配置
$title = '魔力回忆';			//网站名字
$bbsurl = 'bbs/';			//论坛连接地址 若打网址,请以http://开头
$weburl = 'http://192.168.1.103/';	//网站地址 网址后面一定要有"/" 共享版无效
$ini = '0';				//是否显示为维护
//排行榜配置
$cgi = "20";				//排行Top显示数量
$cglv = "0";				//最低显示等级
$cgpage = "0";				//是否开启分页效果 0否 1是
$cgmax = "10";				//每页显示几条
$cggold = "0";				//最低显示金钱
$cgje = "0";				//最低消费金额显示
$cgzj = "0";				//战绩最低显示 建议为101 因为出生时为100
//联系方式设置
$qq1 = "10000";				//QQ客服设置 1
$qq2 = "10000";				//QQ客服设置 2
$email = '10000@qq.com';				//邮箱地址
//统计信息,不要修改
$showtime=date("Y-m-d H:i");
$sql="select count(*) from tbl_lock";
$query = mysql_query($sql,$connect);
$rs = mysql_fetch_row($query);
$result = mysql_query("SELECT * FROM tbl_lock");
$num = mysql_num_rows($result);
$result1 = mysql_query("SELECT * FROM tbl_user");
$num1 = mysql_num_rows($result1);
$result2 = mysql_query("SELECT * FROM tbl_character");
$num2 = mysql_num_rows($result2);
?>
