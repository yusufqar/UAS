<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UAS WEB 2 PEMESANAN MAKANAN - KEL.5 - 06TPLM001</title>
	 <link rel="stylesheet" href="assets/css/bootstrap.css"/>
	 <link rel="stylesheet" href="assets/font-awesome/css/all.css"/>
     <script type="text/javascript" src="assets/jquery-3.5.1.min.js"></script>

     <style type="text/css">
     	 @font-face{
              font-family: kelvinch;
              src: url(assets/font/kelvinch.otf);
              font-family: digital;
              src: url(assets/font/digital.ttf);
            }
            .container-fluid{
                position: relative;
            	border:1px solid lightgray;
                height: 100vh;
                background: lightgray;
            }
            #notifValidasi{
                width: 50%;
                border-bottom-right-radius: 50px;
                border-bottom-left-radius: 50px;
                font-family: kelvinch;
                font-size:15px;
                font-weight: bold;
                text-align: center;
                color:white;
            }
            #bagianLogin{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
            }
            #tableLogin{
                color: transparent !important;
                background: transparent;
                text-align: center;
                font-family: kelvinch;
                opacity: 0.8;
                border-radius: 100px;
            }
            .container-fluid:hover #tableLogin{
                transition:0.5s;
                color: slategray !important;
                box-shadow: 0px 0px 10px 10px darkgray;
            }
            th{
                border: 1px solid transparent !important;
                font-size: 25px;
            }
            #tdUsername{
                border-bottom-left-radius: 65px;
            }
            #tdPassword{
                border-bottom-right-radius: 65px;
            }
            input{
                margin: auto;
                text-align: center;
                font-weight: bold !important;
                font-family: kelvinch !important;
                border-radius: 50px !important;
                border: 2px solid #d6d6d6 !important;
                background: transparent !important;
                outline: none !important;
                width: 70% !important;
                color: transparent !important;
            }
            input:hover{
                background: white !important;
                transition: 0.5s;
                color: slategray !important;
                box-shadow: 0px 0px 5px 3px darkgray;
            }
            input:focus{
                background: white !important;
                transition: 0.5s;
                color: slategray !important;
                box-shadow: 0px 0px 5px 3px darkgray;
            }
            #logoSmile{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                color: slategray;
                opacity: 0.8;
            }
            #lgnBtn{
                font-family: kelvinch;
                font-weight: bold;
                color: transparent;
                border: none;
                border-radius: 50px;
                background: transparent;
                outline: none !important;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
            }
            #bagianLogin:hover #logoSmile{
                background: transparent !important;
                color: transparent !important;
                transition: 0.5s;
            }
            #bagianLogin:hover #lgnBtn{
                background: transparent !important;
                color: slategray !important;
                transition: 0.5s;
                box-shadow: 0px 0px 5px 5px darkgray;
            }
     </style>

</head>
<body>
	 <div class="container-fluid">
	 	<div class="row justify-content-center">
            <span id="notifValidasi"></span>

              <?php

              if(isset($_GET['pesan']))
              {
                if($_GET['pesan'] == "gagal")
                {
                  echo '<script type="text/javascript">

                    document.getElementById("notifValidasi").style.background = "maroon";
                    span = document.getElementById("notifValidasi");
                    txt = document.createTextNode("Username Atau Password Yang Anda Masukkan Salah!");
                    span.appendChild(txt);


                    </script>';
                }
                else if($_GET['pesan'] == "logout")
                {
                  echo '<script type="text/javascript">

                    document.getElementById("notifValidasi").style.background = "green";
                    span = document.getElementById("notifValidasi");
                    txt = document.createTextNode("Anda Telah Berhasil Melakukan Log Out, Terimakasih!");
                    span.appendChild(txt);

                    </script>';
                }
                else if($_GET['pesan'] == "belum_login")
                {
                  echo "Silahkan Login Terlebih Dahulu!";
                }
              }
              
              ?>
	 		<div id="bagianLogin" class="col-lg-5">
	 			<table id="tableLogin" class="table table-hover">
                    <form action="validateUser.php" method="POST">
                    <thead>
                        <th id="thUsername"><label for="username"><strong><i class="fas fa-user-circle"></i> Username</strong></label></th>
                        <th><label for="password"><strong>Password <i class="fas fa-key"></i></strong></label></th>
                    </thead>
                    <tbody>
                        <td id="tdUsername"><input type="text" class="form-control" id="username" required="required" name="username"></td>
                        <td id="tdPassword"><input type="password" class="form-control" id="password" required="required" name="password"></td>
                    </tbody>
                </table>
                <i id="logoSmile" class="fas fa-laugh-beam fa-3x"></i>
                <button id="lgnBtn" type="submit">Log In</button>
                </form>
	 		</div>
	 	</div>
	 </div>
</body>
</html>