<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "lease";
$query = "CREATE database if not exists $database";
$link = mysqli_connect($host, $user, $password);
$result = mysqli_query($link, $query);

$host = "localhost";
$user = "root";
$password = "";
$database = "lease";
$link = mysqli_connect($host, $user, $password,$database);
$table = "supplier";
$query = "create table supplier(sp_id int(100) primary key not null auto_increment,sp_name varchar(100),sp_address varchar(100),sp_contact varchar(100))";
$result = mysqli_query($link, $query);
if($result)
{
    echo 'table '.$table.' created successfully';
}
else
{
    echo 'failed to create table. '. mysqli_error($link);
}


$table = "user";
$query = "create table user(u_name varchar(100),u_pass varchar(100))";
$result = mysqli_query($link, $query);
if($result)
{
    echo 'table '.$table.' created successfully';
}
else
{
    echo 'failed to create table. '. mysqli_error($link);
}

$table = "employee";
$query = "create table employee(emp_id int(100) primary key not null auto_increment,emp_name varchar(100),emp_address varchar(100),emp_contact varchar(100),emp_cnic varchar(100))";
$result = mysqli_query($link, $query);
if($result)
{
    echo 'table '.$table.' created successfully';
}
else
{
    echo 'failed to create table. '. mysqli_error($link);
}


$table = "brand";
$query = "create table brand(br_id int(100) primary key not null auto_increment,br_name varchar(100),br_detail varchar(100))";
$result = mysqli_query($link, $query);
if($result)
{
    echo 'table '.$table.' created successfully';
}
else
{
    echo 'failed to create table. '. mysqli_error($link);
}


$table = "product_category";
$query = "create table product_category(pcat_id int(100) primary key not null auto_increment,pcat_name varchar(100))";
$result = mysqli_query($link, $query);
if($result)
{
    echo 'table '.$table.' created successfully';
}
else
{
    echo 'failed to create table. '. mysqli_error($link);
}


$table = "product";
$query = "create table product(p_id int(100) primary key not null auto_increment,p_name varchar(100),p_price varchar(100),p_detail varchar(100),pcat_id int(100),foreign key(pcat_id) references product_category(pcat_id),br_id int(100),foreign key(br_id) references brand(br_id))";
$result = mysqli_query($link, $query);
if($result)
{
    echo 'table '.$table.' created successfully';
}
else
{
    echo 'failed to create table. '. mysqli_error($link);
}


$table = "purchase_order";
$query = "create table purchase_order(order_no int(100) primary key not null auto_increment,date varchar(100),p_id int(100),foreign key(p_id) references product(p_id),sp_id int(100),foreign key(sp_id) references supplier(sp_id))";
$result = mysqli_query($link, $query);
if($result)
{
    echo 'table '.$table.' created successfully';
}
else
{
    echo ' failed to create table. '. mysqli_error($link);
}


$table = "purchase_detail";
$query = "create table purchase_detail(pd_id int(100) primary key not null auto_increment,quantity varchar(100),date varchar(100),detail varchar(100),order_no int(100),foreign key(order_no) references purchase_order(order_no),p_id int(100),foreign key(p_id) references product(p_id))";
$result = mysqli_query($link, $query);
if($result)
{
    echo 'table '.$table.' created successfully';
}
else
{
    echo 'failed to create table. '. mysqli_error($link);
}


$table = "stock";
$query = "create table stock(stk_id int(100) primary key not null auto_increment,quantity varchar(100),price varchar(100),detail varchar(100),p_id int(100),foreign key(p_id) references product(p_id))";
$result = mysqli_query($link, $query);
if($result)
{
    echo 'table '.$table.' created successfully';
}
else
{
    echo 'failed to create table. '. mysqli_error($link);
}


$table = "customer";
$query = "create table customer(cus_id int(100) primary key not null auto_increment,cus_name varchar(100),cus_address varchar(100),cus_contact varchar(100),cus_cnic varchar(100),cus_code varchar(100))";
$result = mysqli_query($link, $query);
if($result)
{
    echo 'table '.$table.' created successfully';
}
else
{
    echo 'failed to create table. '. mysqli_error($link);
}


$table = "installment_mode";
$query = "create table installment_mode(mode_id int(100) primary key not null auto_increment,mode_title varchar(100),months varchar(100),detail varchar(100))";
$result = mysqli_query($link, $query);
if($result)
{
    echo 'table '.$table.' created successfully';
}
else
{
    echo 'failed to create table. '. mysqli_error($link);
}


$table = "sales_detail";
$query = "create table sales_detail(sd_id int(100) primary key not null auto_increment,date varchar(100),detail varchar(100),cus_id int(100),foreign key(cus_id) references customer(cus_id),p_id int(100),foreign key(p_id) references product(p_id),mode_id int(100),foreign key(mode_id) references installment_mode(mode_id))";
$result = mysqli_query($link, $query);
if($result)
{
    echo 'table '.$table.' created successfully';
}
else
{
    echo 'failed to create table. '. mysqli_error($link);
}


$table = "customer_account";
$query = "create table customer_account(account_id int(100) primary key not null auto_increment,total_amount varchar(100),amount_recieved varchar(100),detail varchar(100),cus_id int(100),foreign key(cus_id) references customer(cus_id))";
$result = mysqli_query($link, $query);
if($result)
{
    echo 'table '.$table.' created successfully';
}
else
{
    echo 'failed to create table. '. mysqli_error($link);
}


$table = "witness";
$query = "create table witness(w_id int(100) primary key not null auto_increment,w_name varchar(100),w_profession varchar(100),w_address varchar(100),w_contact varchar(100),w_cnic varchar(100),cus_id int(100),foreign key(cus_id) references customer(cus_id))";
$result = mysqli_query($link, $query);
if($result)
{
    echo 'table '.$table.' created successfully';
}
else
{
    echo 'failed to create table. '. mysqli_error($link);
}
?>