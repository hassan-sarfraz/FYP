 <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.4.js" type="text/javascript"></script>
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        
        <script> $(document).ready(function() {
    $('#example').DataTable({"lengthMenu":[[6],[6,"All"]]});
        } );</script>
<center>   
    <label class="label label-primary" style="font-size: 20px;">Display Customer</label><br><br>
    <a  class="btn btn-success" href="main_home_of_user.php?pg=icus" style="margin-top: -18px; margin-left: 90%;">Add Customer</a>
    <table id="example" class="table table-bordered table-condensed table-striped table-responsive table-hover" style="width: 100%">
    <thead>
    <th>Customer Id</th>
    <th>Customer Name</th>
    <th>Customer Address</th>
    <th>Customer Mobile No</th>
    <th>Customer CNIC</th>
    <th>Customer Code</th>
    <!--<th>Action</th>-->
    </thead>
    
<?php
include 'connection.php';
$query = "select * from customer";
$result = mysqli_query($link, $query);
$count = 0;
foreach ($result as $value)
{
    $count = $count+1;
    echo '<tr><td>'.$count.'</td><td>'.$value['cus_name'].'</td><td>'.$value['cus_address'].'</td><td>'.$value['cus_contact'].'</td><td>'.$value['cus_cnic'].'</td><td>'.$value['cus_code'].'</td>';
//    echo "<td><a class='btn btn-danger' href='home.php?pg=delcus&cus_id=".$value['cus_id']."'>Delete</a> | <a class='btn btn-info' href='home.php?pg=ecus&cusid=".$value['cus_id']."'>Edit</a></td></tr>";
}

?>
</table>
</center>