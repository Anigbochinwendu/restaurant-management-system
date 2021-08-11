<?php
include("fooddbconnect.php");

$query1= "create table if not exists admin(id int primary key not null auto_increment,
          username varchar(225) not null,
          password varchar (225) not null
            )";
mysqli_query($connect, "$query1") or die('could not create admin' .mysqli_error($connect));
mysqli_query($connect, "insert into admin values(1,'admin', 'admin123')");

    if($query1){echo "successfull.</br>";}




$query1= "create table if not exists menu(id int primary key not null auto_increment,
          name varchar(225) not null,
          category varchar(225) not null,
          price varchar(225) not null,
          quantity varchar(225) not null,
          details varchar(355) not null,
          picture varchar(225) not null
          )";
mysqli_query($connect, "$query1") or die('could not create menu' .mysqli_error($connect));

    if($query1){echo "successfull.</br>";}




$query1= "create table if not exists posts(id int primary key not null auto_increment,
          author text not null,
          title text not null,
          body text not null,
          picture varchar(225) not null,
          date varchar(225) not null)";
mysqli_query($connect, "$query1") or die('could not create news' .mysqli_error($connect));

    if($query1){echo "successfull.</br>";}


// $query1= "create table if not exists fpractice(id int primary key not null auto_increment,
//           title text not null,
//           stitle text not null,
//           content text not null,
//           spicture varchar(225) not null,
//           picture varchar(225) not null
//           )";
// mysqli_query($connect, "$query1") or die('could not create fpractice' .mysqli_error($connect));

//     if($query1){echo "successfull.</br>";}
   
// $query1= "create table if not exists users(id int primary key not null auto_increment,
//     fullname varchar(225) not null,
//     email varchar(225) not null,
//     address text not null,
//     phone_number varchar(225) not null,
//     username varchar(225) not null,
//     password varchar(255) not null,
//     created_at timestamp not null )";
// mysqli_query($connect, "$query1") or die('could not create register' .mysqli_error($connect));

// if($query1){echo "successfull.</br>";}

$query1= "create table if not exists customers(id int primary key not null auto_increment,
          first_name varchar(225) not null, 
          last_name varchar(225) not null,
          email varchar(225) not null,
          phone_number varchar(225) not null,
          address text not null,
          created datetime not null,
          modified datetime not null,
          status enum('Pending','Completed','Cancelled') not null
          )";
mysqli_query($connect, "$query1") or die('could not create customers' .mysqli_error($connect));

    if($query1){echo "successfull.</br>";}


 $query1= "create table if not exists orders(id int primary key not null auto_increment,
    customer_id varchar(225) not null,
    grand_total float(10,2) not null,
    created datetime  not null,
    status enum('Pending','Completed','Cancelled') not null,
    key customer_id (customer_id)
    
    )";
mysqli_query($connect, "$query1") or die('could not create orders' .mysqli_error($connect));

if($query1){echo "successfull.</br>";}


$query1= "create table if not exists order_items(id int primary key not null auto_increment,
    order_id varchar(225) not null,
    menu_id varchar(225) not null,
    quantity int(5) not null,
    KEY order_id (order_id)
    )";
mysqli_query($connect, "$query1") or die('could not create order_items' .mysqli_error($connect));

if($query1){echo "successfull.</br>";}



// $query1= "create table if not exists comments(id int primary key not null auto_increment,
//     user_id int(11)  not null,
//     post_id int(11)  not null,
//     body text not null,
//     created_at timestamp not null,    
//     updated_at timestamp not null
//     )";
// mysqli_query($connect, "$query1") or die('could not create comments' .mysqli_error($connect));

// if($query1){echo "successfull.</br>";}


// $query1= "create table if not exists replies(id int primary key not null auto_increment,
//     user_id int(11)  not null,
//     comment_id int(11)  not null,
//     body text not null,
//     created_at timestamp not null, 
//     updated_at timestamp not null
//     )";
// mysqli_query($connect, "$query1") or die('could not create replies' .mysqli_error($connect));

// if($query1){echo "successfull.</br>";}

// $query1= "create table if not exists payments(id int primary key not null auto_increment,
//     txnid varchar(20) NOT NULL,
//     payment_amount decimal(7,2) NOT NULL,
//     payment_status varchar(25) NOT NULL,
//     itemid varchar(25) NOT NULL,
//     createdtime datetime NOT NULL )";
//     mysqli_query($connect, "$query1") or die('could not create payments' .mysqli_error($connect));
    
//     if($query1){echo "successfull.</br>";}
    


?>


