# **Lab 2 Web**

```
Nama    : Nurul Akbar
NIM     : 312210413
Kelas   : TI.22.B2
```

## **Instruksi Praktikum**

1. Persiapkan text editor misalnya VSCode.
2. Buat folder baru dengan nama lab7_php_dasar pada docroot webserver (htdocs).
3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.

## **Langkah Langkah Praktikum**

1. Install XAMPP Unduh XAMPP dari https://www.apachefriends.org/download.html

2. PHP Dasar
   Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat kode seperti berikut.

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
    echo "Hello World";
    ?>
</body>
</html>
```

Kemudian untuk mengakses hasilnya melalui URL:
http://localhost/lab7_php_dasar/php_dasar.php

![img](https://github.com/NurAkbarr/Lab7web/blob/668c6f8dc21c7ba5935c2da21e4167ca056ebf4c/assets/2.png)

3. Variable PHP
   Menambahkan variable pada program.

```php
<?php
$nim = "312210413";
$nama = 'Akbar';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
```

![img](https://github.com/NurAkbarr/Lab7web/blob/668c6f8dc21c7ba5935c2da21e4167ca056ebf4c/assets/3.png)

4. Predefine Variable $\_GET

```php
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
```

Untuk mengaksesnya gunakan URL:
http://localhost/lab7_php_dasar/latihan2.php?nama=Akbar

![img](https://github.com/NurAkbarr/Lab7web/blob/668c6f8dc21c7ba5935c2da21e4167ca056ebf4c/assets/4.png)

5. Membuat Form Input

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
</form>
<?php
echo 'Selamat Datang ' . $_POST['nama'];
?>
</body>
</html>
```

![img](https://github.com/NurAkbarr/Lab7web/blob/668c6f8dc21c7ba5935c2da21e4167ca056ebf4c/assets/5.png)

6. Operator.

```php
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>
```

![img](https://github.com/NurAkbarr/Lab7web/blob/668c6f8dc21c7ba5935c2da21e4167ca056ebf4c/assets/6.png)

7. Kondisi IF.

```php
<?php
$nama_hari = date("l");
if ($nama_hari == "Sunday") {
    echo "Minggu";
} elseif ($nama_hari == "Monday") {
    echo "Senin";
} else {
    echo "Selasa";
}
?>
```

![img](https://github.com/NurAkbarr/Lab7web/blob/668c6f8dc21c7ba5935c2da21e4167ca056ebf4c/assets/7.png)

8. Kondisi Switch

```php
<?php
$nama_hari = date("l");
switch ($nama_hari) {
    case "Sunday":
        echo "Minggu";
        break;
    case "Monday":
        echo "Senin";
        break;
    case "Tuesday":
        echo "Selasa";
        break;
    default:
    echo "Sabtu";
?>
```

![img](https://github.com/NurAkbarr/Lab7web/blob/668c6f8dc21c7ba5935c2da21e4167ca056ebf4c/assets/8.png)

9. Perulangan for

```php
<?php
echo "Perulangan 1 sampai 10 <br />";
for ($i=1; $i<=10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
}
echo "Perulangan Menurun dari 10 ke 1 <br />";
for ($i=10; $i>=1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
}
?>
```

![img](https://github.com/NurAkbarr/Lab7web/blob/668c6f8dc21c7ba5935c2da21e4167ca056ebf4c/assets/9.png)

10. Perulangan while.

```php
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
while ($i<=10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
}
?>
```

![img](https://github.com/NurAkbarr/Lab7web/blob/668c6f8dc21c7ba5935c2da21e4167ca056ebf4c/assets/10.png)

11. Perulangan dowhile

```php
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
do {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
} while ($i<=10);
?>
```

![img](https://github.com/NurAkbarr/Lab7web/blob/668c6f8dc21c7ba5935c2da21e4167ca056ebf4c/assets/11.png)

12. Pertanyaan dan Tugas
    Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
    nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
    umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
    berbeda-beda sesuai pilihan pekerjaan.

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>FORM</h2>
    <form method="post" id="myForm">
        <label>Nama: </label><br>
        <input type="text" name="nama"><br>
        <label>Tanggal Lahir: </label><br>
        <input type="date" name="tgl"><br>
        <label>Pekerjaan: </label><br>
        <select name='pekerjaan'>
            <option value="">~Pilih Pekerjaan~</option>
            <option value="Android Developer">Android Developer</option>
            <option value="System Analyst">System Analyst</option>
            <option value="Web Designer">Web Designer</option>
            <option value="Fullstack Developer">Fullstack Developer</option>
        </select><br><br>
        <button type="submit">Kirim</button>
    </form>

    <h2 id="hasilTitle" style="display: none;">HASIL</h2>
    <div id="hasil" style="display: none;">
        <!-- Result content will go here -->
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('myForm').addEventListener('submit', function(e) {
                e.preventDefault(); // Prevents the form submission for demonstration purpose

                let nama = document.querySelector('input[name="nama"]').value;
                let tgl = document.querySelector('input[name="tgl"]').value;
                let pekerjaan = document.querySelector('select[name="pekerjaan"]').value;

                // Calculate age
                let birthday = new Date(tgl);
                let today = new Date();
                let age = today.getFullYear() - birthday.getFullYear();
                let monthDiff = today.getMonth() - birthday.getMonth();
                if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthday.getDate())) {
                    age--;
                }

                // Calculate salary
                let gaji = "";
                switch (pekerjaan) {
                    case "Android Developer":
                        gaji = "Rp. 40 juta";
                        break;
                    case "System Analyst":
                        gaji = "Rp. 25 juta";
                        break;
                    case "Web Designer":
                        gaji = "Rp. 28 juta";
                        break;
                    case "Fullstack Developer":
                        gaji = "Rp. 45 juta";
                        break;
                    default:
                        gaji = "Pekerjaan tidak valid";
                }

                // Show the result section
                document.getElementById('hasil').innerHTML = `
                    <p>Nama: ${nama}</p>
                    <p>Umur: ${age} Tahun</p>
                    <p>Pekerjaan: ${pekerjaan}</p>
                    <p>Gaji: ${gaji}</p>
                `;
                document.getElementById('hasil').style.display = 'block';
                document.getElementById('hasilTitle').style.display = 'block';
                document.getElementById('hasilTitle').scrollIntoView();
            });
        });
    </script>
</body>
</html>
```

![img](https://github.com/NurAkbarr/Lab7web/blob/668c6f8dc21c7ba5935c2da21e4167ca056ebf4c/assets/12.png)
