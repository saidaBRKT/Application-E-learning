<?php

try {
  $con = new PDO( 'mysql:host=localhost;dbname=e_classe_db;charset=utf8','root','');  
  }
catch(Exception $e) {
    echo 'ERROR ' .$e->getMessage();
  }
  if(isset($_POST['save']))
  { 
       $username=$_POST['username'];
       $password=$_POST['password'];
       try {
             $req =$con->prepare('INSERT INTO comptes(username,password) VALUES (?,?);');   
             $req -> execute(array($username,$password));
            
       } catch (Exeption $e) {
          echo 'ERROR ' .$e->getMessage();
       }
  
       header("Location:../index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  
    
    <title>sign up</title>
</head>
<body>
    <main class="container-fluid mt-0 mt-auto ">
        <div class=" cont row d-flex justify-content-center ">
            <div class="col-12 col-sm-6 col-md-4 ">
                <form class="bg-white p-3 h-100 h-sm-70" method="post">
                    <div class="mb-5 mx-5" >
                    <a class="navbar-brand text-dark border-start border-3 border-info px-2 mx-auto fs-4" href="#">E-Classe</a>
                     </div>
                     <h6 class="text-center fw-bold">SIGN UP</h6>
                     <div class="mb-2">
                      <label for="uname" class="form-label text-secondary">Username :</label>
                      <input type="text" class="form-control" id="uname" name="username" placeholder="Enter your first name">
                    </div>
                    <div class="mb-4 mb-sm-2">
                      <label for="Password" class="form-label text-secondary" >Password :</label>
                      <input type="password" class="form-control" name="password" id="Password" placeholder="Enter your password">
                    </div>

                    <!--
                    <div class="mb-2">
                      <label for="confirmpass" class="form-label text-secondary">Confirm password :</label>
                      <input type="password" class="form-control"name="Cpassword" id="confirmpass" placeholder="Enter your last name">
                    </div>
                     -->
                              
                    <button class="btn btn-info text-white w-100" name="save">SIGN UP</button>
                  </form>
            </div>
        </div>
    </main>
    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>





