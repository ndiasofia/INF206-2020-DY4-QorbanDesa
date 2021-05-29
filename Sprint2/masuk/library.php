<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "qode";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }

    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM users");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
 
    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM users where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }
 
    public function update($id,$username,$no_telepon){
        $query = $this->db->prepare('UPDATE users set username=?,no_telepon=? where id=?');
        
        $query->bindParam(1, $username);
        $query->bindParam(2, $no_telepon);
        $query->bindParam(3, $id);
 
        $query->execute();
        return $query->rowCount();
    }
 
    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM users where id=?");
 
        $query->bindParam(1, $id);
 
        $query->execute();
        return $query->rowCount();
    }
 
}
?>