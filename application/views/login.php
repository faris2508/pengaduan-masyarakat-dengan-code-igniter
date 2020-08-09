<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            color: #5b6574;
            background-color: #435165;            
        }
        .box{
            background-color: white;            
            height: 580px;
            width: 530px;
            margin:auto;
            margin-top:40px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .id,.pw{
            font-weight: bold;
            margin-left: 60px;
            margin-top: 50px;
        }
        .btn{
            margin-left: 49px;
            margin-top: 35px;           
        }
        button{
            width: 420px;
            height: 50px;
            font-weight: bold;
            background-color: #435165;
            color: white;
        }
        button:hover{
            background-color: slategrey;
        }
        h2{
            font-weight: bold;
            margin-top:3px;
            margin-bottom: 10px;
        }
        .login{
            padding-top: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.322);
        }
        input,type[text]{
            width: 420px;
            height: 50px;
        }
        .ft{
            border-top: 1px solid rgba(0, 0, 0, 0.322);
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
        <div class="login">
            <center><h2>Login</h2></center>
        </div>
        <div class="id">
            <p>Username</p>
            <input type="text" placeholder="Masukan Username anda">
        </div>
        <div class="pw">
            <p>Password</p>
            <input type="text" placeholder="Masukan password anda">
        </div>
        <div class="btn">            
            <a href="home"><button>Masuk</button></a>                
        </div>
        <div class="ft">
            <div class="ft1">
                <center>
                    <p>Belum mempunyai akun?<br> <a href="register">DAFTAR DISINI</a></p>                    
                </center>
            </div>            
        </div>         
    </div>
</body>
</html>