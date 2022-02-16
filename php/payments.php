<?php

$payments = [
    [
        'Name' => 'Karthi1',
        'Payment schdule' => 'First',
        'Bill Number' => '00012223',
        'Amount Paid' => 'DHS 100.000',
        'Balance' => 'DHS 100.000',
        'Date' => '05-Jan-2022',
    ],
    [
        'Name' => 'Karthi2',
        'Payment schdule' => 'First',
        'Bill Number' => '00012223',
        'Amount Paid' => 'DHS 100.000',
        'Balance' => 'DHS 100.000',
        'Date' => '05-Jan-2022',
    ],
    [
        'Name' => 'Karthi3',
        'Payment schdule' => 'First',
        'Bill Number' => '00012223',
        'Amount Paid' => 'DHS 100.000',
        'Balance' => 'DHS 100.000',
        'Date' => '05-Jan-2022',
    ],
    [
        'Name' => 'Karthi4',
        'Payment schdule' => 'First',
        'Bill Number' => '00012223',
        'Amount Paid' => 'DHS 100.000',
        'Balance' => 'DHS 100.000',
        'Date' => '05-Jan-2022',
    ],
];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
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
                        <h2>Payment Details</h2>
                        <div class="caption d-flex align-items-center">
                            <i class="far fa-sort"></i>
                        </div>
                    </div>
                    
                </div>
                <hr class="mx-3">


                                <div class="container-fluid px-3 mt-4">
                                    <div class="table-responsive">
                                        <table class="table table-borderless payments">
                                            <thead>
                                <tr class="border-none bg-light">
                                    <th class="text-secondary">Name</th>
                                    <th class="text-secondary">Payment schdule</th>
                                    <th class="text-secondary">Bill Number</th>
                                    <th class="text-secondary">Amount Paid</th>
                                    <th class="text-secondary">Balance Amount</th>
                                    <th class="text-secondary">Date</th>
                                    <th class="text-light">.</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
            foreach($payments as $key)
            {
            echo "<tr class='ligne center_t'>
            <td>{$key['Name']}</td>
            <td>{$key['Payment schdule']}</td>
            <td>{$key['Bill Number']}</td>
            <td>{$key['Amount Paid']}</td>
            <td>{$key['Balance']}</td>
            <td>{$key['Date']}</td>
            <td class='action'> <span> <i class='far fa-eye '></i></span> </td>
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