<?php 

class Contact
{
private $id;
private $nom;
private $email;
private $telephone;
private $db;
public function __construct($nom,$email,$telephone,$db){
     $this->nom=$nom;
     $this->email=$email;
     $this->telephone=$telephone;
     $this->db=$db->connect();
}
public function display(){
    $query='select * from contacts';
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}


public function delete($id){

    $query='delete  from contacts where id=:id';
    $stmt=$this->db->prepare($query);
    $stmt->bindParam(':id',$id);

    return $stmt->execute();
}

// public function 





}




?>