<?php
session_start();
class OrderConfig
{
    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost; dbname=cv", 'root', '12345');
        } catch (PDOException $e) {
            die("The Connection failed to database server.");
        }

    }
    public function deleteOrderPrint($id){
        $sql="delete from orders where id='$id'";
        $order=$this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        $order_id=$order['id'];

        $sqldel="delete from order_item where order_id='$order_id'";
        $this->db->query($sqldel);
        header("location: order.php");
    }

    public function showOrderPrint($id){
        $sql="select * from orders where id='$id'";
        return $this->db->query($sql);
    }
    public function showOrderData($order_id){
        $sql="select orders.user_name,orders.tb_name,order_item.* from order_item left join orders on order_item.order_id=orders.id where order_id='$order_id'";
        return $this->db->query($sql);
    }
    public function showOrder(){
        $sql="select * from orders ORDER by id Desc";
        return $this->db->query($sql);
    }
    public function orderInsert($tb_name,$user_name){
        $sqlorder="insert into orders (tb_name,user_name,created_at)values('$tb_name','$user_name',now())";
        $this->db->query($sqlorder);
        $order_id=$this->db->lastInsertId();

        foreach($_SESSION['cat'] as $id=>$qty):
            $pds="select * from products where id='$id'";
            $pd=$this->db->query($pds);
            foreach ($pd as $pdRow):
                $order_title=$pdRow['title'];
                $order_price=$pdRow['price'];

                $items="insert into order_item(order_title,order_price,qty,order_id)values('$order_title','$order_price','$qty','$order_id')";
                $this->db->query($items);
                unset($_SESSION['cat']);

                $_SESSION['info']="successful order completed";
                header("location: cat.php");
                endforeach;
            endforeach;

    }
}
