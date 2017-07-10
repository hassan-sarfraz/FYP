<body onload="getpminstallment();">
<?php
include './connection.php';
$modeid = $_REQUEST['modeid'];
$date = $_REQUEST['date'];
$cusid = $_REQUEST['cusid'];
$modeid = $_REQUEST['modeid'];
$tamountwm = $_REQUEST['tamountwm'];
$advamount = $_REQUEST['advamount'];
$remaining = $_REQUEST['ramaining'];
$date = $_REQUEST['date'];
//echo $advamount . $cusid . $modeid . $tamount . $remaining . $date;
//die;
$querymode = "select * from installment_mode where mode_id=$modeid";
$resultmode = mysqli_query($link, $querymode);
foreach ($resultmode as $valuemode)
{
    $months = $valuemode['months'];
}
$query = "select * from customer where cus_id='$cusid'";
$result = mysqli_query($link, $query);
foreach ($result as $value)
{
    $cusname = $value['cus_name'];
}
?>
<script>
    function getpminstallment() {

        var months = document.getElementById("months").value;
//        var tammountwm = document.getElementById("tammountwm").value;
//        var advamount = document.getElementById("advamount").value;
//        var remaining=tamountwm-advamount;
//        alert(remaining);
        var remaining = document.getElementById("remaining").value;
        pminstallment = Math.round(remaining / months);
        document.forms['isdform']['pminstallment'].value = pminstallment;
        document.forms['isdform']['reminst'].value = months;
    }
</script>
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">ADD CUSTOMER ACCOUNT</label></h3><br>
    <form id="isdform" name="insert_customer_account_form" method="post" action="insert_customer_account.php" style="width: 100%;">
        <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
            <input type="hidden" name="date" value="<?php echo $date; ?>"/>
            <input type="hidden" name="reminst"/>
            <input type="hidden" name="months" id="months" value="<?php echo $months; ?>"/>
            <input type="hidden" name="advamount" id="advamount" value="<?php echo $advamount; ?>"/>
            <input type="hidden" name="tamountwm" id="tammountwm" value="<?php echo $tamountwm; ?>"/>
            <tr>
                <td style="width:40%"><label>Customer Name:</label></td>
                <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="cusname" value="<?php echo $cusname ?>"></td>
            </tr>
            <tr>
                <td style="width:40%"><label>TOTAL AMOUNT:</label></td>
                <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="tamount" value="<?php echo $tamountwm ?>"></td>
            </tr>
            <tr>
                <td  style="width:40%"><label>AMOUNT RECEIVED:</label></td>
                <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="advamount" value="<?php echo $advamount ?>"></td>
            </tr>
            <tr>
                <td  style="width:40%"><label>REMAINING Amount</label></td>
                <td><input class="form-control" style="width: 100%; text-align: center;" type="text" id="remaining" name="remaining" value="<?php echo $remaining ?>"></td>
            </tr>
            <tr>
                <td  style="width:40%"><label>Per Month Installment</label></td>
                <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="pminstallment" id="pminstallment"></td>
            </tr>
<!--            <tr>
                <td  style="width:40%"><label>CUSTOMER NAME:</label></td>
                <td><select class="form-control" style="width: 100%;" name="cusaccount">
                        <option>---Select Customer's Name---</option>
            <?php
//                        include 'connection.php';
//                        $query = "select * from customer";
//                        $result = mysqli_query($link, $query);
//                        while ($row = mysqli_fetch_array($result))
//                        {
//                            $cusid = $row['cus_id'];
//                            $cusname = $row['cus_name'];
            ?>
                            <option value="<?php // echo $cusid;  ?>"><?php // echo $cusname; ?>
                            </option>
            <?php
//                        }
            ?>

                    </select></td>
            </tr> -->
            <tr>
                <td style="border: 0px;"></td>
                <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="Add customer account" style=" width: 55%"></td>
            </tr>
        </table>
    </form>
</center>
</body>