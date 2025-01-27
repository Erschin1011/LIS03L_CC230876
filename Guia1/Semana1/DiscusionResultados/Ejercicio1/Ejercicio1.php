<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
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
    <?php
        // Datos personales
        $nombre_completo = "Juan Pérez López";
        $lugar_nacimiento = "San Salvador, El Salvador";
        $edad = 22;
        $carnet_universidad = "U20251001";
    ?>

    <table>
        <tr>
            <th>Campo</th>
            <th>Información</th>
        </tr>
        <tr>
            <td>Nombre Completo</td>
            <td><?php echo $nombre_completo; ?></td>
        </tr>
        <tr>
            <td>Lugar de Nacimiento</td>
            <td><?php echo $lugar_nacimiento; ?></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><?php echo $edad; ?></td>
        </tr>
        <tr>
            <td>Carnet de la Universidad</td>
            <td><?php echo $carnet_universidad; ?></td>
        </tr>
    </table>
</body>
</html>
