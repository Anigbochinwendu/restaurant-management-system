<?php
if(isset($_COOKIE["coo"])) $user1=$_COOKIE["coo"];
else header("location:index.php");
include("fooddbconnect.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Blog select</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  
<?php
require("adminheader.php");
include("adsidebar.php");
?>

	<script>
	function confirmation(){
		var result=confirm("Are you sure to Delete?");
		if(result){

			<?php if(isset($_GET['id']))
{
	$a = $_GET['id'];
	$del= "DELETE from posts where id= '$a'";
	$remove= mysqli_query($connect, $del) or die("Could not delete".mysqli_error($connect));
}?>

		}
	}
</script>
<?php

$sql = mysqli_query($connect, "SELECT * FROM posts order by id desc") 
or die ("Could Not Select menu".mysqli_error($connect));
		
		$count=0;//count is used to identify the first value

		//select whatever is in the table 
		if (mysqli_num_rows ($sql)>$count){
			while ($row = mysqli_fetch_assoc($sql))

			{
				$id[] = $row["id"];
                $author[]=$row["author"];
                $title[]=$row['title'];
                $body[]=$row['body'];
				$date[]=$row['date'];
                $pic[]= $row['picture'];
				

				$count++;
			}
		}

				$sn= 1;
?>


	
</head>
<body>
<section id="main-content">
<section class="wrapper">
<table border="1", width="100%">
	<tr>
		<td width=30px>sn</td>
        <td width=150px>Author</td>
        <td width=120px>Title</td>
        <td width=100px>Body</td>
        <td width=50px>Date</td>
        <td width=70px>picture</td>
		<td width=50px>&nbsp;</td>
		<td width=50px>&nbsp;</td>
		<td width=50px>&nbsp;</td>
	</tr>
<?php for($s=0; $s<$count; $s++) {?>
<tr>
		<td><?php echo $sn++?></td>
        <td><?php echo $author[$s] ?></td>
        <td><?php echo $title[$s] ?></td>
        <td><?php echo $body[$s] ?></td>
        <td><?php echo $date[$s] ?></td>
        <td><?php echo $pic[$s] ?></td>
		<td><a href="blog-form-edit.php?id=<?php echo $id[$s]?>"> Edit</a></td>
		<!-- <td id="del" onclick="alert('DELETED')"><a href="select.php?id= <?php echo $id[$s]?>"> Delete</td> -->
		<td id="del" onclick="return confirm('Are you sure to delete?')"><a href="blog-form-select.php?id= <?php echo $id[$s]?>"> Delete</td>
		<td><a href="blog-form-view.php?id=<?php echo $id[$s]?>">View</a></td>
	</tr>
<?php }?>
</table>
</section>
</section>
</body>
<style>
    td{
        text-align: center;
    }
    </style>
</html>
