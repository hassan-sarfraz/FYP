<!--<form name="myform">
    <input id="priceid" type="text" name="price" placeholder="price" />
    <input id="qtyid" type="text" name="qty" placeholder="quantity" onblur="calculate();"/>
    <input id="amountid" type="text" name="amount" disabled=""/>
    <input type="submit" name="submit" value="submit"/>
</form>
<script>
function calculate(){
    var price=document.getElementById("priceid").value;
    var qty=document.getElementById("qtyid").value;
    var pricecheck=parseInt(price);
    var qtycheck=parseInt(qty);
   var amount=pricecheck*qtycheck;
document.forms['myform']['amount'].value=amount;
}
</script>-->
<html>
    <body>
<form method="post" enctype="multipart/form-data">
<?php
include './connection.php';
$query = "select * from pro";
$result= mysqli_query($link, $query);
while($row = mysqli_fetch_array($result))
{
    ?>  
<img style="height: 270; width: 270;" src="<?php $row["image"];?>" class="img-responsive" />
    <?php
}

?>
</form>
        </body>
</html>