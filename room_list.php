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
        echo "<td>" . $row['nomor_kamar'] . "</td>";
        echo "<td>" . $row['tipe_kamar'] . "</td>";
        echo "<td>" . $row['harga'] . "</td>";
        echo "<td><a href='edit_kamar.php?id=" . $row['id'] . "'>Edit</a> | <a href='hapus_kamar.php?id=" . $row['id'] . "'>Hapus</a></td>";
        echo "</tr>";
    }
    ?>
</table>