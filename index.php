<?php
include 'connection.php';

$sql = "SELECT * FROM rooms";
$result = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .add-button {
            display: inline-block;
            padding: 5px 10px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }


        .add-button:hover {
            background-color: #218838;
        }

        .delete-button {
            display: inline-block;
            padding: 5px 10px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .delete-button:hover {
            background-color: #c82333;
        }
    </style>

</head>

<body>


    <h2>Daftar Kamar</h2>

    <a href="add_data.php" class="add-button">Tambah Data</a>
    <table border="1">
        <tr>
            <th>Nomor Kamar</th>
            <th>Tipe Kamar</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['room_number'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";

            echo "<td><a href='edit_data.php?id=" . $row['id'] . "' class='action-button'>Edit</a> | <a href='hapus_data.php?id=" . $row['id'] . "' class='delete-button' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?');\">Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>