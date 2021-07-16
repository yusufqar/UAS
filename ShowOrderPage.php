<?php
session_start();
include "koneksi.php";
?>
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
            	border:1px solid slategray;
                height: 100vh;
                background: black;
            }
            .container-fluid:hover{
                background: lightgray;
                transition: 0.5s;
            }
            #bagianHeader{
            	background: transparent;
            	text-align: center;
            	margin-top: 20px;
            	height: 50px;
            }
            #headerText{
            	color: transparent;
            	font-size: 30px;
            	font-weight: bold;
            	font-family: kelvinch;
            }
            .container-fluid:hover #headerText{
                color: slategray;
                transition: 1s;
            }
            #timeWrapper{
            	text-align: center;
            }
            #time{
            	font-family: digital;
            	font-size: 25px;
            	font-weight: bold;
            	color: transparent;
            }
            .container-fluid:hover #time{
                color: slategray;
                transition: 1s;
            }
            #userInfo{
                margin-left: 10px;
                font-family: kelvinch;
                font-style: italic;
                font-weight: bold;
                font-size: 20px;
                color: transparent;
            }
            .container-fluid:hover #userInfo
            {
                color: slategray;
                transition: 1s;
            }
            table{
            	color: transparent !important;
            	background: transparent;
            	text-align: center;
            	font-family: kelvinch;
            	font-weight: bold;
            	margin-top: 10px;
            	table-layout: fixed;
              	word-break: break-all;
            }
            .container-fluid:hover table{
                color: slategray !important;
                background: lightgray;
                transition: 0.2s;
            }
            td,th{
                border: 1px solid transparent !important;
            }
            thead{
                border: 1px solid transparent !important;
            }
            tbody{
                border: 1px solid transparent !important;
            }
            .container-fluid:hover th{
                border: 1px solid white !important;
                transition: 1s;
            }
            .container-fluid:hover td{
                border: 1px solid white !important;
                transition: 1s;
            }
            button{
                background: transparent;
                color: transparent;
                border: none !important;
            	border-radius: 100px;
            	outline: none !important;
            	font-family: kelvinch;
                font-weight: bold;
            }
            .container-fluid:hover button{
                transition: 0.5s;
                background: slategray;
                color: white;
                transition: 0.5s;
            }
            button:hover{
                transition: 0.5s;
                box-shadow: 0px 0px 10px 5px darkgray;
                background: white !important;
                color: slategray !important;
            }
            a{
                color: transparent;
                text-decoration: none !important;
                border-radius: 50px;
                padding: 5px;
                font-weight: bold;
                font-family: kelvinch;
                height: 20px;
            }
            .container-fluid:hover a{
                transition: 0.5s;
                color: white;
                transition: 0.5s;
                background: slategray;
            }
            a:hover{
                color: slategray !important;
                background: white !important;
                box-shadow: 0px 0px 10px 5px darkgray;
                transition: 0.5s;
            }
            #textAlert{
                font-family: kelvinch;
                font-size: 20px;
                font-weight: bold;
                text-decoration: underline;
                color: white;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
            }
            .container-fluid:hover #textAlert{
                display: none;
            }
            #tblOutputPesanan{
                table-layout: fixed;
                word-break: break-all;
                font-weight: bold;
                font-size: 10px;
            }
            #tblOutputPesanan:hover{
                box-shadow: 0px 0px 10px 5px darkgray;
                transition: 0.5s;
            }
            #tblOutputPesanan:hover th{
                color: white;
                background: slategray;
                transition: 0.5s;
            }
            #tblOutputPesanan:hover td{
                background: white;
                transition: 0.5s;
            }
            #aCetakDokumen{
                color: transparent;
                text-decoration: none !important;
                border-radius: 50px;
                padding: 5px;
                font-weight: bold;
                font-family: kelvinch;
                height: 20px;
            }
            .container-fluid:hover #aCetakDokumen{
               transition: 0.5s;
               color: white;
               transition: 0.5s;
               background: slategray;
            }
            #aCetakDokumen:hover{
                box-shadow: 0px 0px 10px 5px darkgray;
                background: white;
                color: slategray;
                transition: 0.5s;
            }
            
     </style>

</head>
<body onload=waktu();>
	 <div class="container-fluid">
	 	<div class="row justify-content-center">
	 		<div id="bagianHeader" class="col-lg-12">
	 			<span id="headerText">Data Pemesanan Makanan</span>
	 		</div>                                                           <! TIME WIDGET PART >
            <div id="timeWrapper" class="col-lg-12">
                <div id="time"></div>
            </div>
            <div id="bagianTampilPesanan" class="col-lg-12" style="padding:0px;">
                <span id="textAlert">Silahkan Gerakkan Kursor Anda Untuk Melihat Data Pemesanan Makanan</span>
                <span id="userInfo"><i class="fas fa-user-circle logouser"></i><?php echo " "; echo $_SESSION['username'];?></span>
                <table id="tblOutputPesanan" class="table table-bordered table-hover">
                    <form action="" method="POST">
                        <thead>
                            <th width="5%">No.</th>
                            <th width="15%">Jenis Restoran</th>
                            <th width="18%">Makanan</th>
                            <th width="7%">Harga</th>
                            <th>Alamat</th>
                            <th>Nama Lengkap</th>
                            <th width="9%">No HP</th>
                            <th>Email</th>
                            <th>Action</th>
                        </thead>
                        <?php
                        $select = mysqli_query($connect, "SELECT * FROM tbl_datapesanan ORDER BY nmrPesanan ASC");
                        while($a = mysqli_fetch_array($select))
                        {?>
                        <tbody>
                            <td><?php echo $a['nmrPesanan']?></td>
                            <td><?php echo $a['jenisRestoran']?></td>
                            <td><?php echo $a['makanan']?></td>
                            <td><?php echo $a['harga']?></td>
                            <td><?php echo $a['alamatPemesan'];?></td>
                            <td><?php echo $a['namaPemesan']?></td>
                            <td><?php echo $a['telpPemesan']?></td>
                            <td><?php echo $a['emailPemesan']?></td> 
                            <td>
                                <a id="aDelete" href="DeleteOrderQuery.php?nmrPesanan=<?php echo $a["nmrPesanan"];?>">Hapus <i class="fas fa-eraser"></i></a>
                                <a id="aEdit" href="EditOrderPage.php?nmrPesanan=<?php echo $a["nmrPesanan"];?>">Edit <i class="far fa-edit"></i></a>
                            </td>
                        </tbody>
                        <?php
                        }?>
                    </form>
                </table>
            </div>
            <div id="bagianCetakDokumen">
                <a id="aCetakDokumen" target="_blank" href="PreviewDocument.php">Cetak Laporan <i class="far fa-file-pdf"></i></a>
                <button type="button" onclick="redirectToInputPage()">Input Data Pemesanan Baru <i class="fas fa-plus-circle"></i></button>
                <a href="logout.php" id="logoutButton">Log Out <i class="fas fa-sign-out-alt"></i></a>
            </div>
	 	</div>
	 </div>

	 <script type="text/javascript" src="assets/js/jquery.js"></script>
  	    <script type="text/javascript" src="assets/js/popper.js"></script>
  	    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

  	    <script>

        function redirectToInputPage()
        {
            window.location.href="InputOrderPage.php";
        }

  	    function waktu()      // TimeWidget.js
  	    {
  	    	var hari = "";
  	    	switch(new Date().getDay())
  	    	{
  	    		case 0:
  	    		hari = "Minggu";
  	    		break;
  	    		case 1:
  	    		hari = "Senin";
  	    		break;
  	    		case 2:
  	    		hari = "Selasa";
  	    		break;
  	    		case 3:
  	    		hari = "Rabu";
  	    		break;
  	    		case 4:
  	    		hari = "Kamis";
  	    		break;
  	    		case 5:
  	    		hari = "Jumat";
  	    		break;
  	    		case 6:
  	    		hari = "Sabtu";
  	    		break;
  	    		default:
  	    		break;
  	    	}

  	    	var months = [
  					'Januari',
  					'Februari',
  					'Maret',
  					'April',
  					'Mei',
  					'Juni',
  					'Juli',
  					'Agustus',
  					'September',
  					'Oktober',
  					'November',
  					'Desember'
  					]

  			var waktuSaatIni = new Date();
  			setTimeout("waktu()",1000);
  			document.getElementById("time").innerHTML = "Per "
                              + waktuSaatIni.getDate() + " "
                              + months[waktuSaatIni.getMonth()] + " "
                              + waktuSaatIni.getFullYear() + " " 
                              + waktuSaatIni.getHours() + " : "
                              + waktuSaatIni.getMinutes() + " : "
                              + waktuSaatIni.getSeconds();
  		  }
  		</script>

</body>
</html>