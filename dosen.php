<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>dosen</title>
</head>

<body>
        <h2>Data Dosen <br></h2>
        <form action="" method="post">
            <div class="box">
                <table>
                    <tr>
                        <td> Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" class="input-control">
                        </td>
                    <tr>
                        <td> Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tempat_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td> Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tanggal_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td> Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jenis_kelamin" class="input-control" value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jenis_kelamin" class="input-control" value="Perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td> Agama</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="agama" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td> No HP</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="agama" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td> Tahun Kelulusan</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="agama" class="input-control">
                        </td>
                    </tr>
            </div>
    </div>
    
</body>
</html>