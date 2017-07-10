 <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.4.js" type="text/javascript"></script>
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        
        <script> $(document).ready(function() {
    $('#example').DataTable({"lengthMenu":[[4],[4,"All"]]});
        } );</script>
<center>   
    <label class="label label-primary" style="font-size: 20px;">Display Customer Account</label><br><br>
    <a  class="btn btn-success" href="home.php?pg=ica" style="margin-top: -18px; margin-left: 85.5%;">Add Customer Account</a>
    <table id="example" class="table table-bordered table-condensed table-striped table-responsive table-hover" style="width: 100%">
    <thead>
    <th>Account Id</th>
    <th>Start Date</th>
    <th>Customer Name</th>
    <th>Total Amount</th>
    <th>Amount Received</th>
    <th>Remaining Amount</th>
    
    <th>Per Month Installment</th>
    <th>Remaining installments</th>
    
<!--    <th>Detail</th>-->
    
    <th>Action</th>
    </thead>
<?php
include 'connection.php';
$query = "select * from customer_account";
$result = mysqli_query($link, $query);
$count = 0;
foreach ($result as $value)
{
    $count = $count+1;
    echo '<tr><td>'.$value['account_id'].'</td><td>'.$value['strt_date'].'</td><td>'.$value['cus_name'].'</td><td>'.$value['total_amount'].'</td><td>'.$value['amount_recieved'].'</td><td>'.$value['remaining'].'</td><td>'.$value['pminstallment'].'</td><td style="width:50px;">'.$value['rem_inst'].'</td>';

    echo "<td><a class='btn btn-danger' href='home.php?pg=delca&account_id=".$value['account_id']."'>Delete</a> | <a class='btn btn-info' href='home.php?pg=eca&accountid=".$value['account_id']."'>Edit</a></td></tr>";
}

?>
</table>
</center>