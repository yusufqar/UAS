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
                background: lightgray;
                transition: 2s;
            }
            .container-fluid:hover  #headerText{
                color: slategray !important;
                transition: 2s;
            }
            #bagianHeader{
            	background: lightgray;
            	text-align: center;
            	margin-top: 20px;
            	height: 50px;
                transition: 2s;
            }
            #headerText{
            	color: transparent;
            	font-size: 30px;
            	font-weight: bold;
            	font-family: kelvinch;
            }
            .container-fluid:hover  #time{
                color: slategray !important;
                transition: 0.ss;
            }
            #timeWrapper{
            	text-align: center;
            }
            #time{
                transition: 0.5s;
            	font-family: digital;
            	font-size: 25px;
            	font-weight: bold;
            	color: transparent !important;
            }
            #userInfo{
                font-family: kelvinch;
                font-weight: bold;
                font-style: italic;
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
            	background: lightgray;
            	text-align: center;
            	font-family: kelvinch;
            	font-weight: bold;
            	margin-top: 10px;
            	table-layout: fixed;
              	word-break: break-all;
                border: none !important;
            }
            .container-fluid:hover th{
                color: slategray !important;
                transition: 1s;
            }
            .container-fluid:hover td{
                background: slategray;
                transition: 1s;
            }
            .container-fluid:hover input{
                background: white;
                transition: 1s;
                color: slategray;
            }
            .container-fluid:hover select{
                color: slategray;
                transition: 1s;
                background: white !important;
            }
            select{
            	padding: 2px;
            	text-align-last: center;
            	border: none !important;
            	border-radius: 50px;
            	background: none !important;
            	outline:none !important;
                color: transparent;
                font-weight: bold;
            }
            select:hover{
            	transition: 0.5s;
            	box-shadow: 0px 0px 10px 3px white;
            }
            input{
                background: transparent;
            	text-align: center;
            	border-radius: 50px;
            	outline: none !important;
            	border: none !important;
                color: transparent;
                font-weight: bold;
            }
            input:hover{
                box-shadow: 0px 0px 10px 3px white;
                transition: 0.5s;
            }
            .container-fluid:hover button{
                background: slategray;
                color: white;
                transition: 1s;
            }
            button{
                border: none;
            	border-radius: 100px;
            	outline: none !important;
            	font-family: kelvinch;
                font-size: 15px;
                background: transparent;
                color: transparent;
                transition: 0.5s;
            }
            button:hover{
                background: white !important;
                color: slategray !important;
                box-shadow: 0px 0px 10px 8px darkgray;
                transition: 0.5s;
            }
            #submitPesanan{
                padding:8px;
            }
            #lihatPesanan{
                padding: 5px;
            }
            #tblInputPesanan{

            }
            .container-fluid:hover #tblInputPesanan{
                box-shadow: 0px 0px 10px 10px darkgray;
                transition: 0.5s;
            }
            th,td{
                border: none !important;
            }
            #namaKelompok{
                color: slategray;
                font-family: kelvinch;
                font-size: 25px;
                font-weight: bold;
                font-style: italic;
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
            }
            .container-fluid:hover  #namaKelompok{
                display: none;
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
     </style>

</head>
<body onload=waktu();>
	 <div class="container-fluid">
	 	<div class="row justify-content-center">
	 		<div id="bagianHeader" class="col-lg-12">
	 			<span id="headerText">Edit Data Pemesanan Makanan</span>
	 		</div>                                                           <! TIME WIDGET PART >
            <div id="timeWrapper" class="col-lg-12">
                <div id="time"></div>
            </div>
	 		<div id="bagianInputPesanan" class="col-lg-6">
                <span id="userInfo"><i class="fas fa-user-circle logouser"></i><?php echo " "; echo $_SESSION['username'];?></span>
                <table id="tblInputPesanan" class="table table-bordered table-hover">
                    <form action="EditOrderQuery.php" method="POST">
                        <?php
                            $nmrPesanan = $_GET['nmrPesanan'];
                            $select = "SELECT * FROM tbl_datapesanan WHERE nmrPesanan='$nmrPesanan'";
                            $getData = mysqli_query($connect,$select); /* Mengambil Data Dari Database Menggunakan PHP */
                            while($a = mysqli_fetch_array($getData))
                            {?>
                                <?php
                                    $nmrPesanan = $a['nmrPesanan'];
                                    $restoranLama = $a['jenisRestoran'];
                                    $makananLama = $a['makanan'];
                                    $hargaLama = $a['harga'];
                                    $alamatLama = $a['alamatPemesan'];
                                    $namaPemesanLama = $a['namaPemesan'];
                                    $telpPemesanLama = $a['telpPemesan'];
                                    $emailPemesanLama = $a['emailPemesan'];
                                ?>
                            <tr>
                                <th>Jenis Restoran</th>
                                <td>
                                	<select id="jenisRestoran" name="jenisRestoranBaru" onchange="clearAndAdd()" required>
                                	<?php
                                	$select = "SELECT * FROM tbl_restoran";
                                	$getData = mysqli_query($connect,$select); /* Mengambil Data Dari Database Menggunakan PHP */
                                	while($a = mysqli_fetch_array($getData))
                                	{?>
                                		<option value="<?php echo $a['namaRestoran'];?>"><?php echo $a['namaRestoran'];?></option>
                                	<?php
                                	}?>
                                </td><tr></tr>
                                <th>Makanan</th>
                                <td>
                                	<select id="makanan" name="makananBaru" onchange="setHargaPesanan()"></select>
                                </td><tr></tr>
                                <th>Harga</th>
                                <td>
                                	<input type="text" name="hargaBaru" id="harga" disabled>
                                	<input type="hidden" name="hargaHiddenBaru" id="hargaHidden" required>
                                </td><tr></tr>
                                <th>Alamat</th>
                                <td>
                                	<input type="text" name="alamatBaru" id="alamat" value="<?php echo $alamatLama?>" required>
                                </td><tr></tr>
                                <th>Nama Lengkap</th>
                                <td>
                                	<input type="text" name="namaBaru" id="nama" value="<?php echo $namaPemesanLama?>" required>
                                </td><tr></tr>
                                <th>No HP</th>
                                <td>
                                	<input type="text" name="nomorHPBaru" id="nomorHP" value="<?php echo $telpPemesanLama?>" required>
                                </td><tr></tr>
                                <th>Email</th>
                                <td>
                                	<input type="text" name="emailBaru" id="email" value="<?php echo $emailPemesanLama?>" required>
                                    <input type="hidden" name="nmrPesanan" id="nmrPesanan" value="<?php echo $nmrPesanan?>" required>
                                    <input type="hidden" name="restoranLama" value="<?php echo $restoranLama?>" required>
                                    <input type="hidden" name="makananLama" value="<?php echo $makananLama?>" required>
                                    <input type="hidden" name="hargaLama" value="<?php echo $hargaLama?>" required>
                                </td>
                            </tr>
                            <?php
                        }?>
                    </table>
                    <button type="submit" id="submitPesanan">Simpan Perubahan <i class="fas fa-check-circle"></i></button>
                    <button type="button" id="lihatPesanan" onclick="redirectToShowPage()">Lihat Pesanan <i class="fas fa-eye"></i></button>
                    <a href="logout.php" id="logoutButton">Sign Out <i class="fas fa-sign-out-alt"></i></a>
                </form>
            </div>
            <div id="namaKelompok" class="col-lg-6">
                UAS PEMROGRAMAN WEB 2 ~ Kelompok 5 ~ 06TPLM001<br>
                Muhammad Ramlan ~ 171011400615<br>
                Muhammad Yusuf Qardhawi ~ 181011400139<br>
                Multazam ~ 181011402182<br>
                Nanda Rizky Maulana ~ 181011400851<br>
                Novranto Pratama Zai ~ 171011401684<br>
                Pandu Dewonoto Laut Santoso ~ 181011400505<br>
                Raden Wirawan Kukuh Pambudi ~ 181011402940<br>
                Rahmad Danil Fajri ~ 181011401098<br>
                Rama Adi Saputra ~ 171011400425<br>
            </div>
	 	</div>
	 </div>

	 <script type="text/javascript" src="assets/js/jquery.js"></script>
  	    <script type="text/javascript" src="assets/js/popper.js"></script>
  	    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

  	    <script>

        function redirectToShowPage()
        {
            window.location.href="ShowOrderPage.php";
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
  		  function setMenuMakanan()
  		  {
  		  	var restoran = document.getElementById("jenisRestoran");
  		  	var selectedRestoran = restoran.options[restoran.selectedIndex].value;
  		  	switch(selectedRestoran)
  		  	{
  		  		case "Warteg Kharisma":
	  		  		var select = $("#makanan")[0];
	  		  		select.add(new Option("--Pilih Makanan--",""))
	  		  		select.add(new Option("Paket Nasi Tempe Orek", "Paket Nasi Tempe Orek"));
	  		  		select.add(new Option("Kentang Balado", "Kentang Balado"));
  		  			select.add(new Option("Oseng-oseng", "Oseng-oseng"));
  		  			break;
  		  		case "Restoran Padang Sederhana":
  		  			var select = $("#makanan")[0];
  		  			select.add(new Option("Paket Nasi Sate Padang", "Paket Nasi Sate Padang"));
  		  			document.getElementById("harga").value = "Rp 40.000";
  		  			document.getElementById("hargaHidden").value = "Rp 40.000";
  		  			break;
  		  		case "Soto Ayam Ndelik":
  		  			var select = $("#makanan")[0];
  		  			select.add(new Option("Paket Nasi Soto Ayam Plus Mendoan", "Paket Nasi Soto Ayam Plus Mendoan"));
  		  			document.getElementById("harga").value = "Rp 35.000";
  		  			document.getElementById("hargaHidden").value = "Rp 35.000";
  		  			break;
  		  		default:
  		  			break;
  		  	}
  		  }
  		  function setHargaPesanan(){
  		  	var makanan = document.getElementById("makanan");
  		  	var selectedMakanan = makanan.options[makanan.selectedIndex].value;
  		  	switch(selectedMakanan)
  		  	{
  		  		case "":
  		  			document.getElementById("harga").value = "0";
  		  			document.getElementById("hargaHidden").value = "0";
  		  			break;
  		  		case "Paket Nasi Tempe Orek":
	  		  		document.getElementById("harga").value = "Rp 30.000";
	  		  		document.getElementById("hargaHidden").value = "Rp 30.000";
  		  			break;
  		  		case "Kentang Balado":
  		  			document.getElementById("harga").value = "Rp 30.000";
  		  			document.getElementById("hargaHidden").value = "Rp 30.000";
  		  			break;
  		  		case "Oseng-oseng":
  		  			document.getElementById("harga").value = "Rp 30.000";
  		  			document.getElementById("hargaHidden").value = "Rp 30.000";
  		  			break;
  		  		default:
  		  			break;
  		  	}
  		  }
  		  function Remove_options()
  		  {
  		  	$('#makanan')
  		  	.empty();
            document.getElementById("harga").value = "";
            document.getElementById("hargaHidden").value = "";
  		  }
  		  function clearAndAdd(){
  		  	Remove_options();
  		  	setMenuMakanan();
  		  }


  		</script>

</body>
</html>