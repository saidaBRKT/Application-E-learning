<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
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
        
        <div class="container-fluid px-3 mt-4">
<div class="w-100 d-flex flex-column justify-content-center align-items-center">
<form class="w-50">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name">
 </div>
 <div class="mb-3">
    <label for="mail" class="form-label">Email</label>
    <input type="email" class="form-control" id="mail">
 </div>
 <div class="mb-3">
    <label for="num" class="form-label">Number</label>
    <input type="number" class="form-control" id="num">
 </div>
 <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="number" class="form-control" id="phone">
</div>
 <div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input type="date" class="form-control" id="date">
 </div>
  
  
  <button type="submit" class="btn btn-info w-50 d-flex justify-content-center  align-items-center">Ajouter</button>
</form>
</div>
</div>
</main>
</body>
</html>