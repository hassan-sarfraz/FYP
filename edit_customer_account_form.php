<body onload="defaultcursor();">
<?php
include './connection.php';
$accountid = $_REQUEST['accountid'];
$query = "select * from customer_account where account_id = $accountid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

//$cusid = $row['cus_id'];
//$querytest = "select * from customer where cus_id = $cusid";
//$resulttest  = mysqli_query($link, $querytest);
//$rowtest = mysqli_fetch_array($resulttest);
//$cusnametest = $rowtest['cus_name'];
?>
<script>
//        $(document).ready(function (){
//            alert("hi");
//            $("#newpay").focus();
//        });

    function updateinfo() {
//        alert("hi");
        var newpay = document.getElementById("newpay").value;
        var newpay=parseInt(newpay);
//        alert(newpay);
        
//        var reminst = document.getElementById("reminst").value;
//        var reminst=parseInt(reminst);
        var remaining = document.getElementById("remaining").value;
        var remaining = parseInt(remaining);
        var tamount = document.getElementById("tamount").value;
        var tamount = parseInt(tamount);
        var advamount = document.getElementById("advamount").value;
        var advamount = parseInt(advamount);
//        alert(advamount+ "  "+newpay);
//        var pminstallment = document.getElementById("pminstallment").value;
       
        var amountreceived=(advamount+newpay);
//        alert(amountreceived);
//        document.forms['isdform']['advamount'].value = amountreceived;
//        pminstallment = Math.round(remaining / months);
      var remaining=tamount-amountreceived;
        document.forms['isdform']['advamount'].value = amountreceived;
        document.forms['isdform']['remaining'].value = remaining;
//        alert(amountreceived+ "   "+ remaining);
    }
</script>
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">UPDATE CUSTOMER ACCOUNT</label></h3><br>
    <form id="isdform" name="edit_customer_account_form" method="post" action="edit_customer_account.php">
        <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
            <input type="hidden" name="accountid" value="<?php echo $row['account_id']; ?>"/>
            <input type="hidden" id="reminst" name="reminst" value="<?php echo $row['rem_inst']; ?>"/>
            <input class="form-control" style="width: 100%; text-align: center;" type="hidden" id="tamount" name="tamount" value="<?php echo $row['total_amount']; ?>">
            <input class="form-control" style="width: 100%; text-align: center;" type="hidden" id="remaining" name="remaining" value="<?php echo $row['remaining']; ?>">
            <tr>
                <td style="width:40%"><label>Customer Name:</label></td>
                <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="cusname" value="<?php echo $row['cus_name']; ?>"></td>
            </tr>
            <tr>
                <td  style="width:40%"><label>Amount per month:</label></td>
                <td><input class="form-control" style="width: 100%; text-align: center;" type="text" id="apm" name="apm" value="<?php echo $row['pminstallment']; ?>"></td>
            </tr>
            <tr>
                <td  style="width:40%"><label>AMOUNT RECEIVED:</label></td>
                <td><input class="form-control" style="width: 100%; text-align: center;" type="text" id="advamount" name="advamount" value="<?php echo $row['amount_recieved']; ?>"></td>
            </tr>
            <tr>
                <td  style="width:40%"><label>New Payment:</label></td>
                <td><input class="form-control" style="width: 100%; text-align: center;" type="text" id="newpay" name="newpay"></td>
            </tr>
            <tr>
                <td style="border: 0px;"></td>
                <td style="text-align: center; border: 0px;"><input class="btn btn-success" onclick="updateinfo();" type="submit" name="submit"  value="Update customer account" style=" width: 55%"></td>
            </tr>


        </table>
    </form>

</center>
</body>