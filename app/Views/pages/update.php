<div class="container my-5">
  <div class="row m-auto">
    <div class="col-sm-3" style="color: #636363">
      <strong class="text-uppercase fs-4" style="color: #e71a0f"><span>Tài khoản</span></strong>
      
    </div>
    <div class="col-sm-8" style="color: #636363">
      <div class="dashboard">
        <h3>Cập nhật thông tin tài khoản</h3>
      </div>
      <hr>
      <form class="" action="<?php echo base_url('/account/update'); ?>" method="post">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="email">Địa chỉ email: </label>
              <?php echo session()->get('email'); ?>
              <span style="color: red; font-size: 0.7rem"> *
            </div>
            <div class="form-group">
              <label for="username">Tên đăng nhập:</span></label>
              <input type="username" class="form-control" name="username" id="username" value="">
              <br>
              <label for="username">Tên người dùng hiện tại:</span></label>
              <?php echo session()->get('username'); ?>
              
              <span style="color: red; font-size: 0.7rem"> *
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="password">Mật khẩu: <span style="color: red; font-size: 0.7rem"> *</span></label>
              <input type="password" class="form-control" name="password" id="password" value="">
            </div>
            <div class="form-group">
              <label for="password_confirm">Xác nhận mật khẩu: <span style="color: red; font-size: 0.7rem"> *</span></label>
              <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
            </div>
          </div>
          <?php if (isset($validation)) : ?>
            <div class="alert m-auto text-danger" role="alert">
              <?= $validation->listErrors() ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="row">
          <div class="col-12 col-sm-4">
          </div>
          <div class="col-12 col-sm-8 mt-1 text-end">
            <a href="<?php echo base_url('/user'); ?>" style="text-decoration: none; font-size: 0.9rem">Quay trở lại thông tin tài khoản</a>
          </div>
        </div>
        <button type="submit" class="btn btn-danger col-12 mt-2">Cập nhật</button>
      </form>
    </div>
  </div>
</div>