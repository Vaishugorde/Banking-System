<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>
    <style>
	*{
    margin: 0;
    padding: 0;
    font-family: "Open Sans",sans-serif;
    box-sizing: border-box;
}

body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: limegreen;
}

.about-section{
    background: url(aboutus1.jpg) no-repeat left;
    background-size: 50%;
    background-color: #fdfdfd;
    overflow: hidden;
    padding: 100px 0;
}

.inner-container{
    width: 50%;
    float: right;
    background-color: #fdfdfd;
    padding: 100px;
}

.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.text{
    font-size: 13px;
    color: #545454;
    line-height: 20px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}

@media screen and (max-width:500px){
    .inner-container{
        padding: 80px;
    }
}

@media screen and (max-width:900px){
    .about-section{
        background-size: 90%;
        padding: 90px 40px;
    }
    .inner-container{
        width: 80%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container{
        padding: 70px;
    }
}

	</style>
</head>
<body>
    <div class="about-section">
        <div class="inner-container">

<h1>About Us</h1>
<p class="text">
<b>No more waiting in the long queues ,transfer the money very conveniently with the help of our Sparks Bank System , a digital wallet platform </b>
</p>
            <h1>Features</h1>
            <p class="text">
               <b> Transfer Money electronically , insted of writing checks . Transfer Funds easily . Set up account alearts . Safe Transaction.</b>
            </p>
            
        </div>
    </div>
</body>
</html>