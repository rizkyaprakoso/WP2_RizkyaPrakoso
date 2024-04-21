<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Menu List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menus as $menu) { ?>
                    <tr>
                        <td><?php echo $menu->id; ?></td>
                        <td><?php echo $menu->nama; ?></td>
                        <td><?php echo $menu->harga; ?></td>
                        <td>
                            <a href="<?php echo base_url('menu/edit/'.$menu->id); ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="<?php echo base_url('menu/delete/'.$menu->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this menu?')">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>