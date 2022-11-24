<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Thêm sản phẩm </h3>
            </div>
            <?php if(isset($thongbao) && ($thongbao != "")) :?>
              <span class="progress-bar progress-bar-striped bg-success rounded"><?=$thongbao;?></span>
              <br>
            <?php endif ;?>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="index.php?act=addProd" class="forms-sample" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Tên sản phẩm</label>
                        <input type="text" name="nameProd" class="form-control" id="exampleInputName1" placeholder="Nhập tên sản phẩm">
                      </div>
                      <div class="form-group">
                        <label>Hình ảnh</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file" name='image' />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName2">Giá sản phẩm</label>
                        <input type="number" name="price" min="0" class="form-control" id="exampleInputName2" placeholder="Nhập giá sản phẩm">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName3">Giá khuyến mại</label>
                        <input type="number" name="sale" min="0" class="form-control" id="exampleInputName3" placeholder="Nhập giá khuyến mại">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Mô tả sản phẩm</label>
                        <textarea class="form-control" name="desc" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Loại sản phẩm</label>
                        <select class="form-control" name="cateId" id="exampleSelectGender">
                            <?php foreach ($listCate as $values) :?>
                                <option value="<?=$values['id']?>"><?=$values['name']?></option>
                            <?php endforeach ;?>
                        </select>
                      </div>
                      <input type="submit" name="saveProd" class="btn btn-gradient-primary me-2">
                      <button class="btn btn-light" type="reset">Đặt lại</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>