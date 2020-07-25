<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</head>
<style>
    @import"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";
    .navbar a{
        text-decoration: none;
        color: black;
        margin-left: 40px;
        margin-right: 40px;
    }
    .navbar{
        background-color: white;
    }
    .ini{
        margin-left: 30px;
    }
    .ini:hover{
        color: blue;
    }
    .menu{
        float: right;
    }
    .active{
        color: blue;
        font-weight: bold;
    }
    .profil img{
        height: 150px;
        width: 150px;
        border-radius: 50%;
        /* background-color: blue; */
        margin-top: 20px;
        margin-bottom: 20px;
    }
    button{
        background-color: rgb(0, 68, 255);
        color: white;
        border: none;
        border-radius: 20px;
        padding: 10px;
        width: 150px;
        margin-top: 30px;
    }
    button:hover{
        background-color: rgb(10, 10, 138);
    }
    hr{
        margin-bottom: 40px;
    }
    main{
        margin-left: 100px;
        margin-right: 100px;
        padding-bottom: 60px;
        /* padding-top: 60px; */
    }
    .experience{
        border: black 1px;
        border-radius: 20px;
        /* height: 50px; */
    }
    h1{
        color: rgb(0, 68, 255);
        margin-bottom: 20px;
        font-weight: bold;
    }
    .contact div{
        text-align: center;
        color: rgb(0, 68, 255);
        font-size: 50px;
        /* margin-left: 250px; */
        width: 350px;
        margin-left: 30px;
        /* background-color: blue; */
        float: left;
    }
</style>
<body>
    
<nav class="navbar sticky-top">
    <a class="navbar-brand active" href="#">My Blog</a>
    <div class="menu">
        <a class="ini" href="http://localhost:8000/home">Home</a>
        <a class="ini active" href="http://localhost:8000/experience">Experience</a>
        <a class="ini" href="http://localhost:8000/portofolio">Portofolio</a>
    </div>
</nav>
<main>
    <center>
        <div class="profil">
            <img src="img/fioooo.jpg" alt="foto">
        </div>
        <h4>Irsya Aliffio</h4>
        <h6>Back-End Developer | UI/UX Designer</h6>
        <hr>
    </center>
    <div class="experience">
        <h1>My Experience</h1>
        <h4 class="tulis"></h4>
    </div>
</main>
<script src="app.js"></script>
</body>
</html>