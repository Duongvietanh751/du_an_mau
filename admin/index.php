<?php
    include"../model/pdo.php";
    include"header.php";
    include"../model/danhmuc.php";
    include"../model/sanpham.php";
    //container
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':
                //kiểm tra người dùng có thêm không
                if(isset($_POST['btn_add']) && ($_POST['btn_add'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm thành công nè";
                }
                include"danhmuc/add.php";
                break;
            case 'listdm':
                $listDanhmuc=loadall_danhmuc();
                include"danhmuc/list.php";
                break;
            case 'xoadm':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_danhmuc($_GET['id']);
                    }
                    $listDanhmuc=loadall_danhmuc();
                    include"danhmuc/list.php";
                    break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                include"danhmuc/update.php";
                break;
            case'updatedm':
                if(isset($_POST['btn_update']) && ($_POST['btn_update'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="OK RỒI CHÚ";
                }
                $listDanhmuc=loadall_danhmuc();
                include"danhmuc/list.php";
                break;


                // controller san pham
                
                case 'addsp':
                    //kiểm tra người dùng có thêm không
                    if(isset($_POST['btn_add']) && ($_POST['btn_add'])){
                        $id_danhmuc=$_POST['id_danhmuc'];
                        $tensp=$_POST['name_sanpham'];
                        $giasp=$_POST['price'];
                        $mota=$_POST['desc'];
                        $filename=$_FILES['img']['name'];
                        $target_dir="../upload/";
                        $target_file=$target_dir.basename($_FILES['img']['name']);
                        if(move_uploaded_file($_FILES['img']['tmp_name'],$target_file)){
                        }else{
                        }
                        insert_sanpham($tensp,$giasp,$hinh,$mota,$id_danhmuc);
                        $thongbao="Thêm thành công nè";
                    }
                    $listDanhmuc=loadall_danhmuc();
                    // var_dump($listDanhmuc);
                    include"sanpham/add.php";
                    break;
                case 'listsp':
                    $listsanpham=loadall_sanpham();
                    include"sanpham/list.php";
                    break;
                case 'xoasp':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            delete_sanpham($_GET['id']);
                        }
                        $listsanpham=loadall_sanpham();
                        include"sanpham/list.php";
                        break;
                case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $dm=loadone_sanpham($_GET['id']);
                    }
                    include"sanpham/update.php";
                    break;
                case'updatesp':
                    if(isset($_POST['btn_update']) && ($_POST['btn_update'])){
                        $tenloai=$_POST['tenloai'];
                        $id=$_POST['id'];
                        update_sanpham($id,$tenloai);
                        $thongbao="OK RỒI CHÚ";
                    }
                    $listsanpham=loadall_sanpham();
                    include"sanpham/list.php";
                    break;

            default:
                include"home.php";
                break;
        }
    }else{
        include"home.php";
    }


    
    include"footer.php";
?>