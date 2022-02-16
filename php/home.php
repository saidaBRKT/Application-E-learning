<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    
    <main class="container-fluid">
        <div class="row flex-nowrap">
        <?php include 'sidebar.php' ?>
            <div class="col col-10 col-md-9 col-xl-10 px-0 bg-white">
            <?php include 'header.php' ?>   
               



                  <div class="container-fluid cont_cards col py-3 justify-content-center align-items-center">
                    <div class="cards row justify-content-center ">
                      <div class="card col-md-3 ps-0 pe-0 me-3 mb-2  border-white" style="width: 14rem; height: 9rem;">
                        <div class="card-body carditems--blue position-relative">
                          <div class="cardstudents d-flex flex-column mt-2">
                            <i class="far fa-graduation-cap display-6 "></i>
                            <span>Students</span>
                          </div>
                          <div>
                            <span class="h5 fw-bold nbr">243</span>
                          </div>
                        </div>
                      </div>
                      <div class="card col-md-3 ps-0 pe-0 me-3 mb-2 border-white" style="width: 14rem; height: 9rem;">
                        <div class="card-body carditems--rose position-relative">
                          <div class="cardstudents d-flex flex-column mt-2">
                            <i class="fal fa-bookmark display-6"></i>
                            <span>Cours</span>
                          </div>
                          <div>
                            <span class="h5 fw-bold nbr">13</span>
                          </div>
                        </div>
                      </div>
                      <div class="card col-md-3 ps-0 pe-0 me-3 mb-2 border-white" style="width: 14rem; height: 9rem;">
                        <div class="card-body carditems--yellow position-relative">
                          <div class="cardstudents d-flex flex-column mt-2">
                            <i class="fal fa-usd-square display-6"></i>
                            <span>Payments</span>
                          </div>
                          <div>
                            <span class="h5 fw-bold nbr">DHS 556,000</span>
                          </div>
                        </div>
                      </div>
                      <div class="card col-md-3 ps-0 pe-0 me-3 mb-2 border-white" style="width: 14rem; height: 9rem;">
                        <div class="card-body carditems--gradient position-relative">
                          <div class="cardstudents d-flex flex-column mt-2">
                            <i class="fal fa-user display-6"></i>
                            <span>Users</span>
                          </div>
                          <div>
                            <span class="h5 fw-bold nbr">243</span>
                          </div>
                        </div>
                      </div>
          
                    </div>
                  </div>

            </div>
        </div>
      </main>

</body>
</html>