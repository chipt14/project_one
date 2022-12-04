<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <h4>Cập nhật tài khoản</h4>
                <br>
                <h6 class="font-weight-light">Chỉ mất vài bước.</h6>
                <?php
                    if ((isset($_SESSION['acc'])) && (is_array($_SESSION['acc']))) {
                        extract($_SESSION['acc']);
                    }
                ?>
                <form class="pt-3" action="index.php?act=editAcc" method="post">
                  <input type="hidden" name="id" value="<?=$id?>">
                  <div class="form-group">
                    <input type="text" name="user" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Tên đăng nhập" value="<?=$username?>">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" value="<?=$email?>">
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mật khẩu" value="<?=$password?>">
                  </div>
                  <div class="form-group">
                    <input type="text" name="address" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Địa chỉ" value="<?=$address?>">
                  </div>
                  <div class="form-group">
                    <input type="tel" name="tel" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Điện thoại" value="<?=$tel?>">
                  </div>

                  <div class="mt-3">
                    <button type="submit" name="update" value="Submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">CẬP NHẬT</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>