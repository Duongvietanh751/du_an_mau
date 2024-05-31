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
                <form action="index.php?act=updatedm" method="POST">
                    <div class="row mb formcontent">
                        <label for="">Mã loại</label><br>
                        <input type="text" name="maloai"><br>
                    </div>
                    <div class="row mb formcontent">
                        <label for="">Tên loại</label><br>
                        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>"><br>
                    </div>
                    <div class="row mb">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit" value="Cập nhật" name="btn_update">
                        <input type="reset" value="NHẬP LẠI" name="btn_reset">
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH" name="btn_list"></a>
                    </div>

                    <?php
                        if(isset($thongbao)&&($thongbao!=""))  echo $thongbao;
                    ?>

                </form>
            </div>
        </div>