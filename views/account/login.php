<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <h4>Xin chào! hãy bắt đầu nào</h4>
                <h6 class="font-weight-light">Đăng nhập để tiếp tục.</h6>
                <form class="pt-3"  action="index.php?act=login" method="post">
                  <div class="form-group">
                    <input type="text" name="user" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Tên đăng nhập">
                    <br>
                    <span style="color: red;">
                      <?php echo isset($error['user']) ? $error['user'] : ''; ?>
                    </span>
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mật khẩu">
                    <br>
                    <span style="color: red;">
                      <?php echo isset($error['pass']) ? $error['pass'] : ''; ?>
                    </span>
                  </div>
                  <div class="mt-3">
                    <button type="submit" name="login" value="Submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">ĐĂNG NHẬP</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <a href="#" class="auth-link text-black">Quên mật khẩu?</a>
                  </div>
                  <div class="text-center mt-4 font-weight-light">Bạn chưa có tài khoản? <a href="index.php?act=register" class="text-primary">Đăng ký</a>
                  </div>
                </form>
                <br>
                <span>
                    <?php
                      if (isset($thongbao)) {
                        echo $thongbao;
                      } else {
                        $thongbao = '';
                      }
                    ?>
                  </span>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>