<?php
class M_Dinas extends CI_Model
{
    public function tambah($data)
    {
        $this->db->insert('dinas',$data);
    }

    public function getdata()
    {
        return $this->db->get('dinas');
    }
    public function getdataid($id)
    {
        $this->db->where('id_dinas',$id);
        return $this->db->get('dinas');
    }
    public function edit($data,$id_dinas)
    {
        $this->db->where('id_dinas',$id_dinas);
        $this->db->update('dinas',$data);

    }
    public function hapus($id)
    {
        $this->db->where('id_dinas',$id);
         $this->db->delete('dinas');
    }
    
}
?>