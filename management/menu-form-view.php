<?php
if(isset($_COOKIE["coo"])) $user1=$_COOKIE["coo"];
else header("location:index.php");
include("fooddbconnect.php");

//get the transfered id
$c= $_GET['id'];

//select on tha particular one
$sql = "SELECT * FROM menu where id='$c'";
        $result = mysqli_query($connect, $sql) or 
        die ("Could Not Select menu".mysqli_error($connect));

		if (mysqli_num_rows($result)){
			while ($row = mysqli_fetch_assoc($result))

			{
                $id= $row['id'];
                $name=$row['name'];
                $cat=$row['category'];
                $price=$row['price'];
                $quantity=$row['quantity'];
                $details=$row['details'];
                $pic= $row['picture'];
             		
			}
		}

			


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<title></title>
 </head>
<body>
<table border="", width="100%">
	<tr>
		
    <td width=150px>Food Name</td>
    <td width=100px>category</td>
    <td width=100px>price</td>
    <td width=50px>quantity</td>
    <td width=300px>details</td>
    <td width=150px>picture</td>
		
	</tr>
<tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $cat; ?></td>
    <td><?php echo $price; ?></td>
    <td><?php echo $quantity; ?></td>
    <td><?php echo $details; ?></td>
    <td><?php echo $pic; ?></td>
</tr>

</table>
</body>
</html>