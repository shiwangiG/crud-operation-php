<?php
require_once("connect.php");
$sql = "SELECT * FROM jodichart ORDER BY id DESC";
$result = mysqli_query($conn,$sql) or die( mysqli_error($conn));

?>
<html>
<head>
<title>Data List</title>
<link rel="stylesheet" type="text/css" href="manas3.css" />
</head>
<center>
<div class="container">
<body>
<div class="h">
<h1>CRUD PHP</h1>
</div>
<form name="frmUser" method="post" action="">

<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div class="logout" align="center " style="padding-bottom:5px;"><a href="add_user.php" class="link"><img alt='Add' title='Add' src='add.png' width='15px' height='15px'/> Add Row</a></div>
<table border="0" cellpadding="10" cellspacing="1" class="tblListForm">

<div class="1">
<table id="customers">
<tr class="listheader">
<td>Mon</td>
<td>Tue</td>
<td>Wed</td>
<td>Thu</td>
<td>Fri</td>
<td>Sat</td>
<td>Sun</td>
<td></td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["mon"]; ?></td>
<td><?php echo $row["tue"]; ?></td>
<td><?php echo $row["wed"]; ?></td>
<td><?php echo $row["thur"]; ?></td>
<td><?php echo $row["fri"]; ?></td>
<td><?php echo $row["sat"]; ?></td>
<td><?php echo $row["sun"]; ?></td>
<td><a href="edit_user.php?id=<?php echo $row["id"]; ?>" class="link"><img alt='Edit' title='Edit' src='edit.png' width='15px' height='15px' hspace='10' /></a> <hr> <a href="delete_user.php?id=<?php echo $row["id"]; ?>"  class="link"><img alt='Delete' title='Delete' src='delete.png' width='15px' height='15px'hspace='10' /></a></td>
</tr>
<?php
$i++;
}
?>
</table>

</form>

</div>
</body>
<div></center></html>
