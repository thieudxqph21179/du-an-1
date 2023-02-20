<div style="width: 80%; margin-top: 170px;" class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">ĐƠN HÀNG CỦA TUI</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body1">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Ngày đặt</th>
                                        <th>Số lượng mặt hàng</th>
                                        <th>Tổng tiền</th>
                                        <th>Tình trạng đơn hàng</th>
                                        <th>Tình trạng thanh toán</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($listbill)) { ?>
                                        <?php foreach($listbill as $bill) : ?>
                                            <?php extract($bill) ;
                                                $ttdh=get_ttdh($bill['bill_satus']);
                                                $countsp=load_cart_count($bill['id']);
                                                $tttt = get_tttt($bill['bill_thanhtoan']);
                                            ?>
                                            <tr>
                                            <td><?=$bill['id'] ?></td>
                                            <td><?=$bill['ngaydathang'] ?></td>
                                            <td><?=$countsp ?></td>
                                            <td><?=number_format($bill['total']) ?>đ</td>
                                            <td><?= $ttdh?></td>
                                            <td><?= $tttt?></td>
                                            </tr>
                                        <?php endforeach; }?>
                              
                                </tbody>
                            </table>
            </div>
        </div>
    </div>
    </div>

    <!-- <script type="text/javascript">
        function selects(){
var ele=document.getElementsByName('chk');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
            }  
            function deSelect(){  
                var ele=document.getElementsByName('chk');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=false;  
                }  
            }  
    </script> -->