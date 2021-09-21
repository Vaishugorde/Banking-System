<?php
include 'common.php';
$sid=isset($_GET['id']) ? $_GET['id'] : '';
$select = "SELECT * FROM  users where id=$sid";
$select_query=mysqli_query($con,$select);
$row = mysqli_fetch_assoc($select_query);
if(isset($_POST['submit']))
{
$from = $_GET['id'];
$to = $_POST['to'];
$amount = $_POST['amount'];

$select = "SELECT * from users where id=$from";
$select_query = mysqli_query($con,$select);
$row1 = mysqli_fetch_array($select_query); // returns array or output of user from which the amount is to be transferred.

$receiver = "SELECT * from users where id=$to";
$query = mysqli_query($con,$receiver);
$row2 = mysqli_fetch_array($query);

// constraint to check input of negative value by user
if (($amount)<0)
{
echo '<script type="text/javascript">';
echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
echo '</script>';
}
// constraint to check insufficient balance.
else if($amount > $row1['balance']) 
{
echo '<script type="text/javascript">';
echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
echo '</script>';
}
// constraint to check zero values
else if($amount == 0){
echo "<script type='text/javascript'>";
echo "alert('Oops! Zero value cannot be transferred')";
echo "</script>";
}
else {
// deducting amount from sender's account
$newbalance = $row1['balance'] - $amount;
$new = "UPDATE users set balance=$newbalance where id=$from";
mysqli_query($con,$new);
// adding amount to reciever's account
$newbalance = $row2['balance'] + $amount;
$new2 = "UPDATE users set balance=$newbalance where id=$to";
mysqli_query($con,$new2);
$sender = $row1['name'];
$receivr = $row2['name'];
$insert = "INSERT INTO transfer(`sender`, `receiver`, `amount`) VALUES ('$sender','$receivr','$amount')";
$query=mysqli_query($con,$insert);

if($query){
echo "<script> alert('Transaction Successful');
window.location='history.php';
</script>";

}
$newbalance= 0;
$amount =0;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Sparks Bank</title>
	<style>
#sideNav{
    width: 250px;
    height: 100vh;
    position: fixed;
    right: -250px;
    top:0;
    background: deeppink;
    z-index: 2;
    transition: .5s;
}
nav ul li{
    list-style: none;
    margin: 50px 20px;
}
nav ul li a{
    text-decoration: none;
    color: #fff;
}
#menuBtn{
    width: 50px;
    position: fixed;
    right: 65px;
    top: 35px;
    z-index: 2;
    cursor: pointer;
}
</style>
</head>

<body style="background-color: cadetblue;">
<nav id="sideNav">
            <ul>	
			<li><a href="home.php">Home</a></li>
            <li><a href="transaction.php">Our Customers</a></li>
            <li><a href="history.php">Transaction History</a></li>
			<li><a href="transfer.php">Transfer Money</a></li>
			<li><a href="user.php">New User</a></li>
                
            </ul>
        </nav>
        <img src="menu.png" id="menuBtn">
<div class="container">
<div class="row">
    <div class="imgtab">

        <img src="icon2.png" style="margin-left:-100px;width:100px;height:70px;margin-bottom:220px;position:absolute;border-radius: 50%;">

    </div>
    <div class="brand">
		<h2 style ="font-size:30px; margin-top: 20px; color:white"> <b>The Sparks Banking</b></h2>
        </div>
<div class="container">
<h2 class="text-center" style="margin-top: 50px; color: #ccccad;">Make a Transaction</h2>
<br>
<br>
<div class="row">
<form method="POST" name="send">
<table class="table table-hover" style="color: lawngreen; ">
<thead>
<th><h4><b>ID</b></h4></th>
<th><h4><b>Name</b></h4></th>
<th><h4><b>Email</b></h4></th>
<th><h4><b>Balance</b></h4></th>
</thead>
<tbody>
<tr style="color: lawngreen; ">
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['name'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['balance'] ?></td>
</tr>
</tbody>
</table>
<br><br>
    <label style="color: lawngreen; "><h4><b>Transfer To:</b></h4></label>
<select name="to" class="form-control" required>
<option value="" disabled selected>Choose</option>
<?php
$sid=$_GET['id'];
$select = "SELECT * FROM  users where id!=$sid ";
$select_query=mysqli_query($con,$select);
while($row = mysqli_fetch_assoc($select_query)) {
?>
<option class="table" value="<?php echo $row['id'];?>" >
<?php echo $row['name'] ;?>
</option>
<?php 
} 
?>
<div>
</select>
<br>
<br>
<label style="color: lawngreen; "><h4><b>Amount:</b></h4></label>
<input type="number" class="form-control" step="0.01" name="amount" required>   
<br><br>
<div class="text-center" >
<button class="btn btn-danger" name="submit" type="submit"><h4>Transfer</b></h4></button>
</form>
</div>
</div>
<script>
            var menuBtn=document.getElementById("menuBtn");
            var sideNav=document.getElementById("sideNav");
            sideNav.style.right="-250px"
            menuBtn.onclick=function(){
                if(sideNav.style.right=="-250px"){
                    sideNav.style.right="0px";
                }
                else{
                    sideNav.style.right="-250px";
                }
            }
        </script>
</body>
</html>