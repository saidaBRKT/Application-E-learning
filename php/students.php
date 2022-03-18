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

<title>Students</title>
<style>
#dark{
  width: 500px;
}
#myModal, #modalDelete{
  background-color: rgba(0, 0, 0, 0.7);
  position: fixed;
  width: 100%;
  height: 100vh;
  top: 0;
  left: 0;
  z-index: 1100px;
  justify-content: center;
  align-items: center;
  display: none;
}
</style>
</head>

<body>
    <main class="container-fluid bg-light">
        <div class="row flex-nowrap">
        <?php include 'sidebar.php' ?>

        <div class="col col-10 col-md-9 col-xl-10 px-0 bg-light">
        <?php include 'header.php' ?>
        <div class="d-flex flex-wrap flex-sm-nowrap mt-3 px-3">
            <div class="d-flex flex-grow-1 justify-content-between ">
                <h2>Students list</h2>
                <div class="caption d-flex align-items-center">
                    <i class="far fa-sort"></i>
                    <span class="plus d-flex d-sm-none text-decoration-none text-white"><i class="fas fa-plus" data-bs-toggle="modal" data-bs-target="#modalAdd"></i></span>
                </div>
            </div>
            <DIV class="button d-none d-sm-flex rounded" data-bs-toggle="modal" data-bs-target="#modalAdd">
                <button type="button" class="btn text-white w-100 text-decoration-none">ADD NEW STUDENT</button>
            </DIV>
        </div>
        <hr class="mx-3">
         
<div class="container-fluid px-3 mt-4 ">
    <div class="cont-stdnt">
            <div class="table-responsive ">
                <table class="table table-borderless bg-white">
                    <thead class="student bg-light">
                        <tr>
                            <th class="text-light">.</th>
                            <th class="text-secondary">Name</th>
                            <th class="text-secondary">Email</th>
                            <th class="text-secondary">Phone</th>
                            <th class="text-secondary">Enroll Number</th>
                            <th class="text-secondary">Date of admission</th>
                            <th class="text-light">.</th>
                        </tr>
                    </thead>
                    
                   <tbody>
                    <?php
                            while($row=$res->fetch_assoc()): ?>
                            <tr class="border-light" style=" border-bottom:9px red solid;" >
                            <td class="debut "><img src="<?php echo $row['img'] ?>" alt="students"/></td>
                            <td class="pt-4"><?php echo $row['Name']?></td>
                            <td class="pt-4"><?php echo $row['email']?></td>
                            <td class="pt-4"><?php echo $row['phone']?></td>
                            <td class="pt-4"><?php echo $row['number']?></td>
                            <td class="pt-4"><?php echo $row['date']?></td>
                            <td class='action fin pt-4'>
                                <div  class="d-flex">
                                <span title="Modifier" class="pe-3 text-primary"><a href="?edit=<?php echo $row['id']; ?>"><i class="fal fa-pen text-info" data-bs-toggle="modal" data-bs-target="#myModal"></i></a> </span>
                                <span title="Supprimer" class="pe-3 text-primary"><a href="?delete=<?php echo $row['id']; ?>"><i class="fal fa-trash text-info mx-1"></i></a> </span>
                                </div>
                            </td>                    
                            </tr>
                            <?php endwhile;   ?>
                        </tbody>
                        </table>
                    </div> 
                    </div> 
                </div>
            </div>
        </div>
        <?php 
        include 'modalAdd.php';
        include 'modalUpdate.php';

        ?>
    </main>
<script>
    //update
    document.addEventListener("DOMContentLoaded", () => {
    if(window.location.href.split("?")[1]) {
      document.querySelector("#myModal").style.display = "flex"
    }
  })
  document.querySelector(".hideModel").addEventListener("click", function() {
    document.querySelector("#myModal").style.display = "none"
  })

</script>
</body>

</html>