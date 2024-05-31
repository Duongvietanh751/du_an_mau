<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row mb">
            <div class="row mb title">
                <h1>Cập nhật loại hàng</h1>
            </div>
            <div class="row " class="">
            <form action="index.php?act=updatesp" method="POST" enctype="multipart/from-data">
                    <div class="row mb formcontent">
                        <label for="">Mã sản phẩm</label><br>
                        <input type="text" name="maloai"><br>
                    </div>
                    <div class="row mb formcontent">
                        <label for="">Tên sản phẩm</label><br>
                        <input type="text" name="name_sanpham"><br>
                    </div>
                    <div class="row mb formcontent">
                        <label for="">Giá sản phẩm</label><br>
                        <input type="text" name="price"><br>
                    </div>
                    <div class="row mb formcontent">
                        <label for="">Hình Ảnh</label><br>
                        <input type="file" name="img"><br>
                    </div>
                    <div class="row mb formcontent">
                        <label for="">Mô tả</label><br>
                        <input type="text" name="desc"><br>
                    </div>
                    <div class="row mb formcontent">
                        <label for="">Tên sản phẩm</label><br>
                        <input type="text" name="name_sanpham"><br>
                    </div>
                    <div class="row mb">
                        <input type="submit" value="CẬP NHẬT" name="btn_update">
                        <input type="reset" value="NHẬP LẠI" name="btn_reset">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH" name="btn_list"></a>
                    </div>

                    <?php
                        if(isset($thongbao)&&($thongbao!=""))  echo $thongbao;
                    ?>

                </form>
            </div>
        </div>