<?php
echo <<<EOT
<div class="sidebar col-2 col-sm-3 col-xl-2 px-sm-2 px-0 ">
<div class="d-flex flex-column align-items-center  px-3 pt-2 text-white min-vh-100">

    <a href="/"
        class=" title d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <div class="fs-4 d-none d-sm-inline">
            <h1>E-classe</h1>
        </div>
    </a>
    <div class="profile w-100 d-none d-sm-flex  flex-column justify-content-center align-items-center">
        <img src="../images/people-peoples-homeless-male.jpg" class="rounded-circle " alt="profile">
        <div class="admin d-flex flex-column justify-content-center align-items-center mb-3">
            <span class="text-dark d-none d-sm-flex fw-bold">Admin name</span>
            <span class="text-info d-none d-sm-flex">Admin</span>
        </div>
    </div>
    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 justify-content-center align-items-center"
        id="menu">
        <li class="nav-item">
            <a href="home.php" class="nav-link align-middle px-auto text-dark d-flex">
                <i class="fal fa-home-lg-alt mt-1"></i> <span class="ms-1 d-none d-sm-inline ">Home</span>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link px-auto align-middle text-dark d-flex">
                <i class="far fa-bookmark mt-1"></i> <span class="ms-1 d-none d-sm-inline">Cours</span> </a>

        </li>
        <li>
            <a href="students.php" class="nav-link px-auto align-middle text-dark d-flex ">
                <i class="fal fa-graduation-cap mt-1"></i> <span
                    class="ms-1 d-none d-sm-inline">Students</span></a>
        </li>
        <li>
            <a href="payments.php" class="nav-link px-auto align-middle text-dark d-flex">
                <i class="fal fa-usd-square mt-1"></i> <span
                    class="ms-1 d-none d-sm-inline">Payments</span></a>

        </li>
        <li>
            <a href="#" class="nav-link px-auto align-middle text-dark d-flex">
                <i class="fal fa-file-chart-line mt-1"></i> <span
                    class="ms-1 d-none d-sm-inline">Report</span> </a>

        </li>
        <li>
            <a href="#" class="nav-link px-auto align-middle text-dark d-flex">
                <i class="fal fa-sliders-v-square mt-1"></i> <span
                    class="ms-1 d-none d-sm-inline">Setting</span> </a>
        </li>
        <li>
            <a href="#" class="nav-link px-auto align-middle text-dark d-flex d-sm-none">
                <i class="fal fa-search me-2 mt-1"></i> <span
                    class="ms-1 d-none d-sm-inline"></span> </a>
        </li>
    </ul>
    <hr>
    <div>
        <a href="../index.php"
            class="logout  d-flex align-items-center text-decoration-none text-dark w-100">

            <span class="d-none d-sm-inline mx-1 ">logout</span><i class="fal fa-sign-out-alt mt-1"></i>
        </a>

    </div>
</div>
</div>

EOT;
?>