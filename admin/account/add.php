<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
          <h3 class="page-title"> Thêm thành viên </h3>
    </div>
    <?php if(isset($thongbao) && ($thongbao != "")) :?>
        <span class="progress-bar progress-bar-striped bg-success rounded"><?=$thongbao;?></span>
        <br>
    <?php endif ;?>
      <div class="row">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                      <form action="index.php?act=addUser" method="POST" enctype="multipart/form-data" class="forms-sample">
                          <div class="form-group">
                              <label for="exampleInputName1">Tên thành viên</label>
                              <input type="text" class="form-control" id="exampleInputName1" name="username" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Mật khẩu</label>
                              <input type="password" class="form-control" id="exampleInputName1" name="password" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Email</label>
                              <input type="email" class="form-control" id="exampleInputName1" name="email" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Địa chỉ</label>
                              <input type="text" class="form-control" id="exampleInputName1" name="address" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Điện thoại</label>
                              <input type="text" class="form-control" id="exampleInputName1" name="tel" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Vai trò</label>
                              <select class="form-control" name="role" id="exampleSelectGender">
                                <?php foreach ($listRole as $role) :?>
                                    <option value="<?=$role['role_id']?>"><?=$role['role_name']?></option>
                                <?php endforeach ;?>
                              </select>
                          </div>
                          <input type="submit" class="btn btn-gradient-primary me-2" name="saveUser">
                          <button class="btn btn-light" type="reset">Đặt lại</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>