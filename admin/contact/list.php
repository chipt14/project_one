<div class="main-panel">    
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Danh sách lời nhắn </h3>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th> Khách hàng </th>
                        <th> Số điện thoại </th>
                        <th> Email </th>
                        <th> Lời nhắn </th>
                    </tr>
                    </thead>
                    <tbody class="">
                        <?php foreach ($listCont as $key => $value) :?>
                            <tr>
                                <td> <?=++$key?> </td>
                                <td> <?=$value['full_name']?> </td>
                                <td> <?=$value['tel']?> </td>
                                <td> <?=$value['email']?> </td>
                                <td class=""> <?=$value['message']?> </td>
                                
                            </tr>
                        <?php endforeach  ?>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        </div>