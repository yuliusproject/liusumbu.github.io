<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Forms</title>
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

        form p {
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"], input[type="password"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            width: 100%;
            max-width: 400px;
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

        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Using Forms</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <p>Name:</p>
            <input name="username" type="text" id="username">
            <p>Password:</p>
            <input name="password" type="password" id="password">
            <input name="send" type="submit" id="send" value="Send!"> 
        </form>
        
        <?php
        if (isset($_POST['send'])) {
            echo "<div class='result'>";
            echo "Menampilkan username dengan POST : " . $_POST['username'] . "<br>";
            echo "Menampilkan username dengan REQUEST : " . $_REQUEST['username'] . "<br>";

            $password = $_POST['password'];
            echo "Password = $password";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
