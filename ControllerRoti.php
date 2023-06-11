<?php
class ControllerRoti
//Bryan Nicholas 72210477
{
    private $model;
    public function __construct()
    {
        require_once('ModelRoti.php');
        $this->model = new ModelRoti();
    }
    public function daftar_roti()
    {
        $result = $this->model->get_daftar_roti();
        require_once('view_daftar_roti.php');
    }
    public function tambah_roti()
    {
        require_once('view_tambah_roti.php');
    }
    public function proses_tambah_roti()
    {
        $idRoti = $_POST['idRoti'];
        $namaRoti = $_POST['namaRoti'];
        $rasaRoti = $_POST['rasaRoti'];
        $diameter = $_POST['diameter'];
        $tinggi = $_POST['tinggi'];
        $topping = $_POST['topping'];
        $harga = $_POST['harga'];
        $gambar = $_POST['gambar'];
        $result = $this->model->tambah_roti($idRoti, $namaRoti, $rasaRoti, $diameter, $tinggi, $topping, $harga, $gambar);
        header('Location: index.php?action=daftar_roti');
    }
    public function ubah_roti()
    {
        $idRoti = $_GET['idRoti'];
        $result = $this->model->get_roti_by_id($idRoti);
        require_once('view_ubah_roti.php');
    }
    public function proses_ubah_roti()
    {
        $idRoti = $_POST['idRoti'];
        $namaRoti = $_POST['namaRoti'];
        $rasaRoti = $_POST['rasaRoti'];
        $diameter = $_POST['diameter'];
        $tinggi = $_POST['tinggi'];
        $topping = $_POST['topping'];
        $harga = $_POST['harga'];
        $gambar = $_POST['gambar'];
        $result = $this->model->ubah_roti($idRoti, $namaRoti, $rasaRoti, $diameter, $tinggi, $topping, $harga, $gambar);
        header('Location: index.php?action=daftar_roti');
    }
    public function hapus_roti()
    {
        $idRoti = $_GET['idRoti'];
        $result = $this->model->hapus_roti($idRoti);
        header('Location: index.php?action=daftar_roti');
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