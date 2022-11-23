<html lang="en">
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="ctrl_mahasiswa.php?act=tambah" method="POST">
    <table border ="1">
        <tr>
            <td>NIM Mahasiswa</td>
            <td> :  <input type="text" name="txt_nim"></td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td> : <input type="text" name="txt_nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : <input type="text" name="txt_alamat"></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td> : <input type="text" name="txt_tlp"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td> : <input type="text" name="txt_email"></td>
        </tr>
        <tr>
            <td><input type="Submit" value="Save"> <input type="button" value="Back" onclick=self.history.back()></td>
        </tr>
    </table>
    </form>
</body>
</html>