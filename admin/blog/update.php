<div class="main-panel">
  <div class="content-wrapper">
      <div class="page-header">
          <h3 class="page-title"> Cập nhật danh mục </h3>
      </div>
      <?php if(isset($thongbao) && ($thongbao != "")) :?>
        <span class="progress-bar progress-bar-striped bg-success rounded"><?=$thongbao;?></span>
        <br>
      <?php endif ;?>
      <div class="row">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                      <form action="index.php?act=updateBlog" method="POST" class="forms-sample" enctype="multipart/form-data">
                          <div class="form-group">
                              <input type="hidden" class="form-control" name="id" value="<?php if(isset($blog['blog_id']) && ($blog['blog_id'] != "")) echo $blog['blog_id']; ?>" id="">
                              <label for="exampleInputName1">Tên danh mục</label>
                              <input type="text" class="form-control" id="exampleInputName1" name="name-blog" value="<?php if(isset($blog['blog_name']) && ($blog['blog_name'] != "")) echo $blog['blog_name']; ?>">
                          </div>
                          <input type="submit" class="btn btn-gradient-primary me-2" name="save-blog">
                          <button class="btn btn-light" type="reset">Đặt lại</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>