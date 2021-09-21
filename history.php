<?php
include 'common.php';
$select="SELECT * FROM transfer";
$select_query=mysqli_query($con,$select);
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
    background: blue;
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

<body style="background-color: paleturquoise;">
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
		<h2 style ="font-size:30px; margin-top: 20px; color:midnightblue"> The Sparks Banking</h2>
        </div>
<div class="container">
<div class="row">
<h2 class="text-center" style="margin-top: 80px; color: midnightblue;">Transaction History</h2>
<br>

<div class="col-md-offset-2 col-md-8">
<table class="table" style="background-color: hotpink;">
<thead>
<tr style="color: white">
<th><h4>ID</h4></th>
<th><h4>Sender</h4></th>
<th><h4>Receiver</h4></th>
<th><h4>Amount</h4></th>
</tr>
</thead>
<tbody>
<?php 
while($row=mysqli_fetch_assoc($select_query)){
?>
<tr style="color: white">
<td ><?php echo $row['sid'] ?></td>
<td ><?php echo $row['sender']?></td>
<td ><?php echo $row['receiver']?></td>
<td ><?php echo $row['amount']?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
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