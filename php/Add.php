<?php
include 'operations.php';
include 'headHTML.php';
session_start();
require_once('./library/library.php');
if(!isLoged()){
    header('location: ./../index.php');
    die();
}
?>

    <title>Add</title>
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

                     <h6 class="text-center fw-bold">Add students</h6>
                     <div class="mb-2 mt-5">
                      <label  class="form-label text-secondary">Name :</label>
                      <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                     <div class="mb-2">
                      <label class="form-label text-secondary">Email :</label>
                      <input type="email" class="form-control" name="email"placeholder="Enter your email" required>
                    </div>
                    <div class="mb-2">
                      <label  class="form-label text-secondary">Phone</label>
                      <input type="number" class="form-control"  name="phone" placeholder="Phone" required>
                    </div>
                    <div class="mb-2">
                      <label  class="form-label text-secondary">Number</label>
                      <input type="number" class="form-control"  name="number" placeholder="Number" required>
                    </div>
                    <div class="mb-4 mb-sm-2">
                      <label  class="form-label text-secondary" >Date</label>
                      <input type="date" class="form-control" name="date" placeholder="Enter your password">
                    </div>         
                    <button class="btn btn-info text-white w-100" name="add">Add</button>
              
                  </form>
                  </div>
        
</div>
</main>
</body>
</html>