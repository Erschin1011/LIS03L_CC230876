<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor USD a EUR</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #333;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 50%;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Convertidor de Dólares a Euros</h1>
    <form method="POST">
        <label for="usd">Cantidad en dólares (USD):</label>
        <input type="number" id="usd" name="usd" step="0.01" required>
        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usd = $_POST['usd'];

        if (is_numeric($usd) && $usd > 0) {
            $conversion_rate = 0.85; // Tasa de conversión USD a EUR
            $eur = $usd * $conversion_rate;

            echo "<table>
                    <tr>
                        <th>Cantidad en USD</th>
                        <th>Equivalente en EUR</th>
                    </tr>
                    <tr>
                        <td>" . number_format($usd, 2) . " USD</td>
                        <td>" . number_format($eur, 2) . " EUR</td>
                    </tr>
                  </table>";
        } else {
            echo "<p style='color: red;'>Por favor, ingrese una cantidad válida en dólares.</p>";
        }
    }
    ?>
</body>
</html>
