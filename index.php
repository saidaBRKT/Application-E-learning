<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "e_classe_db";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if($_SERVER['REQUEST_METHOD'] === 'POST')  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM comptes WHERE username = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                    if($_POST['check'] === "on"){
                         setcookie('username', $_POST["username"], time() + 3600 * 24);
                         setcookie('password', $_POST["password"], time() + 3600 * 24);
                    }else{
                         setcookie('username');
                         setcookie('password');
                    }

                     $_SESSION["username"] = $_POST["username"];  
                     header("location:php/home.php");  
                }  
                else  
                {  
                     $message = 'Wrong Data';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  
    
    <title>login page</title>
</head>
<body>
    <main class="container-fluid mt-0 mt-auto ">
        <div class=" cont row d-flex justify-content-center ">
            <div class="col-12 col-sm-6 col-md-4 ">
                <form class="bg-white p-3 h-100 h-sm-70 " action="index.php"method="post" >
                    <div class="mb-5 mx-5" >
                    <a class="navbar-brand text-dark border-start border-3 border-info px-2 mx-auto fs-4" href="#">E-Classe</a>
                     </div>
                     <h6 class="text-center fw-bold">SIGN IN</h6>
                     <p class="text-center mb-2">Enter your credentials to access your account</p>
                     <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?> 
                     <div class="mb-2">
                      <label for="user" class="form-label text-secondary">Username</label>
                      <input type="text" class="form-control" name="username" value ="<?php echo $_COOKIE['username'] ?? "" ;?>" placeholder="Enter your username">
                    </div>
                    <div class="mb-4 mb-sm-2">
                      <label for="Password" class="form-label text-secondary"  >Password</label>
                      <input type="password" class="form-control" id="Password"name="password" value ="<?php echo $_COOKIE['password'] ?? "" ;?>"   placeholder="Enter your password">
                    </div>  
                    <div class="form-check form-switch mb-4 mb-sm-2">
                         <input  name="check" class="form-check-input" type="checkbox" id="ckeck">
                         <label class="form-check-label" for="ckeck">Remember me</label>
                    </div>       
                    <button type="submit" class="btn btn-info text-white w-100" name="login">SIGN IN</button>
                    
                    <p class="text-center mt-2">Forgot your password?<a href="#" class="text-info">Reset Password</a></p>
                     <a href="php/sign-up.php" class="text-info">sign up</a>
                   
                    
                  </form>
            </div>
        </div>
    </main>
    <?php 
   
    ?>
    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>





