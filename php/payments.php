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

<title>Payments</title>
<style>
#dark{
  width: 500px;
}
#myModal{
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
                <h2>Payment Details</h2>
                <div class="caption d-flex align-items-center">
                    <i class="far fa-sort"></i>
                </div>
            </div>           
        </div>
        <hr class="mx-3">
        <div class="container-fluid px-3 mt-4">
        <div class="cont-stdnt">
            <div class="table-responsive ">
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
                           while($row=$result->fetch_assoc()): 
                            ?>
                           <tr>
                            <td class="pt-4"><?php echo $row['Na_me']?></td>
                            <td class="pt-4"><?php echo $row['Payment_Schedule']?></td>
                            <td class="pt-4"><?php echo $row['Bil_Number']?></td>
                            <td class="pt-4">DHS <?php echo $row['Amount_Paid']?></td>
                            <td class="pt-4">DHS <?php echo $row['Balance']?></td>
                            <td class="pt-4"><?php echo $row['da_te']?></td>
                            <td class="action pt-4"> <a href="?view=<?php echo $row['id'];?>"><span> <i class="far fa-eye " data-bs-toggle="modal" data-bs-target="#myModal"></a></i></span> </td>                        
                            </tr>
                          <?php   endwhile;   ?>
                                <!-- Modal (debut)-->
                            <div class="modal" id="myModal">
                            <div class="modal-dialog" id="dark">
                              <div class="modal-content">

                                <div class="modal-header">
                                  <h4 class="modal-title">Payment Details</h4>
                                </div>

                                <div class="modal-body">
                                  Name : <label  class="form-label text-info" name="Na_me" ><?php echo $name ?></label><br>
                                  Payment schdule : <label  class="form-label text-info" name="Payment_schdule" ><?php echo $payment ?></label><br>
                                  Bill Number : <label  class="form-label text-info" name="Bil_Number" ><?php echo $Number?></label><br>
                                  Amount Paid : <label  class="form-label text-info" name="Amount_Paid" ><?php echo $amount ?></label><br>
                                  Balance Amount : <label  class="form-label text-info" name="Balance" ><?php echo $balance ?></label><br>
                                  Date : <label  class="form-label text-info" name="da_te" ><?php echo $date ?></label><br>
                                </div>

                                <div class="modal-footer">
                <button type="button" class="btn btn-danger hideModel" >Close</button>
            </div>

                              </div>
                            </div>
                            </div>
                                <!-- Modal (fin)-->
                        </tbody>
                </table>
                </div>
                </div>
        </div>
    </div>
</div>



</main>
<script>
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