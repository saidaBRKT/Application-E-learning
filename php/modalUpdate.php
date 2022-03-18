
<div class="modal" id="myModal">
    <div class="modal-dialog" id="dark">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Update students</h4>
            </div>

            <div class="modal-body d-flex justify-content-center align-item-center">
                <form method="POST" action="operations.php?edit=<?=$id ?>" class=" w-50">

                     <div class="mb-2 mt-5">
                      <label  class="form-label text-secondary">Name :</label>
                      <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                    </div>
                     <div class="mb-2">
                      <label class="form-label text-secondary">Email :</label>
                      <input type="email" class="form-control" name="email" value="<?php echo $email ?>">
                    </div>
                    <div class="mb-2">
                      <label  class="form-label text-secondary">Phone</label>
                      <input type="number" class="form-control"  name="phone"  value="<?php echo $phone ?>">
                    </div>
                    <div class="mb-2">
                      <label  class="form-label text-secondary">Number</label>
                      <input type="number" class="form-control"  name="number"  value="<?php echo $number ?>">
                    </div>
                    <div class="mb-4 mb-sm-2">
                      <label  class="form-label text-secondary" >Date</label>
                      <input type="date" class="form-control" name="date" value="<?php echo $date?>">
                    </div>         
                    <input class="btn btn-info text-white w-100" name="update" value="modifier" type="submit">    
                </form>
                </div>
            <div class="modal-footer">           
            <a href="students.php" class="btn btn-danger hideModel" >Close</a>             
          </div>
        </div>
    </div>
</div>