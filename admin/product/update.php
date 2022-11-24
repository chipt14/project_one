<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Cập nhật sản phẩm </h3>
            </div>
            <?php if(isset($thongbao) && ($thongbao != "")) :?>
              <span class="progress-bar progress-bar-striped bg-success rounded"><?=$thongbao;?></span>
              <br>
            <?php endif ;?>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="index.php?act=updateProd" class="forms-sample" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $prod['id'] ?>">
                      <div class="form-group">
                        <label for="exampleInputName1">Tên sản phẩm</label>
                        <input type="text" name="nameProd" class="form-control" id="exampleInputName1" placeholder="Nhập tên sản phẩm" value="<?php if(isset($prod['name']) && ($prod['name'] != "")) echo $prod['name']; ?>" >
                      </div>
                      <div class="form-group">
                        <label>Hình ảnh</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file" name='image' />
                        <br>
                        <img style="width: 300px;" class="" src="../uploads/<?= $prod['img'] ?>" alt="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName2">Giá sản phẩm</label>
                        <input type="number" name="price" min="0" class="form-control" id="exampleInputName2" placeholder="Nhập giá sản phẩm" value="<?= $prod['price'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName3">Giá khuyến mại</label>
                        <input type="number" name="sale" min="0" class="form-control" id="exampleInputName3" placeholder="Nhập giá khuyến mại" value="<?= $prod['sale'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Mô tả sản phẩm</label>
                        <textarea class="form-control" name="descrip" id="exampleTextarea1" rows="4"><?= $prod['descrip'] ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Loại sản phẩm</label>
                        <select class="form-control" name="cateId" id="exampleSelectGender">
                            <option value="0" selected>Tất cả</option>
                            <?php foreach ($listCate as $cate) :?>
                                <?php if ($prod['cate_id'] == $cate['id']) :?>
                                    <option value="<?=$cate['id']?>" selected><?=$cate['name']?></option>
                                <?php else :?>
                                    <option value="<?=$cate['id']?>"><?=$cate['name']?></option>
                                <?php endif ;?>
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