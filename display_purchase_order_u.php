 <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.4.js" type="text/javascript"></script>
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        
        <script> $(document).ready(function() {
    $('#example').DataTable({"lengthMenu":[[6],[6,"All"]]});
        } );</script>
<center>   
    <label class="label label-primary" style="font-size: 20px;">Display Purchase Order</label><br><br>
    <a  class="btn btn-success" href="main_home_of_user.php?pg=ipo" style="margin-top: -18px; margin-left: 87%;">Add Purchase Order</a>
    <table id="example" class="table table-bordered table-condensed table-striped table-responsive table-hover" style="width: 100%">
    <thead>
    <th>Order Number</th>
    <th>Purchase Order Date</th>
    <th>Product Name</th>
    <th>Supplier Name</th>
    <!--<th>Action</th>-->
    </thead>
<?php
include 'connection.php';
$query = "select * from purchase_order,product,supplier where purchase_order.p_id=product.p_id and purchase_order.sp_id=supplier.sp_id";
$result = mysqli_query($link, $query);
$count=0;
foreach ($result as $value)
{
    $count=$count+1;
    echo '<tr><td>'.$value['order_no'].'</td><td>'.$value['date'].'</td><td>'.$value['p_name'].'</td><td>'.$value['sp_name'].'</td>';
//    echo "<td><a class='btn btn-danger' href='home.php?pg=delpo&order_no=".$value['order_no']."'>Delete</a> | <a class='btn btn-info' href='home.php?pg=epo&s=".$value['order_no']."'>Edit</a></td></tr>";
    
}

?>
</table>
</center>