<?php
include "koneksi.php";

$res_code = $_POST['res_code'];
$depart = $_POST['depart'];
$seat = $_POST['seat'];
$res_at = $_POST['res_at'];
$price = $_POST['price'];
$id_user = $_POST['id_user'];
$id_customer = $_POST['id_customer'];
$rute = $_POST['rute'];
$status = $_POST['status'];

$sql = mysqli_query($conn, 'INSERT INTO reserv (res_code, depart, seat, res_at, price, id_user, id_customer, rute, status) VALUES ("'.$res_code.'", "'.$depart.'", "'.$seat.'", "'.$res_at.'", "'.$price.'", "'.$id_user.'", "'.$id_customer.'", "'.$id_rute.'", "'.$status.'") ');
if($sql) {
    echo "<script>window.alert('Sedang dalam Proses, mohon tunggu!');window.location.href='keranjang.php';</script>";
} else {
    echo "<script>window.alert('Gagal');window.location.href='index.php';</script>";
}
?>
