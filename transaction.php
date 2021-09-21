<?php
include 'common.php';
$select="SELECT * FROM users";
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
<style>
#sideNav{
    width: 250px;
    height: 100vh;
    position: fixed;
    right: -250px;
    top:0;
    background: slategray;
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

<body style="background-color : pink; ">
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
		<h2 style ="font-size:30px; color:slategray"> The Sparks Banking</h2>
        </div>
<h2 class="text-center" style="margin-top: 50x; color:slategray">Bank's Customers</h2>
<br>

<div class="col-md-offset-2 col-md-8">
<table class="table" style="background-color : slategray; ">
<thead>
<tr style="color: lawngreen; ">
    <th><h4><b>ID</b></h4></th>
    <th><h4><b>Name</b></h4></th>
    <th><h4><b>Email</b></h4></th>
<th><h4><b>Balance</b></h4></th>
<th><h4><b>Operation</b></h4></th>
</tr>
</thead>
<tbody>
<?php 
while($row=mysqli_fetch_assoc($select_query)){
?>
<tr style="color : white" >
<td ><?php echo $row['id'] ?></td>
<td ><?php echo $row['name']?></td>
<td ><?php echo $row['email']?></td>
<td ><?php echo $row['balance']?></td>
<td><a href="transfer.php?id= <?php echo $row['id'] ; ?>"> <button type="button" class="btn">Tranfer</button></a></td> 
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