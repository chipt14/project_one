    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <h4>Mới ở đây?</h4>
                <h6 class="font-weight-light">Đăng ký thật dễ dàng. Chỉ mất vài bước</h6>
                <form class="pt-3" action="index.php?act=register" method="post">
                  <div class="form-group">
                    <input type="text" name="user" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Tên đăng nhập">
                    <br>
                    <span style="color: red;">
                      <?php echo isset($error['user']) ? $error['user'] : ''; ?>
                    </span>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                    <br>
                    <span style="color: red;">
                      <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                    </span>
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mật khẩu">
                    <br>
                    <span style="color: red;">
                      <?php echo isset($error['pass']) ? $error['pass'] : ''; ?>
                    </span>
                  </div>
                  <div class="form-group">
                    <input type="password" name="rePass"class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu">
                    <br>
                    <span style="color: red;">
                      <?php echo isset($error['rePass']) ? $error['rePass'] : ''; ?>
                    </span>
                    <span style="color: red;">
                      <?php echo isset($error['passrePass']) ? $error['passrePass'] : ''; ?>
                    </span>
                  </div>
                  <div class="mt-3">
                    <button type="submit" name="register" value="Submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">ĐĂNG KÝ</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Bạn đã có tài khoản chưa? <br><a href="index.php?act=login" class="text-primary">Đăng nhập</a>
                  </div>
                </form>
                <br>
                <p class="text-center mt-4 font-weight-light">
                  <?php
                    if(isset($thongbao)){
                      echo $thongbao;
                    }
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>