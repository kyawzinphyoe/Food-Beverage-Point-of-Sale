<?php

session_start();
class Product
{
    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost; dbname=cv", 'root', '12345');
        } catch (PDOException $e) {
            die("The Connection failed to database server.");
        }

    }
    public function editProduct($id,$title,$price,$cat_id,$cover_name,$cover_tmp){
        $sql="select cover from products where id='$id'";
        $cc=$this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        $c_name=$cc['cover'];
        if($cover_name){
            unlink("../covers/$c_name");
        }

        if($cover_name){
            $sq="update products set title='$title',price='$price',cover='$cover_name',cat_id='$cat_id' where id='$id'";
            move_uploaded_file($cover_tmp,"../covers/$cover_name");
        }else{
            $sq="update products set title='$title',price='$price',cat_id='$cat_id' where id='$id'";
        }
        $this->db->query($sq);

        header("location: ../admin/dashboard.php");
    }
    public function editShow($id){
        $sql="select * from products where id='$id'";
        return $this->db->query($sql);
    }
    public function deleteProduct($id){
        $sql="select cover from products where id='$id'";
        $cc=$this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        $cover_name=$cc['cover'];

        unlink("../covers/$cover_name");

        $sq="delete from products where id='$id'";
        $this->db->query($sq);
        header("location: ../admin/dashboard.php");
    }
    public function showProduct(){
        $sql="select categories.category_name,products.* from products  left join categories on products.cat_id=categories.id  ORDER by id DESC ";
        return $this->db->query($sql);
    }
    public function addProduct($title,$price,$cat_id,$cover_name,$cover_tmp){
        $sql="insert into products (title,price,cover,cat_id,created_at)VALUES ('$title','$price','$cover_name','$cat_id',now())";
        $this->db->query($sql);

        move_uploaded_file($cover_tmp,"../covers/$cover_name");
        header("location: ../admin/dashboard.php");
    }
    public function deleteCategories($cat_name){
        $sql="delete from categories where category_name='$cat_name'";
        $this->db->query($sql);
        header("location: ../admin/categories.php");
    }
    public function showCategories(){
        $sql="select * from categories";
        return $this->db->query($sql);
    }
    public function newCategories($cat_name){
        //echo $cat_name;
       $sql="select * from categories where category_name='$cat_name'";
        $cat=$this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        if(!$cat){
            $sq="insert into categories(category_name)VALUES ('$cat_name')";
            $result=$this->db->query($sq);
            if($result){
                $_SESSION['info']="new category insert is successful.";
                header("location: ../admin/categories.php");
            }else{
                $_SESSION['err']="The categories name cannot insert in database.";
                header("location: ../admin/categories.php");
            }
        }else{
            $_SESSION['err']="The categories name is already in it use.";
            header("location: ../admin/categories.php");
        }
    }
}
