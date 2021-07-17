UAS - 06TPLM001 - KELOMPOK 5 - 181011400139 - Muhammad Yusuf Qardhawi
Repository Untuk Jawaban UAS Mata Kuliah Pemrograman Web 2 Pada Kelas 06TPLM001

Aplikasi ini merupakan aplikasi pendataan pemesanan makanan berbasis web yang dikembangkan dengan menggunakan beberapa bahasa, yakni html, css, PHP, serta JavaScript. Adapun tujuan pembuatan aplikasi ini ialah sebagai pemenuh kewajiban akhir mahasiswa terhadap aktivitas Ujian Akhir Semester Genap 2020 / 2021.

Operasi yang diterapkan pada web ini merupakan operasi dasar yang mana pada umumnya diterapkan pada hampir seluruh web yang berada di jejaring internet, yakni CRUD (Create, Read, Update, Delete), adapun ketentuan yang digunakan dalam pembuatan web ini ialah ketentuan yang berdasar daripada soal UAS yang telah diberikan oleh bapak Sonasa Rinusantoro S.Kom., M.A.

Kelompok 5 Kelas 06TPLM001 merupakan kelompok yang ditugaskan dalam melakukan pembuatan dan peletakkan web pemesanan makanan pada sebuah hosting (000WebHost), web pemesanan makanan yang dibuat oleh kelompok 5 terdiri dari 11 file bereksistensi PHP, adapun file-file tersebut adalah sebagai berikut:

1.index.php 2.koneksi.php 3.validateUser.php 4.InputOrderPage.php 5.ShowOrderPage.php 6.EditOrderPage.php 7.AddOrderQuery.php 8.EditOrderQuery.php 9.DeleteOrderQuery.php 10.PreviewDocument.php 11.logout.php

Adapun fungsi dari masing-masing file PHP tersebut ialah sebagai berikut:

1.File index.php merupakan halaman pertama yang akan dibaca oleh listing dan dijumpai oleh seorang user ketika ia melakukan akses terhadap suatu web, adapun bagian lain yang tertera pada halaman index ialah form login yang dipergunakan oleh pengunjung sehingga dapat masuk ke dalam sistem suatu web yang ia kunjungi.

2.File koneksi.php merupakan file yang digunakan agar web dapat terhubung dengan database sehingga dapat melakukan operasi data dasar yakni CRUD, adapun beberapa komponen yang terdapat pada file ini di antaranya adalah nama host, nama database, username database, serta password database.

3.File validateUser merupakan file yang digunakan untuk mengenali pengunjung yang dapat dan mencoba untuk melakukan akses terhadap web pemesanan makanan, validasi user atau pengunjung dilakukan dengan mencocokan input username dan password milik pengung dengan username dan password yang telah tersimpan pada database, tepatnya pada tabel login, apabila terdapat kecocokan sempurna antara username dan password yang diinputkan oleh user dengan username dan password yang tersimpan pada database maka user tersebut diizinkan untuk masuk dan melakukan akses terhadap web pemesanan makanan, bila mana tidak ditemui kecocokan maka akan ditampilkan sebuah notifikasi yang memberikan peringatan bahwa username dan password yang dimasukkan salah.

4.File InputOrderPage.php merupakan file yang digunakan untuk menampilkan halaman input data pemesanan makanan ketika seorang user berhasil melakukan aktivitas login, adapun komponen yang disajikan pada halaman ini ialah form input pemesanan makanan yang terdiri dari beberapa select box dan textfield yang dapat diisi bilamana didapati adanya suatu aktivitas pemesanan makanan, adapun data yang dapat dipilih pada form input pemesanan makanan ini terbagi menjadi 3 sesuai dengan jenis restoran yang telah ditentukan pada soal UAS, yakni Warteg Kharisma, Restoran Padang Sederhana, serta Soto Ayam Ndelik, masing-masing dari ketiga restoran tersebut tentunya memiliki ciri khas menu tersendiri yang dapat dipilih sesuai dengan pemesanan yang ada, harga yang akan ditampilkan bergantung kepada menu makanan apa yang dipilih, adapun daftar menu dan harga dari ketiga restoran tersebut adalah sebagai berikut:

-Warteg Kharisma (Paket nasi tempe orek, kentang balado, oseng-oseng) = Rp 30.000. -Restoran Padang Sederhana (Paket nasi sate padang) = Rp 40.000. -Soto Ayam Ndelik (Paket Nasi Soto Ayam Plus Mendoan) = Rp 35.000.

5.File ShowOrderPage.php merupakan file yang digunakan untuk menampilkan halaman show data pemesanan makanan yang mana sebelumnya telah berhasil disimpan melalui halaman input data pemesanan, pada halaman ini juga para pengguna web dapat melakukan pencetakan laporan data pemesanan makanan dalam format PDF dengan menekan tombol Cetak Laporan, selain terdapat fitur pencetakan laporan, pada halaman ini juga dilengkapi fitur hapus maupun fitur edit data terhadap data pemesanan makanan, bila mana user menekan tombol hapus maka data yang dipilih tersebut akan terhapus dari web dan database, namun apabila user menekan tombol edit maka user akan diarahkan menuju halaman edit untuk selanjutnya dapat melakukan perubahan terhadap suatu data pemesanan makanan yang dirasa perlu untuk diubah melalui form edit data pemesana.

6.EditOrderPage.php merupakan file yang digunakan untuk menampilkan halaman edit data pemesanan setelah user menekan tombol edit pada salah satu data yang tertera pada tabel data pemesanan halaman ShowOrderPage.php , pada halaman EditOrderPage.php ini terdapat sebuah form yang dapat dipergunakan untuk merubah keterangan suatu data pemesanan, ketika user telah selesai melakukan perubahan pada form edit dan menekan tombol simpan perubahan maka selanjutnya user akan diarahkan kembali menuju halaman ShowOrderPage.php.

7.AddOrderQuery.php merupakan file yang di dalamnya terdapat query sql yang dipergunakan ketika seorang user ingin menambahkan data pemesanan makanan baru, adapun data pemesanan makanan yang disimpan menggunakan AddOrderQuery.php ini akan tersimpan pada database dari web pemesanan makanan kelompok 5, tepatnya pada tabel datapesanan.

8.EditOrderQuery.php merupakan file yang di dalamnya terdapat query sql yang dipergunakan ketika seorang user ingin melakukan perubahan terhadap suatu data pemesanan makanan secara sebagian maupun keseluruhan.

9.DeleteOrderQuery.php merupakan file yang di dalamnya terdapat query sql yang dipergunakan ketika seorang user ingin melakukan penghapusan terhadap suatu data pemesanan makanan, query ini akan dieksekusi ketika user menekan tombol hapus yang terdapat pada halaman ShowOrderPage.php dan selanjutnya data pemesanan makanan tersebut akan terhapus dari database web pemesanan makanan, tepatnya dari tabel datapesanan.

10.PreviewDocument.php merupakan file yang dipergunakan untuk menentukan tampilan dokumen laporan data pemesanan yang akan dicetak menjadi dokumen berformat PDF, tampilan yang terdapat pada file PreviewDocument.php diatur sedemikian rupa sehingga hanya data yang diperlukan saja yang akan dicetak ke dalam bentuk PDF, adapun data yang tertera pada laporan data pemesanan yang tercetak dalam format PDF di antaranya adalah keterangan waktu ketika laporan dicetak dan seluruh data pemesanan makanan yang tersimpan pada web pemesanan makanan hingga pada saat ketika laporan tersebut dicetak.

11.logout.php merupakan file yang dipergunakan ketika seorang user memutuskan untuk menyudahi aktivitas pengaksesan web pemesanan makanan, file ini akan dieksekusi bilamana seorang user menekan tombol logout untuk selanjutnya sistem akan melakukan destroy terhadap session user tersebut.
