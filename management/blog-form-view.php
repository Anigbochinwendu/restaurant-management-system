<?php
if(isset($_COOKIE["coo"])) $user1=$_COOKIE["coo"];
else header("location:index.php");
include("fooddbconnect.php");

//get the transfered id
$c= $_GET['id'];

//select on tha particular one
$sql = "SELECT * FROM posts where id='$c'";
        $result = mysqli_query($connect, $sql) or 
        die ("Could Not Select menu".mysqli_error($connect));

		if (mysqli_num_rows($result)){
			while ($row = mysqli_fetch_assoc($result))

			{
                $id= $row['id'];
                $author=$row['author'];
                $title=$row['title'];
                $body=$row['body'];
                $date=$row['date'];
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
		
    <td width=150px>Author</td>
    <td width=200px>Title</td>
    <td width=300px>Body</td>
    <td width=50px>Date</td>
    <td width=100px>picture</td>
		
	</tr>
<tr>
    <td><?php echo $author; ?></td>
    <td><?php echo $title; ?></td>
    <td><?php echo $body; ?></td>
    <td><?php echo $date; ?></td>
    <td><?php echo $pic; ?></td>
</tr>

</table>
</body>
</html>
