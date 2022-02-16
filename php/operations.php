<?php
// ----------------------   CONNEXION    -------------------------
function connexion()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "e_classe_db";
    $conn = new mysqli($servername, $username, $password,$dbname);
    return $conn;
}
$conn=connexion();
// --------------------- Read / Delete  Student  --------------------

$res=$conn->query("SELECT * FROM students") or die(mysqli->error);

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $conn->query("DELETE FROM students where id=$id ") or die(mysqli->error);
}
//----------------------      Create Student   -----------------------------
if(isset($_POST['add'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $number=$_POST['number'];
    $date=$_POST['date'];
    
    $conn->query("INSERT INTO students(Name,email,phone,number,date) values('$name','$email','$phone','$number','$date') ") or die(mysqli->error);
    header('Location: students.php');
    }
//----------------------      Update Student    -----------------------------
    
if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $rslt=$conn->query("SELECT count(*) FROM students where id=$id ") or die(mysqli->error());
    if($rslt)
    {
        $req=$conn->query("SELECT Name,number,phone,email,date FROM students where id=$id ") or die(mysqli->error());
        $row=$req->fetch_array();
        $name=$row['Name'];
        $number=$row['number'];
        $phone=$row['phone'];
        $email=$row['email'];
        $date=$row['date'];
    }
}

if(count($_POST)>0) {
  mysqli_query($conn,"UPDATE students set  name='" . $_POST['name'] . "', email='" . $_POST['email'] . "' ,phone='" . $_POST['phone'] . "',number='".$_POST['number']. "' ,date='" . $_POST['date'] . "' WHERE id='" . $id . "'");
  header('Location: students.php');
  }
// ---------------------   Read-payments  ---------------------------

 $result=$conn->query("SELECT * FROM payments") or die(mysqli->error);

 if(isset($_GET['view'])){
  $id=$_GET['view'];
  $req=$conn->query("SELECT count(*) FROM payments where id=$id ") or die(mysqli->error());
  if($req)
  {
      $req=$conn->query("SELECT * FROM payments where id=$id ") or die(mysqli->error());
      $row=$req->fetch_array();
      $name=$row['Na_me'];
      $payment=$row['Payment_Schedule'];
      $Number=$row['Bil_Number'];
      $amount=$row['Amount_Paid'];
      $balance=$row['Balance'];
      $date=$row['da_te'];

  }
}
// --------------------- Read / Delete  Cours  ---------------------------
$reqC=$conn->query("SELECT * FROM courses") or die(mysqli->error);

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $conn->query("DELETE FROM courses where id=$id ") or die(mysqli->error);
}

//----------------------      Create Cours   -----------------------------

if(isset($_POST['addc'])){
    $Title=$_POST['Title'];
    $Link=$_POST['Link'];
    $Price=$_POST['Price'];
    $conn->query("INSERT INTO courses(Title,Link,Price) values('$Title','$Link','$Price') ") or die(mysqli->error);
    header('Location: courses.php');
    }
$conn->close();

?>