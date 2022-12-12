<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Thêm bài viết </h3>
            </div>
            <?php if(isset($thongbao) && ($thongbao != "")) :?>
              <span class="progress-bar progress-bar-striped bg-success rounded"><?=$thongbao;?></span>
              <br>
            <?php endif ;?>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="index.php?act=addPost" class="forms-sample" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Tiêu đề</label>
                        <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="">
                      </div>
                      <div class="form-group">
                        <label>Hình ảnh</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file" name='image' />
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Nội dung</label>
                        <textarea class="form-control" name="content" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Loại sản phẩm</label>
                        <select class="form-control" name="blog-id" id="exampleSelectGender">
                            <?php foreach ($listBlog as $values) :?>
                                <option value="<?=$values['blog_id']?>"><?=$values['blog_name']?></option>
                            <?php endforeach ;?>
                        </select>
                      </div>
                      <input type="submit" name="save-post" class="btn btn-gradient-primary me-2">
                      <button class="btn btn-light" type="reset">Đặt lại</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>