Fitur – Fitur pada fungsi php

InputOrderPage.php = disini adalah laman dimana user akan memasukan data pemesanan, setelah dilakukan submit maka akan diteruskan ke addOrderPage.php sehingga data yang sudah dimasukan kedalam form akan disimpan di database

ShowOrderQuery.php = disini akan ditampilkan semua data pesanan yang ada di database dengan menggunakan query select

EditOrderQuery.php = fungsinya untuk merubah data pesanan yang sudah disimpan pada database sebelumnya dengan menggunakan query update

Koneksi.php = fungsinya untuk menyambungkan koneksi antara UI dengan database yang nantinya akan dipakai pada semua fungsi 

ValidateUser.php = fungsinya untuk memvalidasi username dan password yang dimasukan, jika benar maka akan masuk ke laman InputOrderPage.php dan jika salah maka akan dibnerikan informasi bahwa username/password yang dimasukan salah

Logout.php = fungsinya untuk keluar dari akun sehingga akan ditampilkan laman index.php
