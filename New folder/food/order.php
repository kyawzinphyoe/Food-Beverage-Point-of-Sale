<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Coffee Village</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
include 'partial/header.php';?>
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <?php
            include 'config/order_config.php';

            $ord=new OrderConfig();

            $or=$ord->showOrder();
            foreach ($or as $order):
                ?>
                <div class="panel panel-primary">
                    <div class="panel-heading">user name:<?php echo $order['user_name'];?> |table number:<?php echo $order['tb_name']; ?><span class="pull-right"><?php echo date('d/m/Y h:i A',strtotime($order['created_at'])) ;?></span> </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Amount</th>
                            </tr>
                            <?php
                            $totalprice=0;
                            $order_id=$order['id'];
                            $oo=$ord->showOrderData($order_id);
                            foreach ($oo as $row):
                                $totalprice +=$row['qty']*$row['order_price'] ;
                                ?>
                                <tr>
                                    <td><?php echo $row['order_title'] ?></td>
                                    <td><?php echo $row['order_price']?></td>
                                    <td><?php echo $row['qty']?></td>
                                    <td><?php echo $row['qty']*$row['order_price']?>KS</td>
                                </tr>
                                <?php
                            endforeach;
                            ?>
                            <tr>
                                <td colspan="3">Total Amount=</td>
                                <td><?php echo $totalprice; ?>KS</td>

                            </tr>

                        </table>
                        <div class="form-group">
                            <a href="../delete_order.php?id=<?php echo $order['id']; ?>" class="text-danger"><span class="pull-right"><button type="submit" style="width: 50px;"><i class="fa fa-trash"></i></button> </span> </a>
                        </div>
                        <div class="form-group">
                            <a href="../print.php?id=<?php echo $order['id']; ?>"><span class="pull-right"><button type="submit" style="width: 50px;"><i class="fa fa-print"></i></button></span></a>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>


<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

</body>
</html>