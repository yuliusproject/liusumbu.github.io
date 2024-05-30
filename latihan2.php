<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pemakaian Operator Aritmatika dalam PHP</title>
<link rel="stylesheet" href="styles.css">
<script src="script.js"></script>
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
    box-shadow: 0 10px 0px rgba(0, 0, 0, 0.2);
    padding: 20px;
    text-align: center;
    max-width: 600px;
    width: 90%;
    margin: 20px;
}

.content h2 {
    color: #6a11cb;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: center;
}

input[type="number"],
select,
input[type="submit"] {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    width: 100%;
    margin-bottom: 10px;
    font-size: 16px;
}

input[type="submit"] {
    background: linear-gradient(to right, #8e44ad, #3498db);
    color: #fff;
    cursor: pointer;
    transition: background 0.3s ease;
}

input[type="submit"]:hover {
    background: linear-gradient(to right, #6a11cb, #2575fc);
}

.result {
    margin-top: 20px;
    color: #6a11cb;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="container">
    <div class="content">
        <h2>Operator Aritmatika</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <th>Operand Kiri</th>
                    <th>Operator</th>
                    <th>Operand Kanan</th>
                    <th>Hitung</th>
                </tr>
                <tr>
                    <td><input type="number" name="operand1" id="operand1" required></td>
                    <td>
                        <select name="operator" id="operator" required>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </td>
                    <td><input type="number" name="operand2" id="operand2" required></td>
                    <td><input type="submit" name="calculate" value="Hitung"></td>
                </tr>
            </table>
        </form>
        <div class="result">
            <?php
            if (isset($_POST['calculate'])) {
                $operand1 = $_POST['operand1'];
                $operator = $_POST['operator'];
                $operand2 = $_POST['operand2'];
                $result = 0;

                switch ($operator) {
                    case '+':
                        $result = $operand1 + $operand2;
                        break;
                    case '-':
                        $result = $operand1 - $operand2;
                        break;
                    case '*':
                        $result = $operand1 * $operand2;
                        break;
                    case '/':
                        $result = $operand1 / $operand2;
                        break;
                    case '%':
                        $result = $operand1 % $operand2;
                        break;
                }
                echo "<p>Hasil: $operand1 $operator $operand2 = $result</p>";
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
