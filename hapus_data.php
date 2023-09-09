<?php
include 'connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM kamar WHERE id=$id";

if (mysqli_query($connection, $sql)) {
    header("Location: room_list.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
