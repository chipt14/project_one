<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
          <h3 class="page-title"> Cập nhật thành viên </h3>
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
                              <input type="text" value="<?=$acc['id']?>" class="form-control" id="exampleInputName1" name="id" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Tên thành viên</label>
                              <input type="text" value="<?=$acc['username']?>"  class="form-control" id="exampleInputName1" name="username" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Mật khẩu</label>
                              <input type="text" value="<?=$acc['password']?>"  class="form-control" id="exampleInputName1" name="password" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Email</label>
                              <input type="email" value="<?=$acc['email']?>" class="form-control" id="exampleInputName1" name="email" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Địa chỉ</label>
                              <input type="text" value="<?=$acc['address']?>" class="form-control" id="exampleInputName1" name="address" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Điện thoại</label>
                              <input type="text" value="<?=$acc['tel']?>" class="form-control" id="exampleInputName1" name="tel" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Vai trò</label>
                              <select class="form-control" name="role" id="exampleSelectGender">
                                    <?php foreach ($listAcc as $values) :?>
                                        <?php if ($acc['role_id'] == $values['role_id']) :?>
                                            <option value="<?=$values['role_id']?>" selected><?=$values['role_name']?></option>
                                        <?php else :?>
                                            <option value="<?=$values['role_id']?>"><?=$values['role_name']?></option>
                                        <?php endif ;?>
                                    <?php endforeach ;?>
                              </select>
                          </div>
                          <input type="submit" class="btn btn-gradient-primary me-2" name="saveAcc">
                          <button class="btn btn-light" type="reset">Đặt lại</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>