

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="images/metinfo.css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

</head>

<body>

	<div class="metinfotop">
	<div class="position">�������ģ�Ȩ�޹���> <a href="administrator.php">����Ա</a></div>

	</div>
	<div class="clear"></div>


<div class="stat_list">
	<ul>
		<li ><a href="administrator.php" title="����Ա">����Ա</a></li>
		<li class="now"><a href="administrator_insert1.php" title="��������Ա��Ϣ">��������Ա��Ϣ</a></li>
	</ul>
</div>
<form method="POST" name="myform" action="administrator_insert2.php" target="_self">
	<input name="action" type="hidden" value="modify" />

    
    <tr> 
        <td class="text"><span class="bi_tian">*</span>�˺ţ�</td>
        <td class="input upload">
		    <input name="admin_name" type="text" class="text" />
					</td>
    </tr>	
	<tr> 
        <td class="text"><span class="bi_tian">*</span>���룺</td>
        <td class="input">
		    <input name="admin_code" type="password" class="text" /> </td>
    </tr>
     
 
	<tr  align="center"> 
        
        <td class="input" align="right">
		     </td>
              <td class="input">
		  <input type="submit" name="submit1" value="ȷ��" class="submit" onclick="return Smit($(this),'myform')" /></td>
		     </td>
    </tr>
</form>

</body>
</html>
