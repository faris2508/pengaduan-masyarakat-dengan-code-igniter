<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    

    <style>
        @import"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";

        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #29323d;
        }
        #brand{
            font-weight: bold;
        }
       nav{
            background-color: #435165;
            color: white;
        }
        #navbarDropdown{
            color: white;
        }
        .box{
            background-color: white;            
            border:1px solid black;
            height: 650px;
            width: 700px;
            margin:auto;
            margin-top:20px;
            margin-bottom: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         }
         h4{
            font-weight: bold;
             margin-left: 3px;
         }
         p{
             font-weight: bold;
         }
         .nama{
             margin-top: 10px;
             margin-left: 50px;
         }
         .judul,.kat,.isi,.tgl,.loc{             
             margin-left: 50px;
         }
         select{
             width: 605px;
         }
         .judul1,.tgl1,.loc1{
            width: 605px;
         }
         .nama1,.nama2{
             width: 300px;
         }
         .title{
             background-color: #435165;
             color:white;
         }
         .tmbl{
             margin-top: 10px;
             margin-left: 73%;
         }

         button{
             font-weight: bold;
             width: 150px;
             height: 40px;
             color: white;
             background-color: #435165;
         }
         
         input,select{
             margin-top: -5px;
             margin-bottom: 3px;
         }
         img{
             width: 40px;
         }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="navbar-brand" href="#" id="brand">Laporinaja.ID</a>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>    -->
            <li class="nav-item">
                <a class="nav-link" href="#">Tentang Laporinaja.ID</a>
            </li>
    </ul>       
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">                
                <li class="navbar-item">
                    <img src="/assets/orang.png" alt="">
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    User0192939
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="login">Logout <i class="fa fa-sign-out"></i></a>           
                </div>
              </li>                            
            </ul>
        </div>
    </nav>
    <div class="box">
        <div class="title">
            <h4>Tuliskan Laporan Anda</h4>
        </div>
        <div class="nama">
            <p>Ketikan Nama Anda</p>
            <input type="text" class="nama1"> <input type="text" class="nama2">
        </div>
        <div class="judul">
            <p>Ketikan Judul Laporan Anda</p>
            <input type="text" class="judul1">
        </div>
        <div class="kat">
            <p>Ketikan Kategori Laporan Anda</p>
            <select name="kat1" id="">
                <option value="-">----Pilih Kategori Laporan----</option>
                <option value="Corona Virus">Corona Virus</option>
                <option value="Kesehatan">Kesehatan</option>
                <option value="Politik">Politik</option>
                <option value="Hukum">Hukum</option>
                <option value="Keamanan">Keamanan</option>
                <option value="Energi dan Sumber Daya Alam">Energi dan Sumber Daya Alam</option>
            </select>
        </div>
        <div class="isi">
            <p>Ketikan Isi Laporan Anda</p>
            <textarea name="" id="" cols="83" rows="5"></textarea>
        </div>
        <div class="tgl">
            <P>Pilih Tanggal Laporan</P>
            <input type="date" class="tgl1">
        </div>
        <div class="loc">
            <p>Ketikan Lokasi Kejadian</p>
            <input type="text" class="loc1">
        </div>
        <div class="tmbl">
            <a href="">
                <button>Lapor</button>
            </a>
        </div>
    </div>
</body>
</html>