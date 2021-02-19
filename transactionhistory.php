<html>
<head>
<meta-charset="UTF-8">
<meta name="viewport" content="width-device-width,initial-scale=1, shrink-to-fit-no">
<link rel="stylesheet" href="css/main.css">
<title>Transaction Details</title>
</head>
<body>

<div class="filter">

</div>
<center>
<h1>Transaction History</h1>
</center>
<table>
<thead>
    <tr>
<th> ID</th>
<th> Name</th>
<th>Reciever</th>
<th>Amount</th>
</tr>

</thead>
<tbody>
<?php
include 'connection.php';
$selectquery= "select * from history";
$query= mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);
while($res=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['sender'];?></td>
<td><?php echo $res['reciever'];?></td>
<td><?php echo $res['balance'];?></td>

</tr>
<?php
}
?>

</tbody>
</table>
</body>
</html>