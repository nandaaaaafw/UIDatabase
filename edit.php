<?php
include_once("config.php");
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $kode=$_POST['kode'];
    $nama_sepatu=$_POST['nama_sepatu'];
    $stok=$_POST['stok'];
    $harga=$_POST['harga'];

    $result = mysqli_query($mysqli, "UPDATE shoesstock SET kode='$kode', nama_sepatu='$nama_sepatu', stok='$stok', harga='$harga' WHERE id=$id");

    header("Location: index.php");
}

?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM shoesstock WHERE id=$id");

while($user_data = mysqli_fetch_array($result));
{
    $kode = $user_data['kode'];
    $nama_sepatu = $user_data['nama_sepatu'];
    $stok = $user_data['stok'];
    $harga=$user_data['harga'];

}
?>
<html>
<head>  
    <title>Edit Data Sepatu</title>
    <link rel="stylesheet" type="text/css" href="assets/styleform.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap">
</head>

<body>
    <div class="tabel">
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Kode Barang</td>
                <td><input type="text" name="kode" value=<?php echo $kode;?>></td>
            </tr>
            <tr> 
                <td>Nama Sepatu</td>
                <td><input type="text" name="nama_sepatu" value=<?php echo $nama_sepatu;?>></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="text" name="stok" value=<?php echo $stok;?>></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
