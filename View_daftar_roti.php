<!DOCTYPE html>
<html>
<!-- Bryan Nicholas 72210477 -->
<head>
    <title>Daftar Roti</title>
</head>

<body>
    <h1 align="center">Daftar Roti</h1>
    <p align="center"><a href="index.php?action=tambah_roti">Silahkan Menambahkan Data Roti</a></p>
    <table border="5" align="center" background-color: #fff>
        <tr>
            <th>ID ROTi</th>
            <th>Nama Roti</th>
            <th>Rasa Roti</th>
            <th>Diameter</th>
            <th>Tinggi</th>
            <th>Topping</th>
            <th>Harga</th>
            <th>Gambar</th>
        </tr>
    
        <?php
        //Bryan Nicholas 72210477
        foreach ($result as $roti) { ?>
            <tr>
                <td>
                    <?php echo $roti['idRoti']; ?>
                </td>
                <td>
                    <?php echo $roti['namaRoti']; ?>
                </td>
                <td>
                    <?php echo $roti['rasaRoti']; ?>
                </td>
                <td>
                    <?php echo $roti['diameter']; ?>
                </td>
                <td>
                    <?php echo $roti['tinggi']; ?>
                </td>
                <td>
                    <?php echo $roti['topping']; ?>
                </td>
                <td>
                    <?php echo $roti['harga']; ?>
                </td>
                <td>
                    <?php echo $roti['gambar']; ?>
                </td>
                <td>
                    <a href="index.php?action=ubah_roti&idRoti=<?php echo $roti['idRoti']; ?>">Ubah</a>
                    <a href="index.php?action=hapus_roti&idRoti=<?php echo $roti['idRoti']; ?>" onclick="return
                    confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html