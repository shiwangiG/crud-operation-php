<?php session_start();
if(!$_SESSION['username']){
	header("location:login8.html");
}
?>
<?php
require_once("connect.php");
if(count($_POST)>0) {
	$sql = "UPDATE jodichart set mon='" . $_POST["mon"] . "', tue='" . $_POST["tue"] . "', wed='" . $_POST["wed"] . "', thur='" . $_POST["thur"] . "' , fri='" . $_POST["fri"] . "' , sat='" . $_POST["sat"] . "', sun='" . $_POST["sun"] . "' WHERE id='" . $_POST["id"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM jodichart WHERE id='" . $_GET["id"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);

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

<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblSaveForm">

<tr class="tableheader">
<td colspan="2">Edit Row</td>
</tr>

<tr>
<td><label>Monday</label></td>
<td><input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>"><input type="text" name="mon" class="txtField" value="<?php echo $row['mon']; ?>"></td>
</tr>


<tr>
<td><label>Tuesday</label></td>
<td><input type="text" name="tue" class="txtField" value="<?php echo $row['tue']; ?>"></td>
</tr>

<tr>
<td><label>Wednesday</label></td>
<td><input type="text" name="wed" class="txtField" value="<?php echo $row['wed']; ?>"></td>
</tr>

<tr>
<td><label>Thursday</label></td>
<td><input type="text" name="thur" class="txtField" value="<?php echo $row['thur']; ?>"></td>
</tr>

<tr>
<td><label>Friday</label></td>
<td><input type="text" name="fri" class="txtField" value="<?php echo $row['fri']; ?>"></td>
</tr>

<tr>
<td><label>Saturday</label></td>
<td><input type="text" name="sat" class="txtField" value="<?php echo $row['sat']; ?>"></td>
</tr>


<tr>
<td><label>Sunday</label></td>
<td><input type="text" name="sun" class="txtField" value="<?php echo $row['sun']; ?>"></td>
</tr>


<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit" ></td>
</tr>


</table>
</div>
</form>
</body></center>
</html>