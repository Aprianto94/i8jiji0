<?php
include('koneksi.php');

$id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=pduli_diri", 'root', '');
$query = $db->query("DELETE FROM isi_data WHERE id='$id'");

if($query){
    header("location:catatan.php");
}
?>