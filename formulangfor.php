<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Perulangan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #444;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            max-width: 500px;
            width: 90%;
            margin: 20px;
        }

        h2 {
            color: #6a11cb;
            margin-bottom: 20px;
        }

        hr {
            margin: 20px 0;
        }

        form p {
            margin-bottom: 10px;
            font-weight: bold;
        }

        select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            width: 100%;
            max-width: 150px;
            margin: 0 auto 20px;
            display: block;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background: #6a11cb;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #2575fc;
        }

        .container a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #6a11cb;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <form name="form1" method="post" action="">
            <h2>Perulangan</h2>
            <hr>
            <p>Tanggal Lahir:</p>
            <select name="fmtg1">
                <?php
                for ($tgl = 1; $tgl <= 31; $tgl++) {
                    echo "<option value='$tgl'>$tgl</option>";
                }
                ?>
            </select>
            <select name="fmbulan">
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">Nopember</option>
                <option value="12">Desember</option>
            </select>
            <select name="fmtahun">
                <?php
                $thn_skr = date('Y');
                for ($tahun = $thn_skr; $tahun >= 1950; $tahun--) {
                    echo "<option value='$tahun'>$tahun</option>";
                }
                ?>
            </select>
            <br><br>
            <input type="submit" name="Submit" value="Kirim">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['fmtg1']) && isset($_POST['fmbulan']) && isset($_POST['fmtahun'])) {
                $tgl = $_POST['fmtg1'];
                $bulan = $_POST['fmbulan'];
                $tahun = $_POST['fmtahun'];

                // Convert month number to month name
                $bulanNama = date("F", mktime(0, 0, 0, $bulan, 10));

                echo "<div class='result'>";
                echo "<h2>Hasil Tanggal Lahir</h2>";
                echo "<hr>";
                echo "<p>Tanggal Lahir Anda adalah:</p>";
                echo "<p>$tgl $bulanNama $tahun</p>";
                echo "</div>";
            } else {
                echo "<p>Data tidak lengkap.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
