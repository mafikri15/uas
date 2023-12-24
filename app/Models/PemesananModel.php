<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class PemesananModel extends Model
{
    protected $table = 'tb_pemesanan';
    protected $primaryKey       = 'id_pemesanan';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama', 'tanggal_keberangkatan', 'tujuan'];
     
    public function getPemesanan($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_pemesanan' => $id]);
        }   
    }

    public function savePemesanan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editPemesanan($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_pemesanan', $id);
        return $builder->update($data);
    }


    public function hapusPemesanan($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_pemesanan' => $id]);
    }
 
}