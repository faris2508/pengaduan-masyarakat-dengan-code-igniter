<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            color: #5b6574;
            background-color: #435165;            
        }
        .box{            
            background-color: white;
            height: 600px;
            width: 530px;
            margin:auto;
            margin-top:40px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .nama{
            font-weight: bold;
            margin-left: 60px;
            margin-top: 30px;
        }
        .id{
            margin-top: 10px;
            font-weight: bold;
            margin-left: 60px;            
            
        }
        .umur{
            margin-top: 10px;
            font-weight: bold;
            margin-left: 60px;
        }
        .pw{
            margin-top: 10px;
            font-weight: bold;
            margin-left: 60px;
        }
        .btn{
            margin-left: 49px;
            margin-top: 45px;           
        }
        .dftr{
            width: 300px;
            height: 50px;
            font-weight: bold;
            background-color: #435165;
            color: white;
        }
        .btl{
            width: 110px;
            height: 50px;
            font-weight: bold;
            background-color: red;
            color: white;
        }
        .btl:hover{
            background-color: rgb(187, 13, 13);
        }
        .dftr:hover{
            background-color: slategrey;
        }
        h2{
            font-weight: bold;
            margin-top:3px;
            margin-bottom: 10px;
        }
        .reg{
            border-bottom: 1px solid rgba(0, 0, 0, 0.322);
        }
        input,type[text]{
            width: 420px;
            height: 50px;
        }
        .ft{
            border-top: 1px solid black;
            margin-top: 30px;
        }
        .ft1{
            margin-top: 20px;
            margin: center;
        }
       
    </style>

</head>
<body>
    <div class="box">
        <div class="reg">
            <center><h2>Daftar</h2></center>
        </div>
        <div class="nama">
            <p>Nama Lengkap</p>
            <input type="text" placeholder="Masukan Nama Lengkap Anda">
        </div>
        <div class="id">
            <p>Username</p>
            <input type="text" placeholder="Masukan Username anda">
        </div>
        <div class="umur">
            <p>Umur</p>
            <input type="text" placeholder="Masukan Umur Anda">
        </div>
        <div class="pw">
            <p>Password</p>
            <input type="text" placeholder="Masukan Password Anda">
        </div>       
        <div class="btn">
            <button class="dftr">Daftar</button>
            <a href="login"><button class="btl">Kembali</button></a>
        </div>          
    </div>
</body>
</html>