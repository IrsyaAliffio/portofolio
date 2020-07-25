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
    .myprofil{
        height: 300px;
    }
    .myprofil div{
        float: left;
        /* background-color: blue; */
        font-size: 30px;
        margin-left: 100px;
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
        margin-top: 80px;
    }
    button:hover{
        background-color: rgb(10, 10, 138);
    }
    hr{
        margin-bottom: 60px;
    }
    main{
        margin-left: 100px;
        margin-right: 100px;
        padding-bottom: 60px;
        padding-top: 60px;
    }
    .experiece{
        background-color: rgb(168, 162, 162);
        /* height: 50px; */
    }
    h1{
        color: rgb(0, 68, 255);
        margin-bottom: 20px;
        font-weight: bold;
    }
    .contact{
        background-color: rgb(168, 162, 162);
        height: 600px;
    }
    .contact div{
        text-align: center;
        color: rgb(0, 68, 255);
        font-size: 50px;
        /* margin-left: 250px; */
        width: 350px;
        margin-left: 30px;
        margin-top: 100px;
        /* background-color: blue; */
        float: left;
    }
    .home{
        /* background-color: blue; */
        height: 590px;
        padding-top: 50px;
    }
    .contact .copyright{
        width: 100%;
        font-size: 20px;
        margin-top: 150px;
    }
</style>
<body>
    
<nav class="navbar sticky-top">
    <a class="navbar-brand active" href="http://localhost:8000/home">My Blog</a>
    <div class="menu">
        <a class="ini active" href="http://localhost:8000/home">Home</a>
        <a class="ini" href="http://localhost:8000/experience">Experience</a>
        <a class="ini" href="http://localhost:8000/portofolio">Portofolio</a>
    </div>
</nav>
<main>
    <center>
    <div class="home">
        <div class="profil">
            <img src="img/fioooo.jpg" alt="foto">
        </div>
        <h4>Irsya Aliffio</h4>
        <h6>Back-End Developer | UI/UX Designer</h6>
        <a href="#profil"><button type="submit">Read More <i class="fa fa-arrow-down" aria-hidden="true"></i></button></a>
    </div>
</center>
<hr id="profil">
<div class="myprofil">
    <h1>My Profil</h1>
    <div>
        <table>
            <tr>
                <td>Nama</td>
                <td>: Irsya ALiffio</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>: Pemalang</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>: 28 Juni 2003</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: Islam</td>
            </tr>
        </table>
    </div>
    <div>
        <table>
            <tr>
                <td>Hobby</td>
                <td>: Olahraga</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: Laki-laki</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: Sukamaju Baru, Tapos</td>
            </tr>
            <tr>
                <td>Sekolah</td>
                <td>: SMK Taruna Bhakti Depok</td>
            </tr>
        </table>
    </div>
</div>
    </main>
<div class="contact">
    <main>
        <h1>Contact</h1>
        <div>
            <i class="fa fa-instagram"></i><br>
            <h3>_aliffio28</h3>
        </div>
        <div>
            <i class="fa fa-whatsapp"></i><br>
            <h3>081548851447</h3>
        </div>
        <div>
            <i class="fa fa-envelope"></i><br>
            <h3>irsyaaliffio2806@gmail.com</h3>
        </div>
        <div class="copyright">
            <p>Copyright &copy; Irsya Aliffio 2020</p>
        </div>
    </main>
</div>
<script src="app.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\install_laravel\resources\views/profil.blade.php ENDPATH**/ ?>