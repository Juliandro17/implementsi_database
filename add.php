<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat data obat</title>
</head>
<body>
    <a href="index.php">Kembali</a>

    <form action="add.php" method="POST" name="addUser">
        <table border="0">
            <tr>
                <td>Nama Obat</td>
                <td><input type="text" name="nama_obat"></td>
            </tr>
            <tr>
                <td>stok obat</td>
                <td><input type="text" name="stok"></td>
            </tr>
            <tr>
                <td>harga obat</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="add"></td>
            </tr>
        </table>
    </form>

    <!-- Handle permintaan POST dari form diatas -->
    <?php
        if(isset($_POST['Submit'])) {
            $nama_obat = $_POST['nama_obat'];
            $stok = $_POST['stok'];
            $harga = $_POST['harga'];

            // Memanggil koneksi menuju database
            include_once("connection.php");

            // Query untuk insert data ke database
            $result = mysqli_query($mysqli, 
            "INSERT INTO obat (nama_obat,stok,harga) VALUES ('$nama_obat','$stok','$harga')");

            echo "Berhasil menambah obat. <a href='index.php'>Lihat data obat</a>";
        }
    ?>
</body>
</html>