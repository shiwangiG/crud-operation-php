<?php session_start();
if(!$_SESSION['username']){
	header("location:login8.html");
}
?>
<?php
if(count($_POST)>0) {
	require_once("connect.php");
	$sql = "INSERT INTO jodichart(mon, tue, wed, thur, fri, sat, sun) VALUES ('" . $_POST["mon"] . "','" . $_POST["tue"] . "','" . $_POST["wed"] . "','" . $_POST["thur"] . "' ,'" . $_POST["fri"] . "' ,'" . $_POST["sat"] . "' ,'" . $_POST["sun"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New record Added Successfully";
	}
}
?>
<html>
<head>
<title>Add New Row</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<center>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Data</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add New Row</td>
</tr>
<tr>
<td><label>Monday</label></td>
<td><input type="text" name="mon" class="txtField"></td>
</tr>
<tr>
<td><label>Tuesday</label></td>
<td><input type="text" name="tue" class="txtField"></td>
</tr>
<td><label>Wednesday</label></td>
<td><input type="text" name="wed" class="txtField"></td>
</tr>
<td><label>Thursday</label></td>
<td><input type="text" name="thur" class="txtField"></td>
</tr>
<td><label>Friday</label></td>
<td><input type="text" name="fri" class="txtField"></td>
</tr>
<td><label>Saturday</label></td>
<td><input type="text" name="sat" class="txtField"></td>
</tr>
<td><label>Sunday</label></td>
<td><input type="text" name="sun" class="txtField"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></center></html>