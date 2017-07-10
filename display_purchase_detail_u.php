 <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.4.js" type="text/javascript"></script>
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        
        <script> $(document).ready(function() {
    $('#example').DataTable({"lengthMenu":[[4],[4,"All"]]});
        } );</script>
<center>   
    <label class="label label-primary" style="font-size: 20px;">Display Purchase Detail</label><br><br>
    <a  class="btn btn-success" href="main_home_of_user.php?pg=ipd" style="margin-top: -18px; margin-left: 87%;">Add Purchase Detail</a>
    <table id="example" class="table table-bordered table-condensed table-striped table-responsive table-hover" style="width: 100%">
    <thead>
    <th>Purchase Id</th>
    <th>Purchase Quantity</th>
    <th>Purchase Date</th>
    <th>Purchase Detail</th>
    <!--<th>Order No</th>-->
    <th>Product Name</th>
    <!--<th>Total</th>-->
    <!--<th>Action</th>-->
    </thead>
    <?php
    include './connection.php';
    $query = "select * from purchase_detail,product,stock where purchase_detail.p_id=product.p_id";
    $result = mysqli_query($link, $query);
    $count=0;
    foreach ($result as $value)
    {
        $count = $count + 1;
        echo '<tr><td>'.$value['pd_id'].'</td><td>'.$value['quantity'].'</td><td>'.$value['date'].'</td><td>'.$value['detail'].'</td><td>'.$value['p_name'].'</td>';
//        echo "<td><a class='btn btn-danger' href='home.php?pg=delpd&pd_id=".$value['pd_id']."'>Delete</a> | <a class='btn btn-info' href='home.php?pg=epd&pdid=".$value['pd_id']."'>Edit</a></td></tr>";
    }
   
    ?>
</table>
</center>