<?php
session_start();
class PublicConfig
{
    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost; dbname=cv", 'root', '12345');
        } catch (PDOException $e) {
            die("The Connection failed to database server.");
        }

    }
    public function catShow($id){
        $sql="select * from products where id='$id'";
        return $this->db->query($sql);
    }
    public function searchProduct($q){
        $sql="select * from products where title LIKE '%$q%'";
        return $this->db->query($sql);
    }

    public function getCategories(){
        $sql="select * from categories";
        return $this->db->query($sql);
    }
    public function getProduct(){
        $sql="select categories.category_name,products.* from categories left join products on categories.id=products.cat_id";
        return $this->db->query($sql);
    }
    public function getProductById($cat_id){
        $sql="select * from products where cat_id='$cat_id'";
        return $this->db->query($sql);
    }
}
