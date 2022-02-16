<?php

$students = [
    [
        'img' => '../images/student.jpg',
        'name' => 'name1',
        'email' => 'user@email.com',
        'phone' => '7305477760',
        'number' => '1234567305477760',
        'date' => '08-Dec, 2021',
    ],
    [
        'img' => '../images/student.jpg',
        'name' => 'name2',
        'email' => 'user@email.com',
        'phone' => '7305477760',
        'number' => '1234567305477760',
        'date' => '08-Dec, 2021',
    ],
    [
        'img' => '../images/student.jpg',
        'name' => 'name3',
        'email' => 'user@email.com',
        'phone' => '7305477760',
        'number' => '1234567305477760',
        'date' => '08-Dec, 2021',
    ],
   

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
    <link rel="stylesheet" href="../css/style_total.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

                <div class="d-flex flex-wrap flex-sm-nowrap mt-3 px-3">
                    <div class="d-flex flex-grow-1 justify-content-between ">
                        <h2>Students list</h2>
                        <div class="caption d-flex align-items-center">
                            <i class="far fa-sort"></i>
                            <span class="plus d-flex d-sm-none "><i class="fas fa-plus"></i></span>
                        </div>
                    </div>
                    <DIV class="button d-none d-sm-flex rounded">
                        <button type="button" class="btn text-white w-100 ">ADD NEW STUDENT</button>
                    </DIV>
                </div>
                <hr class="mx-3">

                <div class="container-fluid px-3 mt-4">
                    <div class="table-responsive">
                        <table class="table bg-white">
                            <thead class="student bg-light border-none">
                                <tr>
                                    <th class="text-light border-none">.</th>
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
            foreach($students as $key)
            {
            echo "<tr class='ligne border-bottom border-5 border-light rounded-circle'>
            <td class='debut'><img src='{$key['img']}' alt='students'/></td>
            <td class='pt-4'>{$key['name']}</td>
            <td class='pt-4'>{$key['email']}</td>
            <td class='pt-4'>{$key['phone']}</td>
            <td class='pt-4'>{$key['number']}</td>
            <td class='pt-4'>{$key['date']}</td>
            <td class='action fin pt-4'>
            <div  class='d-flex'>
            <span title='Modifier' class='pe-3 text-primary'> <i class='fal fa-pen text-info'></i> </span>
            <span title='Modifier'> <i class='fal fa-trash text-info mx-1'></i> </span>
            </div>
            </td>
            </tr>"; 
            }
            ?>         
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
        </div>
    </main>

</body>

</html>