# Bookapp (Tugas Pemrograman Integratif)

NIM     : 185150700111010  
Nama    : Aditya Dwi Wicaksono

## Penjelasan Praktikum
Pada modul ke-5 ini kami diberikan tugas untuk membuat suatu database MySQL Buku yang mana data-data buku dapat diambil melalui api projek bookapp ini yang dibuat menggunakan framework lumen. berikut apa saja yang sudah dilakukan pada projek ini:

### Pembuatan database dan Environment Setup
Pada tahap ini, dilakukan pembuatan database MySQL "bookapp_lumen" menggunakan XAMPP dan dilanjutkan dengan penyesuaian data-data pada file .env dengan yang ada pada database.

### Membuat Migration
Pembuatan tabel "books" disertai kolom-kolomnya dan tipe data dari setiap kolom tabel pada database "bookapp_lumen" dengan menggunakan perintah migration.

### Membuat dan Melakukan Seed
Mengisi tabel "books" pada database "bookapp_lumen" dengan data-data yang disediakan dari modul dan mengisinya pada database/seeders/DatabaseSeeder.php, lalu menggunakan perintah seed agar data-data yang ada pada DatabaseSeeder.php tersimpan pada database.

### Pembuatan Model dan Pemanggilan data melalui model
Dengan membuat model data-data yang ada pada tabel dapat di definisikan pada program. Kemudian data-data model yang sudah dibuat dapat dipanggil menggunakan controller, agar data-data tersebut dapat ditampilkan pada program.

### Fungsi CRUD (Create, Read, Update, Delete)
Dengan adanya fungsi ini, dapat melakukan pembuatan, pembacaan, pembaruan, dan penghapusan data yang ada di tabel pada database melalui API lumen yang sudah dibuat.