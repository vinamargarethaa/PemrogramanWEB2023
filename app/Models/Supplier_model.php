<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Supplier_model extends Model
{
    protected $table = 'supplier';
     
    public function getSupplier($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_supplier' => $id]);
        }   
    }

    public function saveSupplier($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editSupplier($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_supplier', $id);
        return $builder->update($data);
    }


    public function hapusSupplier($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_supplier' => $id]);
    }
 
}