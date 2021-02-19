
<html>
<head>
<meta-charset="UTF-8">
<meta name="viewport" content="width-device-width,initial-scale=1, shrink-to-fit-no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">

<title> Customers Details</title>
</head>
<body>

<div class="filter">

</div>
<center>
<h1>List of Customer Details</h1>
</center>
<table>
<thead>
    <tr>
<th> UserID</th>
<th> Name</th>
<th>EmailID</th>
<th>Amount</th>
<th>Operation</th>
</tr>

</thead>
<tbody>
<?php
include 'connection.php';
$selectquery= "select * from users";
$query= mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);
while($res=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['name'];?></td>
<td><?php echo $res['email'];?></td>
<td><?php echo $res['balance'];?></td>
<td><a href="selecteduserdetail.php?id= <?php echo $res['id'] ;?>"><button type="button" class="btn btn-success">Transact</button></a></td>  

</tr>
<?php
}
?>

</tbody>
</table>
</body>
</html>