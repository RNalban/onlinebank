<html>
    <head>
        <title> Create an Account</title>
        <link rel="stylesheet" type="text/css" href="css/create.css">
</head>
<body class="bg">
<center><h1>Create New Account on our Online Banking System</h1></center>
<div class="start">
<form action = "" method="POST">
<input type="name" name="name" class="txtbox" placeholder="Enter your Name"/><br/><br/>
<input type="email" name="email" class="txtbox" placeholder="Enter email ID"/><br/><br/>
 <input type="amount" name="amount" class="txtbox" placeholder="Enter Amount"/><br/><br/>
 <input type="submit" name="create" class="btn" value="Create"/><br/>


</form>
</div>    
</body>

</html>
<?php
include ("connection.php");
if(isset($_POST['create'])){
$name=$_POST['name'];
$email=$_POST['email'];
$amount=$_POST['amount'];
$sql="insert into users (name, email, amount) values ('$name','$email','$amount');";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully !";
 } else {
    echo "Error: " . $sql . "
" . mysqli_error($con);
 }
 mysqli_close($con);
}
?>