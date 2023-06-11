<!DOCTYPE html>
<html>
    <!-- Bryan Nicholas 72210477 -->
<head>
    <title>Tambah Roti</title>
</head>

<body>
    <h1>Tambah Roti</h1>
    <form method="post" action="index.php?action=proses_tambah_roti">
        <table>
            <tr>
                <td>ID Roti </td>
                <td><input type="text" name="idRoti"></td>
            </tr>
            <tr>
                <td>Nama Roti </td>
                <td><input type="text" name="namaRoti"></td>
            </tr>
            <td>Rasa Roti </td>
                <td>
                    <select name="rasaRoti">
                        <option value="Vanilla">Vanilla</option>
                        <option value="Strawberry">Strawberry</option>
                        <option value="Coklat">Coklat</option>
                        <option value="Keju">Keju</option>
                        <option value="Latte">Latte</option>
                        <option value="Machiato">Machiato</option>
                    </select>
                </td>
            <tr>
                <td>Diameter </td>
                <td><input type="text" name="diameter"></td>
            </tr>
            <tr>
                <td>Tinggi </td>
                <td><input type="text" name="tinggi"></td>
            </tr>
            <tr>
                <td>Topping </td>
                <td><input type="text" name="topping"></td>
            </tr>
            <tr>
                <td>Harga </td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Gambar </td>
                <td><input type="file" name="gambar"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>