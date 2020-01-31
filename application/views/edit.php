<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD || TAMBAH DATA</title>
</head>
<body>
    <?php foreach ($user as $u) { ?>
    <form method="POST" action="<?= site_url('Main/query_update') ?>">
    <table border='1'>
        <tr>
            <input type="hidden" name="id_bukutamu" value="<?= $u->id_bukutamu; ?>">
            <td>Nama : <input type="text" name="nama" value="<?= $u->nama; ?>"></td>
            <td>Email : <input type="text" name="email" value="<?= $u->email; ?>"> </td>
            <td>Aktifitas : <input type="text" name="aktifitas" value="<?= $u->aktifitas; ?>"></td>
            <td><input type="submit" name="proses_tambahdata" value="Check IN"></td>
        </tr>
    </table>
    <?php } ?>
</body>
</html>