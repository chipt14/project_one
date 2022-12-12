<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
          <h3 class="page-title"> Thêm danh mục bài viết </h3>
    </div>
    <?php if(isset($thongbao) && ($thongbao != "")) :?>
        <span class="progress-bar progress-bar-striped bg-success rounded"><?=$thongbao;?></span>
        <br>
    <?php endif ;?>
      <div class="row">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                      <form action="index.php?act=addBlog" method="POST" enctype="multipart/form-data" class="forms-sample">
                          <div class="form-group">
                              <label for="exampleInputName1">Tên danh mục</label>
                              <input type="text" class="form-control" id="exampleInputName1" name="name-blog" placeholder="Nhập tên danh mục">
                          </div>
                          <input type="submit" class="btn btn-gradient-primary me-2" name="save-blog">
                          <button class="btn btn-light" type="reset">Đặt lại</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>