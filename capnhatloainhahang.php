<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript">
function checkInput()
{
		if(document.frmregister.txtname.value=="")
		{
			window.alert('Bạn chưa nhật tên loại nhà hàng');
			document.frmregister.txtname.focus();
			return false;
		}
}
function thoat()
{
	window.location="index.php";	
}
function MM_jumpMenu(targ,selObj,restore)
{ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<body>
<?php
if(isset($_POST['Smcnhd']))
{		$n=$_POST['txtname'];
		include('dbconect.php');
		$sql="INSERT INTO loainhahang(tenloai) 
		values('$n')";
			$result=mysql_query($sql);
			if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=8";
                </script>
                <?php
			}
		else
			echo' Bạn ko cập nhật đc vì lỗi hệ thống'.mysql_error();
}
?>
<form name="frmregister" method="post" action="" onSubmit="return checkInput();">
<div align="center">
<table width="600" border="0">
	<tr>
    	<td colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>CẬP NHẬT THÔNG TIN LOẠI NHÀ HÀNG</b></p></td>
    </tr>
    <tr>
    <td height="23" colspan="2"><p class="thongtin">Những thông tin có đánh dấu <font color="#FF0000">*</font>là bắt buộc</p></td>
    </tr>
     <tr>
         <td colspan="2"><b><font color="#0099FF">Thông tin loại nhà hàng</font></b></td>
    </tr>
    <tr>
         <td width="207" height="32" class="chu">Tên loại nhà hàng<font color="#FF0000">*</font></td>
         <td width="377"><label>
         <input name="txtname" type="text" size="30" maxlength="50" />
         </label></td>
    </tr>
     <tr>
         <td colspan="2"><label>
           <div align="center">
             <input name="Smcnhd" type="submit"  value="" class="btncapnhat">
             <input type="button" name="btnthoat" class="btnexit" value="" onClick="thoat();" />
           </div>
         </label></td>
         </tr>
</table>
</div>
