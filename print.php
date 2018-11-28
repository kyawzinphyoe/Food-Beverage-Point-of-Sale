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
        <div class="col-md-4 col-md-offset-4">
            <?php
            include 'config/order_config.php';
            $id=$_GET['id'];
            $ord=new OrderConfig();
            $or=$ord->showOrderPrint($id);
            foreach ($or as $order):
                ?>
                <div class="text-center"> <h4>LIBRASUN SNACKS</h4></div>
                <div class="text-center"><h4> Mid Valley City,</h4></div>
                <div class="text-center"><h4> Lingkaran Syed Putra,</h4></div>
                    <div class="text-center"><h4> 59200 Kuala Lumpur</h4> </div>
                                                 
            <div class="">
                Receipt: <?php echo $order['tb_name']; ?> <span class="pull-right">Temp-Temp_01</span><br>
                Shift No.1 <span class="pull-right"><?php echo date('d/m/Y',strtotime($order['created_at']))?></span><br>
                Cashier: <?php echo $order['user_name'];?> <span class="pull-right"><?php echo date('d/m/Y h:i:s',strtotime($order['created_at'])) ;?></span><br>DINE-IN
            </div>
                <div class="table table-responsive">
                        <table class="table">
                            <tr>
                                <th>QTY</th>
                                <th colspan="3">ITEM</th>
                                <th>AMOUNT</th>                                
                            </tr>

                            <?php
                            $totalprice=0;
                            $order_id=$order['id'];
                            $oo=$ord->showOrderData($order_id);
                            foreach ($oo as $row):
                                $totalprice +=$row['qty']*$row['order_price'] ;
                                ?>
                                <tr>

                                    <td style="border:0px;color:#2874A6"><?php echo $row['qty']?></td>
                                    <td colspan="3" style="border:0px;color:#2874A6"><?php echo $row['order_title'] ?></td>
                                    <td style="border:0px;color:#2874A6"><?php echo $row['qty']*$row['order_price']?> Ks</td>
                                </tr>
                                <?php
                            endforeach;
                            ?>
                            
                            <tr>
                                <td></td>
                                <td colspan="3">Sub Total</td>
                                <td><?php echo $totalprice; ?>KS</td>
                            </tr>

                            <?php if($totalprice >= 20000){
                                ?>
                                <tr>
                                    <td style="border:0px"></td>
                                    <td colspan="3" style="border:0px">Discount (10%)</td>
                                    <td style="border:0px"><?php echo $tt=$totalprice*0.10; ?>KS</td>
                                </tr>
                                <?php
                            } ?>


                            <tr>
                                <td style="border:0px"></td>
                                <td colspan="3" style="border:0px">Grand Total Amount</td>
                                <td style="border:0px"><?php echo $totalprice-$tt; ?>KS</td>
                            </tr>
                            <tr>
                                <td style="border:0px"></td>
                                <td colspan="3" style="border:0px">CASH</td>
                                <td style="border:0px"><?php echo $totalprice-$tt; ?>KS</td>
                            </tr>
                        </table>
                </div>

                <?php
            endforeach;
            ?>

        </div>

    </div>

    <div class="text-center">CUSTOMER HOTLINE</div>
    <div class="text-center">(060) 3 2298 7229</div>
    <div class="text-center">***Thank You!***</div>
    <div id="printId" class="text-primary"><a href="" class="btn btn-default"> <i class="fa fa-print"></i></a> </div>
</div>


<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script>
    $("#printId").on('click',function () {
        print();
    })
</script>

</body>
</html>