<?php 

class Contact
{
private $id;
private $nom;
private $prenom;
private $email;
private $telephone;
private $db;

public function __construct($db){
     $this->db=$db->connect();
}
public function display(){
    $query='select * from contacts';
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $result= $stmt->fetch_assoc();
    return $result;
}

public function add($nom,$prenom,$email,$telephone){
// var_dump($this->db);
$query="insert into contacts (nom,prenom,email,telephone) values (:nom,:prenom,:email,:telephone)";
$stmt=$this->db->prepare($query);
$stmt->bindParam(':nom',$nom);
$stmt->bindParam(':prenom',$prenom);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':telephone',$telephone);
return $stmt->execute();

}



public function delete($id){

    $query='delete  from contacts where id=:id';
    $stmt=$this->db->prepare($query);
    $stmt->bindParam(':id',$id);

    return $stmt->execute();
}

public function update($id,$nom,$prenom,$email,$telephone){

$query='update contacts set nom =:nom ,prenom=:prenom, email =:email , telephone =:telephone where id=:id';
$stmt=$this->db->prepare($query);
$stmt->bindParam(':id',$id);
$stmt->bindParam(':nom',$nom);
$stmt->bindParam(':prenom',$prenom);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':telephone',$telephone);

return $stmt->execute();

}

public function findone($id){
$query='select * from contacts where id=:id';
$stmt=$this->db->prepare($query);
$stmt->bindParam(':id',$id);
return $stmt->execute();
}



}


// $contact1=new contact('kaoutar','labjioui@gmail.com','01425879','123456');
// $contact1->display();
// echo 'hello';

?>