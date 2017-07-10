<script>
    function dateMethod() {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!

        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd;
        }
        if (mm < 10) {
            mm = '0' + mm;
        }
        var today = dd + '/' + mm + '/' + yyyy;
//        document.getElementById("DATE").value = today;
//        var a = new Date();
//        var date = a.getDay() + '/' + a.getMonth() + '/' + a.getFullYear();
//        var day=a.getDay();
//        var month=a.getMonth();
//        var year=a.getFullYear();

//          alert(day);
        document.forms['isdform']['date'].value = today;
    }
    
    function getlastdate() {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!

        var yyyy = today.getFullYear();

        var x = 6; //or whatever offset
//var CurrentDate = new Date();
//alert(CurrentDate.getMonth());
        var lastdate = today.setMonth(today.getMonth() + x);
        alert(lastdate);
    }
    function calAmount() {

        var t_amountwm = document.getElementById("t_amountwm").value;
        var advancechk = document.getElementById("advanceid").value;
        var advance = parseInt(advancechk);
//                    alert(advance);

        var advance = (advance * t_amountwm) / 100;
        var remaining = t_amountwm - advance;
        var advamount = advance;
//        document.forms['isdform']['tamount'].value = tamountchck;
        document.forms['isdform']['remaining'].value = remaining;
        document.forms['isdform']['advamount'].value = advamount;
//                var tamount=tamountchck.toString();
//                alert(remaining);
//                document.getElementById("t_amount").innerHTML="vvjybybbybbj";
    }
    function caltotalamount() {
//        alert("hi");
        var qtycheck = document.getElementById("qtyid").value;
        var qty = parseInt(qtycheck);
        var pricecheck = document.getElementById("priceid").value;
        var price = parseInt(pricecheck);
        var tamountchck = qty * price;
//        alert(tamountchck);
        document.forms['isdform']['tamount'].value = tamountchck;
    }
    function caltotalamountwm() {
        var qtycheck = document.getElementById("qtyid").value;
        var mrkcheck = document.getElementById("markup").value;
        var qty = parseInt(qtycheck);
        var pricecheck = document.getElementById("priceid").value;
        var price = parseInt(pricecheck);
        var tamountchck = qty * price;
        var tamountwmchck = (mrkcheck * tamountchck) / 100;
        var finaltamountwmchck = tamountchck + tamountwmchck;
//        alert(finaltamountwmchck);
        document.forms['isdform']['tamountwm'].value = finaltamountwmchck;
    }
</script>

<body onload="dateMethod();">
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">ADD SALES DETAIL</label></h3><br>
    <form id="isdform" name="insert_sales_detail_form_u" method="post" action="insert_sales_detail_u.php" style="width: 100%;">
        <table style="width: 50%;background:#ffffff; min-height: 331px; float: left;" class="table table-bordered table-hover table-responsive">
            <tr>
                <td style="width:40%"><label>SALE DATE:</label></td>
                <td><input id="sdate" class="form-control" style="width: 100%; text-align: center;" type="tex" name="date"></td>
            </tr>
            <tr>
                <td  style="width:40%"><label>CUSTOMER NAME:</label></td>
                <td><select class="form-control" style="width: 100%" name="customer">
                        <option>---select customer's name---</option>
                        <?php
                        include './connection.php';
                        $query = "select * from customer";
                        $result = mysqli_query($link, $query);
                        while ($row = mysqli_fetch_array($result))
                        {
                            $cusid = $row['cus_id'];
                            $cusname = $row['cus_name'];
                            ?>
                            <option value="<?php echo $cusid; ?>"><?php echo $cusname; ?></option>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td  style="width:40%"><label>PRODUCT NAME:</label></td>
                <td><select id="productid" class="form-control" style="width: 100%" name="product">
                        <option>---select product's name---</option>
                        <?php
                        include './connection.php';
                        $query = "select * from product";
                        $result = mysqli_query($link, $query);
                        while ($row = mysqli_fetch_array($result))
                        {
                            $pid = $row['p_id'];
                            $pname = $row['p_name'];
                            $p_price = $row['p_price'];
                            
                            ?>
                            <option  value="<?php echo $pid; ?>"><?php echo $pname; ?></option>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <input id="priceid" type="hidden" name="price" value="<?php echo $p_price ?>"/>
            <tr>
                <td  style="width:40%"><label>QUANTITY:</label></td>
                <td><input id="qtyid" class="form-control" style="width: 100%; text-align: center;" type="text" name="qty" onblur="caltotalamount();"></td>
            </tr>
            <tr>
                <td  style="width:40%"><label>TOTAL AMOUNT:</label></td>
                <td><input id="t_amount" class="form-control" style="width: 100%; text-align: center;" type="text" name="tamount"></td>
            </tr>
            <tr>
                <td  style="width:40%"><label>MARKUP:</label></td>
                <td><select id="markup" class="form-control" style="width: 100%; text-align: center;" type="text" onblur="caltotalamountwm();" name="mrk">
                        <!--<option value="5">5%</option>-->
                        <option value="10">10%</option>
                        <!--<option value="15">15%</option>-->
                        <option value="20">20%</option>
                        <option value="30">30%</option>
                    </select></td>
            </tr>
        </table>
        <table style="width: 50%;background:#ffffff; float: right;" class="table table-bordered table-hover table-responsive">
            <tr>
                <td  style="width:40%"><label>TOTAL AMOUNT(with markup):</label></td>
                <td><input id="t_amountwm" class="form-control" style="width: 100%; text-align: center;" type="text" name="tamountwm"></td>
            </tr>

            <tr>
                <td  style="width:40%"><label>ADVANCE IN PERCENTAGE:</label></td>
                <td><select id="advanceid" class="form-control" style="width: 100%; text-align: center;" type="text" onblur="calAmount();" name="adv">
                        <option value="5">5%</option>
                        <option value="10">10%</option>
                        <option value="15">15%</option>
                        <option value="20">20%</option>
                    </select></td>
            </tr>
            <tr>
                <td  style="width:40%"><label>ADVANCE AMOUNT:</label></td>
                <td><input id="advamountid" class="form-control" style="width: 100%; text-align: center;" type="text" name="advamount"></td>
            </tr>

            <tr>


                <td  style="width:40%"><label>REMAINING AMOUNT:</label></td>
                <td><input id="remainingid" class="form-control" style="width: 100%; text-align: center;" type="text" name="remaining"></td>
            </tr>
<!--            <tr>
                <td  style="width:40%"><label>SALE DETAIL:</label></td>
                <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="detail" ></td>
            </tr>    -->
            <tr>
                <td  style="width:40%"><label>INSTALLMENT MODE TITLE:</label></td>
                <td><select class="form-control" style="width: 100%" name="mode" id="mode" onblur="getpminstallment();">
                        <option>---select installment mode title---</option>
                        <?php
                        include './connection.php';
                        $query = "select * from installment_mode";
                        $result = mysqli_query($link, $query);
                        while ($row = mysqli_fetch_array($result))
                        {
                            $modeid = $row['mode_id'];
                            $modetitle = $row['mode_title'];
                            ?>
                            <option value="<?php echo $modeid; ?>"><?php echo $modetitle; ?></option>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
             
            <tr>
                <td style="border: 0px;"></td>
                <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="Add sales detail" style=" width: 45%"></td>
            </tr>
        </table>
    </form>
</center>
</body>