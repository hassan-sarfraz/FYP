 <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.4.js" type="text/javascript"></script>
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        
        <script> $(document).ready(function() {
    $('#example').DataTable({"lengthMenu":[[4],[4,"All"]]});
        } );</script>
<center>   
    <label class="label label-primary" style="font-size: 20px;">Display Employee</label><br><br>
    <a  class="btn btn-success" href="home.php?pg=iemp" style="margin-top: -18px; margin-left: 90%;">Add Employee</a>
    <table id="example" class="table table-bordered table-condensed table-striped table-responsive table-hover" style="width: 100%">
    <thead>
    <th>Employee Id</th>
    <th>Employee Name</th>
    <th>Employee Address</th>
    <th>Employee Mobile No</th>
    <th>Employee CNIC</th>
    <th>Action</th>
    </thead>
<?php
include 'connection.php';
$query = "select * from employee";
$result = mysqli_query($link, $query);
$code = 0;
foreach ($result as $value)
{
    $code = $code+1;
    echo '<tr><td>'.$code.'</td><td>'.$value['emp_name'].'</td><td>'.$value['emp_address'].'</td><td>'.$value['emp_contact'].'</td><td>'.$value['emp_cnic'].'</td>';
    echo "<td><a class='btn btn-danger' href='home.php?pg=delemp&emp_id=".$value['emp_id']."'>Delete</a> | <a class='btn btn-info' href='home.php?pg=eemp&empid=".$value['emp_id']."'>Edit</a></td></tr>";
}

?>
</table>
</center>