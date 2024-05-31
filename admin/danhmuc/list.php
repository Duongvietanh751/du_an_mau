<div class="row mb">
            <div class="row mb title">
                <h1>Danh sách danh mục sản phẩm</h1>
            </div>
            <div class="row mb formlist">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th>Chức năng</th>
                    </tr>
                    <?php
                        foreach($listDanhmuc as $danhmuc){
                            extract($danhmuc);
                            $suadm="index.php?act=suadm&id=".$id;
                            $xoadm="index.php?act=xoadm&id=".$id;

                            echo'
                            <tr>
                                <td><input type="checkbox" name="id"></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>
                                    <a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$xoadm.'"><input type="button" value="Xóa"></a>
                                </td>
                            </tr>';
                        }
                    ?>
                </table>
            </div>
            <div class="row mb" class="">
                <input type="button" value="CHỌN TẤT CẢ" name="btn_add">
                <input type="button" value="BỎ CHỌN TẤT CẢ" name="btn_reset">
                <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN" name="btn_delete">
                <a href="index.php?act=adddm"><input type="button" value="THÊM MỚI" name="btn_list"></a>
            </div>
        </div>