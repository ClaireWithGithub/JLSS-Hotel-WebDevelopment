<html>
<head>
<script language="javascript" type="text/javascript">
function s(){
	var myform=document.login;
	if(myform.name.value==""){
		alert("�������˺�");
		return false;}
		else{
			if(myform.password.value==""){
				alert("����������");
				return false;}
				else{
					if(myform.passcode.value==""){
						alert("��������֤��");
						return false;}
						else return true;}}}
</script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ROSE NEWS��̨����-��¼</title>
<link href="share/images/favicon.ico" rel="shortcut icon"/>
<link href="share/css/share.css" rel="stylesheet" type="text/css"/>
<link href="admin/css/default/login.css" rel="stylesheet" type="text/css"  />
<link href="admin/css/default/share.css" rel="stylesheet" type="text/css"  />
</head>

<body id="loginBody">
<div id="pointerOpen" onclick="hideLoginBezel()">������¼</div>
<div id="loginBezel">
<!-- <div id="loginChildTop" onclick="hideLoginBezel()" title="��������ص�¼С����">��CMS����ƽ̨</div> -->
<div id="loginChildTop">��<img src="admin/images/logo-right.png" width="57" height="50" align="absbottom"  /> ROSE NEWS����ƽ̨</div>
<div id="loginChildBottom">
<form action="b_prompt.php" method="post" name="login" onSubmit="return s();">  

<table cellpadding="0" cellspacing="0" width="100%" height="95%" border="0">
<tr>
<td align="right" width="35%">�ˡ��ţ�</td>
<td align="left" width="65%">
<input name="name" type="text" id="account"  class="inputUP" value="<?php echo$_GET[name];?>"/>
</td>
</tr>
<tr>
<td align="right">�ܡ��룺</td>
<td align="left"><input name="password"type="password" id="pwd" class="inputUP"/></td>
</tr>
<tr>
<td align="right">��֤�룺</td>
<td align="left"><input type="text" name="passcode" class="inputUP">
        <img src="code.php"></td>
</tr>
<tr>
<td align="center" colspan="2"><input type="submit" onclick="toLogin(this)"  id="toLogin" value="�ǡ�¼"/> <input type="reset" onclick="toLogin(this)"  id="toLogin" value="����"/> >
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