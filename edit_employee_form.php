<?php
include './connection.php';
$empid = $_REQUEST['empid'];
$query = "select * from employee where emp_id=$empid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
?>
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">UPDATE EMPLOYEE</label></h3><br>
<form name="edit_employee_form" method="post" action="edit_employee.php">
    <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
        <input type="hidden" name="empid" value="<?php echo $row['emp_id'];?>"/>
        <tr>
            <td><label>EMPLOYEE NAME:</label></td>
            <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="empname" value="<?php echo $row['emp_name'];?>"/></td>
        </tr>
        <tr>
            <td><label>EMPLOYEE ADDRESS:</label></td>
            <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="empaddress" value="<?php echo $row['emp_address'];?>"/></td>
        </tr>
        <tr>
            <td><label>EMPLOYEE MOBILE NO:</label></td>
            <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="empcontact" value="<?php echo $row['emp_contact'];?>"/></td>
        </tr>
        <tr>
            <td><label>EMPLOYEE CNIC:</label></td>
            <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="empcnic" value="<?php echo $row['emp_cnic'];?>"/></td>
        </tr>
        <tr>
        <td style="border: 0px;"></td>
        <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="Update employee" style=" width: 45%"></td>
        </tr>
    
    
    
    </table>
</form>
</center>