<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor_kamar = $_POST['nomor_kamar'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO kamar (nomor_kamar, tipe_kamar, harga) VALUES ('$nomor_kamar', '$tipe_kamar', '$harga')";
    if (mysqli_query($connection, $sql)) {
        header("Location: daftar_kamar.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}
?>

<form method="POST" action="">
    Nomor Kamar: <input type="text" name="nomor_kamar"><br>
    Tipe Kamar: <input type="text" name="tipe_kamar"><br>
    Harga: <input type="text" name="harga"><br>
    <input type="submit" value="Tambahkan Kamar">
</form>