<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
</head>
<body>
    <center><a href="<?php echo site_url('Main/tambah_data'); ?>">TAMBAH DATA</a></center>
    <table border="1" style="margin:20px auto">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Aktifitas</td>
            <td>Chech-in</td>
            <td>Check-out</td>
            <td>aksi</td>
        </tr>

        <?php
            $no = 1;  
            foreach ($tamu as $tm) {
                
        ?>

        <tr>
            <td><?=$no++;?></td>
            <td><?= $tm->nama;?></td>
            <td><?= $tm->email;?></td>
            <td><?= $tm->aktifitas;?></td>
            <td><?= $tm->check_in;?></td>
            
            <td>
                <?php
                    $tes = $tm->check_out;
                    if ($tes!="") {
                        echo $tes;
                    }
                    else{
                        echo "BELUM CHECKOUT";
                    }
                ?>
            </td>
            <td>
                    <a href="<?php echo site_url('Main/edit/');?><?php echo $tm->id_bukutamu;?>">Edit</a> || 
                    <a href="<?php echo site_url('Main/delete/');?><?php echo $tm->id_bukutamu;?>">Delete</a>
            </td>
        </tr>

        <?php } ?>

    </table>
</body>
</html>