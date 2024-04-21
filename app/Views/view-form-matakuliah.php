<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Matakuliah</title>
</head>
<body>
    <center>
    <h1>Form Input Matakuliah</h1><hr>
        <?php if (session()->has('errors')) : ?>
            <?php foreach (session('errors') as $error) : ?>
                <p style="color: red;">
                <?= esc($error) ?>
            </p>
            <?php endforeach ?>
        <?php endif  ?>

        <form action= "/matakuliah/cetak" method="post">
            <br>
            <section>
                <label for="kode">Kode MTK</label>
                <input type="text" name="kode" id="kode">
            </section><br>

            <section>
                <label for="nama">Nama MTK</label>
                <input type="text" name="nama" id="nama">
            </section><br>

            <section>
                <label for="sks">SKS</label>
                <select name="sks" id="sks">
                    <option value="">Pilih SKS</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </section><br>

            <button type="submit">Submit</button>
        </form>
    </center>
</body>
</html>
