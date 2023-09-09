<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nomor_kamar = $_POST['nomor_kamar'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $harga = $_POST['harga'];

    $sql = "UPDATE kamar SET nomor_kamar='$nomor_kamar', tipe_kamar='$tipe_kamar', harga='$harga' WHERE id=$id";
    if (mysqli_query($connection, $sql)) {
        header("Location: daftar_kamar.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM kamar WHERE id=$id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
?>

<h2>Edit Kamar</h2>
<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Nomor Kamar: <input type="text" name="nomor_kamar" value="<?php echo $row['nomor_kamar']; ?>"><br>
    Tipe Kamar: <input type="text" name="tipe_kamar" value="<?php echo $row['tipe_kamar']; ?>"><br>
    Harga: <input type="text" name="harga" value="<?php echo $row['harga']; ?>"><br>
    <input type="submit" value="Simpan Perubahan">
</form>