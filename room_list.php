<?php
include 'connection.php';

$sql = "SELECT * FROM kamar";
$result = mysqli_query($connection, $sql);
?>

<h2>Daftar Kamar</h2>
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
        echo "<td><a href='edit_data.php?id=" . $row['id'] . "'>Edit</a> | <a href='hapus_data.php?id=" . $row['id'] . "'>Hapus</a></td>";
        echo "</tr>";
    }
    ?>
</table>