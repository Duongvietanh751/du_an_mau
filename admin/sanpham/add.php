<div class="row mb">
            <div class="row mb title">
                <h1>Thêm mới sản phẩm</h1>
            </div>
            <div class="row " class="">
                <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
                    <div class="row mb formcontent">
                        <label for="">Danh mục</label><br>
                        <select name="id_danhmuc">
                            <?php
                                foreach($lisDanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo'<option value="'.$id.'">'.$name.'</option>';
                                }
                            ?>
                        </select>
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
                        <textarea name="desc"  cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb">
                        <input type="submit" value="THÊM MỚI" name="btn_add">
                        <input type="reset" value="NHẬP LẠI" name="btn_reset">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH" name="btn_list"></a>
                    </div>

                    <?php
                        if(isset($thongbao)&&($thongbao!=""))  echo $thongbao;
                    ?>

                </form>
            </div>
        </div>