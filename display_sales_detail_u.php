 <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.4.js" type="text/javascript"></script>
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        
        <script> $(document).ready(function() {
    $('#example').DataTable({"lengthMenu":[[6],[6,"All"]]});
        } );</script>
<center>   
    <label class="label label-primary" style="font-size: 20px;">Display Sales Detail</label><br><br>
    <a  class="btn btn-success" href="main_home_of_user.php?pg=isd" style="margin-top: -18px; margin-left: 89%;">Add Sales Detail</a>
    <table id="example" class="table table-bordered table-condensed table-striped table-responsive table-hover" style="width: 100%">
    <thead>
    <th>Sales Id</th>
    <th>Sales Date</th>
    <th>Sales Detail</th>
    <th>Quantity</th>
    <th>Customer Name</th>
    <th>Product Name</th>
    <th>Installment Mode Title</th>
    <!--<th>Action</th>-->
    </thead>
    <?php
    include './connection.php';
    $query = "select * from sales_detail,customer,product,installment_mode where sales_detail.cus_id=customer.cus_id and sales_detail.p_id=product.p_id and sales_detail.mode_id=installment_mode.mode_id";
    $result = mysqli_query($link, $query);
    $count=0;
    foreach ($result as $value)
    {
        $count=$count+1;
        echo '<tr><td>'.$value['sd_id'].'</td><td>'.$value['date'].'</td><td>'.$value['detail'].'</td><td>'.$value['qty'].'</td><td>'.$value['cus_name'].'</td><td>'.$value['p_name'].'</td><td>'.$value['mode_title'].'</td>';
//        echo "<td><a class='btn btn-danger' href='home.php?pg=delsd&sd_id=".$value['sd_id']."'>Delete</a> | <a class='btn btn-info' href='home.php?pg=esd&sdid=".$value['sd_id']."'>Edit</a></td></tr>";
    }
    
    ?>
</table>
</center>
