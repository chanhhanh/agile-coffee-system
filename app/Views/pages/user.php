<div class="container">
  <div class="row mt-5">
    <div class="col-sm-6 p-5" style="color: #636363">
      <h3>Profile</h3>
      <hr>
      <i class="bi bi-pencil-square"></i>
      <form class="" action="" method="post">
        <div class="row">
          <div class="form-group">
            <label for="email">Email : </label>
            <label for="email"> <p><?php echo session()->get('email'); ?></p></label>
          </div>
          <div class="form-group">
            <label for="email">Username : </label>
            <label for="email"> <p><?php echo session()->get('username'); ?></p></label>
            <br></br>
            <label for="email">
                <a class="nav-link px-2" href="<?php echo base_url('/update'); ?>">Edit</a>
                <a class="nav-link px-2" href="<?php echo base_url('logout'); ?> ">Logout</a>
               
            </label>
        </div>
      </form>
</div>