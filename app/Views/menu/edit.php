<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Menu</h2>
        <form action="<?php echo base_url('menu/update/'.$menu->id); ?>" method="post">
            <div class="form-group">
                <label for="nama">Menu Name:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $menu->nama; ?>" required>
            </div>
            <div class="form-group">
                <label for="harga">Price:</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $menu->harga; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>