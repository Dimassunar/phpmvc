<?php
class Komli_model
{
    private $table = 'komli';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBlog()
    {
       $this->db->query("SELECT * FROM " . $this->table);
       return $this->db->resultSet();
    }

    public function getBlogById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->Single();
    }

    public function tambahData($data){
        $query = "INSERT INTO komli VALUES('',:komli) ";
        $this->db->query($query);
        $this->db->bind('komli', $data['komli']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataKomli($id){
        $query = "DELETE FROM komli WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataKomli($data)
        {
            $query = "UPDATE komli SET
            komli = :komli
            WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('komli', $data['komli']);
    $this->db->bind('id', $data['id']);
    
    $this->db->execute();
    
    return $this->db->rowCount();

    }
}