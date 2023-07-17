<?php
$koneksi = new mysqli('localhost', 'root', '', 'tugas1') or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $idPelanggan = $_POST['idPelanggan'];
    $nmPesanan = $_POST['nmPesanan'];
    $Jp = $_POST['Jp'];
    $Harga = $_POST['Harga'];
    $koneksi->query("INSERT INTO coffe (idPelanggan, nmPesanan, Jp, Harga) values ('$idPelanggan','$nmPesanan','$Jp','$Harga')");

    header('location:coffe.php');
}

if (isset($_GET['idPelanggan'])) {
    $idPelanggan = $_GET['idPelanggan'];
    $koneksi->query("DELETE FROM coffe where idPelanggan = '$idPelanggan'");
    header("location:coffe.php");
}

if (isset($_POST['edit'])) {
    $idPelanggan = $_POST['idPelanggan'];
    $nmPesanan = $_POST['nmPesanan'];
    $Jp = $_POST['Jp'];
    $Harga = $_POST['Harga'];

    $koneksi->query("UPDATE coffe SET idPelanggan='$idPelanggan',nmPesanan='$nmPesanan',Jp='$Jp',Harga='$Harga'WHERE idPelanggan=$idPelanggan");
    header("location:coffe.php");
}