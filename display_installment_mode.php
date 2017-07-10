 <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.4.js" type="text/javascript"></script>
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        
        <script> $(document).ready(function() {
    $('#example').DataTable({"lengthMenu":[[4],[4,"All"]]});
        } );</script><center>   
    <label class="label label-primary" style="font-size: 20px;">Display Installment Mode</label><br><br>
    <a  class="btn btn-success" href="home.php?pg=iim" style="margin-top: -18px; margin-left: 86%;">Add Installment Mode</a>
    <table id="example" class="table table-bordered table-condensed table-striped table-responsive table-hover" style="width: 100%">
    <thead>
    <th>Installment Mode Id</th>
    <th>Installment Mode Title</th>
    <th>Months</th>
    <th>Detail</th>
    <th>Action</th>
    </thead>

<?php
include 'connection.php';
$query = "select * from installment_mode";
$result = mysqli_query($link, $query);
$count = 0;
foreach ($result as $value)
{
    $count = $count + 1;
    echo '<tr><td>'.$count.'</td><td>'.$value['mode_title'].'</td><td>'.$value['months'].'</td><td>'.$value['detail'].'</td>';
    echo "<td><a class='btn btn-danger' href='home.php?pg=delim&mode_id=".$value['mode_id']."'>Delete</a> | <a class='btn btn-info' href='home.php?pg=eim&modeid=".$value['mode_id']."'>Edit</a></td></tr>";
}

?>
</table>
</center>
