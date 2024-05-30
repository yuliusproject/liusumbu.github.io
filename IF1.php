<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #FFFFFF;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            width: 90%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #6a11cb;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #6a11cb;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #8e44ad;
        }

        .result {
            text-align: center;
            margin-top: 20px;
            color: #6a11cb;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <form name="frmLogin" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h2>Form Login :</h2>
            <hr>
            <table>
                <tr>
                    <td width="159">Nama User</td>
                    <td width="219">:
                        <input type="text" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td width="159">Sandi</td>
                    <td width="219">:
                        <input type="password" name="sandi" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Login" name="submit">
                    </td>
                </tr>
            </table>
        </form>

        <div class="result">
            <?php
            if (isset($_POST['submit'])) {
                $nama = $_POST['nama'];
                $sandi = $_POST['sandi'];

                if ($nama == "yulius" && $sandi == "lius") {
                    echo "Password Benar<br>";
                    echo "Selamat Datang di PHP $nama";
                } else {
                    echo "Password Salah";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
