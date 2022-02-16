<?php
session_start();
require_once('./library/library.php');
if(!isLoged()){
    header('location: ./../index.php');
    die();
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_classe_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);


if(isset($_GET['editt'])){
    $id=$_GET['editt'];
    $result=$conn->query("SELECT count(*) FROM courses where id=$id ") or die(mysqli->error());
    if($result)
    {
        $req=$conn->query("SELECT Title,Link,Price FROM courses where id=$id ") or die(mysqli->error());
        $row=$req->fetch_array();
        $Title=$row['Title'];
        $Link=$row['Link'];
        $Price=$row['Price'];
    }
}

if(count($_POST)>0) {
  mysqli_query($conn,"UPDATE courses set  Title='" . $_POST['Title'] . "',Link='" . $_POST['Link'] . "', Price='" . $_POST['Price'] . "' WHERE id='" . $id . "'");
  header('Location: courses.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Course</title>
    <link rel="stylesheet" href="../css/style_total.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!---->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
<main class="container-fluid bg-light">
        <div class="row flex-nowrap">
        <?php include 'sidebar.php' ?>

        <div class="col col-10 col-md-9 col-xl-10 px-0 bg-light">
        <?php include 'header.php' ?>
           
<div class="container-fluid px-3 mt-4 ">
            <div class=" d-flex justify-content-center align-item-center">
                <form action="" method="POST" class=" w-50">

                     <h6 class="text-center fw-bold">Update Courses</h6>
                     <div class="mb-2">
                      <label  class="form-label text-secondary">Title :</label>
                      <input type="text" class="form-control" name="Title" placeholder="Title" value="<?php echo $Title ?>">
                    </div>
                     <div class="mb-2">
                      <label class="form-label text-secondary">Link :</label>
                      <input type="text" class="form-control" name="Link"placeholder="Enter your Link" value="<?php echo $Link ?>">
                    </div>
                    <div class="mb-2">
                      <label  class="form-label text-secondary">Price</label>
                      <input type="number" class="form-control"  name="Price" placeholder="Price" value="<?php echo $Price ?>">
                    </div>
        
                    <button class="btn btn-info text-white w-100" name="update">Update</button>
              
                  </form>
                  </div>
        </div>
        </div>
    </main>
</body>
</html>