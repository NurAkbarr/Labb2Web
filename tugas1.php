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
