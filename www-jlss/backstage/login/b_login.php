<html>
<head>
<script language="javascript" type="text/javascript">
function s(){
	var myform=document.login;
	if(myform.name.value==""){
		alert("请填入账号");
		return false;}
		else{
			if(myform.password.value==""){
				alert("请填入密码");
				return false;}
				else{
					if(myform.passcode.value==""){
						alert("请填入验证码");
						return false;}
						else return true;}}}
</script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ROSE NEWS后台管理-登录</title>
<link href="share/images/favicon.ico" rel="shortcut icon"/>
<link href="share/css/share.css" rel="stylesheet" type="text/css"/>
<link href="admin/css/default/login.css" rel="stylesheet" type="text/css"  />
<link href="admin/css/default/share.css" rel="stylesheet" type="text/css"  />
</head>

<body id="loginBody">
<div id="pointerOpen" onclick="hideLoginBezel()">开启登录</div>
<div id="loginBezel">
<!-- <div id="loginChildTop" onclick="hideLoginBezel()" title="点击将隐藏登录小窗口">　CMS管理平台</div> -->
<div id="loginChildTop">　<img src="admin/images/logo-right.png" width="57" height="50" align="absbottom"  /> ROSE NEWS管理平台</div>
<div id="loginChildBottom">
<form action="b_prompt.php" method="post" name="login" onSubmit="return s();">  

<table cellpadding="0" cellspacing="0" width="100%" height="95%" border="0">
<tr>
<td align="right" width="35%">账　号：</td>
<td align="left" width="65%">
<input name="name" type="text" id="account"  class="inputUP" value="<?php echo$_GET[name];?>"/>
</td>
</tr>
<tr>
<td align="right">密　码：</td>
<td align="left"><input name="password"type="password" id="pwd" class="inputUP"/></td>
</tr>
<tr>
<td align="right">验证码：</td>
<td align="left"><input type="text" name="passcode" class="inputUP">
        <img src="code.php"></td>
</tr>
<tr>
<td align="center" colspan="2"><input type="submit" onclick="toLogin(this)"  id="toLogin" value="登　录"/> <input type="reset" onclick="toLogin(this)"  id="toLogin" value="重置"/> >
</td>
</tr> 
</table>
</form>
</div>
</div>
<script src="share/js/jquery-1.11.0.js"></script>
<script src="admin/js/login.js"></script>
</body>
</html>