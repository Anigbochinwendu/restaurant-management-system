<?php
// if(isset($_COOKIE["coo"])) $user=$_COOKIE["coo"];
// else header("location:index.php");
include("fooddbconnect.php");
//Edith page code
$chi=$_GET['id'];
$sql="SELECT * FROM menu where id='$chi'";
$result=mysqli_query($connect,$sql) or die("Could Not Select".mysqli_error($connect));
if(mysqli_num_rows($result)){
  while($row=mysqli_fetch_assoc($result))
  {
    $id=$row["id"];
    $author=$row["author"];
    $title=$row["title"];
    $body=$row["body"];
    $date=$row["date"];
    $pic=$row["picture"];
      }
}


if(isset($_POST['submit'])){
$author=$_POST['author'];
$title=$_POST['title'];
$body=$_POST['body'];
$date=$_POST['date'];
$pic= $_FILES['picture']['name'];
$picture_hold='uploaded/'.$pic;
move_uploaded_file ($_FILES['picture'] ['tmp_name'], $picture_hold);



$insert= mysqli_query($connect, "insert into posts(author,title,body,date,picture)
                    values('$author','$title','$body','$date','$pic')") 
         or die('could not insert'.mysqli_error($connect));
                            if($insert) {echo 'successful';}


}

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

  <title>Blog Form</title>

  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
  <?php
include("adminheader.php");
include("adsidebar.php");
  ?>
    

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Form Validation</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-files-o"></i>Form Validation</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form validations
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Author <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="author" value="<?php echo $author; ?>" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Title <span class="required">*</span></label>
                      <div class="col-lg-10">
                      <input class="form-control " id="cemail" type="text" name="title" value="<?php echo $title; ?>" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Body <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="body" value="<?php echo $body; ?>"  required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Date <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="date" value="<?php echo $date; ?>"  required />
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">  Select image to upload: <span class="required">*</span></label>
                        <input type="file" name="picture" value="<?php echo $pic; ?>" id="picture">
                                             
                      </div>

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <input type="submit" name="submit" value="Submit">
                        <!--<button class="btn btn-primary" type="submit" name="submit">Submit</button>
                        <button class="btn btn-default" type="button">Cancel</button>-->
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
        
        
      </section>
    </section>
    <!--main content end-->
  
  </section>
  <!-- container section end -->

  