<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Danh sách bài viết </h3>
              <nav aria-label="breadcrumb">
                <a href="index.php?act=addPost">
                    <button type="button" class="btn btn-gradient-danger btn-icon-text">
                    <i class="mdi mdi-upload btn-icon-prepend"></i> Thêm bài viết </button>
                </a>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered text-center">
                      <thead>
                        <tr>
                          <th> Tiêu đề </th>
                          <th style="width: 150px;"> Hình ảnh </th>
                          <th> Mô tả </th>
                          <th> Ngày đăng </th>
                          <th> Nội dung </th>
                          <th> Danh mục </th>
                          <th> Hành động </th>
                        </tr>
                      </thead>
                      <tbody>
                            <?php foreach ($listPost as $value) :?>
                                <tr>
                                    <td class="d-inline-block text-truncate" style="max-width: 150px;"> <?=$value['post_title']?> </td>
                                    <td> 
                                        <img src="../uploads/admin/blog/<?= $value['post_img'] ?>" class="mb-2 mw-100 w-100 mh-100 rounded" alt="image" style="height: 100px !important;">
                                    </td>
                                    <td class="d-inline-block text-truncate" style="max-width: 150px;"> <?=$value['post_desc']?> </td>
                                    <td> <?=$value['post_date']?> </td>
                                    <td class="d-inline-block text-truncate" style="max-width: 150px;"> <?=$value['post_content']?> </td>
                                    <td> <?=$value['blog_name']?> </td>
                                    <td> 
                                        <div class="template-demo" style="text-align: center;">
                                        <a href="index.php?act=editPost&id=<?=$value['post_id']?>">
                                            <button type="button" class="btn btn-outline-primary btn-fw" style="max-width:100%; min-width: 50px; padding: 14px 20px;">Sửa</button>
                                        </a>
                                        <a href="index.php?act=deletePost&id=<?=$value['post_id']?>">
                                            <button type="button" class="btn btn-outline-warning btn-fw" style="max-width:100%; min-width: 50px; padding: 14px 20px;" onclick="return confirm('Bạn chắc chắn muốn xóa?');">Xóa</button>
                                        </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          