<?php
header("Content-Type:text/html;charset=gb2312");
include("../../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
session_start();//�����Ự
$code=$_POST["passcode"];
$name=$_POST[name];
$pws=$_POST[password];
$sql="select admin_id from administrator where admin_name='$name' and admin_psw='$pws'"; 
$result=mysql_query($sql);
//$aa=mssql_fetch_array($result);	
/*if($aa = mssql_fetch_array($result)) 
{ 
session_start(); //��־Session�Ŀ�ʼ 
//�ж��û���Ȩ����Ϣ�Ƿ���Ч�����Ϊ1��0��˵����Ч 
if($aa['userflag'] == 1 or $aa['userflag'] == 0) 
{ 
$_SESSION['admin_id'] = $aa['admin_id']; 
}
}*/

$row=mysql_num_rows($result);
if($code==$_SESSION["Checknum"]){
if($row){
session_start();
$_SESSION['name']=$name;
?>
<script type="text/javascript">
alert("��½�ɹ���");
</script>
<meta http-equiv="refresh" content="0;URL=../index.php?name=<?php echo $name;?>" />
<?php
}
else{ 
?>
<script type="text/javascript">
alert("�����߱�����ԱȨ��");
</script>
<meta http-equiv="refresh" content="0;URL=b_login.php?name=<?php echo $name;?>" />
<?php
}
}
else
{
	?>
<script type="text/javascript">
alert("��֤�����");
</script>
<meta http-equiv="refresh" content="0;URL=b_login.php?name=<?php echo $name;?>" />
<?php
}
?>