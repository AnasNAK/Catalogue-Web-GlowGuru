<?php
class Admin
{
  private $db;
 

  public function __construct()
  {
    $this->db = new Database();
  }
  //login admin 
  public function login($email, $password)
  {
    $this->db->query('SELECT * FROM admin WHERE email = :email');
    $this->db->bind(':email', $email);

    $row = $this->db->single();

    $hashed_password = $row->password;
    if (password_verify($password, $hashed_password)) {
      return $row;
    } else {
      return false;
    }
  }
  //find user by email
  public function findUserByEmail($email)
  {
    $this->db->query('SELECT * FROM admin WHERE email = :email');
    $this->db->bind(':email', $email);

    $this->db->single();
    //
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }
  //find user by id
  public function findUserById($id)
  {
    $this->db->query('SELECT * FROM admin WHERE id = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();
  
    return $row;
  }
  
  public function findproductById($id)
  {
    $this->db->query('SELECT * FROM product WHERE id = :id');
    $this->db->bind(':id', $id);
    
    $row = $this->db->single();
    
    return $row;
  }
}
