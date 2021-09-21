<?php
include 'common.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Banking System</title>
        <meta name ="viewport"content="width=device-width ,initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Gabriela&display=swap" rel="stylesheet">
   
        <style>
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
#header{
    height: 100vh;
	
    background-image: url(background.png);
    background-position: center;
    background-size: cover;
}
.container{
    margin-right: 100px;
    margin-left: 100px;
}

.header-text{
    max-width: 350px;
    margin-top: 140px;
}
.h1{
    font-size: 34px;
}
.square{
    height: 12px;
    width: 12px;
    display: inline-block;
    background: #f67c92;
    margin:15px 0;
}
.button{
    padding: 20px 50px;
    background: transparent;
    outline:none ;
    border: 2px solid #f67c92;
    font-weight: bold;
    cursor: pointer;
}
p{
    font-size: 15px;
    line-height: 18px;
    color: #777;
}
.header-text button{
    margin-top: 20px;
    margin-bottom: 60px;
}
.line1{
    width: 15px;
    height: 15px;
    background: #f67c92;
    display: inline-block;
}
.line2{
    width: 80px;
    height: 1px;
    background: #f67c92;
    display: inline-block;
}
.line3{
    width: 60px;
    height: 1px;
    background: #f67c92;
    display: inline-block;
}
.line{
    line-height: 8px;
}

/* FEATURES */

#features{
    padding-top: 50px;
    padding-bottom: 50px;
    margin-top: 100px;
}

.feature-row{
    width: 80%;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
}
.feature-col{
   display: flex;
   flex-direction: column;
   justify-content: space-between;
   height: 300px;
}
.feature-col img{
    width: 230px;
	height:200px;
}

.feature-col>a{
    display: inline-block;
}


@media(max-width:450px){
    .container{
        margin-right: 20px;
        margin-left: 20px;
    }
    
    #header{
        min-height: 100vh;
        background-image: none;
        /* background-size: 100%;
        background-repeat: no-repeat; */
    }
    
    
    .header-text{
        margin-top: 20px;
    }

    

    #features{
        margin-top: -20px;
    }

    .button {
        margin-top: 20px;
        margin-bottom: 30px;
    }
}


@media(max-width:1000px){
    #header{
        background-image: none;
        /* background-size: 100%;
        background-repeat: no-repeat; */
           }
    
       }
            </style>
			 <link rel="stylesheet" href="nav.css">
    </head>
    <body>
	<header>
    <nav>

        <div class="imgtab">

            <img src="icon2.png" style="margin-left:-100px;width:100px;height:70px;margin-bottom:220px;position:absolute;border-radius: 50%;">

        </div>

        <div class="brand">
		<h2 style ="font-size:25px;"> The Sparks Banking</h2>
        </div>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="index.php">About Us</a></li>
			<li><a href="user.php">New User</a></li>
			
        </ul>
    </nav>
</header>

        <section id="header">
            <div class="container">
                <div class="logoParent">
                </div>
                <div class="header-text">
                    <h2 style ="font-size:40px;">Welcome to<br> The Sparks Bank</h2>
                    <span class="square"></span>
					
					
                    <p>No more waiting in the long queues ,transfer the money very conveniently with the help of our Sparks Bank System , a digital wallet platform and online payment system developed  to power in-app, online, and in-person contactless  transactions with mobile phones.</p>
                    <a href="user.php"><button class="button">Register Yourself</button></a>
                        <div class="line">
                        <span class="line1"></span><br><br>
                        <span class="line2"></span><br><br>
                        <span class="line3"></span>
                    </div>
                </div>
            </div>
        </section>
        

<!---FEATURES--->
<section id="features">
    <div class="feature-row">
        <div class="feature-col">
            <img src="user.jpg">
           <a href="transaction.php"> <button class="button" >Our Customers</button></a>
        </div>
        <div class="feature-col">
            <img src="transhistory.jpg">
            <a href="history.php"><button class="button" >Transaction History</button></a>
        </div>
        <div class="feature-col">
            <img src="moneytransfer.jpg">
            <a href="transfer.php"><button class="button" >Transfer Money</button></a>
        </div>
    </div>
    
</section>
