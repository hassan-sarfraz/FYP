<?php
include 'connection.php';
$pname = $_REQUEST['pname'];
$pprice = $_REQUEST['pprice'];
//$pprice= number_format($pprice);
$pdetail = $_REQUEST['pdetail'];
$pcatid = $_REQUEST['pcatname'];
$brid = $_REQUEST['brand'];
 if (!is_dir("image")){
  mkdir("image");
  }
    $destpath="image/".basename($_FILES["myfile"]["name"]);
    $file_ext=pathinfo($destpath, PATHINFO_EXTENSION);
    $file_type=array('jpg','png','PNG','JPG','bmp','BMP','PNG','png','gif','GIF');
    if (round($_FILES["myfile"]["size"]/1000000)>5){
        echo "File is too large";
        exit;
    }
 else if(!in_array($file_ext, $file_type)){
        echo "File formt not supported";
        exit;
    }
 else if (file_exists($destpath)){
        echo "File already uploaded with this name, plz try another file";
        exit;
    }
 else {
    move_uploaded_file($_FILES["myfile"]["tmp_name"], $destpath);     
    
$query = "insert into product(p_name,p_price,p_detail,pcat_id,br_id,image) values('$pname','$pprice','$pdetail','$pcatid','$brid','$destpath')";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=dispro");
}
else
{
    echo mysqli_error_list($link);
}
 }
?>