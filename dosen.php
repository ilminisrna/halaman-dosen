<?php
    include 'koneksi.php';
    $sql = "SELECT * FROM tb_dosen";
    $result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<table border ="1">
        <tr>
            <th>ID Mahasiswa</th>
            <th>Nama Mahasiswa</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
        </tr>
        <?php while($data = mysqli_fetch_row($result)); ?>
        <tr>
            <td><?php echo $data[0]; ?></td>
            <td><?php echo $data[1];?></td>
            <td><?php echo $data[2]; ?></td>
            <td><?php echo $data[3]; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>