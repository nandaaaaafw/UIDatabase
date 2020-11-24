<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM shoesstock ORDER BY id DESC");
?>

<html>
<head>    
    <title>Daftar Barang | Shoesstock</title>
    <link rel="stylesheet" type="text/css" href="assets/styletable.css">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Inter&display=swap" >
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">Shoesstock.</div>
            <nav>
                <ul>
                    <li><a href="web kedua.html">HOME</a></li>
                    <li><a href="product.html">PRODUCT</a></li>
                    <li><a href="index.php">DATA PRODUCT</a></li>
                    <li><a href="login.html">LOGIN</a></li>
                </ul>
            </nav>
            <br>
    <div class="tabel">
    <table width='80%' border=1>

    <tr>
        <th>Kode</th> <th>Nama Sepatu</th> <th>Stok</th> <th>Harga</th> <th>Update</th>
    </tr>
<?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kode']."</td>";
        echo "<td>".$user_data['nama_sepatu']."</td>";
        echo "<td>".$user_data['stok']."</td>";
        echo "<td>".$user_data['harga']."</td>";   
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
?>
    </table>
</div>
<a href="tambah.php" class="buttonadd">Tambah Stok</a>
</body>
</html>
