<?
//���ݿ������趨 ���ݿ��ַ �ʺ� ����
$connect=mysql_connect("127.0.0.1","root","") or die("�ʺš���������ݿ��ַ����!�޷����ӵ�Mysql");
//���ݿ����
mysql_select_db("rogue")or die("�޷��������ݿ�!");
function Error($msg)
{
echo("<Script>
window.alert(\"$msg\")
history.go(-1)
</Script>");
exit;
}
//��ҳ��ʾ��Ϣ����
$title = 'ħ������';			//��վ����
$bbsurl = 'bbs/';			//��̳���ӵ�ַ ������ַ,����http://��ͷ
$weburl = 'http://192.168.1.103/';	//��վ��ַ ��ַ����һ��Ҫ��"/" �������Ч
$ini = '0';				//�Ƿ���ʾΪά��
//���а�����
$cgi = "20";				//����Top��ʾ����
$cglv = "0";				//�����ʾ�ȼ�
$cgpage = "0";				//�Ƿ�����ҳЧ�� 0�� 1��
$cgmax = "10";				//ÿҳ��ʾ����
$cggold = "0";				//�����ʾ��Ǯ
$cgje = "0";				//������ѽ����ʾ
$cgzj = "0";				//ս�������ʾ ����Ϊ101 ��Ϊ����ʱΪ100
//��ϵ��ʽ����
$qq1 = "10000";				//QQ�ͷ����� 1
$qq2 = "10000";				//QQ�ͷ����� 2
$email = '10000@qq.com';				//�����ַ
//ͳ����Ϣ,��Ҫ�޸�
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
