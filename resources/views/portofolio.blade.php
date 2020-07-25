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
        <a class="ini" href="http://localhost:8000/experience">Experience</a>
        <a class="ini active" href="http://localhost:8000/portofolio">Portofolio</a>
    </div>
</nav>
<main>
    <h1>My Portofolio</h1>
    <div class="card-deck">
        <div class="card">
            <img src="img/ralat.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">UI/UX App Movie</h5>
                <p class="card-text">Ini adalah hasil UI/UX yang saya buat menggunakan aplikasi illustrator dan photoshop</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="img/login.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Form Login</h5>
                <p class="card-text">Ini adalah Form login yang saya buat menggunakan php css dan javascript saja, sebenarnya ini adalah tugas tetapi saya upgrade lagi agar menjadi lebih menarik</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="img/clock.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Clock Digital</h5>
                <p class="card-text">Ini adalah Clock saya membuat ini dikarenakan sedang iseng melihat tutorial dari youtub dan saya mengikutinya dan seperti biasa saya ubah lagi tampilannya agar lebih menarik dari sebelumnya</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</main>
<main>
    <div class="card-deck">
        <div class="card">
            <img src="img/blog.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Blog</h5>
                <p class="card-text">Ini adalah blog yang saya buat dari materi dicoding yang saya pelajari</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="img/Tampil data.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tampil Data</h5>
                <p class="card-text">Saya membuat tugas ini menggunakan javascript php dan bootstrap</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="img/clockdinding.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Clock Dinding</h5>
                <p class="card-text">Ini adalah Clock dinding, hehe aneh ya namanya, ya saya membuat ini dengan melihat tutorial youtube</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</main>
<script src="app.js"></script>
</body>
</html>