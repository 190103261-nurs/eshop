<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://atom.io/favicon.ico"/>
    <link rel="stylesheet" href="style.css">
    <title>home page</title>
</head>
<body>
<header>
    <div class="wrapper">
    <div class="logo">
    <img src="https://mir-s3-cdn-cf.behance.net/projects/202/8f6a6065802209.Y3JvcCw1NzcsNDUyLDQwNiw4Mg.png">
    </div> 
    <ul class="nav-area">
    <li><a href="{{ route('welcome')}}">HOME</li>
    <li><a href="{{ route('about')}}">ABOUT</li>
    <li><a href="{{ route('contact')}}">CONTACT</li>
    </ul>
    </div>
    <div class="welcome-text">
        <h1>This is my instagram</h1>
        <a href="https://www.instagram.com/abeuov.n">click here </a>
        
    </div>
    
    </header>
    <style>
        *{
    margin: 0;
    padding: 0;
}
.wrapper{
    width: 1300px;
    margin: auto;
}
header{
    background: url("https://cdn.wallpapersafari.com/52/56/GFDwHY.jpg");
    height: 100vh;
    -webkit-backgroung-size:cover;
    background-size:cover ;
    background-position: center center;
    position:relative ;
}
.nav-area{
    float:right;
    list-style:none;
    margin-top:35px;
}
.nav-area li{
    display:inline-block;
}
.nav-area li a{
    color:#fff;
    text-decoration:none;
    padding:5px 20px;
    font-family:poppins;
    font-size:14px;
}
.nav-area li a:hover{
    background:#fff;
    color:#333;
}
.logo img{
    width:150px;
    float:left;
    height:auto;
}
.welcome-text{
    position:absolute;
    width:600px;
    height:300px;
    margin:20% 30%;
    text-align:center;
}
.welcome-text h1{
    text-align:center;
    color: #fff;
    text-transform:uppercase;
    font-size:30px;  
}

    </style>
</body>
</html>