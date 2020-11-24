<html>
<head>
    <title>Tambah </title>
    <link rel="stylesheet" type="text/css" href="assets/styleform.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap">
</head>

<body>
    <div class="tabel">
    <form action="tambah.php" method="post" name="form1" class="formadd">
        <table width="40%">
            <tr> 
                <td>Kode</td>
                <td><input type="text" name="kode"></td>
            </tr>
            <tr> 
                <td>Nama Sepatu</td>
                <td><input type="text" name="nama_sepatu"></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
             <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah Product"></td>
            </tr>
        </table>
    </form>
</div>
    <?php

    if(isset($_POST['Submit'])) {
        $kode = $_POST['kode'];
        $nama_sepatu = $_POST['nama_sepatu'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];

        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO shoesstock(kode,nama_sepatu,stok,harga) VALUES('$kode','$nama_sepatu','$stok', '$harga')");

         echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>