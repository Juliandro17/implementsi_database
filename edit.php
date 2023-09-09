<?php

    include_once("connection.php");

    // Update
    if (isset($_POST['update'])) {
        $id = $_array['id_obat'];
        $nama_obat = $_POST['nama_obat'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];

        // query untuk update data
        $query = mysqli_query($mysqli,
        "UPDATE obat SET nama_obat='$nama_obat', stok='$stok', harga='$harga' WHERE id_obat='$id' ");

        header('Location: index.php');
    }

    // Ambil data user
    $id = $_array['id_obat'];

    $query = mysqli_query($mysqli, "SELECT * FROM obat WHERE id_obat='$id'");

    while($user_data = mysqli_fetch_array($query)) {
        $nama_obat = $user_data['nama_obat'];
        $stok = $user_data['stok'];
        $harga = $user_data['harga'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Data Obat</title>
</head>
<body>
    <a href="index.php">Kembali</a>

    <form action="edit.php" method="POST" name="editUser">
        <table border="0">
            <tr>
                <td>Nama obat</td>
                <td><input type="text" name="nama_obat" value="<?= $nama_obat ?>"></td>
            </tr>
            <tr>
                <td>stok</td>
                <td><input type="text" name="stok" value="<?= $stok ?>"></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga" value="<?= $harga ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_obat" value="<?php echo $_array['id_obat'] ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>