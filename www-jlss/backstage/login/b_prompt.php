<?php
header("Content-Type:text/html;charset=gb2312");
include("../../include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
mysql_select_db($database);
session_start();//启动会话
$code=$_POST["passcode"];
$name=$_POST[name];
$pws=$_POST[password];
$sql="select admin_id from administrator where admin_name='$name' and admin_psw='$pws'"; 
$result=mysql_query($sql);
//$aa=mssql_fetch_array($result);	
/*if($aa = mssql_fetch_array($result)) 
{ 
session_start(); //标志Session的开始 
//判断用户的权限信息是否有效，如果为1或0则说明有效 
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
alert("登陆成功！");
</script>
<meta http-equiv="refresh" content="0;URL=../index.php?name=<?php echo $name;?>" />
<?php
}
else{ 
?>
<script type="text/javascript">
alert("您不具备管理员权限");
</script>
<meta http-equiv="refresh" content="0;URL=b_login.php?name=<?php echo $name;?>" />
<?php
}
}
else
{
	?>
<script type="text/javascript">
alert("验证码错误！");
</script>
<meta http-equiv="refresh" content="0;URL=b_login.php?name=<?php echo $name;?>" />
<?php
}
?>