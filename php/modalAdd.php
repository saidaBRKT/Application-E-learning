<div class="modal" id="modalAdd">
<div class="modal-dialog" id="dark">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add students</h4>
            </div>
            <div class="modal-body d-flex justify-content-center align-item-center">
                <form action="" method="POST" class=" w-50">

                     <h6 class="text-center fw-bold">Add students</h6>
                     <div class="mb-2 mt-5">
                      <label  class="form-label text-secondary">Name :</label>
                      <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                     <div class="mb-2">
                      <label class="form-label text-secondary">Email :</label>
                      <input type="email" class="form-control" name="email"placeholder="Enter your email" required>
                    </div>
                    <div class="mb-2">
                      <label  class="form-label text-secondary">Phone</label>
                      <input type="number" class="form-control"  name="phone" placeholder="Phone" required>
                    </div>
                    <div class="mb-2">
                      <label  class="form-label text-secondary">Number</label>
                      <input type="number" class="form-control"  name="number" placeholder="Number" required>
                    </div>
                    <div class="mb-4 mb-sm-2">
                      <label  class="form-label text-secondary" >Date</label>
                      <input type="date" class="form-control" name="date" placeholder="Enter your password">
                    </div>         
                    <button class="btn btn-info text-white w-100" name="add">Add</button>
              
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger hideModel"  data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>