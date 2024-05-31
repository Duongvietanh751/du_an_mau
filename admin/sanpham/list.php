<div class="row mb">
            <div class="row mb title">
                <h1>Danh sách sản phẩm</h1>
            </div>
            <div class="row mb formlist">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình</th>
                        <th>Giá</th>
                        <th>Lượt xem</th>
                        <th>Chức năng</th>
                    </tr>
                    <?php
                        foreach($listsanpham as $sanpham){
                            extract($sanpham);
                            $suasp="index.php?act=suadm&id=".$id;
                            $xoasp="index.php?act=xoadm&id=".$id;

                            echo'
                            <tr>
                                <td><input type="checkbox" name="id"></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$img.'</td>
                                <td>'.$price.'</td>
                                <td>'.$view.'</td>
                                <td>
                                    <a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$xoasp.'"><input type="button" value="Xóa"></a>
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
                <a href="index.php?act=addsp"><input type="button" value="THÊM MỚI" name="btn_list"></a>
            </div>
        </div>