<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Supplier_model;

class Supplier extends Controller
{
    public function index()
    {
        $model = new Supplier_model;
        $data['title']     = 'Data Supplier';
        $data['getSupplier'] = $model->getSupplier();
        echo view('header_view', $data);
        echo view('supplier/Supplier_view', $data);
        echo view('footer_view', $data);
    }

    public function tambah()
    {
        $data['title']     = 'Tambah Data Supplier';
        echo view('header_view', $data);
        echo view('supplier/tambah_view', $data);
        echo view('footer_view', $data);
    }

    public function add()
    {
        $model = new Supplier_model;
        $data = array(
            'nama_supplier' => $this->request->getPost('nama'),
            'alamat_supplier' => $this->request->getPost('alamat'),
        );
        $model->saveSupplier($data);
        echo '<script>
                alert("Sukses Tambah Data Supplier");
                window.location="'.base_url('supplier').'"
            </script>';

    }

    public function edit($id)
    {
        $model = new Supplier_model;
        $getSupplier = $model->getSupplier($id)->getRow();
        if(isset($getSupplier))
        {
            $data['supplier'] = $getSupplier;
            $data['title']  = 'Edit '.$getSupplier->nama_supplier;

            echo view('header_view', $data);
            echo view('supplier/edit_view', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("ID supplier '.$id.' Tidak ditemukan");
                    window.location="'.base_url('supplier').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Supplier_model;
        $id = $this->request->getPost('id_supplier');
        $data = array(
            'nama_supplier' => $this->request->getPost('nama'),
            'alamat_supplier'  => $this->request->getPost('alamat')
        );
        $model->editSupplier($data,$id);
        echo '<script>
                alert("Sukses Edit Data Supplier");
                window.location="'.base_url('supplier').'"
            </script>';
    }

    public function hapus($id)
    {
        $model = new Supplier_model;
        $getSupplier = $model->getSupplier($id)->getRow();
        if(isset($getSupplier))
        {
            $model->hapusSupplier($id);
            echo '<script>
                    alert("Hapus Data Supplier Sukses");
                    window.location="'.base_url('supplier').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID supplier '.$id.' Tidak ditemukan");
                    window.location="'.base_url('supplier').'"
                </script>';
        }
    }

}