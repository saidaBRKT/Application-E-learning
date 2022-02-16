<?php
session_start();
include 'operations.php';
include 'headHTML.php'; 
require_once('./library/library.php');
if(!isLoged()){
    header('location: ./../index.php');
    die();
}
?>


    <title>Courses</title>
</head>

<body>
    <main class="container-fluid bg-light">
        <div class="row flex-nowrap">
        <?php include 'sidebar.php' ?>

        <div class="col col-10 col-md-9 col-xl-10 px-0 bg-light">
        <?php include 'header.php' ?>
        <div class="d-flex flex-wrap flex-sm-nowrap mt-3 px-3">
            <div class="d-flex flex-grow-1 justify-content-between ">
                <h2>Courses list</h2>
                <div class="caption d-flex align-items-center">
                    <i class="far fa-sort"></i>
                    <span class="plus d-flex d-sm-none "><i class="fas fa-plus"></i></span>
                </div>
            </div>
            <DIV class="button d-none d-sm-flex rounded">
                <button type="button" class="btn text-white w-100 "><a href="Add_cours.php" class="text-decoration-none text-white">ADD NEW COURS</a></button>
            </DIV>
        </div>
        <hr class="mx-3">
         
<div class="container-fluid px-3 mt-4">
            <div class="table-responsive ">
                <table class="table table-borderless bg-white">
                    <thead class="student bg-light">
                        <tr>               
                            <th class="text-secondary">Title</th>
                            <th class="text-secondary">Link</th>
                            <th class="text-secondary">Price</th>
                            <th class="text-light">.</th>
                        </tr>
                    </thead>      
                    <tbody>
                    <?php
                            while($row=$reqC->fetch_assoc()): ?>
                            <tr class="border-light" style=" border-bottom:9px red solid;" >
                            <td class="pt-4"><?php echo $row['Title']?></td>
                            <td class="pt-4"><a href="<?php echo $row['Link']?>"><?php echo $row['Link']?></a></td>
                            <td class="pt-4"><?php echo $row['Price']?></td>
                            <td class='action fin pt-4'>
                                <div  class="d-flex">
                                <span title="Modifier" class="pe-3 text-primary"><a href="update_c.php?editt=<?php echo $row['id'];?>"><i class="fal fa-pen text-info"></i></a> </span>
                                <span title="Supprimer"><a href="courses.php?delete=<?php echo $row['id'];?>"><i class="fal fa-trash text-info mx-1"></i></a> </span>
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
</main>

</body>

</html>