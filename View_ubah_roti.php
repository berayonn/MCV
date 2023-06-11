<!DOCTYPE html>
<html>
<!-- Bryan Nicholas 72210477 -->
<head>
    <title>Tambah Roti</title>
</head>

<body>
    <h1>Ubah Roti</h1>
    <form method="post" action="index.php?action=proses_ubah_roti">
        <table>
            <tr>
                <td>ID Roti </td>
                <td><input type="text" name="idRoti" value="<?=$result['idRoti']?>"></td>
            </tr>
            <tr>
                <td>Nama Roti </td>
                <td><input type="text" name="namaRoti"value="<?=$result['namaRoti']?>"></td>
            </tr>
            <tr>
                <td>Rasa Roti </td>
                <td><input type="listbox" name="rasaRoti"value="<?=$result['rasaRoti']?>"></td>
            </tr>
            <tr>
                <td>Diameter </td>
                <td><input type="text" name="diameter"value="<?=$result['diameter']?>"></td>
            </tr>
            <tr>
                <td>Tinggi </td>
                <td><input type="text" name="tinggi"value="<?=$result['tinggi']?>"></td>
            </tr>
            <tr>
                <td>Topping </td>
                <td><input type="text" name="topping"value="<?=$result['topping']?>"></td>
            </tr>
            <tr>
                <td>Harga </td>
                <td><input type="text" name="harga"value="<?=$result['harga']?>"></td>
            </tr>
            <tr>
                <td>Gambar </td>
                <td><input type="file" name="gambar"value="<?=$result['gambar']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>