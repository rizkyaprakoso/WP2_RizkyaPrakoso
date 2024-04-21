<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Matakuliah</title>
</head>
<body>
<center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Mata Kuliah
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <td>:</td>
                <td>
                    <?= $kode; ?>
                </td>
            </tr>
            <tr>
                <th>Nama MTK</th>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <br><a href="/matakuliah">Kembali</a>
                </td>
            </tr>
        </table>
</center>
</body>
</html>