 <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.4.js" type="text/javascript"></script>
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        
        <script> $(document).ready(function() {
    $('#example').DataTable({"lengthMenu":[[6],[6,"All"]]});
        } );</script>
<center>   
    <label class="label label-primary" style="font-size: 20px;">Display Supplier</label><br><br>
    <a  class="btn btn-success" href="main_home_of_user.php?pg=isup" style="margin-top: -18px; margin-left: 91%;">Add Supplier</a>
    <table id="example" class="table table-bordered table-condensed table-striped table-responsive table-hover" style="width: 100%">
    <thead>
    <th>Supplier Id</th>
    <th>Supplier Name</th>
    <th>Supplier Address</th>
    <th>Supplier Mobile No</th>
    <!--<th>Action</th>-->
    </thead>
<?php
include 'connection.php';
$query = "select * from supplier";
$result = mysqli_query($link, $query);
$count=0;
foreach ($result as $value)
{
    $count=$count+1;
    echo '<tr><td>'.$value['sp_id'].'</td><td>'.$value['sp_name'].'</td><td>'.$value['sp_address'].'</td><td>'.$value['sp_contact'].'</td>';
//    echo "<td><a class='btn btn-danger' href='home.php?pg=delsup&sp_id=".$value['sp_id']."'>Delete</a> | <a class='btn btn-info' href='home.php?pg=esup&spid=".$value['sp_id']."'>Edit</a></td></tr>";
}

?>
</table>
</center>