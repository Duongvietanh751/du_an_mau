<div class="row mb">
            <div class="row mb title">
                <h1>Thêm mới sản phẩm</h1>
            </div>
            <div class="row " class="">
                <form action="index.php?act=adddm" method="POST">
                    <div class="row mb formcontent">
                        <label for="">Mã loại</label><br>
                        <input type="text" name="maloai"><br>
                    </div>
                    <div class="row mb formcontent">
                        <label for="">Tên loại</label><br>
                        <input type="text" name="tenloai"><br>
                    </div>
                    <div class="row mb">
                        <input type="submit" value="THÊM MỚI" name="btn_add">
                        <input type="reset" value="NHẬP LẠI" name="btn_reset">
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH" name="btn_list"></a>
                    </div>

                    <?php
                        if(isset($thongbao)&&($thongbao!=""))  echo $thongbao;
                    ?>

                </form>
            </div>
        </div>