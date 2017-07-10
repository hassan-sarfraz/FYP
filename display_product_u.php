 <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.4.js" type="text/javascript"></script>
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        
        <script> $(document).ready(function() {
    $('#example').DataTable({"lengthMenu":[[3],[3,"All"]]});
        } );</script>

<center>   
        <label class="label label-success" style="font-size: 20px;">Display Product</label><br>
        <div>
        <a  class="btn btn-warning" href="sample1.php" target="_blank" style="margin-bottom: -110px; width: 8%;">Print</a> 
        </div>
        <a  class="btn btn-success" href="main_home_of_user.php?pg=ipro" style="margin-top: -18px; margin-left: 91%;">Add Product</a> 
    <table id="example" class="table table-bordered table-condensed table-striped table-responsive table-hover" style="width: 100%">
    <thead>
    <th>Product Id</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Product Detail</th>
    <th>Product Category</th>
    <th>Brand Name</th>
    <!--<th>Action</th>-->
    </thead>
<?php
include 'connection.php';
$query = "select * from product,product_category,brand where product.pcat_id=product_category.pcat_id and product.br_id=brand.br_id";
$result = mysqli_query($link, $query);
//$count=0;
foreach ($result as $value)
{
//    $count=$count+1;
    echo '<tr><td>'.$value['p_id'].'</td><td>'.$value['p_name'].'</td><td>'.$value['p_price'].'</td><td><textarea style="width:100%;">'.$value['p_detail'].'</textarea></td><td>'.$value['pcat_name'].'</td><td>'.$value['br_name'].'</td>';
//    echo "<td><a  class='btn btn-danger' href='home.php?pg=delpro&p_id=".$value['p_id']."'>Delete</a> | <a  class='btn btn-info' href='home.php?pg=epro&s=".$value['p_id']."'>Edit</a></td></tr>";
    
}

?>
</table>
                        </center>  

