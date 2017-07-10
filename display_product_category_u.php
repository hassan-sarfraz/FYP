 <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.4.js" type="text/javascript"></script>
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        
        <script> $(document).ready(function() {
    $('#example').DataTable({"lengthMenu":[[6],[6,"All"]]});
        } );</script>
<center>   
    <label class="label label-primary" style="font-size: 20px;">Display Product Category</label><br><br>
    <a  class="btn btn-success" href="main_home_of_user.php?pg=ipc" style="margin-top: -18px; margin-left: 86%;">Add Product Category</a>
    <table id="example" class="table table-bordered table-condensed table-striped table-responsive table-hover" style="width: 100%">
    <thead>
    <th>Product Category Id</th>
    <th>Product Category Name</th>
    <!--<th>Action</th>-->
    </thead>

<?php
include 'connection.php';
$query = "select * from product_category";
$result = mysqli_query($link, $query);
$count = 0;
foreach ($result  as $value)
{
    $count = $count+1;
    echo '<tr><td>'.$value['pcat_id'].'</td><td>'.$value['pcat_name'].'</td>';
//    echo "<td><a class='btn btn-danger' href='home.php?pg=delpc&pcat_id=".$value['pcat_id']."'>Delete</a> | <a class='btn btn-info' href='home.php?pg=epc&pcatid=".$value['pcat_id']."'>Edit</a></td></tr>";
}

?>
</table>
</center>