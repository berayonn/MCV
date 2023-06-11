<?php
// Bryan Nicholas 72210477
class ModelRoti
{
    private $conn;
    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "bakery");
        if ($this->conn->connect_error) {
            die('Koneksi gagal : ' . $this->conn->connect_error);
        }
    }
    public function __destruct()
    {
        mysqli_close($this->conn);
    }
    public function get_daftar_roti()
    {
        $query = "SELECT * FROM roti";
        $tabelMahasiswa = $this->conn->query($query);
        return $tabelMahasiswa;
    }
    public function tambah_roti($idRoti, $namaRoti, $rasaRoti, $diameter, $tinggi, $topping, $harga, $gambar)
    {
        $query = "INSERT INTO roti(idRoti, namaRoti, rasaRoti, diameter, tinggi, topping, harga, gambar) 
                  VALUES ('$idRoti', '$namaRoti', '$rasaRoti', '$diameter', '$tinggi', '$topping', '$harga', '$gambar')";
        $result = $this->conn->query($query);
        return $result;
    }
    public function get_roti_by_id($idRoti)
    {
        $query = "SELECT * FROM roti WHERE idRoti = '$idRoti'";
        $result = $this->conn->query($query);
        $mahasiswa = $result->fetch_assoc();
        return $mahasiswa;
    }
    public function ubah_roti($idRoti, $namaRoti, $rasaRoti, $diameter, $tinggi, $topping, $harga, $gambar)
    {
        $query = "UPDATE roti SET 'namaRoti = '$namaRoti', rasaRoti = '$rasaRoti' diameter = '$diameter' tinggi = '$tinggi',
                                       topping = '$topping', harga = '$harga', gambar = '$gambar' WHERE idRoti = '$idRoti'";
        //$result = $this->conn->query($query);
        return $query;
    }
    public function hapus_roti($idRoti)
    {
        $query = "DELETE FROM roti WHERE idRoti = '$idRoti'";
        $result = $this->conn->query($query);
        return $result;
    }
    public function insertRoti()
    {
        $model = new UserModel();

        $idRoti = $_POST['idRoti'];
        $namaRoti = $_POST['namaRoti'];
        $rasaRoti = $_POST['rasaRoti'];
        $diameter = $_POST['diameter'];
        $tinggi = $_POST['tinggi'];
        $topping = $_POST['topping'];
        $harga = $_POST['harga'];
        $file = $_FILES['gambar'];

        $file_name = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileError = $file['error'];
        $fileExplode = explode(".", $file_name);
        $fileExt = strtoLower(end($fileExplode));
        $boleh = array('png', 'jpeg', 'jpg', 'bmp', '');
        if (in_array($fileExt, $boleh)) {
            if ($fileError == 0) {
                move_uploaded_file($fileTmpName, "File/" . $file_name);
                echo "File Berhasil Dikirim Kan Ke Folder file";
            } else {
                echo "Ada kesalahan saat mengunggah file...";
            }
        } else {
            echo "Tipe File Yang Di izinkan png, jpeg, jpg, bmp";
        }

        $model->insertData($idRoti, $namaRoti, $rasaRoti, $diameter, $tinggi, $topping, $harga, $file_name);
        header("Location: index.php");
    }
}
?>