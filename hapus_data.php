<?php
include 'connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM rooms WHERE id=$id";

if (mysqli_query($connection, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
