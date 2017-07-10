 <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.4.js" type="text/javascript"></script>
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        
        <script> $(document).ready(function() {
    $('#example').DataTable({"lengthMenu":[[4],[4,"All"]]});
        } );</script>
<center>   
    <label class="label label-primary" style="font-size: 20px;">Display Brand</label><br><br>
    <a  class="btn btn-success" href="home.php?pg=ibr" style="margin-top: -18px; margin-left: 92%;">Add Brand</a> 
    <table id="example" class="table table-bordered table-condensed table-striped table-responsive table-hover" style="width: 100%">
    
    <thead>
        <th>Brand Id</th>
        <th>Brand Name</th>
        <th>Brand Detail</th>
        <th>Action</th>
    </thead>   


<?php
include 'connection.php';
$query = "select * from brand";
$result = mysqli_query($link, $query);
$count=0;
foreach ($result as $value)
{
    $count = $count+1;
    echo '<tr><td>'.$count.'</td><td>'.$value['br_name'].'</td><td>'.$value['br_detail'].'</td>';
    echo "<td><a class='btn btn-danger' href='home.php?pg=delbr&br_id=".$value['br_id']."'>Delete</a> | <a class='btn btn-info' href='home.php?pg=ebr&brid=".$value['br_id']."'>Edit</a></td>";
}
 
 
?>
</table>
</center>