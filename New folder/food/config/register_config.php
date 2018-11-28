<?php
session_start();
class Register_config{
    public function __construct()
    {
        try{
            $this->db=new PDO("mysql:host=localhost; dbname=cv",'root','12345');
        }catch (PDOException $e){
            die("The Connection failed to database server.");
        }

    }
    public function login($name,$password){
        $sql="select name,password,user_role from users where name='$name'";
        $user=$this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        if($user){
            $enc_password=sha1($password);
            $db_password=$user['password'];
            if($enc_password==$db_password){
                $_SESSION['login']=true;
                $_SESSION['name']=$name;
                $_SESSION['user_role']=$user['user_role'];
                $_SESSION['info']="login success.";
                header("location: ../index.php");
            }else{
                $_SESSION['err']="The password is incorrect.";
                header("location: ../auth/login.php");
            }
        }else{
            $_SESSION['err']="The user name not found.";
            header("location: ../auth/login.php");
        }
    }
    public function registers($name,$password,$confirm_password,$phone,$user_role){
        $sql="select name from users where name='$name'";
        $user=$this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        if(!$user){
            if($password==$confirm_password){

                $enc_password=sha1($password);
               $ss="insert into users(name,password,user_role,phone,created_at) VALUES ('$name','$enc_password','$user_role','$phone',now())";
               $result=$this->db->query($ss);
               if($result){
                   $_SESSION['info']="The user account created successful";
                   header("location: ../auth/regsiter.php");
               }else{
                   $_SESSION['err']="cannot insert  in database ";
                   header("location: ../auth/regsiter.php");
               }

            }else{
                $_SESSION['err']="The password and confirm password must the same.";
                header("location: ../auth/regsiter.php");
            }

        }else{
            $_SESSION['err']="The user name is already in it use.";
            header("location: ../auth/regsiter.php");
        }
    }
}
