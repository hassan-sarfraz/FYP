 <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.4.js" type="text/javascript"></script>
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        
        <script> $(document).ready(function() {
    $('#example').DataTable({"lengthMenu":[[6],[6,"All"]]});
        } );</script>

<center>   
    <label class="label label-primary" style="font-size: 20px;">Display Stock</label><br><br>
    <a  class="btn btn-success" href="main_home_of_user.php?pg=ist" style="margin-top: -18px; margin-left: 91%;">Add Stock</a>
    <table id="example" class="table table-bordered table-condensed table-striped table-responsive table-hover" style="width: 100%">
    <thead>
    <th>Stock Id</th>
    <th>Stock Quantity</th>
    <th>Stock Price</th>
    <th>Stock Detail</th>
    <th>Product Name</th>
    <!--<th>Action</th>-->
    </thead>
    <?php
    include './connection.php';
    $query = "select * from stock,product where stock.p_id=product.p_id";
    $result = mysqli_query($link, $query);
    $count=0;
    foreach ($result as $value)
    {
        $count=$count+1;
        echo '<tr><td>'.$value['stk_id'].'</td><td>'.$value['quantity'].'</td><td>'.$value['price'].'</td><td>'.$value['detail'].'</td><td>'.$value['p_name'].'</td>';
    
//        echo "<td><a class='btn btn-danger' href='home.php?pg=delst&stk_id=".$value['stk_id']."'>Delete</a> | <a class='btn btn-info' href='home.php?pg=est&stkid=".$value['stk_id']."'>Edit</a></td></tr>";
    }
    
    ?>
</table>
</center>