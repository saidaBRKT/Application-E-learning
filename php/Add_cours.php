<?php
include 'operations.php';
include 'headHTML.php'; 
?>

   <title>Add Course</title>
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
<h6 class="text-center fw-bold">Add Courses</h6>
<div class="mb-2">
 <label  class="form-label text-secondary">Title :</label>
 <input type="text" class="form-control" name="Title" placeholder="Title" >
</div>
<div class="mb-2">
 <label class="form-label text-secondary">Link :</label>
 <input type="text" class="form-control" name="Link"placeholder="Enter your Link" >
</div>
<div class="mb-2">
 <label  class="form-label text-secondary">Price</label>
 <input type="number" class="form-control"  name="Price" placeholder="Price">
</div>
<button class="btn btn-info text-white w-100" name="addc">Add</button>
</form>
</div>
</div>
</div>
</main>
</body>
</html>