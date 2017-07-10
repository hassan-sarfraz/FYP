 <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.4.js" type="text/javascript"></script>
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        
        <script> $(document).ready(function() {
    $('#example').DataTable({"lengthMenu":[[6],[6,"All"]]});
        } );</script>

<center>   
    <label class="label label-primary" style="font-size: 20px;">Display Witness</label><br><br>
    <a  class="btn btn-success" href="main_home_of_user.php?pg=iwit" style="margin-top: -18px; margin-left: 91%;">Add Witness</a>
    <table id="example" class="table table-bordered table-condensed table-striped table-responsive table-hover" style="width: 100%">
    <thead>
    <th>Witness Id</th>
    <th>Witness Name</th>
    <th>Witness Profession</th>
    <th>Witness Address</th>
    <th>Witness Mobile No</th>
    <th>Witness CNIC</th>
    <th>Customer Name</th>
    <!--<th>Action</th>-->
    </thead>
    <?php
    include './connection.php';
    $query = "select * from witness,customer where witness.cus_id=customer.cus_id";
    $result = mysqli_query($link, $query);
    $count=0;
    foreach ($result as $value)
    {
        $count=$count+1;
        echo '<tr><td>'.$value['w_id'].'</td><td>'.$value['w_name'].'</td><td>'.$value['w_profession'].'</td><td>'.$value['w_address'].'</td><td>'.$value['w_contact'].'</td><td>'.$value['w_cnic'].'</td><td>'.$value['cus_name'].'</td>';
//        echo "<td><a class='btn btn-danger' href = 'home.php?pg=delwit&w_id=".$value['w_id']."'>Delete</a> | <a class='btn btn-info' href='home.php?pg=ewit&s=".$value['w_id']."'>Edit</a></td></tr>";
    }
    
    ?>
</table>
</center>